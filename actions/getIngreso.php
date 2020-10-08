<?php
require("../libs/functions.php");

$correo = $_POST['correo'];
$clave = $_POST['clave'];

//echo "$correo $clave";

getIngreso($correo, $clave);


