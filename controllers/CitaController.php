<?php

namespace Controllers;

use MVC\Router;

class CitaController {
    public static function index(Router $router) {

        // Comprueba si la sesión no está ya iniciada antes de llamarla
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $router->render('cita/index', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']

        ]);
        
    }
}