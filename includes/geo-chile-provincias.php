<?php
/**
 * Funciones relacionadas a consultas para obtner las provincias y su presentación de datos.
 * 
 * @package Core
 */

 /**
 * Obtiene lista de provincias recibiendo como parametro el id de la region,
 * en caso de no recibir un parametro, se retorna null.
 * 
 * @param int $region_id ID de la región con las provincias asociadas
 * @return null|array null en caso de que no haya registros o no pase la validación, Arreglo iterable con los post del tipo provincia
 */
function geo_chile_get_provinces( $region_id = null ) {
	global $wpdb;
	
	if ( is_numeric( $region_id ) ) {
		$loop = new WP_Query(
			array(
				'post_type'			=> 'geo-chile-provincia',
				'posts_per_page'	=> 99,
				'orderby'			=> 'title',
				'order'				=> 'ASC',
				'meta_query'		=> array(
					array(
						'key'		=> 'region',
						'compare'	=> '=',
						'value'		=> $region_id
					)
				)
			)
		);
	
		if ( $loop->have_posts() ) {
			wp_reset_postdata();
			return $loop->posts;
		} else {
			return null;
		}
	} else {
		return null;
	}
}

/**
 * Opciones por defecto para el select que muesta las regiones.
 * 
 * @return array Arreglo con las opciones por defecto del select
 */
function default_attrs_select_geo_chile_province() {
	return array (
		'class' 		=> '',
		'id'			=> 'cbo-geo-chile-provincia',
		'placeholder'	=> __( '- Seleccione una provincia -', 'geo-chile' ),
		'selected'		=> '-1',
		'load_id'		=> null,
	);
}

/**
 * Imprime el select con la lista correspondiente de provincias.
 * 
 * @param array $user_options Arreglo asociativo con las preferencias de los usuarios
 * @return void
 */
function geo_chile_print_province_select( $user_options = null ) {
	$defaults = default_attrs_select_geo_chile_province();

	if ( gettype( $user_options ) == 'array' ) {
		$settings = array_merge( $defaults, $user_options );
	} else {
		$settings = $defaults;
	}

	$output  = '<select id="'.$settings['id'].'" name="cbo-geo-chile-provincia" class="cbo-geo-chile-provincia '.$settings['class'].'">';
	$output .= '<option value="-1">' . $settings['placeholder'] . '</option>';

	if ( is_numeric( $settings['load_id'] ) ) {
		$province_list = geo_chile_get_provinces( $settings['load_id'] );
	
		foreach ( $province_list as $province ) {
			$selected = ( $settings['selected'] == $province->ID ) ? ' selected' : '';
			$output .= "<option value=\"$province->ID\"$selected>$province->post_title</option>";
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
				'selected'	=> array()
			),
		)
	);
	
}