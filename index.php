<?php
require_once("config.php");
require_once("controlador/index.php");

// ❌ Simulación de error: función inexistente
simulacionDeErrorFatal();

if(isset($_GET['m'])):
    if(method_exists("modeloController", $_GET['m'])):
        modeloController::{$_GET['m']}();
    endif;
else:
    modeloController::index();
endif;
?>