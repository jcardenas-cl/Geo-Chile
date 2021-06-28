<?php
/**
 * Funciones de uso general en el plugin, como por ejemplo, funciones para obtener las comunas y regiones.
 *
 * @package Core
 */

 /**
 * Funcion global que se encarga de retornar mostrar el select con regiones.
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

	$output  = '<select id="cbo-geo-chile-region" name="cbo-geo-chile-region" class="cbo-geo-chile-region">';
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
 * Obtiene lista de provincias recibiendo como parametro el id de la region,
 * en caso de no recibir un parametro, se retorna null
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
 * Imprime el select con la lista correspondiente de provincias
 * @param int $region_id ID de la región
 * @return void
 */
function print_provinces_select( $region_id ) {
	
	$output  = '<select id="cbo-geo-chile-provincia" name="cbo-geo-chile-provincia" class="cbo-geo-chile-provincia">';
	$output .= '<option value="-1">' . __( '- Seleccione una provincia -', 'geo-chile' ) . '</option>';

	if ( is_numeric( $region_id ) ) {
		$province_list = geo_chile_get_provinces( $region_id );
	
		foreach ( $province_list as $province ) {
			$output .= '<option value="' . $province->ID . '">' . $province->post_title . '</option>';
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
	
}

/**
 * Obtiene una lista de comunas en base a una región en particular
 * @param int $region_id ID de la región
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
 * Imprime el select con una lista de comunas determinada por los datos de entrada
 */
function print_communes_select( $attrs ) {
	$output  = '<select id="cbo-geo-chile-comuna" name="cbo-geo-chile-comuna" class="cbo-geo-chile-comuna">';
	$output .= '<option value="-1">' . __( '- Seleccione una comuna -', 'geo-chile' ) . '</option>';
	$commune_list = array();

	if ( is_numeric( $attrs['province_id'] ) ) {
		$commune_list = geo_chile_get_comunas_by_province( $attrs['province_id'] );
	} elseif ( is_numeric( $attrs['region_id'] ) ) {
		$commune_list = geo_chile_get_comunas_by_region( $attrs['region_id'] );
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