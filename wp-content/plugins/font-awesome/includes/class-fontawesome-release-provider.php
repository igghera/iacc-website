<?php
/**
 * This module is not considered part of the public API, only internal.
 * Any data or functionality that it produces should be exported by the
 * main FontAwesome class and the API documented and semantically versioned there.
 */
namespace FortAwesome;

use \WP_Error, \Error, \Exception;

/**
 * Provides metadata about Font Awesome releases.
 *
 * @noinspection PhpIncludeInspection
 */

// phpcs:ignore Generic.Commenting.DocComment.MissingShort
/**
 * @ignore
 */

require_once trailingslashit( FONTAWESOME_DIR_PATH ) . 'includes/class-fontawesome-resource.php';
require_once trailingslashit( FONTAWESOME_DIR_PATH ) . 'includes/class-fontawesome-resourcecollection.php';
require_once trailingslashit( FONTAWESOME_DIR_PATH ) . 'includes/class-fontawesome-metadata-provider.php';
require_once trailingslashit( FONTAWESOME_DIR_PATH ) . 'includes/class-fontawesome-exception.php';

/**
 * Provides metadata about Font Awesome releases by querying fontawesome.com.
 *
 * Theme and plugin developers normally should _not_ access this Release Provider API directly. It's here to support the
 * functionality of {@see FontAwesome}.
 */
class FontAwesome_Release_Provider {
	/**
	 * Name of the option that stores the Font Awesome release metadata so we won't query
	 * the fontawesome.com releases API except when the admin settings page is re-loaded.
	 *
	 * @since 4.0.0-rc22
	 * @ignore
	 */
	const OPTIONS_KEY = 'font-awesome-releases';

	/**
	 * Name of the transient that stores the cache of the last used Font Awesome
	 * release so we won't load all of the releases metadata on each page load.
	 *
	 * @since 4.0.0-rc4
	 * @ignore
	 * @internal
	 */
	const LAST_USED_RELEASE_TRANSIENT = 'font-awesome-last-used-release';

	/**
	 * Expiry time for the releases transient.
	 *
	 * @ignore
	 * @internal
	 */
	const LAST_USED_RELEASE_TRANSIENT_EXPIRY = YEAR_IN_SECONDS;

	// phpcs:ignore Generic.Commenting.DocComment.MissingShort
	/**
	 * @ignore
	 */
	protected $releases = null;

	// phpcs:ignore Generic.Commenting.DocComment.MissingShort
	/**
	 * @ignore
	 */
	protected $refreshed_at = null;

	// phpcs:ignore Generic.Commenting.DocComment.MissingShort
	/**
	 * @ignore
	 */
	protected $latest_version = null;

	// phpcs:ignore Generic.Commenting.DocComment.MissingShort
	/**
	 * @ignore
	 */
	protected $api_client = null;

	// phpcs:ignore Generic.Commenting.DocComment.MissingShort
	/**
	 * @ignore
	 */
	protected static $instance = null;

	/**
	 * Returns the FontAwesome_Release_Provider singleton instance.
	 *
	 * @return FontAwesome_Release_Provider
	 */
	public static function instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Resets the singleton instance referenced by this class and returns that new instance.
	 * All previous releases metadata held in the previous instance will be abandoned.
	 *
	 * @return FontAwesome_Release_Provider
	 */
	public static function reset() {
		self::$instance = null;
		return self::instance();
	}

	/**
	 * Private constructor.
	 *
	 * Requires that releases metadata have already been loaded into the db option.
	 *
	 * @ignore
	 * @internal
	 * @throws ReleaseMetadataMissingException
	 */
	private function __construct() {
		$option_value = get_option( self::OPTIONS_KEY );

		if ( $option_value ) {
			$this->releases       = $option_value['data']['releases'];
			$this->refreshed_at   = $option_value['refreshed_at'];
			$this->latest_version = $option_value['data']['latest'];
		} else {
			throw new ReleaseMetadataMissingException();
		}
	}

