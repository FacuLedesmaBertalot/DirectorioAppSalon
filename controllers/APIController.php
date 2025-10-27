<?php

namespace Controllers;

use Model\Cita;
use Model\CitaServicio;
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

        // Almacena la Cita y devuelve el ID
        $cita = new Cita($_POST);
        $resultado = $cita->guardar();

        $id = $resultado['id'];

        // Almacena la Cita y los Servicios
        $idServicios = explode(",", $_POST['servicios']);

        // Almacena los Servicios con el ID de la Cita
        foreach($idServicios as $idServicio) {
            $args = [
                'citaId' => $id,
                'servicioId' => $idServicio
            ];
            $citaServicio = new CitaServicio($args);
            $citaServicio->guardar();
        }
        
        
        echo json_encode(['resultado' => $resultado]);
    }

    public static function eliminar() {
        
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $id = $_POST['id'];
            $cita = Cita::find($id);
            $cita->eliminar();
            
            header('Location: '. $_SERVER['HTTP_REFERER']);
        }
    }

}
