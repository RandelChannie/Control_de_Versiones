<?php
require_once("modelo/index.php");

class modelController {
    // Attributes do in class
    private $model;
    
    public function __construct() {
        $this->model = new Modelo();
    }
    
    // mostrar
    static function index() {
        $producto = new Modelo();
        $data = $producto->mostrar("products", "1");
        require_once("vista/index.php");
    }
    
    // nuevo
    static function nuevo() {
        require_once("vistas/nuevo.php");
    }
    
    // guardar
    static function guardar() {
        $nombre = $_REQUEST['nombre'];
        $precio = $_REQUEST['precio'];
        $data = "'".$nombre."','".$precio."'";
        $producto = new Modelo();
        $data = $producto->insertar("products", $data);
        header("location:".urlsite);
    }
    
    // editar
    static function editar() {
        $id = $_REQUEST['id'];
        $producto = new Modelo();
        $data = $producto->mostrar("products", "id=".$id);
        require_once("vistas/editar.php");
    }
    
    // actualizar
    static function actualizar() {
        $id = $_REQUEST['id'];
        $nombre = $_REQUEST['nombre'];
        $precio = $_REQUEST['precio'];
        $data = "nombre='".$nombre."', precio=".$precio;
        $producto = new Modelo();
        $data = $producto->actualizar("products", $data, "id=".$id);
        header("location:".urlsite);
    }
    
    // eliminar
    static function eliminar() {
        $id = $_REQUEST['id'];
        $producto = new Modelo();
        $data = $producto->eliminar("products", "id=".$id);
        header("location:".urlsite);
    }
}
//
