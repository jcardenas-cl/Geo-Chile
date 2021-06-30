<?php
/**
 * Funciones generales que se utilizarán solamente en
 * el panel de administración de WordPress. 
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
 * Crea y ajusta los nombres de columna en el listado del provincias
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
 * Declara que la columna es ordenable, y realiza un intento de orde de manera automatica, pero no es 
 * 100% confiable.
 */
function geo_chile_province_custom_order( $column ) {
	$columns['region'] = 'region';
	return $columns;
}
add_filter( 'manage_edit-geo-chile-provincia_sortable_columns', 'geo_chile_province_custom_order' );

/**
 * Realiza el orden por la columna designada en el administrador, considerar que para lograr esto, se modifica
 * la consulta WP_Query antes de ser ejecutada, tambien permite el orden en base a los metatags del post_type
 * actual, asi que no realiza el order por el post_order de las regiones, sino en base a su ID.
 * 
 * En este caso se aplica a el orden de los post_types de geo-chile-provincia y geo-chile-comuna.
 * 
 * @param WP_Query $query - Instancia de WP_Query, pasada por referencia
 */
function do_sort_provinces_by_column( $query ) {
	$orderby = $query->get( 'orderby' );
	if ( 'region' == $orderby ) {
		$query->set('meta_key', 'region');
        $query->set('orderby', 'meta_value_num');
		$query->set('order', $query->get('order'));
	}
}
add_action( 'pre_get_posts', 'do_sort_provinces_by_column' );

/**
 * Crea y ajusta los nombres de columna en el listado del comunas
 *
 * @param String[] $post_columns Arreglo asociativo con el titulo de las columnas.
 *
 * @return Array Arreglo asociativo con el titulo de columnas modificado
 */
function geo_chile_title_communes_admin_columns( $post_columns ) {
	$post_columns['menu_order'] = 'featured'; // column key => title.
	return array(
		'cb'		=> '<input type="checkbox" />',
		'title'  	=> __( 'Nombre comuna' ),
		'region' 	=> __( 'Región' ),
		'province' 	=> __( 'Provincia' ),
	);
}
add_filter( 'manage_geo-chile-comuna_posts_columns', 'geo_chile_title_communes_admin_columns', 10, 1 );

/**
 * Ajusta el valor de las columnas reales para el post_type de provincias
 *
 * @category Admin
 * @package Admin
 * @param String[] $column Nombre de la columna.
 * @param int      $post_id ID del post.
 * @return void
 */
function geo_chile_commune_admin_columns( $column, $post_id ) {
	switch ( $column ) {
		case 'region':
			$region_post_id = get_post_meta( $post_id, 'region', true );
			echo get_the_title( $region_post_id );
			break;
		case 'province':
			$commune_post_id = get_post_meta( $post_id, 'comuna', true );
			echo get_the_title( $commune_post_id );
			break;
	}
}
add_action( 'manage_geo-chile-comuna_posts_custom_column', 'geo_chile_commune_admin_columns', 10, 2 );

/**
 * Agrega la funcionalidad de ordenar por region en el listado de comunas
 */
add_filter(
	'manage_edit-geo-chile-comuna_sortable_columns', function ( $columns ) {
		$columns['region'] = 'region';
		return $columns;
	}
);

/**
 * Inicializa una lista de metaboxes necesarios para la edicion de cada región, provincia y comuna.
 * Esta basado en funcionalidades nativas de WordPress, por lo que solo hace el llamado a las funciones que
 * terminan mostrando los campos efectivamente.
 */
function geo_chile_display_meta_fields() {
	add_meta_box(
		'metabox-geo-chile-region',
		__( 'Datos de la región', 'geo-chile' ),
		'geo_chile_display_region_metafields',
		'geo-chile-region'
	);

	add_meta_box(
		'metabox-geo-chile-provincia',
		__( 'Datos de la provincia', 'geo-chile' ),
		'geo_chile_display_province_metafields',
		'geo-chile-provincia'
	);

	add_meta_box(
		'metabox-geo-chile-comuna',
		__( 'Datos de la comuna', 'geo-chile' ),
		'geo_chile_display_commune_metafields',
		'geo-chile-comuna'
	);
}
add_action( 'add_meta_boxes', 'geo_chile_display_meta_fields' );

/**
 * Muestra los campos de post meta predefinidos para el post_type geo-chile-region
 * 
 * @param Object $post Datos del post en donde se mostrarán los campos
 * @return void
 */
function geo_chile_display_region_metafields( $post ) {
	$abreviation = get_post_meta( $post->ID, 'abreviatura', true );
	wp_nonce_field( 'geo_chile_region_nonce', 'meta-box-geo-chile-region' );
	echo '<label for="txt-abreviation">' . __( 'Abreviatura', 'geo-chile' ) . '</label><br>';
	echo '<input type="text" name="txt-abreviation" placeholder="EJ: TA" value="' . wp_kses($abreviation, []) . '" />';
}

