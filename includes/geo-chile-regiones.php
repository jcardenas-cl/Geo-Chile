<?php
/**
 * Funciones relacionadas a consultas para obtner las regiones y su presentación de datos.
 *
 * @package Core
 */

 /**
  * Funcion encargada de obtener las regiones desde la base de datos mediante WP_Query,
  * esta es llamada por toda funcion que requiera de sus datos de una manera sencilla sin
  * la necesidad de ejecutar la consulta .
  *
  * @return null|array Retornará null en caso de no obtener registros, en otro caso, retornará un arreglo que podrá
  * ser iterable (por por un foreach) con los datos de cada región.
  */
function geo_chile_get_regions() {
	global $wpdb;
	$loop = new WP_Query(
		array(
			'post_type'      => 'geo-chile-region',
			'posts_per_page' => 99,
			'meta_key'       => 'orden_geografico',
			'orderby'        => 'meta_value_num',
			'order'          => 'ASC',
		)
	);

	if ( $loop->have_posts() ) {
		wp_reset_postdata();
		return $loop->posts;
	} else {
		return null;
	}
}

/**
 * Opciones por defecto para el select que muesta las regiones.
 *
 * @return array Arreglo con las opciones por defecto del select
 */
function default_attrs_select_geo_chile_region() {
	return array(
		'class'       => '',
		'id'          => 'cbo-geo-chile-region',
		'placeholder' => __( '- Seleccione una región -', 'geo-chile' ),
		'selected'    => '-1',
	);
}

/**
 * Imprime un select con las regiones registradas en el sitio.
 *
 * @param array $user_options Arreglo asociativo con los datos del select.
 * @return void
 */
function geo_chile_print_region_select( $user_options = null ) {
	$defaults = default_attrs_select_geo_chile_region();
	if ( gettype( $user_options ) === 'array' ) {
		$settings = array_merge( $defaults, $user_options );
	} else {
		$settings = $defaults;
	}

	$output  = '<select id="' . $settings['id'] . '" name="cbo-geo-chile-region" class="cbo-geo-chile-region ' . $settings['class'] . '">';
	$output .= '<option value="-1">' . $settings['placeholder'] . '</option>';
	$regions = geo_chile_get_regions();
	foreach ( $regions as $region ) {
		$selected = ( $settings['selected'] === $region->ID ) ? ' selected' : '';
		$output  .= "<option value=\"$region->ID\"$selected>$region->post_title</option>";
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
				'value'    => array(),
				'selected' => array(),
			),
		)
	);
}
