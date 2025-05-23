<?php
require_once "modelo/Producto.php";

$producto = new Producto();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["agregar"])) {
        $producto->insertar($_POST["nombre"], $_POST["precio"]);
        header("Location: index.php");
    } elseif (isset($_POST["editar"])) {
        $producto->actualizar($_POST["id"], $_POST["nombre"], $_POST["precio"]);
        header("Location: index.php");
    }
}

if (isset($_GET["eliminar"])) {
    $producto->eliminar($_GET["eliminar"]);
    header("Location: index.php");
}//prueba
?>