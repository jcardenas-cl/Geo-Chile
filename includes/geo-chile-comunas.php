<?php
/**
 * Funciones relacionadas a consultas para obtner las comunas y su presentación de datos.
 * 
 * @package Core
 */

/**
 * Obtiene una lista de comunas en base a una región en particular
 * @param int $region_id ID de la región
 * @return null|array null en caso de no haber registros o fallo de validación, array iterable en caso de existir registros
 */
function geo_chile_get_comunas_by_region( $region_id ) {
	global $wpdb;
	
	if ( is_numeric( $region_id ) ) {
		$loop = new WP_Query(
			array(
				'post_type'			=> 'geo-chile-comuna',
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
 * Obtiene una lista de comunas en base a una provincia en particular
 * @param int $province_id ID de la provincia
 * @return null|array null en caso de no haber registros o fallo de validación, array iterable en caso de existir registros
 */
function geo_chile_get_comunas_by_province( $province_id ) {
	global $wpdb;
	
	if ( is_numeric( $province_id ) ) {
		$loop = new WP_Query(
			array(
				'post_type'			=> 'geo-chile-comuna',
				'posts_per_page'	=> 99,
				'orderby'			=> 'title',
				'order'				=> 'ASC',
				'meta_query'		=> array(
					array(
						'key'		=> 'provincia',
						'compare'	=> '=',
						'value'		=> $province_id
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
 * Opciones por defecto para el select con comunas.
 * 
 * @return array Arreglo con los atributos del select
 */
function default_attrs_select_geo_chile_commune() {
	return array(
		'id'			=> 'cbo-geo-chile-comuna',
		'class'			=> '',
		'placeholder'	=>  __( '- Seleccione una comuna -', 'geo-chile' ),
		'selected'		=> -1,
		'source'		=> '',
		'load_id'		=> -1
	);
}

 /**
 * Imprime un select con una lista de comunas activas, se pueden configurar algunos atributos del select pasandolos como parametros en el arreglo asociativo.
 * 
 * @param int $region_id ID de la región con las provincias asociadas
 * @return null|array null en caso de que no haya registros o no pase la validación, Arreglo iterable con los post del tipo provincia
 */
function geo_chile_print_commune_select( $user_options ) {
	$defaults = default_attrs_select_geo_chile_commune();
	if ( gettype( $user_options ) == 'array' ) {
		$settings = array_merge( $defaults, $user_options);
	} else {
		$settings = $defaults;
	}
	
	$output  = '<select id="' . $settings['id'] . '" name="cbo-geo-chile-comuna" class="cbo-geo-chile-comuna '.$settings['class'].'">';
	$output .= '<option value="-1">' . $settings['placeholder'] . '</option>';
	$commune_list = array();

	if ( $settings['source'] == 'provincia' ) {
		$commune_list = geo_chile_get_comunas_by_province( $settings['load_id'] );
	} elseif ( $settings['source'] == 'region' ) {
		$commune_list = geo_chile_get_comunas_by_region( $settings['load_id'] );
	}

	foreach ( $commune_list as $commune ) {
		$output .= '<option value="' . $commune->ID . '">' . $commune->post_title . '</option>';
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
}