<?php 
define("DB_SERVER", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "derek.15");
define("DB_NAME", "tienda");
define("DB_PORT", "3306");

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);


if($conn === false){
    die("Error: No se puede conectar " . mysqli_connect_error());
}

?>