	/**
	 * Loads release metadata and saves to the options table.
	 *
	 * Internal use only. Not part of this plugin's public API.
	 *
	 * @internal
	 * @ignore
	 * @throws ApiRequestException
	 * @throws ApiResponseException
	 * @throws ReleaseProviderStorageException
	 * @return void
	 */
	public static function load_releases() {
		$query = <<< EOD
query {
	latest: release(version: "latest") {
		version
	}
	releases {
		version
		srisByLicense {
			free {
				path
				value
			}
			pro {
				path
				value
			}
		}
	}
}
EOD;

		$body = json_decode( self::query( $query ), true );

		$releases = array();

		foreach ( $body['data']['releases'] as $release ) {
			$sris = array();

			foreach ( $release['srisByLicense'] as $license => $sri_set ) {
				$sris[ $license ] = array();
				foreach ( $sri_set as $sri ) {
					$sris[ $license ][ $sri['path'] ] = $sri['value'];
				}
			}

			$releases[ $release['version'] ] = array(
				'sri' => $sris,
			);
		}

		$refreshed_at   = time();
		$latest_version = isset( $body['data']['latest']['version'] ) ? $body['data']['latest']['version'] : null;

		if ( is_null( $latest_version ) ) {
			throw ApiResponseException::with_wp_error( new WP_Error( 'missing_latest_version' ) );
		}

		$option_value = array(
			'refreshed_at' => $refreshed_at,
			'data'         => array(
				'latest'   => $latest_version,
				'releases' => $releases,
			),
		);

		update_option( self::OPTIONS_KEY, $option_value, false );
	}

	/**
	 * Internal use only, not part of this plugin's public API.
	 *
	 * @internal
	 * @ignore
	 * @return FontAwesome_Resource
	 */
	private function build_resource( $version, $file_basename, $flags = array(
		'use_svg' => false,
		'use_pro' => false,
	) ) {
		$full_url  = 'https://';
		$full_url .= boolval( $flags['use_pro'] ) ? 'pro.' : 'use.';
		$full_url .= 'fontawesome.com/releases/v' . $version . '/';

		// use the style to build the relative url lookup the relative url.
		$relative_url  = $flags['use_svg'] ? 'js/' : 'css/';
		$relative_url .= $file_basename . '.';
		$relative_url .= $flags['use_svg'] ? 'js' : 'css';

		$full_url .= $relative_url;

		$license = $flags['use_pro'] ? 'pro' : 'free';

		// if we can't resolve an integrity_key in this deeply nested lookup, it will remain null.
		$integrity_key = null;
		if ( isset( $this->releases()[ $version ]['sri'][ $license ][ $relative_url ] ) ) {
			$integrity_key = $this->releases()[ $version ]['sri'][ $license ][ $relative_url ];
		}

		return( new FontAwesome_Resource( $full_url, $integrity_key ) );
	}

	/**
	 * Internal use only. Not part of this plugin's public API.
	 *
	 * @ignore
	 * @internal
	 * @throws ApiTokenMissingException
	 * @throws ApiTokenEndpointRequestException
	 * @throws ApiTokenEndpointResponseException
	 * @throws ApiTokenInvalidException
	 * @throws AccessTokenStorageException
	 * @throws ApiRequestException
	 * @throws ApiResponseException
	 * @return array
	 */
	protected static function query( $query ) {
		return fa_metadata_provider()->metadata_query( $query, true );
	}

	/**
	 * Retrieves Font Awesome releases metadata from the singleton instance.
	 *
	 * Makes no network or database requests.
	 *
	 * @return array
	 */
	protected function releases() {
		return $this->releases;
	}

	/**
	 * Returns the time, in unix epoch seconds when the releases metadata were
	 * last refreshed, or null for never.
	 *
	 * Internal use only. Clients should use the public API method on the
	 * FontAwesome object.
	 *
	 * @ignore
	 * @internal
	 * @return null|int
	 */
	public function refreshed_at() {
		return $this->refreshed_at;
	}

