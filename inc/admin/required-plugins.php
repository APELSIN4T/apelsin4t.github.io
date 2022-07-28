<?php
/**
 * Noah Lite required or recommended plugins
 *
 * @package Noah Lite
 */

require_once trailingslashit( get_template_directory() ) . 'inc/admin/required-plugins/class-tgm-plugin-activation.php';

function noahlite_register_required_plugins() {

	$plugins = array(
		array(
			'name'               => 'Pixelgrade Assistant',
			'slug'               => 'pixelgrade-assistant',
			'is_callable'        => 'PixelgradeAssistant',
			'required'           => false,
		),
		array(
			'name'               => 'Jetpack',
			'slug'               => 'jetpack',
			'required'           => false,
		),
	);

	$config = array(
		'domain'           => 'noah-lite', // Text domain - likely want to be the same as your theme.
		'default_path'     => '', // Default absolute path to pre-packaged plugins
		'menu'             => 'install-required-plugins', // Menu slug
		'has_notices'      => true, // Show admin notices or not
		'is_automatic'     => false, // Automatically activate plugins after installation or not
		'message'          => '', // Message to output right before the plugins table
		'strings'          => array(
			'page_title'                      => esc_html__( 'Install Recommended Plugins', 'noah-lite' ),
			'menu_title'                      => esc_html__( 'Install Plugins', 'noah-lite' ),
			/* translators: %1$s = plugin name */
			'installing'                      => esc_html__( 'Installing Plugin: %s', 'noah-lite' ),
			'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'noah-lite' ),
			/* translators: %1$s = plugin name */
			'notice_can_install_required'     => _n_noop( 'Noah Lite requires the following plugin: %1$s.', 'Noah Lite requires the following plugins: %1$s.', 'noah-lite' ),
			/* translators: %1$s = plugin name */
			'notice_can_install_recommended'  => _n_noop( 'Noah Lite recommends the following plugin: %1$s.', 'Noah Lite recommends the following plugins: %1$s.', 'noah-lite' ),
			/* translators: %1$s = plugin name */
			'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'noah-lite' ),
			/* translators: %1$s = plugin name */
			'notice_can_activate_required'    => _n_noop( 'The following theme required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'noah-lite' ),
			/* translators: %1$s = plugin name */
			'notice_can_activate_recommended' => _n_noop( 'The following theme recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'noah-lite' ),
			/* translators: %1$s = plugin name */
			'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'noah-lite' ),
			/* translators: %1$s = plugin name */
			'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with Noah Lite: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with Noah Lite: %1$s.', 'noah-lite' ),
			/* translators: %1$s = plugin name */
			'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'noah-lite' ),
			'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'noah-lite' ),
			'activate_link'                   => _n_noop( 'Activate installed plugin', 'Activate installed plugins', 'noah-lite' ),
			'return'                          => esc_html__( 'Return to Recommended Plugins Installer', 'noah-lite' ),
		)
	);

	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'noahlite_register_required_plugins', 995 );
