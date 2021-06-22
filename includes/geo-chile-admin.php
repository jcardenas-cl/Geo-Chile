<?php
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
		'geo_chile_regiones',
		'edit.php?post_type=geo-chile-region',
	);

	add_submenu_page(
		'geo_chile_slug',
		'Provincias',
		'Lista de Provincias',
		'manage_options',
		'geo_chile_provincias',
		'edit.php?post_type=geo-chile-provincia',
	);

	add_submenu_page(
		'geo_chile_slug',
		'Comunas',
		'Lista de comunas',
		'manage_options',
		'geo_chile_comunas',
		'edit.php?post_type=geo-chile-comuna',
	);

	remove_submenu_page('geo_chile_slug','geo_chile_slug');
}
add_action( 'admin_menu', 'geo_chile_add_admin_page' );