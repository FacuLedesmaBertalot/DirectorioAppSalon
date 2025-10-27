<?php

namespace Controllers;

use Model\AdminCita;
use MVC\Router;

class AdminController {

    public static function index(Router $router) {

        // Comprueba si la sesión no está ya iniciada antes de llamarla
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $fecha = date('Y-m-d');


        // Consultar la BD
        $consulta = "SELECT citas.id, citas.hora, CONCAT( usuarios.nombre, ' ', usuarios.apellido) as cliente, ";
        $consulta .= " usuarios.email, usuarios.telefono, servicios.nombreServicio, servicios.precio  ";
        $consulta .= " FROM citas  ";
        $consulta .= " INNER JOIN usuarios ";
        $consulta .= " ON citas.usuarioId=usuarios.id  ";
        $consulta .= " INNER JOIN citas_servicios ";
        $consulta .= " ON citas_servicios.citaId=citas.id ";
        $consulta .= " INNER JOIN servicios ";
        $consulta .= " ON servicios.id=citas_servicios.servicioId ";
        // $consulta .= " WHERE fecha =  '{$fecha}' ";

        $citas = AdminCita::SQL($consulta);

        $router->render('admin/index', [
            'nombre' => $_SESSION['nombre'],
            'citas' => $citas,
            'fecha' => $fecha
        ]);
    }
}
