<?php
/**
 * Arreglo con los datos iniciales de regiones, comunas y provincias
 * actualizado hasta el 24 de junio de 2021
 *
 * @package Installation
 *
 * @author   Julio Cárdenas <julio@arknite.dev>
 * @license  https://www.gnu.org/licenses/gpl-3.0.html GPL-3.0
 * @link     https://arknite.dev/plugins/geo-chile
 */

$initial_list_data = array(
	array(
		'name'       => 'Región de Arica y Parinacota',
		'short_name' => 'AP',
		'geo_order'  => 10,
		'provinces'  => array(
			array(
				'name'     => 'Arica',
				'communes' => array(
					array(
						'name'     => 'Arica',
						'prov_cap' => true,
						'reg_cap'  => true,
					),
					array(
						'name'     => 'Camarones',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Parinacota',
				'communes' => array(
					array(
						'name'     => 'General Lagos',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Putre ',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
				),
			),
		),
	),
	array(
		'name'       => 'Región de Tarapacá',
		'short_name' => 'TA',
		'geo_order'  => 20,
		'provinces'  => array(
			array(
				'name'     => 'Iquique',
				'communes' => array(
					array(
						'name'     => 'Alto Hospicio',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Iquique,',
						'prov_cap' => true,
						'reg_cap'  => true,
					),
				),
			),
			array(
				'name'     => 'Tamarugal',
				'communes' => array(
					array(
						'name'     => 'Camiña',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Colchane',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Huara',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Pica',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Pozo Almonte',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
				),
			),
		),
	),
	array(
		'name'       => 'Región de Antofagasta',
		'short_name' => 'AN',
		'geo_order'  => 30,
		'provinces'  => array(
			array(
				'name'     => 'Tocopilla',
				'communes' => array(
					array(
						'name'     => 'María Elena',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Tocopilla',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'El Loa',
				'communes' => array(
					array(
						'name'     => 'Calama',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Ollagüe',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'San Pedro de Atacama',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Antofagasta',
				'communes' => array(
					array(
						'name'     => 'Antofagasta',
						'prov_cap' => true,
						'reg_cap'  => true,
					),
					array(
						'name'     => 'Mejillones',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Sierra Gorda',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Taltal',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
		),
	),
	array(
		'name'       => 'Región de Atacama',
		'short_name' => 'AT',
		'geo_order'  => 40,
		'provinces'  => array(
			array(
				'name'     => 'Chañaral',
				'communes' => array(
					array(
						'name'     => 'Chañaral',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Diego de Almagro',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Copiapó',
				'communes' => array(
					array(
						'name'     => 'Caldera',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Copiapó',
						'prov_cap' => true,
						'reg_cap'  => true,
					),
					array(
						'name'     => 'Tierra Amarilla',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Huasco,',
				'communes' => array(
					array(
						'name'     => 'Alto del Carmen',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Freirina',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Huasco',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Vallenar',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
				),
			),
		),
	),
	array(
		'name'       => 'Región de Coquimbo',
		'short_name' => 'CO',
		'geo_order'  => 50,
		'provinces'  => array(
			array(
				'name'     => 'Elqui',
				'communes' => array(
					array(
						'name'     => 'Andacollo',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Coquimbo',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'La Higuera',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'La Serena',
						'prov_cap' => false,
						'reg_cap'  => true,
					),
					array(
						'name'     => 'Paihuano',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Vicuña',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Limarí',
				'communes' => array(
					array(
						'name'     => 'Combarbalá',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Monte Patria',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Ovalle',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Punitaqui',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Río Hurtado',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Choapa',
				'communes' => array(
					array(
						'name'     => 'Canela',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Illapel',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Los Vilos',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Salamanca',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
		),
	),
	array(
		'name'       => 'Región de Valparaíso',
		'short_name' => 'VA',
		'geo_order'  => 60,
		'provinces'  => array(
			array(
				'name'     => 'Petorca',
				'communes' => array(
					array(
						'name'     => 'Cabildo',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'La Ligua',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Papudo',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Petorca',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Zapallar',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Los Andes',
				'communes' => array(
					array(
						'name'     => 'Calle Larga',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Los Andes',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Rinconada',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'San Esteban',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'San Felipe de Aconcagua',
				'communes' => array(
					array(
						'name'     => 'Catemu',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Llay-Llay',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Panquehue',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Putaendo',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'San Felipe',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Santa María',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Quillota',
				'communes' => array(
					array(
						'name'     => 'Hijuelas',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'La Calera',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'La Cruz',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Nogales',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Quillota',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Valparaíso',
				'communes' => array(
					array(
						'name'     => 'Casablanca',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Concón',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Juan Fernández',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Puchuncaví',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Quintero',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Valparaíso',
						'prov_cap' => true,
						'reg_cap'  => true,
					),
					array(
						'name'     => 'Viña del Mar',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'San Antonio',
				'communes' => array(
					array(
						'name'     => 'Algarrobo',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Cartagena',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'El Quisco',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'El Tabo',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'San Antonio',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Santo Domingo',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Isla de Pascua',
				'communes' => array(
					array(
						'name'     => 'Isla de Pascua',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Marga Marga',
				'communes' => array(
					array(
						'name'     => 'Limache',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Olmué',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Quilpué',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Villa Alemana',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
		),
	),
	array(
		'name'       => 'Región Metropolitana de Santiago',
		'short_name' => 'RM',
		'geo_order'  => 70,
		'provinces'  => array(
			array(
				'name'     => 'Chacabuco',
				'communes' => array(
					array(
						'name'     => 'Colina',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Lampa',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Til Til',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Santiago',
				'communes' => array(
					array(
						'name'     => 'Cerrillos',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Cerro Navia',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Conchalí',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'El Bosque',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Estación Central',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Huechuraba',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Independencia',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'La Cisterna',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'La Granja',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'La Florida',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'La Pintana',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'La Reina',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Las Condes',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Lo Barnechea',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Lo Espejo',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Lo Prado',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Macul',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Maipú',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Ñuñoa',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Pedro Aguirre Cerda',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Peñalolén',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Providencia',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Pudahuel',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Quilicura',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Quinta Normal',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Recoleta',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Renca',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'San Miguel',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'San Joaquín',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'San Ramón',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Santiago',
						'prov_cap' => true,
						'reg_cap'  => true,
					),
					array(
						'name'     => 'Vitacura',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Cordillera',
				'communes' => array(
					array(
						'name'     => 'Pirque',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Puente Alto',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'San José de Maipo',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Maipo',
				'communes' => array(
					array(
						'name'     => 'Buin',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Calera de Tango',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Paine',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'San Bernardo',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Melipilla',
				'communes' => array(
					array(
						'name'     => 'Alhué',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Curacaví',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'María Pinto',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Melipilla',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'San Pedro',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Talagante',
				'communes' => array(
					array(
						'name'     => 'El Monte',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Isla de Maipo',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Padre Hurtado',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Peñaflor',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Talagante',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
				),
			),
		),
	),
	array(
		'name'       => 'Región del Libertador General Bernardo O\'Higgins',
		'short_name' => 'LI',
		'geo_order'  => 80,
		'provinces'  => array(
			array(
				'name'     => 'Cachapoal',
				'communes' => array(
					array(
						'name'     => 'Codegua',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Coinco',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Coltauco',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Doñihue',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Graneros',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Las Cabras',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Machalí',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Malloa',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Mostazal',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Olivar',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Peumo',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Pichidegua',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Quinta de Tilcoco',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Rancagua',
						'prov_cap' => true,
						'reg_cap'  => true,
					),
					array(
						'name'     => 'Rengo',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Requínoa',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'San Vicente de Tagua Tagua',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Colchagua',
				'communes' => array(
					array(
						'name'     => 'Chépica',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Chimbarongo',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Lolol',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Nancagua',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Palmilla',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Peralillo',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Placilla',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Pumanque',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'San Fernando',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Santa Cruz',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Cardenal Caro',
				'communes' => array(
					array(
						'name'     => 'La Estrella',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Litueche',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Marchigüe',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Navidad',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Paredones',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Pichilemu',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
				),
			),
		),
	),
	array(
		'name'       => 'Región del Maule',
		'short_name' => 'ML',
		'geo_order'  => 90,
		'provinces'  => array(
			array(
				'name'     => 'Curicó',
				'communes' => array(
					array(
						'name'     => 'Curicó',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Hualañé',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Licantén',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Molina',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Rauco',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Romeral',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Sagrada Familia',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Teno',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Vichuquén',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Talca',
				'communes' => array(
					array(
						'name'     => 'Constitución',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Curepto',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Empedrado',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Maule',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Pelarco',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Pencahue',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Río Claro',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'San Clemente',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'San Rafael',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Talca',
						'prov_cap' => true,
						'reg_cap'  => true,
					),
				),
			),
			array(
				'name'     => 'Linares',
				'communes' => array(
					array(
						'name'     => 'Colbún',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Linares',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Longaví',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Parral',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Retiro',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'San Javier',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Villa Alegre',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Yerbas Buenas',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Cauquenes',
				'communes' => array(
					array(
						'name'     => 'Cauquenes',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Chanco',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Pelluhue',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
		),
	),
	array(
		'name'       => 'Región de Ñuble',
		'short_name' => 'NB',
		'geo_order'  => 100,
		'provinces'  => array(
			array(
				'name'     => 'Diguillín',
				'communes' => array(
					array(
						'name'     => 'Bulnes',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Chillán Viejo',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Chillán',
						'prov_cap' => false,
						'reg_cap'  => true,
					),
					array(
						'name'     => 'El Carmen',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Pemuco',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Pinto',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Quillón',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'San Ignacio',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Yungay',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Itata',
				'communes' => array(
					array(
						'name'     => 'Cobquecura',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Coelemu',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Ninhue',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Portezuelo',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Quirihue',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Ránquil',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Trehuaco',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Punilla',
				'communes' => array(
					array(
						'name'     => 'Coihueco',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Ñiquén',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'San Carlos',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'San Fabián',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'San Nicolás',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
		),
	),
	array(
		'name'       => 'Región del Biobío',
		'short_name' => 'BI',
		'geo_order'  => 110,
		'provinces'  => array(
			array(
				'name'     => 'Biobío',
				'communes' => array(
					array(
						'name'     => 'Alto Biobío',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Antuco',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Cabrero',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Laja',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Los Ángeles',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Mulchén',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Nacimiento',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Negrete',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Quilaco',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Quilleco',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'San Rosendo',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Santa Bárbara',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Tucapel',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Yumbel',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Concepción',
				'communes' => array(
					array(
						'name'     => 'Chiguayante',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Concepción',
						'prov_cap' => true,
						'reg_cap'  => true,
					),
					array(
						'name'     => 'Coronel',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Florida',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Hualpén',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Hualqui',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Lota',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Penco',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'San Pedro de la Paz',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Santa Juana',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Talcahuano',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Tomé',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Arauco',
				'communes' => array(
					array(
						'name'     => 'Arauco',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Cañete',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Contulmo',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Curanilahue',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Lebu',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Los Álamos',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Tirúa',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
		),
	),
	array(
		'name'       => 'Región de La Araucanía',
		'short_name' => 'AR',
		'geo_order'  => 120,
		'provinces'  => array(
			array(
				'name'     => 'Malleco',
				'communes' => array(
					array(
						'name'     => 'Angol',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Collipulli',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Curacautín',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Ercilla',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Lonquimay',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Los Sauces',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Lumaco',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Purén',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Renaico',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Traiguén',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Victoria',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Cautín',
				'communes' => array(
					array(
						'name'     => 'Carahue',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Cholchol',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Cunco',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Curarrehue',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Freire',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Galvarino',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Gorbea',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Lautaro',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Loncoche',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Melipeuco',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Nueva Imperial',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Padre Las Casas',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Perquenco',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Pitrufquén',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Pucón',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Puerto Saavedra',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Temuco',
						'prov_cap' => true,
						'reg_cap'  => true,
					),
					array(
						'name'     => 'Teodoro Schmidt',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Toltén',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Vilcún',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Villarrica',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
		),
	),
	array(
		'name'       => 'Región de Los Ríos',
		'short_name' => 'LR',
		'geo_order'  => 130,
		'provinces'  => array(
			array(
				'name'     => 'Valdivia',
				'communes' => array(
					array(
						'name'     => 'Corral',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Lanco',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Los Lagos',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Máfil',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Mariquina',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Paillaco',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Panguipulli',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Valdivia',
						'prov_cap' => true,
						'reg_cap'  => true,
					),
				),
			),
			array(
				'name'     => 'Ranco',
				'communes' => array(
					array(
						'name'     => 'Futrono',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'La Unión',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Lago Ranco',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Río Bueno',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
		),
	),
	array(
		'name'       => 'Región de Los Lagos',
		'short_name' => 'LL',
		'geo_order'  => 140,
		'provinces'  => array(
			array(
				'name'     => 'Osorno',
				'communes' => array(
					array(
						'name'     => 'Osorno',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Puerto Octay',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Purranque',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Puyehue',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Río Negro',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'San Juan de la Costa',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'San Pablo',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Llanquihue',
				'communes' => array(
					array(
						'name'     => 'Calbuco',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Cochamó',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Fresia',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Frutillar',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Llanquihue',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Los Muermos',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Maullín',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Puerto Montt',
						'prov_cap' => true,
						'reg_cap'  => true,
					),
					array(
						'name'     => 'Puerto Varas',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Chiloé',
				'communes' => array(
					array(
						'name'     => 'Ancud',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Castro',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Chonchi',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Curaco de Vélez',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Dalcahue',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Puqueldón',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Queilén',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Quemchi',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Quellón',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Quinchao',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Palena',
				'communes' => array(
					array(
						'name'     => 'Chaitén',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Futaleufú',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Hualaihué',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Palena',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
		),
	),
	array(
		'name'       => 'Región de Aysén del General Carlos Ibáñez del Campo',
		'short_name' => 'AI',
		'geo_order'  => 150,
		'provinces'  => array(
			array(
				'name'     => 'Coyhaique',
				'communes' => array(
					array(
						'name'     => 'Coyhaique',
						'prov_cap' => true,
						'reg_cap'  => true,
					),
					array(
						'name'     => 'Lago Verde',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Aysén',
				'communes' => array(
					array(
						'name'     => 'Aysén',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Cisnes',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Guaitecas',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'General Carrera',
				'communes' => array(
					array(
						'name'     => 'Chile Chico',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Río Ibáñez',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Capitán Prat',
				'communes' => array(
					array(
						'name'     => 'Cochrane',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'O\'Higgins',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Tortel',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
		),
	),
	array(
		'name'       => 'Región de Magallanes y de la Antártica Chilena',
		'short_name' => 'MA',
		'geo_order'  => 160,
		'provinces'  => array(
			array(
				'name'     => 'Última Esperanza',
				'communes' => array(
					array(
						'name'     => 'Natales',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Torres del Paine',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Magallanes',
				'communes' => array(
					array(
						'name'     => 'Laguna Blanca',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Punta Arenas',
						'prov_cap' => true,
						'reg_cap'  => true,
					),
					array(
						'name'     => 'Río Verde',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'San Gregorio',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Tierra del Fuego',
				'communes' => array(
					array(
						'name'     => 'Porvenir',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Primavera',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Timaukel',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
				),
			),
			array(
				'name'     => 'Antártica Chilena',
				'communes' => array(
					array(
						'name'     => 'Antártica',
						'prov_cap' => false,
						'reg_cap'  => false,
					),
					array(
						'name'     => 'Cabo de Hornos',
						'prov_cap' => true,
						'reg_cap'  => false,
					),
				),
			),
		),
	),
);
