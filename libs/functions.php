<?php
session_start();

function getIngreso($correo, $clave, $conn)
{
    $sql = mysqli_query($conn, "SELECT * FROM tienda.users WHERE username='$correo' and password='$clave'");
    if (mysqli_num_rows($sql) > 0) {
        if ($row = mysqli_fetch_assoc($sql)) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION["correo"] = $row['username'];
            $_SESSION["isAdmin"] = ($row['username'] === 'admin@gmail.com' ? true : false);
            header("Location: ../index.php");
        }
    } else {
        header("Location: ../ingreso.php");
    }
}


function getRegistro($nombres, $apellidos, $correo, $clave, $conn)
{
    $sql = mysqli_query($conn, "INSERT INTO tienda.users (nombre, apellidos, username, password) VALUES ('$nombres', '$apellidos', '$correo', '$clave')");
    if ($sql) {
        header("Location: ../ingreso.php");
    } else {
        header("Location: ../registro.php");
    }
}

function getRegistroProducto($product_name, $price, $description, $filename, $conn)
{
    if($filename !== "sin-foto.png"){
        $dir_subida = './../Fotos/';
        $fichero_subido = $dir_subida . basename($filename['name']);
        $nombre_archivo = $filename['name'];

        if (move_uploaded_file($filename['tmp_name'], $fichero_subido)) {
            $msg = "El fichero es válido y se subió con éxito.\n";
        } else {
            $msg = "¡Posible ataque de subida de ficheros!\n";
        }
    }

    $sql = mysqli_query($conn, "INSERT INTO tienda.products (product_name, price, description, filename) VALUES ('$product_name', '$price', '$description', '$nombre_archivo')");
    if ($sql) {
        header("Location: ../admin.php");
    } else {
        header("Location: ../crear.php");
    }
}

function getActualizarProducto($product_name, $price, $description, $filename, $original, $id, $conn)
{
    $nombre_archivo = null;
    if($filename !== null){
        $dir_subida = './../Fotos/';
        $fichero_subido = $dir_subida . basename($filename['name']);
        $nombre_archivo = $filename['name'];

        if (move_uploaded_file($filename['tmp_name'], $fichero_subido)) {
            $msg = "El fichero es válido y se subió con éxito.\n";
        } else {
            $msg = "¡Posible ataque de subida de ficheros!\n";
        }
    }else{
        $nombre_archivo = $original;
    }

    $sql = mysqli_query($conn, "UPDATE tienda.products SET product_name='$product_name', price='$price', description='$description', filename='$nombre_archivo' WHERE id=$id");
    if ($sql) {
        header("Location: ../admin.php");
    } else {
        header("Location: ../crear.php");
    }
}

function getDeleteProducto($id, $conn)
{
    $sql = mysqli_query($conn, "DELETE FROM tienda.products WHERE id=$id");
    if ($sql) {
        header("Location: ../admin.php");
    } else {
        header("Location: ../delete.php");
    }
}

function addCart($id, $user_id, $conn){
    $sql = mysqli_query($conn, "INSERT INTO tienda.cart (product_id, user_id, quantity) VALUES ($id, $user_id, 1);");
    if ($sql) {
        header("Location: ../cart.php");
    } else {
        header("Location: ../cart.php");
    }
}

function updateCart($id, $user_id, $conn){
    $sql = mysqli_query($conn, "UPDATE tienda.cart SET quantity = quantity + 1 WHERE product_id=$id and user_id=$user_id;");
    if ($sql) {
        header("Location: ../cart.php");
    } else {
        header("Location: ../cart.php");
    }
}

function deleteCart($id, $user_id, $conn){
    $sql = mysqli_query($conn, "DELETE FROM tienda.cart WHERE product_id=$id and user_id=$user_id;");
    if ($sql) {
        header("Location: ../cart.php");
    } else {
        header("Location: ../cart.php");
    }
}

function deleteAllCart($user_id, $conn){
    $sql = mysqli_query($conn, "DELETE FROM tienda.cart WHERE user_id=$user_id;");
    if ($sql) {
        header("Location: ../cart.php");
    } else {
        header("Location: ../cart.php");
    }
}


