<?php
/**
 * Funciones relacionadas especificamente a la instalación del plugin.
 * php version 7.4.19
 *
 * @category Install
 * @package  Install
 * @author   Julio Cárdenas <julio@arknite.dev>
 * @license  https://www.gnu.org/licenses/gpl-3.0.html GPL-3.0
 * @link     https://arknite.dev/plugins/geo-chile
 */

$region_posts = new WP_Query( [ 'post_type' => 'geo-chile-region' ] );

if ( ! $region_posts->have_posts() ) {
	foreach ( $initial_list_data as $region ) {
		$args = array(
			'post_title'	=> wp_strip_all_tags( $region['name'] ),
			'post_status'	=> 'publish',
			'post_content'	=> '',
			'post_type'		=> 'geo-chile-region',
			'menu_order'	=> $region['geo_order'],
		);
		$region_id = wp_insert_post( $args );
		if ( ! is_wp_error( $region_id ) ) {
			// Ajustar datos de cada post.
			add_post_meta( $region_id, 'abreviatura', $region['short_name'] );
			$province_data = $region['provinces'];
			foreach ( $province_data as $province ) {
				$args_province = array(
					'post_title'   => wp_strip_all_tags( $province['name'] ),
					'post_status'  => 'publish',
					'post_content' => '',
					'post_type'    => 'geo-chile-provincia',
				);
				$province_id   = wp_insert_post( $args_province );
				if ( ! is_wp_error( $province_id ) ) {
					add_post_meta( $province_id, 'region', $region_id );
					$communes_data = $province['communes'];
					foreach ( $communes_data as $commune ) {
						$args_commune = array(
							'post_title'   => wp_strip_all_tags( $commune['name'] ),
							'post_status'  => 'publish',
							'post_content' => '',
							'post_type'    => 'geo-chile-comuna',
						);
						$commune_id   = wp_insert_post( $args_commune );
						if ( ! is_wp_error( $commune_id ) ) {
							add_post_meta( $commune_id, 'provincia', $province_id );
							add_post_meta( $commune_id, 'region', $region_id );
							add_post_meta( $commune_id, 'capital_provincial', $commune['prov_cap'] );
							add_post_meta( $commune_id, 'capital_regional', $commune['reg_cap'] );
						}
					}
				}
			}
		}
	}
}
