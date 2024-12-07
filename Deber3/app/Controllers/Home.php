<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

/**
 * Controlador principal para manejar las solicitudes de las rutas definidas.
 */
class Home extends BaseController
{
    /**
     * Método para manejar solicitudes a la ruta `/categoria`.
     * Este método obtiene todos los registros de la tabla `categoria`.
     */
    public function categoria()
    {
        try {
            // Conectar a la base de datos utilizando la configuración predeterminada
            $db = \Config\Database::connect();

            // Ejecutar una consulta SQL para obtener todos los registros de la tabla `categoria`
            $query = $db->query("SELECT * FROM `categoria`;");

            // Obtener los resultados en un formato estándar (array de objetos)
            $resultado = $query->getResult();

            // Devolver los resultados en formato JSON con una respuesta HTTP exitosa (200)
            return $this->response->setJSON($resultado);
        } catch (\Exception $e) {
            // Si ocurre un error, devolver un mensaje de error con código HTTP 500 (Error interno del servidor)
            return $this->response->setStatusCode(500)->setJSON(['error' => $e->getMessage()]);
        }
    }

    /**
     * Método para manejar solicitudes a la ruta `/materiales`.
     * Este método obtiene todos los registros de la tabla `materiales`.
     */
    public function materiales()
    {
        try {
            // Conectar a la base de datos utilizando la configuración predeterminada
            $db = \Config\Database::connect();

            // Ejecutar una consulta SQL para obtener todos los registros de la tabla `materiales`
            $query = $db->query("SELECT * FROM `materiales`;");

            // Obtener los resultados en un formato estándar (array de objetos)
            $resultado = $query->getResult();

            // Devolver los resultados en formato JSON con una respuesta HTTP exitosa (200)
            return $this->response->setJSON($resultado);
        } catch (\Exception $e) {
            // Si ocurre un error, devolver un mensaje de error con código HTTP 500 (Error interno del servidor)
            return $this->response->setStatusCode(500)->setJSON(['error' => $e->getMessage()]);
        }
    }
}
