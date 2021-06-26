# geo-chile

¿De que se trata?
------

Geo Chile es un plugin para WordPress que se encarga de agregar una lista de regiones, provincias y comunas de Chile. Estas se podrán gestionar posteriormente desde el panel de administración con las tareas clasicas como crear, actualizar y borrar.

¿Hacia quien esta dirigido?
------

Geo Chile esta orientado a desarrolladores que puedan expandir su funcionalidad segun sean sus necesidades, es por eso que inicialmente solo cuenta con elementos basicos como la asociacion entre regiones, provincias y comunas.

¿Como lo puedo utilizar?
------

Geo Chile en su instalación solo crea un listado de post con datos básicos como el nombre de la locación, si es capital regional y otros similares. Al ser un tipo de post, puede ser utilizado mediante las funciones del plugin o utilizar WP_Query si es que fuese necesario.
Se registran 3 tipos de post que podrás consultar.

- geo-chile-region
- geo-chile-provincia
- geo-chile-comuna

El plugin tambien ofrece la opción de utilizar shortcodes para ser mostrados en un select de manera directa sin tener que intervenir el código de la plantilla.

¿Algo mas que deba saber?
------

Al ser un plugin orientado a los desarrolladores, el sistema no ofrece un sistema de guardado que puedas agregar a un formulario, por lo que se debe programar su funcionalidad por completo. Para esto puedes utilizar los nombres de los campos que fueron pensados para que no interfieran con otros campos que puedas tener ya agregados.

En caso de que necesites los datos de este plugin, pero no utilices WordPress, el archivo localizado en 
/includes/geo-chile-init-data.php podrás encontrar el arreglo inicial con los datos, el cual podrás tomar como punto de inicio para iniciar una importación.

El listado de datos esta actualizado al 24 de junio de 2021

Este plugin esta actualmente en desarrollo.