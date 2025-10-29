<?php

namespace Model;

class Servicio extends ActiveRecord {
    // Base de datos
    protected static $tabla = 'servicios';
    protected static $columnasDB = ['id', 'nombreServicio', 'precio'];

    public $id;
    public $nombreServicio;
    public $precio;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null; 
        $this->nombreServicio = $args['nombreServicio'] ?? ''; 
        $this->precio = $args['precio'] ?? ''; 
    }

    public function validar() {
        if (!$this->nombreServicio) {
            self::$alertas['error'][] = 'El Nombre del Servicio es Obligatorio';
        }

        if (!$this->precio) {
            self::$alertas['error'][] = 'El Precio del Servicio es Obligatiorio';
        }

        if (!is_numeric($this->precio)) {
            self::$alertas['error'][] = 'El Precio No es Válido';
        }
        return self::$alertas;
    }
}