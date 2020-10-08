<?php
session_start();

function getIngreso($correo, $clave){
    if ($correo == "admin@gmail.com" and $clave == "admin") {
        $_SESSION["correo"] = $correo;
        header("Location: ../index.php");
    } else {
        header("Location: ../ingreso.php");
    }
}

