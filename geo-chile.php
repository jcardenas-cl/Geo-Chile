<?php
/**
 * Lista inicial con las regiones de país
 * php version 7.4.19
 *
 * @category Install
 * @package  Install
 * @author   Julio Cárdenas <julio@arknite.dev>
 * @license  https://www.gnu.org/licenses/gpl-3.0.html GPL-3.0
 * @link     https://arknite.dev/plugins/geo-chile
 */

/*
Plugin Name: Geo Chile
Plugin URI: https://arknite.dev/plugins/geo-chile
Description: Un sencillo plugin con una lista de regiones, provincias y comunas.
Version: 0.1
Author: Julio Cárdenas
Author URI: https://arknite.dev
Text Domain: geo-chile
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Geo_Chile' ) ) :

	/**
	 * Clase principal del plugin que se encarga de inicializar los tipos de post,
	 * hooks, instalar en la activación, etc.
	 *
	 * @category Install
	 * @package  Install
	 * @author   Julio Cárdenas <julio@arknite.dev>
	 * @license  https://www.gnu.org/licenses/gpl-3.0.html GPL-3.0
	 * @link     https://arknite.dev/plugins/geo-chile
	 */
	class Geo_Chile {

		/**
		 * Definir la versión del plugin actual.
		 *
		 * @var String $plugin_version Versión del plugin.
		 */
		private $plugin_version = '1.0.0';

		/**
		 * Constructor del plugin, de momento se inicia vacio
		 */
		public function __construct() {

		}

		/**
		 * Realiza la instalación del plugin
		 *
		 * @return void
		 */
		public static function install() {
			self::register_post_types();
			include_once plugin_dir_path( __FILE__ ) . 'includes/geo-chile-init-regiones.php';
			include_once plugin_dir_path( __FILE__ ) . 'includes/geo-chile-init-provincias.php';
			include_once plugin_dir_path( __FILE__ ) . 'includes/geo-chile-install.php';
		}

		/**
		 * Registra los tipos de post necesarios para la funcionalidad del plugin
		 *
		 * @return void
		 */
		public static function register_post_types() {
			register_post_type(
				'geo-chile-region', array(
					'labels'          => array(
						'name'               => __( 'Regiones', 'geo-chile' ),
						'singular_name'      => __( 'Región', 'geo-chile' ),
						'add_new'            => __( 'Nueva región', 'geo-chile' ),
						'add_new_item'       => __( 'Crear nueva región', 'geo-chile' ),
						'edit_item'          => __( 'Editar región', 'geo-chile' ),
						'new_item'           => __( 'Nueva región', 'geo-chile' ),
						'view_item'          => __( 'Ver región', 'geo-chile' ),
						'search_items'       => __( 'Buscar región', 'geo-chile' ),
						'not_found'          => __( 'No se encontraron regiones', 'geo-chile' ),
						'not_found_in_trash' => __(
							'No se encotraron regiones en la papelera', 'geo-chile'
						),
					),
					'public'          => false,
					'hierarchical'    => true,
					'show_ui'         => true,
					'show_in_menu'    => false,
					'_builtin'        => false,
					'capability_type' => 'post',
					'supports'        => array( 'title' ),
					'rewrite'         => false,
					'query_var'       => false,
				)
			);

			register_post_type(
				'geo-chile-provincia', array(
					'labels'          => array(
						'name'               => __( 'Provincias', 'geo-chile' ),
						'singular_name'      => __( 'Provincia', 'geo-chile' ),
						'add_new'            => __( 'Nueva provincia', 'geo-chile' ),
						'add_new_item'       => __( 'Crear nueva provincias', 'geo-chile' ),
						'edit_item'          => __( 'Editar provincias', 'geo-chile' ),
						'new_item'           => __( 'Nueva provincias', 'geo-chile' ),
						'view_item'          => __( 'Ver provincias', 'geo-chile' ),
						'search_items'       => __( 'Buscar provincias', 'geo-chile' ),
						'not_found'          => __(
							'No se encontraron provincias',
							'geo-chile'
						),
						'not_found_in_trash' => __(
							'No se encotraron provincias en la papelera',
							'geo-chile'
						),
					),
					'public'          => false,
					'hierarchical'    => true,
					'show_ui'         => true,
					'show_in_menu'    => false,
					'_builtin'        => false,
					'capability_type' => 'post',
					'supports'        => array( 'title' ),
					'rewrite'         => false,
					'query_var'       => false,
				)
			);

			register_post_type(
				'geo-chile-comuna', array(
					'labels'          => array(
						'name'               => __( 'Comunas', 'geo-chile' ),
						'singular_name'      => __( 'Comuna', 'geo-chile' ),
						'add_new'            => __( 'Nueva comuna', 'geo-chile' ),
						'add_new_item'       => __( 'Crear nueva comuna', 'geo-chile' ),
						'edit_item'          => __( 'Editar comuna', 'geo-chile' ),
						'new_item'           => __( 'Nueva comuna', 'geo-chile' ),
						'view_item'          => __( 'Ver comuna', 'geo-chile' ),
						'search_items'       => __( 'Buscar comuna', 'geo-chile' ),
						'not_found'          => __(
							'No se encontraron comunas',
							'geo-chile'
						),
						'not_found_in_trash' => __(
							'No se encotraron comunas en la papelera',
							'geo-chile'
						),
					),
					'public'          => false,
					'hierarchical'    => true,
					'show_ui'         => true,
					'show_in_menu'    => false,
					'_builtin'        => false,
					'capability_type' => 'post',
					'supports'        => array( 'title' ),
					'rewrite'         => false,
					'query_var'       => false,
				)
			);
		}

		/**
		 * Metodo que se ejecuta al cargar el plugin, cuando ya esta activado
		 *
		 * @return void
		 */
		public function init_setup() {

			add_action( 'init', [ $this, 'register_post_types' ] );

			include_once plugin_dir_path( __FILE__ ) . 'includes/geo-chile-region.php';
			include_once plugin_dir_path( __FILE__ ) . 'includes/geo-chile-provincia.php';
			include_once plugin_dir_path( __FILE__ ) . 'includes/geo-chile-comuna.php';
			include_once plugin_dir_path( __FILE__ ) . 'includes/geo-chile-frontend.php';

			if ( is_admin() ) {
				include_once plugin_dir_path( __FILE__ ) . 'includes/geo-chile-admin.php';
			}

		}

	}

endif;

$geo_chile = new Geo_Chile();
$geo_chile->init_setup();

register_activation_hook( __FILE__, [ 'Geo_Chile', 'install' ] );
