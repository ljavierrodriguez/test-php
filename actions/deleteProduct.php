<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require("../conexion.php");
require("../libs/functions.php");

$id = $_GET['id'];

getDeleteProducto($id, $conn);
