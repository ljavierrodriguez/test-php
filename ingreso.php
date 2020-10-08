<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/ingreso.css">
</head>

<body>
    <form action="./actions/getIngreso.php" method="POST" class="form-register">
        <h2 class="form__titulo">Iniciar Sesión</h2>
        <div class="contenedor-inputs">
            <input type="email" name="correo" placeholder="&#128231;Email" class="input-100" required>
            <input type="password" name="clave" placeholder="&#128272;Contraseña" class="input-48" required>
            <input type="submit" value="Iniciar Sesión" class="btn-enviar">
            <p class="form__link">¿Deseas Registrarte? <a href="registro.php">Ingresa aquí</a></p>
        </div>
    </form>
</body>

</html>