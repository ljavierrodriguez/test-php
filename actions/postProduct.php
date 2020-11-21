<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require("../conexion.php");
require("../libs/functions.php");

$product_name = $_POST['product_name'];
$price = $_POST['price'];
$description = $_POST['description'];
$filename = "sin-foto.png";
if($_FILES['filename']['name'] !== ""){
    $filename = $_FILES['filename'];
}



//echo "$correo $clave";

getRegistroProducto($product_name, $price, $description, $filename, $conn);
