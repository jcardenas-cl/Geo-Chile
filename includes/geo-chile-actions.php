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

function get_province_list_as_json() {
	header( 'Content-Type: application/json' );
	$region_id = $_POST['region_id'];
	if ( !is_numeric( $region_id ) ) {
		echo json_encode( array( 'status' => 'ERROR', 'message' => 'VALIDATION_ERROR' ) );
	} else {
		$provinces  = geo_chile_get_provinces( $region_id );
		$output     = array();
		foreach ( $provinces as $province ) {
			$output[] = array( 'id' => $province->ID, 'name' => $province->post_title );
		}

		echo json_encode( $output );
	}

	wp_die();
}
add_action( 'wp_ajax_get_province_list', 'get_province_list_as_json' );
add_action( 'wp_ajax_nopriv_get_province_list', 'get_province_list_as_json' );

/**
 * Obtiene una lista de comunas en base a una region o provincia determinada,
 * se determina si es región o provincia en base a el parametro de entrada que reciba.
 */
function get_commune_list_as_json() {
	header( 'Content-Type: application/json' );
	if ( 
		isset( $_POST['region_id'] ) and 
		is_numeric( $_POST['region_id'] ) 
		) {
		$region_id = $_POST['region_id'];
		$communes  = geo_chile_get_comunas_by_region( $region_id );
	} elseif (
		isset( $_POST['province_id'] ) and 
		is_numeric( $_POST['province_id'] )
		) {

		$province_id	= $_POST['province_id'];
		$communes		= geo_chile_get_comunas_by_province( $province_id );
	}
	
	$output = array();
	foreach ( $communes as $communes ) {
		$output[] = array( 'id' => $communes->ID, 'name' => $communes->post_title );
	}

	echo json_encode( $output );
	
	wp_die();
}
add_action( 'wp_ajax_get_commune_list', 'get_commune_list_as_json' );
add_action( 'wp_ajax_nopriv_get_commune_list', 'get_commune_list_as_json' );