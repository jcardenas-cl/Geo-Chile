<?php
/**
 * Agrega acciones generales del plugin.
 *
 * @category General
 * @package  GeoChile
 * @author   Julio Cárdenas <julio@arknite.dev>
 * @license  https://www.gnu.org/licenses/gpl-3.0.html GPL-3.0
 * @link     https://arknite.dev/plugins/geo-chile
 */

function get_province_list() {
	header( 'Content-Type: application/json' );
	$region_id = $_POST['region_id'];
	if ( !is_numeric( $region_id ) ) {
		echo json_encode( array( 'status' => 'ERROR', 'message' => 'VALIDATION_ERROR' ) );
	} else {
		$provinces  = get_chile_get_provinces( $region_id );
		$output     = array();
		foreach ( $provinces as $province ) {
			$output[] = array( 'id' => $province->ID, 'name' => $province->post_title );
		}

		echo json_encode( $output );
	}

	wp_die();
}
add_action( 'wp_ajax_get_province_list', 'get_province_list' );
add_action( 'wp_ajax_nopriv_get_province_list', 'get_province_list' );