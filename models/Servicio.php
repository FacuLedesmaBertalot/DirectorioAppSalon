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
}