<?php

namespace Controllers;

use Model\Servicio;

class APIController {
    public static function index() {
        // --- INICIO: AÑADIR ESTOS HEADERS ---
        // Le dice al navegador que no guarde esta respuesta en caché
        header('Cache-Control: no-cache, no-store, must-revalidate');
        header('Pragma: no-cache');
        header('Expires: 0');
        // --- FIN: AÑADIR ESTOS HEADERS ---

        $servicios = Servicio::all();
        
        header('Content-Type: application/json');
        
        echo json_encode($servicios);
    }


    public static function guardar() {
        $respuesta = [ 
            'mensaje' => 'Todo OK'
        ];

        echo json_encode($respuesta);
    }

}