	/**
	 * Returns a simple array of available Font Awesome versions as strings, sorted in descending version order.
	 *
	 * @return array
	 */
	public function versions() {
		$versions = array_keys( $this->releases() );
		usort(
			$versions,
			function( $first, $second ) {
				return version_compare( $second, $first );
			}
		);
		return $versions;
	}

	/**
	 * Returns an array containing version, shim, source URLs and integrity keys for given params.
	 * They should be loaded in the order they appear in this collection.
	 *
	 * First tries to resolve this by using the LAST_USED_RELEASE_TRANSIENT, without
	 * instantiating a Release Provider and thus incurring the cost of a trip to
	 * the database to load the release metadata. If it does need to instantiate
	 * the Release Provider, it will also populate that transient so that subsequent
	 * invocations of the function will probably not incur the cost of a database
	 * query.
	 *
	 * @param string $version
	 * @param array  $flags boolean flags, defaults: array('use_pro' => false, 'use_svg' => false, 'use_shim' => true)
	 * @throws ReleaseMetadataMissingException
	 * @throws ApiRequestException
	 * @throws ApiResponseException
	 * @throws ReleaseProviderStorageException
	 * @throws ConfigCorruptionException when called with an invalid configuration
	 * @return array
	 */
	public static function get_resource_collection( $version, $flags = array(
		'use_pro'  => false,
		'use_svg'  => false,
		'use_shim' => true,
	) ) {
		$resources = array();

		if ( ! is_string( $version ) || 0 === strlen( $version ) ) {
			throw new ConfigCorruptionException();
		}

		if ( $flags['use_shim'] && ! $flags['use_svg'] && version_compare( '5.1.0', $version, '>' ) ) {
			throw ConfigSchemaException::webfont_v4compat_introduced_later();
		}

		// If this is the same query as last time, then our LAST_USED_RELEASE_TRANSIENT should be current.
		$last_used_transient = get_site_transient( self::LAST_USED_RELEASE_TRANSIENT );

		if ( $last_used_transient ) {
			// For simplicity, we're require that it's exactly what we're looking for, else we'll re-build and overwrite it.
			if (
				$version === $last_used_transient['version']
				&& $flags['use_pro'] === $last_used_transient['use_pro']
				&& $flags['use_svg'] === $last_used_transient['use_svg']
				&& $flags['use_shim'] === $last_used_transient['use_shim']
				&& is_array( $last_used_transient['resources'] )
			) {
				return new FontAwesome_ResourceCollection( $version, $last_used_transient['resources'] );
			}
		}

		$provider = self::instance();

		if ( ! array_key_exists( $version, $provider->releases() ) ) {
			throw new ReleaseMetadataMissingException();
		}

		array_push( $resources, $provider->build_resource( $version, 'all', $flags ) );
		if ( $flags['use_shim'] ) {
			array_push( $resources, $provider->build_resource( $version, 'v4-shims', $flags ) );
		}

		$transient_value = array(
			'version'   => $version,
			'use_pro'   => $flags['use_pro'],
			'use_svg'   => $flags['use_svg'],
			'use_shim'  => $flags['use_shim'],
			'resources' => $resources,
		);

		set_site_transient( self::LAST_USED_RELEASE_TRANSIENT, $transient_value, self::LAST_USED_RELEASE_TRANSIENT_EXPIRY );

		return new FontAwesome_ResourceCollection( $version, $resources );
	}

	/**
	 * Returns a version number corresponding to the most recent minor release.
	 *
	 * Internal use only. Clients should use the FontAwesome::latest_version()
	 * public API method instead.
	 *
	 * @internal
	 * @ignore
	 * @return string|null most recent major.minor.patch version or null if there's
	 *   not yet been a successful query to the API server for releases metadata.
	 */
	public function latest_version() {
		return $this->latest_version;
	}
}

/**
 * Convenience global function to get a singleton instance of the Release Provider.
 * Normally, plugins and themes should not need to access this directly.
 *
 * @see FontAwesome_Release_Provider::instance()
 * @return FontAwesome_Release_Provider
 */
function fa_release_provider() {
	return FontAwesome_Release_Provider::instance();
}
