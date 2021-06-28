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
 * en caso de no recibir un parametro, solo muestra el placeholder para seleccionar una opción.
 */
function get_chile_get_provinces( $region_id = null ) {
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
			return $loop->posts;
		} else {
			return null;
		}
	} else {
		return null;
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

function print_provinces_select( $region_id ) {
	
	$output  = '<select id="cbo-geo-chile-provincia" name="cbo-geo-chile-provincia" class="cbo-geo-chile-provincia">';
	$output .= '<option value="-1">' . __( '- Seleccione una provincia -', 'geo-chile' ) . '</option>';

	if ( is_numeric( $region_id ) ) {
		$province_list = get_chile_get_provinces( $region_id );
	
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