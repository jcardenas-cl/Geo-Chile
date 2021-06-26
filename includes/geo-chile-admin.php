<?php
/**
 * Funciones generales que se utilizarán solamente en
 * el panel de administración de WordPress
 * php version 7.4.19
 *
 * @category General
 * @package  GeoChile
 * @author   Julio Cárdenas <julio@arknite.dev>
 * @license  https://www.gnu.org/licenses/gpl-3.0.html GPL-3.0
 * @link     https://arknite.dev/plugins/geo-chile
 */

/**
 * Funcion encargada de inicializar las paginas del administrador
 *
 * @return void
 */
function geo_chile_add_admin_page() {
	add_menu_page(
		__( 'Geo Chile', 'geo_chile' ),
		'Geo Chile',
		'manage_options',
		'geo_chile_slug',
		'edit.php?post_type=geo-chile-region',
		'dashicons-admin-site'
	);

	add_submenu_page(
		'geo_chile_slug',
		'Regiones',
		'Lista de regiones',
		'manage_options',
		'edit.php?post_type=geo-chile-region'
	);

	add_submenu_page(
		'geo_chile_slug',
		'Provincias',
		'Lista de Provincias',
		'manage_options',
		'edit.php?post_type=geo-chile-provincia'
	);

	add_submenu_page(
		'geo_chile_slug',
		'Comunas',
		'Lista de comunas',
		'manage_options',
		'edit.php?post_type=geo-chile-comuna'
	);

	remove_submenu_page( 'geo_chile_slug', 'geo_chile_slug' );
}
add_action( 'admin_menu', 'geo_chile_add_admin_page' );

/**
 * Crea y ajusta los nombres de columna en el listado del post_type
 * para el listado de regiones
 *
 * @param String[] $post_columns Arreglo asociativo con el titulo de las columnas.
 *
 * @return Array Arreglo asociativo con el titulo de columnas modificado
 */
function geo_chile_title_region_admin_columns( $post_columns ) {
	$post_columns['menu_order'] = 'featured'; // column key => title.
	return array(
		'cb'         => '<input type="checkbox" />',
		'title'      => __( 'Nombre región' ),
		'short_name' => __( 'Nombre corto' ),
	);
}
add_filter( 'manage_geo-chile-region_posts_columns', 'geo_chile_title_region_admin_columns', 10, 1 );

/**
 * Ajusta el valor de las columnas reales para el post_type
 * de regiones
 *
 * @category Admin
 * @package Admin
 * @param String[] $column Nombre de la columna.
 * @param int      $post_id ID del post.
 * @return void
 */
function geo_chile_region_admin_columns( $column, $post_id ) {
	switch ( $column ) {
		case 'short_name':
			$short_name = get_post_meta( $post_id, 'abreviatura', true );
			echo wp_kses( $short_name, '' );
			break;
	}
}
add_action( 'manage_geo-chile-region_posts_custom_column', 'geo_chile_region_admin_columns', 10, 2 );

/**
 * Crea y ajusta los nombres de columna en el listado del comunas
 *
 * @param String[] $post_columns Arreglo asociativo con el titulo de las columnas.
 *
 * @return Array Arreglo asociativo con el titulo de columnas modificado
 */
function geo_chile_title_province_admin_columns( $post_columns ) {
	$post_columns['menu_order'] = 'featured'; // column key => title.
	return array(
		'cb'     => '<input type="checkbox" />',
		'title'  => __( 'Nombre provincia' ),
		'region' => __( 'Región' ),
	);
}
add_filter( 'manage_geo-chile-provincia_posts_columns', 'geo_chile_title_province_admin_columns', 10, 1 );

/**
 * Ajusta el valor de las columnas reales para el post_type de provincias
 *
 * @category Admin
 * @package Admin
 * @param String[] $column Nombre de la columna.
 * @param int      $post_id ID del post.
 * @return void
 */
function geo_chile_province_admin_columns( $column, $post_id ) {
	switch ( $column ) {
		case 'region':
			$region_post_id = get_post_meta( $post_id, 'region', true );
			echo get_the_title( $region_post_id );
			break;
	}
}
add_action( 'manage_geo-chile-provincia_posts_custom_column', 'geo_chile_province_admin_columns', 10, 2 );

/**
 * Agrega la funcionalidad de ordenar por columnas determinadas en esta funcion
 */
add_filter(
	'manage_edit-geo-chile-provincia_sortable_columns', function ( $columns ) {
		$columns['region'] = 'region';
		return $columns;
	}
);
