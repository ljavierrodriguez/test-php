<?php
session_start();

function getIngreso($correo, $clave, $conn)
{
    $sql = mysqli_query($conn, "SELECT * FROM tienda.users WHERE username='$correo' and password='$clave'");
    if (mysqli_num_rows($sql) == 0) {
        if ($row = mysqli_fetch_assoc($sql)) {
            $_SESSION["correo"] = $row['username'];
            header("Location: ../index.php");
        }
    } else {
        header("Location: ../ingreso.php");
    }
}


function getRegistro($nombres, $apellidos, $correo, $clave)
{
    if ($correo == "admin@gmail.com" and $clave == "admin") {
        $_SESSION["correo"] = $correo;
        header("Location: ../index.php");
    } else {
        header("Location: ../ingreso.php");
    }
}
