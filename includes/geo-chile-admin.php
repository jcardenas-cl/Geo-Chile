<?php
/**
 * Funciones generales que se utilizarán solamente en 
 * el panel de administración de wordpress
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
function Geo_Chile_Add_Admin_page()
{
    add_menu_page(
        __('Geo Chile', 'geo_chile'),
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

    remove_submenu_page('geo_chile_slug', 'geo_chile_slug');
}
add_action('admin_menu', 'Geo_Chile_Add_Admin_page');
