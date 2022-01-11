<?php 

//Definición de las rutas y variables

require_once "config/config.php";

//helpers

// require_once "helpers/helper.php";

//modelos

require_once "modelos/enlaces.php";


//controladores

require_once "controladores/enlaces.php";
require_once "controladores/plantilla.php";

$plantilla = new PlantillaControlador();
$plantilla->plantilla();

// echo RUTA_DOMAIN;

// //https://qastack.mx/programming/36577020/php-failed-to-open-stream-no-such-file-or-directory
// 