<?php

namespace MVC;

class Router
{
    public array $getRoutes = [];
    public array $postRoutes = [];

    public function get($url, $fn)
    {
        $this->getRoutes[$url] = $fn;
    }

    public function post($url, $fn)
    {
        $this->postRoutes[$url] = $fn;
    }

    public function comprobarRutas()
    {
        session_start();

        // Obtiene la URL actual de una forma más confiable.
        // strtok() la limpia de parámetros GET (ej. /login?error=1 se convierte en /login)
        $currentUrl = strtok($_SERVER['REQUEST_URI'], '?') ?? '/';
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method === 'GET') {
            $fn = $this->getRoutes[$currentUrl] ?? null;
        } else {
            $fn = $this->postRoutes[$currentUrl] ?? null;
        }

        if ( $fn ) {
            // Llama a la función del controlador y le pasa la instancia actual del Router ($this)
            call_user_func($fn, $this); 
        } else {
            echo "Página No Encontrada o Ruta no válida";
        }
    }

    // Muestra una vista
    public function render($view, $datos = [])
    {
        // Pasa los datos a la vista
        foreach ($datos as $key => $value) {
            $$key = $value;  // Variable variable
        }

        ob_start(); // Inicia el almacenamiento en memoria

        // Incluye la vista específica
        include_once __DIR__ . "/views/$view.php";
        
        $contenido = ob_get_clean(); // Limpia el buffer y guarda el contenido

        // Incluye el layout principal que a su vez usará la variable $contenido
        include_once __DIR__ . '/views/layout.php';
    }
}
