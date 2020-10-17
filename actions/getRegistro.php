<?php
require("../conexion.php");
require("../libs/functions.php");

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];

//echo "$correo $clave";

getRegistro($nombres, $apellidos, $correo, $clave, $conn);
