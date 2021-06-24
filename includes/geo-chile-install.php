<?php
/**
 * Funciones relacionadas especificamente a la instalación del plugin
 * php version 7.4.19
 * 
 * @category Install
 * @package  Install
 * @author   Julio Cárdenas <julio@arknite.dev>
 * @license  https://www.gnu.org/licenses/gpl-3.0.html GPL-3.0
 * @link     https://arknite.dev/plugins/geo-chile
 */
$region_posts = new WP_Query(['post_type' => 'geo-chile-region']);

if (!$region_posts->have_posts()) {
    foreach ( $initial_list_regiones as $region ) {
        $args = [
            'post_title'    => wp_strip_all_tags($region['name']),
            'post_status'   => 'publish',
            'post_content'  => '',
            'post_type'     => 'geo-chile-region'
        ];
        $post_ID = wp_insert_post($args);
        if (!is_wp_error($post_ID)) {
            // Ajustar datos de cada post
            $meta_ID = add_post_meta($post_ID, 'abreviatura', $region['short_name']);
            if ( $meta_ID === false ) {
                _e( "No se puede crear post_meta para la región $region[name]", "geo-chile" );
                exit;
            }
        } else {
            //there was an error in the post insertion, 
            echo $post_ID->get_error_message();
            exit;
        }
    }
} else {
    // Ya existen registros previos, asi que se omite la inserción
}
