<?php
session_start();

function getIngreso($correo, $clave, $conn)
{
    $sql = mysqli_query($conn, "SELECT * FROM tienda.users WHERE username='$correo' and password='$clave'");
    if (mysqli_num_rows($sql) > 0) {
        if ($row = mysqli_fetch_assoc($sql)) {
            $_SESSION["correo"] = $row['username'];
            header("Location: ../index.php");
        }
    } else {
        header("Location: ../ingreso.php");
    }
}


function getRegistro($nombres, $apellidos, $correo, $clave, $conn)
{
    $sql = mysqli_query($conn, "INSERT INTO tienda.users (username, password) VALUES ('$correo', '$clave')");
    if ($sql) {
        header("Location: ../ingreso.php");
    } else {
        header("Location: ../registro.php");
    }
}
