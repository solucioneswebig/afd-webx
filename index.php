<?php




//modelos
require_once "modelos/ruta.php";
require_once "modelos/usuarios.model.php";
require_once "modelos/funciones-bd.php";

//controllers
require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";

//plugin
require_once "librerias/mailer/class.phpmailer.php";
require_once "librerias/mailer/class.smtp.php";

$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();