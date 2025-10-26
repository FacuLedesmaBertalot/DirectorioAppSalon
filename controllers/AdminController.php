<?php

namespace Controllers;

use MVC\Router;

class AdminController {

    public static function index(Router $router) {

        // Comprueba si la sesión no está ya iniciada antes de llamarla
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $router->render('admin/index', [
            'nombre' => $_SESSION['nombre']
        ]);
    }
}