/**
 * Muestra los campos de post meta predefinidos para el post_type geo-chile-provincia
 * 
 * @param Object $post Datos del post en donde se mostrarán los campos
 * @return void
 */
function geo_chile_display_province_metafields( $post ) {
	$region = get_post_meta( $post->ID, 'region', true );
	wp_nonce_field( 'geo_chile_provincia_nonce', 'meta-box-geo-chile-provincia' );
	echo '<label for="txt-abreviation">' . __( 'Región', 'geo-chile' ) . '</label><br>';
	geo_chile_print_region_select( array( 'selected' => $region, 'placeholder' => 'Seleccione' ) );
}

function geo_chile_display_commune_metafields( $post ) {
	$region 	= get_post_meta( $post->ID, 'region', true );
	$province	= get_post_meta( $post->ID, 'provincia', true );

	wp_nonce_field( 'geo_chile_comuna_nonce', 'meta-box-geo-chile-comuna' );
	echo '<label for="txt-abreviation">' . __( 'Región', 'geo-chile' ) . '</label><br>';
	geo_chile_print_region_select(
		array(
			'selected'		=> $region,
			'placeholder'	=> 'Seleccione',
		)
	);
	echo '<br>';
	echo '<label for="txt-abreviation">' . __( 'Provincia', 'geo-chile' ) . '</label><br>';
	geo_chile_print_province_select(
		array(
			'selected'		=> $province,
			'placeholder'	=> 'Seleccione',
			'load_id'		=> $region,
		)
	);
	echo '<br>';
	echo '<label for="txt-abreviation">' . __( 'Es capital regional', 'geo-chile' ) . '</label><br>';
	echo '<br>';
	echo '<label for="txt-abreviation">' . __( 'Es capital provincial', 'geo-chile' ) . '</label><br>';
}

/**
 * Función que se ejecuta al guardar un post, en caso de ser de un post_type correspondiente al plugin,
 * ejecuta el guardado de post_meta correspondiente.
 * 
 * @param int $post_id ID del post
 */
function get_chile_save_post_meta_switcher( $post_id ) {
	global $post;
	/** No se guarda el post_meta en caso de que sea autosave */
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	/** Si no tiene permisos para guardar, no se continua con el guardado del postmeta */
	if ( !current_user_can( 'edit_post' ) ) {
		return;
	}
	/** Si cumple con los requisitos mínimos, se continua con el guardado, dependiendo del post_type */
	if ( $post->post_type == 'geo-chile-region' ) {
		save_region_post_meta( $post_id );
	} elseif ( $post->post_type == 'geo-chile-provincia' ) {
		save_province_post_meta( $post_id );
	} elseif ( $post->post_type == 'geo-chile-provincia' ) {
		save_commune_post_meta( $post_id );
	}
}
add_action( 'save_post', 'get_chile_save_post_meta_switcher' );

/**
 * Guarda los campos pre establecidos de la región
 * 
 * @param int $post_id ID del post
 * @return void
 */
function save_region_post_meta( $post_id ) {
	if (
		!isset( $_POST['meta-box-geo-chile-region'] ) || 
		!wp_verify_nonce( $_POST['meta-box-geo-chile-region'], 'geo_chile_region_nonce' )
	) {
		return;
	}
	/** Continuar con el guardado si cumple con verificación de nonce */
	if ( isset( $_POST['txt-abreviation'] ) ) {
		update_post_meta( $post_id, 'abreviatura', $_POST['txt-abreviation'] );
	}
}

/**
 * Guarda los campos pre establecidos de la región
 * 
 * @param int $post_id ID del post
 * @return void
 */
function save_province_post_meta( $post_id ) {
	if (
		!isset( $_POST['meta-box-geo-chile-provincia'] ) || 
		!wp_verify_nonce( $_POST['meta-box-geo-chile-provincia'], 'geo_chile_provincia_nonce' )
	) {
		return;
	}
	/** Continuar con el guardado si cumple con verificación de nonce */
	if ( isset( $_POST['cbo-geo-chile-region'] ) ) {
		update_post_meta( $post_id, 'region', $_POST['cbo-geo-chile-region'] );
	}
}

/**
 * Guarda los campos pre establecidos de la comuna
 * 
 * @param int $post_id ID del post
 * @return void
 */
function save_commune_post_meta( $post_id ) {
	if (
		!isset( $_POST['meta-box-geo-chile-comuna'] ) || 
		!wp_verify_nonce( $_POST['meta-box-geo-chile-comuna'], 'geo_chile_comuna_nonce' )
	) {
		return;
	}
	/** Continuar con el guardado si cumple con verificación de nonce */
	if ( isset( $_POST['cbo-geo-chile-region'] ) ) {
		update_post_meta( $post_id, 'region', $_POST['cbo-geo-chile-region'] );
	}
	if ( isset( $_POST['cbo-geo-chile-provincia'] ) ) {
		update_post_meta( $post_id, 'provincia', $_POST['cbo-geo-chile-provincia'] );
	}
}