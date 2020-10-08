<?php
//print_r($_POST);

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];

echo "$nombres $apellidos $correo $clave";