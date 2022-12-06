<?php
	
require get_template_directory() . '/core/includes/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function construction_services_company_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework', 'construction-services-company' ),
			'slug'             => 'kirki',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	construction_services_company_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'construction_services_company_register_recommended_plugins' );