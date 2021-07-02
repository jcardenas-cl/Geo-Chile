<?php
/**
 * Arreglo con los datos iniciales de regiones, comunas y provincias
 * actualizado hasta el 24 de junio de 2021
 *
 * @package Installation
 *
 * @author   Julio Cárdenas <julio@arknite.dev>
 * @license  https://www.gnu.org/licenses/gpl-3.0.html
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
						'prov_cap' => 1,
						'reg_cap'  => 1,
					),
					array(
						'name'     => 'Camarones',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Parinacota',
				'communes' => array(
					array(
						'name'     => 'General Lagos',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Putre ',
						'prov_cap' => 1,
						'reg_cap'  => 0,
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
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Iquique',
						'prov_cap' => 1,
						'reg_cap'  => 1,
					),
				),
			),
			array(
				'name'     => 'Tamarugal',
				'communes' => array(
					array(
						'name'     => 'Camiña',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Colchane',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Huara',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Pica',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Pozo Almonte',
						'prov_cap' => 1,
						'reg_cap'  => 0,
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
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Tocopilla',
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'El Loa',
				'communes' => array(
					array(
						'name'     => 'Calama',
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Ollagüe',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'San Pedro de Atacama',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Antofagasta',
				'communes' => array(
					array(
						'name'     => 'Antofagasta',
						'prov_cap' => 1,
						'reg_cap'  => 1,
					),
					array(
						'name'     => 'Mejillones',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Sierra Gorda',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Taltal',
						'prov_cap' => 0,
						'reg_cap'  => 0,
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
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Diego de Almagro',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Copiapó',
				'communes' => array(
					array(
						'name'     => 'Caldera',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Copiapó',
						'prov_cap' => 1,
						'reg_cap'  => 1,
					),
					array(
						'name'     => 'Tierra Amarilla',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Huasco',
				'communes' => array(
					array(
						'name'     => 'Alto del Carmen',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Freirina',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Huasco',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Vallenar',
						'prov_cap' => 1,
						'reg_cap'  => 0,
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
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Coquimbo',
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'La Higuera',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'La Serena',
						'prov_cap' => 0,
						'reg_cap'  => 1,
					),
					array(
						'name'     => 'Paihuano',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Vicuña',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Limarí',
				'communes' => array(
					array(
						'name'     => 'Combarbalá',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Monte Patria',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Ovalle',
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Punitaqui',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Río Hurtado',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Choapa',
				'communes' => array(
					array(
						'name'     => 'Canela',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Illapel',
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Los Vilos',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Salamanca',
						'prov_cap' => 0,
						'reg_cap'  => 0,
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
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'La Ligua',
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Papudo',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Petorca',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Zapallar',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Los Andes',
				'communes' => array(
					array(
						'name'     => 'Calle Larga',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Los Andes',
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Rinconada',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'San Esteban',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'San Felipe de Aconcagua',
				'communes' => array(
					array(
						'name'     => 'Catemu',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Llay-Llay',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Panquehue',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Putaendo',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'San Felipe',
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Santa María',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Quillota',
				'communes' => array(
					array(
						'name'     => 'Hijuelas',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'La Calera',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'La Cruz',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Nogales',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Quillota',
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Valparaíso',
				'communes' => array(
					array(
						'name'     => 'Casablanca',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Concón',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Juan Fernández',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Puchuncaví',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Quintero',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Valparaíso',
						'prov_cap' => 1,
						'reg_cap'  => 1,
					),
					array(
						'name'     => 'Viña del Mar',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'San Antonio',
				'communes' => array(
					array(
						'name'     => 'Algarrobo',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Cartagena',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'El Quisco',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'El Tabo',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'San Antonio',
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Santo Domingo',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Isla de Pascua',
				'communes' => array(
					array(
						'name'     => 'Isla de Pascua',
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Marga Marga',
				'communes' => array(
					array(
						'name'     => 'Limache',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Olmué',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Quilpué',
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Villa Alemana',
						'prov_cap' => 0,
						'reg_cap'  => 0,
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
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Lampa',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Til Til',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Santiago',
				'communes' => array(
					array(
						'name'     => 'Cerrillos',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Cerro Navia',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Conchalí',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'El Bosque',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Estación Central',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Huechuraba',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Independencia',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'La Cisterna',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'La Granja',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'La Florida',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'La Pintana',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'La Reina',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Las Condes',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Lo Barnechea',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Lo Espejo',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Lo Prado',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Macul',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Maipú',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Ñuñoa',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Pedro Aguirre Cerda',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Peñalolén',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Providencia',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Pudahuel',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Quilicura',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Quinta Normal',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Recoleta',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Renca',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'San Miguel',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'San Joaquín',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'San Ramón',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Santiago',
						'prov_cap' => 1,
						'reg_cap'  => 1,
					),
					array(
						'name'     => 'Vitacura',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Cordillera',
				'communes' => array(
					array(
						'name'     => 'Pirque',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Puente Alto',
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'San José de Maipo',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Maipo',
				'communes' => array(
					array(
						'name'     => 'Buin',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Calera de Tango',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Paine',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'San Bernardo',
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Melipilla',
				'communes' => array(
					array(
						'name'     => 'Alhué',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Curacaví',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'María Pinto',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Melipilla',
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'San Pedro',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Talagante',
				'communes' => array(
					array(
						'name'     => 'El Monte',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Isla de Maipo',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Padre Hurtado',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Peñaflor',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Talagante',
						'prov_cap' => 1,
						'reg_cap'  => 0,
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
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Coinco',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Coltauco',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Doñihue',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Graneros',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Las Cabras',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Machalí',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Malloa',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Mostazal',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Olivar',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Peumo',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Pichidegua',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Quinta de Tilcoco',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Rancagua',
						'prov_cap' => 1,
						'reg_cap'  => 1,
					),
					array(
						'name'     => 'Rengo',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Requínoa',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'San Vicente de Tagua Tagua',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Colchagua',
				'communes' => array(
					array(
						'name'     => 'Chépica',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Chimbarongo',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Lolol',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Nancagua',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Palmilla',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Peralillo',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Placilla',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Pumanque',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'San Fernando',
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Santa Cruz',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Cardenal Caro',
				'communes' => array(
					array(
						'name'     => 'La Estrella',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Litueche',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Marchigüe',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Navidad',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Paredones',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Pichilemu',
						'prov_cap' => 1,
						'reg_cap'  => 0,
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
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Hualañé',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Licantén',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Molina',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Rauco',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Romeral',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Sagrada Familia',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Teno',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Vichuquén',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Talca',
				'communes' => array(
					array(
						'name'     => 'Constitución',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Curepto',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Empedrado',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Maule',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Pelarco',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Pencahue',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Río Claro',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'San Clemente',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'San Rafael',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Talca',
						'prov_cap' => 1,
						'reg_cap'  => 1,
					),
				),
			),
			array(
				'name'     => 'Linares',
				'communes' => array(
					array(
						'name'     => 'Colbún',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Linares',
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Longaví',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Parral',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Retiro',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'San Javier',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Villa Alegre',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Yerbas Buenas',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Cauquenes',
				'communes' => array(
					array(
						'name'     => 'Cauquenes',
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Chanco',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Pelluhue',
						'prov_cap' => 0,
						'reg_cap'  => 0,
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
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Chillán Viejo',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Chillán',
						'prov_cap' => 0,
						'reg_cap'  => 1,
					),
					array(
						'name'     => 'El Carmen',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Pemuco',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Pinto',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Quillón',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'San Ignacio',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Yungay',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Itata',
				'communes' => array(
					array(
						'name'     => 'Cobquecura',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Coelemu',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Ninhue',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Portezuelo',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Quirihue',
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Ránquil',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Trehuaco',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Punilla',
				'communes' => array(
					array(
						'name'     => 'Coihueco',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Ñiquén',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'San Carlos',
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'San Fabián',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'San Nicolás',
						'prov_cap' => 0,
						'reg_cap'  => 0,
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
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Antuco',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Cabrero',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Laja',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Los Ángeles',
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Mulchén',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Nacimiento',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Negrete',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Quilaco',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Quilleco',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'San Rosendo',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Santa Bárbara',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Tucapel',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Yumbel',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Concepción',
				'communes' => array(
					array(
						'name'     => 'Chiguayante',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Concepción',
						'prov_cap' => 1,
						'reg_cap'  => 1,
					),
					array(
						'name'     => 'Coronel',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Florida',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Hualpén',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Hualqui',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Lota',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Penco',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'San Pedro de la Paz',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Santa Juana',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Talcahuano',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Tomé',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Arauco',
				'communes' => array(
					array(
						'name'     => 'Arauco',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Cañete',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Contulmo',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Curanilahue',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Lebu',
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Los Álamos',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Tirúa',
						'prov_cap' => 0,
						'reg_cap'  => 0,
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
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Collipulli',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Curacautín',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Ercilla',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Lonquimay',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Los Sauces',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Lumaco',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Purén',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Renaico',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Traiguén',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Victoria',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Cautín',
				'communes' => array(
					array(
						'name'     => 'Carahue',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Cholchol',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Cunco',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Curarrehue',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Freire',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Galvarino',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Gorbea',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Lautaro',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Loncoche',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Melipeuco',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Nueva Imperial',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Padre Las Casas',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Perquenco',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Pitrufquén',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Pucón',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Puerto Saavedra',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Temuco',
						'prov_cap' => 1,
						'reg_cap'  => 1,
					),
					array(
						'name'     => 'Teodoro Schmidt',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Toltén',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Vilcún',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Villarrica',
						'prov_cap' => 0,
						'reg_cap'  => 0,
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
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Lanco',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Los Lagos',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Máfil',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Mariquina',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Paillaco',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Panguipulli',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Valdivia',
						'prov_cap' => 1,
						'reg_cap'  => 1,
					),
				),
			),
			array(
				'name'     => 'Ranco',
				'communes' => array(
					array(
						'name'     => 'Futrono',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'La Unión',
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Lago Ranco',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Río Bueno',
						'prov_cap' => 0,
						'reg_cap'  => 0,
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
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Puerto Octay',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Purranque',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Puyehue',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Río Negro',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'San Juan de la Costa',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'San Pablo',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Llanquihue',
				'communes' => array(
					array(
						'name'     => 'Calbuco',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Cochamó',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Fresia',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Frutillar',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Llanquihue',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Los Muermos',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Maullín',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Puerto Montt',
						'prov_cap' => 1,
						'reg_cap'  => 1,
					),
					array(
						'name'     => 'Puerto Varas',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Chiloé',
				'communes' => array(
					array(
						'name'     => 'Ancud',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Castro',
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Chonchi',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Curaco de Vélez',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Dalcahue',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Puqueldón',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Queilén',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Quemchi',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Quellón',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Quinchao',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Palena',
				'communes' => array(
					array(
						'name'     => 'Chaitén',
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Futaleufú',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Hualaihué',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Palena',
						'prov_cap' => 0,
						'reg_cap'  => 0,
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
						'prov_cap' => 1,
						'reg_cap'  => 1,
					),
					array(
						'name'     => 'Lago Verde',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Aysén',
				'communes' => array(
					array(
						'name'     => 'Aysén',
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Cisnes',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Guaitecas',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'General Carrera',
				'communes' => array(
					array(
						'name'     => 'Chile Chico',
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Río Ibáñez',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Capitán Prat',
				'communes' => array(
					array(
						'name'     => 'Cochrane',
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'O\'Higgins',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Tortel',
						'prov_cap' => 0,
						'reg_cap'  => 0,
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
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Torres del Paine',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Magallanes',
				'communes' => array(
					array(
						'name'     => 'Laguna Blanca',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Punta Arenas',
						'prov_cap' => 1,
						'reg_cap'  => 1,
					),
					array(
						'name'     => 'Río Verde',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'San Gregorio',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Tierra del Fuego',
				'communes' => array(
					array(
						'name'     => 'Porvenir',
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Primavera',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Timaukel',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
				),
			),
			array(
				'name'     => 'Antártica Chilena',
				'communes' => array(
					array(
						'name'     => 'Antártica',
						'prov_cap' => 0,
						'reg_cap'  => 0,
					),
					array(
						'name'     => 'Cabo de Hornos',
						'prov_cap' => 1,
						'reg_cap'  => 0,
					),
				),
			),
		),
	),
);
