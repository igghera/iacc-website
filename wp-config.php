<?php

/**

 * The base configuration for WordPress

 *

 * The wp-config.php creation script uses this file during the installation.

 * You don't have to use the web site, you can copy this file to "wp-config.php"

 * and fill in the values.

 *

 * This file contains the following configurations:

 *

 * * MySQL settings

 * * Secret keys

 * * Database table prefix

 * * ABSPATH

 *

 * @link https://wordpress.org/support/article/editing-wp-config-php/

 *

 * @package WordPress

 */


// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', 'bitnami_wordpress' );


/** MySQL database username */

define( 'DB_USER', 'bn_wordpress' );


/** MySQL database password */

define( 'DB_PASSWORD', 'ec542aac1e8b6bcb8d33fca73ab3e2c94f4c8c0a5973a9671cad08ca471e4d0c' );


/** MySQL hostname */

define( 'DB_HOST', 'localhost:3306' );


/** Database charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8' );


/** The database collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );


/**#@+

 * Authentication unique keys and salts.

 *

 * Change these to different unique phrases! You can generate these using

 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.

 *

 * You can change these at any point in time to invalidate all existing cookies.

 * This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         'nLne8+P{i/*!Q }JLTV0(hT!`(?K)k`mJH46e^/5#bGh=A4,F<N0tl9mEwgi!Nt$' );

define( 'SECURE_AUTH_KEY',  '-2IvCUv#pasZAMo%s_]}y$0?=JZaB;_JGZ;G!cR9brCd4JxOx:McAWHPqKvq1b-J' );

define( 'LOGGED_IN_KEY',    'xK#Ma(F]eJRUzhBqg|4HJa:Ry |LNj&Gc8%)`sbSztI (yeM)H]imc=Ob*5Q6a>4' );

define( 'NONCE_KEY',        '-U~/@qc+`$S[s.lMGldumP2s<9JshU$NcEjdccR#R]]$=GPx`<TNY+4:Goe9Ai=|' );

define( 'AUTH_SALT',        'VDme!Ev:weNSbYEpRFC?vgZUNMk7WF^aY&E63kscv.!H-SW,Zg-C;?-Nf?gcu+&x' );

define( 'SECURE_AUTH_SALT', '$+|CU&OV[Wut|{&:R4b<LKuNX/~bk#Q3m_Jp)B]A&e4!hfpAgA.5w-?&Hi~~D*<a' );

define( 'LOGGED_IN_SALT',   'rrW%Kyq<3+:<0k^c6l]v9;k9j<)!{]q]CdTG05FdTS(w*|;Mx6Tr[ElA#cD!q=kb' );

define( 'NONCE_SALT',       'dA]mlz(bpY=.U{ZaC|Hn1flpqI:5Zjb[dSNT@Z,b>fFl*$A`=9UR/$40z9EYfJ8T' );


/**#@-*/


/**

 * WordPress database table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'wp_';


/**

 * For developers: WordPress debugging mode.

 *

 * Change this to true to enable the display of notices during development.

 * It is strongly recommended that plugin and theme developers use WP_DEBUG

 * in their development environments.

 *

 * For information on other constants that can be used for debugging,

 * visit the documentation.

 *

 * @link https://wordpress.org/support/article/debugging-in-wordpress/

 */

define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */




define( 'FS_METHOD', 'direct' );
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
 */
if ( defined( 'WP_CLI' ) ) {
	$_SERVER['HTTP_HOST'] = '127.0.0.1';
}

define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/' );
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

/**
 * Disable pingback.ping xmlrpc method to prevent WordPress from participating in DDoS attacks
 * More info at: https://docs.bitnami.com/general/apps/wordpress/troubleshooting/xmlrpc-and-pingback/
 */
if ( !defined( 'WP_CLI' ) ) {
	// remove x-pingback HTTP header
	add_filter("wp_headers", function($headers) {
		unset($headers["X-Pingback"]);
		return $headers;
	});
	// disable pingbacks
	add_filter( "xmlrpc_methods", function( $methods ) {
		unset( $methods["pingback.ping"] );
		return $methods;
	});
}
