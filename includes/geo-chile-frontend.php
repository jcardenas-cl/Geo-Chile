<?php
/**
 * Functiones orientadas de cara al usuario final de plugin, como por ejemplo la creacion de
 * shortcodes que muestran regiones y comunas.
 * También se utilizaran algunas de estas funciones para la administración.
 *
 * @package Core
 */

 /**
 * Funcion global que se encarga de retornar mostrar el select con regiones
 *
 * @return void
 */
function geo_chile_get_regions() {
	global $wpdb;
	$loop = new WP_Query(
		array(
			'post_type'      => 'geo-chile-region',
			'posts_per_page' => 99,
		)
	);

	$output  = '<select id="cbo-geo-chile-region" name="cbo-geo-chile-region">';
	$output .= '<option value="-1">' . __( '- Seleccione una region -', 'geo-chile' ) . '</option>';
	if ( $loop->have_posts() ) {
		while ( $loop->have_posts() ) {
			$loop->the_post();
			$output .= '<option value="' . get_the_ID() . '">' . get_the_title() . '</option>';
		}
	}
	$output .= '</select>';
	echo wp_kses(
		$output, array(
			'select' => array(
				'class' => array(),
				'name'  => array(),
				'id'    => array(),
			),
			'option' => array(
				'value' => array(),
			),
		)
	);
	wp_reset_postdata();
}

/**
 * Agrega shortcodes de uso publico en el sitio
 */
function geo_chile_add_shortcodes() {
	add_shortcode( 'geo_chile_regiones', 'geo_chile_get_regions' );
}
add_action( 'init', 'geo_chile_add_shortcodes' );
