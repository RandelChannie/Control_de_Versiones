<?php
require_once "config.php";

class Producto {
    private $pdo;

    public function __construct() {
        $this->pdo = Conexion::conectar();
    }

    public function listar() {
        $stmt = $this->pdo->query("SELECT * FROM productos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertar($nombre, $precio) {
        $stmt = $this->pdo->prepare("INSERT INTO productos (nombre, precio) VALUES (?, ?)");
        return $stmt->execute([$nombre, $precio]);
    }

    public function obtener($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM productos WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizar($id, $nombre, $precio) {
        $stmt = $this->pdo->prepare("UPDATE productos SET nombre = ?, precio = ? WHERE id = ?");
        return $stmt->execute([$nombre, $precio, $id]);
    }

    public function eliminar($id) {
        $stmt = $this->pdo->prepare("DELETE FROM productos WHERE id = ?");
        return $stmt->execute([$id]);
    }
}//Modificando
?>