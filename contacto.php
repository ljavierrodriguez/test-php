<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/contacto.css">

    <title>Productos</title>
</head>

<body>

    <?php
    include("templates/header.php");
    ?>

    <section class="banner">
        <img src="Fotos/Banner/contacto.jpg" alt="" class="banner__img">
        <div class="banner__content">Envíanos un Mensaje</div>
    </section>

    <main class="main">
        <section class="group contact">
            <h2 class="group__title">Contáctenos</h2>
            <div class="container container--flex">
                <div class="contact-information column column--50">
                    <h3 class="column__title">Información de Contacto</h3>
                    <p class="column__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias ratione rem, in eos similique unde exercitationem nostrum dignissimos, provident consectetur deserunt iste non facere iure voluptate dicta officia sapiente fugiat.</p>
                    <p class="column__txt"><span class="icon-telefono"></span>Teléfono:</p>
                    <p class="column__txt"><span class="icon-telefono"></span>Teléfono:</p>
                    <p class="column__txt"><span class="icon-envelope-o"></span>Correo:</p>
                    <p class="column__txt"><span class="icon-mapa"></span>Ubicación:</p>
                    <div class="social-icon">
                        <a href="" class="social-icon__link"><span class="icon-facebook"></span></a>
                        <a href="" class="social-icon__link"><span class="icon-instagram"></span></a>
                    </div>
                </div>
                <form action="" method="post" class="formulario column column--50">
                    <label for="" class="formulario__label">Nombre:</label>
                    <input type="text" class="formulario__input--txt" name="nombre">
                    <label for="" class="formulario__label">Apellidos:</label>
                    <input type="text" class="formulario__input--txt" name="apellidos">
                    <label for="" class="formulario__label">Correo:</label>
                    <input type="text" class="formulario__input--txt" name="correo">
                    <label for="" class="formulario__label">Mensaje:</label>
                    <textarea name="mensaje" id="" cols="30" rows="10" class="formulario__textarea"></textarea>
                    <input type="submit" class="btn formulario__btn" value="Enviar">

                </form>
            </div>
        </section>


    </main>

    <?php
    include("templates/footer.php");
    ?>
    <script src="JS/menu.js"></script>
    <script src="JS/modal.js"></script>

</body>

</html>