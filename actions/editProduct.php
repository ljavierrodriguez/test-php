<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require("../conexion.php");
require("../libs/functions.php");

$product_name = $_POST['product_name'];
$price = $_POST['price'];
$description = $_POST['description'];
$filename = null;
if($_FILES['filename']['name'] !== ""){
    echo 1;
    $filename = $_FILES['filename'];
}
$original = $_POST['foto'];
$id = $_GET['id'];

getActualizarProducto($product_name, $price, $description, $filename, $original, $id, $conn);
