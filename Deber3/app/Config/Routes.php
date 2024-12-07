<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Router\RouteCollection;

// Crear una instancia del servicio de rutas
$routes = Services::routes();

/*
 * @var RouteCollection $routes
 * Esta variable contiene la colección de rutas registradas en la aplicación.
 */

// Cargar las rutas por defecto del sistema
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * Definir rutas personalizadas.
 * Estas rutas especifican qué controlador y método manejarán las solicitudes
 * realizadas a las rutas definidas.
 */

// Ruta para la categoría de categotria
// Cuando un usuario acceda a "/categotria", se llamará al método "categoria" del controlador "Home".
$routes->get('/categoria', 'Home::categoria');

// Ruta para la materiales de materiales
// Cuando un usuario acceda a "/materiales", se llamará al método "materiales" del controlador "Home".
$routes->get('/materiales', 'Home::materiales');

/**
 * Cargar rutas adicionales dependiendo del entorno actual.
 * Si existe un archivo de rutas específico para el entorno (por ejemplo, `development`),
 * se incluirá aquí.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
