<?php
/**
 * Functiones orientadas de cara al usuario final de plugin, como por ejemplo la creacion de
 * shortcodes que muestran regiones y comunas.
 * También se utilizaran algunas de estas funciones para la administración.
 *
 * @package Core
 */

/**
 * Carga de scripts necesarios para el funcionamiento del plugin de cara al usuario final.
 */
function geo_chile_load_scripts() {
	if ( !wp_script_is( 'jquery' ) ) {
		wp_enqueue_script( 'jquery' );
	}
	wp_enqueue_script( 
		'geo-chile-script', 
		plugin_dir_url( __FILE__ ) . '../public/geo-chile-script.js',
		array( 'jquery' ),
	);
	wp_localize_script(
		'geo-chile-script',
		'site_config',
		array(
			'ajaxurl'	=> admin_url( 'admin-ajax.php' ),
			'base_url'	=> get_site_url()
		)
	);
}
add_action( 'wp_enqueue_scripts', 'geo_chile_load_scripts' );

/**
 * Agrega shortcodes de uso publico en el sitio
 */
function geo_chile_add_shortcodes() {
	add_shortcode( 'geo_chile_regiones', 'geo_chile_get_regions' );
	add_shortcode( 'geo_chile_provincias', 'print_provinces_select' );
}
add_action( 'init', 'geo_chile_add_shortcodes' );
