<?php
/*
Plugin Name: IACC Option Page
Description: Plugin to setup the Option Page used on IACC site.
Version: 1.0
Author: Mirror
Author URI: https://www.mirrorprod.com/
*/

// Settings Page: Website Options
class websiteoptions_Settings_Page {

	public function __construct() {
		add_action( 'admin_menu', array( $this, 'wph_create_settings' ) );
		add_action( 'admin_init', array( $this, 'wph_setup_sections' ) );
		add_action( 'admin_init', array( $this, 'wph_setup_fields' ) );
		add_action( 'admin_footer', array( $this, 'media_fields' ) );
		add_action( 'admin_enqueue_scripts', 'wp_enqueue_media' );
	}

	public function wph_create_settings() {
		$page_title = 'Website Options';
		$menu_title = 'Website Options';
		$capability = 'manage_options';
		$slug = 'websiteoptions';
		$callback = array($this, 'wph_settings_content');
		$icon = 'dashicons-admin-settings';
		$position = 2;
		add_menu_page($page_title, $menu_title, $capability, $slug, $callback, $icon, $position);
	}

	public function wph_settings_content() { ?>
		<div class="wrap">
			<h1>Website Options</h1>
			<?php settings_errors(); ?>
			<form method="POST" action="options.php">
				<?php
					settings_fields( 'websiteoptions' );
					do_settings_sections( 'websiteoptions' );
					submit_button();
				?>
			</form>
		</div> <?php
	}

	public function wph_setup_sections() {
		add_settings_section( 'websiteoptions_section', '', array(), 'websiteoptions' );
	}

	public function wph_setup_fields() {
		$fields = array(
			array(
				'label' => 'Logo',
				'id' => 'logo-iacc',
				'type' => 'media',
				'section' => 'websiteoptions_section',
				'returnvalue' => 'id',
				'desc' => 'Logo IACC for Header and Footer',
			),
			array(
				'label' => 'Footer Text',
				'id' => 'footer-text',
				'type' => 'textarea',
				'section' => 'websiteoptions_section',
				'desc' => 'Footer text',
			),
			array(
				'label' => 'Facebook Url',
				'id' => 'facebook-url',
				'type' => 'url',
				'section' => 'websiteoptions_section',
				'desc' => 'Facebook Page Url',
			),
			array(
				'label' => 'Linkedin Url',
				'id' => 'linkedin-url',
				'type' => 'url',
				'section' => 'websiteoptions_section',
				'desc' => 'Linkedin Page Url',
			),
			array(
				'label' => 'Instagram Url',
				'id' => 'instagram-url',
				'type' => 'url',
				'section' => 'websiteoptions_section',
				'desc' => 'Instagram Page Url',
			),
			array(
				'label' => 'Twitter Url',
				'id' => 'twitter-url',
				'type' => 'url',
				'section' => 'websiteoptions_section',
				'desc' => 'Twitter Page Url',
			),
			array(
				'label' => 'Copyright',
				'id' => 'copyright-text',
				'type' => 'text',
				'section' => 'websiteoptions_section',
				'desc' => 'Copyright Text',
			),
		);
		foreach( $fields as $field ){
			add_settings_field( $field['id'], $field['label'], array( $this, 'wph_field_callback' ), 'websiteoptions', $field['section'], $field );
			register_setting( 'websiteoptions', $field['id'] );
		}
	}

	public function wph_field_callback( $field ) {
		$value = get_option( $field['id'] );
		$placeholder = '';
		if ( isset($field['placeholder']) ) {
			$placeholder = $field['placeholder'];
		}
		switch ( $field['type'] ) {
				case 'media':
					$field_url = '';
					if ($value) {
						if ($field['returnvalue'] == 'url') {
							$field_url = $value;
						} else {
							$field_url = wp_get_attachment_url($value);
						}
					}
					printf(
						'<input style="display:none;" id="%s" name="%s" type="text" value="%s"  data-return="%s"><div id="preview%s" style="margin-right:10px;border:1px solid #e2e4e7;background-color:#fafafa;display:inline-block;width: 100px;height:100px;background-image:url(%s);background-size:cover;background-repeat:no-repeat;background-position:center;"></div><input style="width: 19%%;margin-right:5px;" class="button websiteoptions-media" id="%s_button" name="%s_button" type="button" value="Select" /><input style="width: 19%%;" class="button remove-media" id="%s_buttonremove" name="%s_buttonremove" type="button" value="Clear" />',
						$field['id'],
						$field['id'],
						$value,
						$field['returnvalue'],
						$field['id'],
						$field_url,
						$field['id'],
						$field['id'],
						$field['id'],
						$field['id']
					);
					break;
				case 'textarea':
				printf( '<textarea name="%1$s" id="%1$s" placeholder="%2$s" rows="5" cols="50">%3$s</textarea>',
					$field['id'],
					$placeholder,
					$value
					);
					break;
			default:
				printf( '<input name="%1$s" id="%1$s" type="%2$s" placeholder="%3$s" value="%4$s" />',
					$field['id'],
					$field['type'],
					$placeholder,
					$value
				);
		}
		if( isset($field['desc']) ) {
			if( $desc = $field['desc'] ) {
				printf( '<p class="description">%s </p>', $desc );
			}
		}
	}
	public function media_fields() {
		?><script>
			jQuery(document).ready(function($){
				if ( typeof wp.media !== 'undefined' ) {
					var _custom_media = true,
					_orig_send_attachment = wp.media.editor.send.attachment;
					$('.websiteoptions-media').click(function(e) {
						var send_attachment_bkp = wp.media.editor.send.attachment;
						var button = $(this);
						var id = button.attr('id').replace('_button', '');
						_custom_media = true;
							wp.media.editor.send.attachment = function(props, attachment){
							if ( _custom_media ) {
								if ($('input#' + id).data('return') == 'url') {
									$('input#' + id).val(attachment.url);
								} else {
									$('input#' + id).val(attachment.id);
								}
								$('div#preview'+id).css('background-image', 'url('+attachment.url+')');
							} else {
								return _orig_send_attachment.apply( this, [props, attachment] );
							};
						}
						wp.media.editor.open(button);
						return false;
					});
					$('.add_media').on('click', function(){
						_custom_media = false;
					});
					$('.remove-media').on('click', function(){
						var parent = $(this).parents('td');
						parent.find('input[type="text"]').val('');
						parent.find('div').css('background-image', 'url()');
					});
				}
			});
		</script><?php
	}

}
new websiteoptions_Settings_Page();