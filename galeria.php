<?php
session_start();
require("./conexion.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/galeria.css">

    <title>Productos</title>
</head>
<div class="modal" id="modal">
    <div class="modal__content">
        <img src="" alt="" class="modal__img" id="modal__img">
    </div>
    <div class="modal__boton" id="modal__boton">X</div>
</div>

<body>

    <?php
    include("templates/header.php");
    ?>

    <section class="banner">
        <img src="Fotos/Galeria/banner.jpg" alt="" class="banner__img">
        <div class="banner__content">Nuestros Mejores Productos</div>
    </section>

    <main class="main">
        <div class="group gallery">
            <h2 class="group__title">Nuestros Productos</h2>
            <div class="container container--flex">
                <?php
                $sql = mysqli_query($conn, "SELECT * FROM tienda.products");
                if (mysqli_num_rows($sql) == 0) {
                ?>
                    <div class="column column--50-25">
                        <h1>No hay productos</h1>
                    </div>
                <?php } else { ?>
                    <div class="column column--50-25">
                        <a href="./actions/getCart.php?product_id=1&action=add">
                            <img src="Galeria/merluza.jpg" alt="" class="gallery__img gallery__img--big">
                        </a>
                        <a href="./actions/getCart.php?product_id=2&action=add">
                            <img src="Galeria/reineta.jpg" alt="" class="gallery__img gallery__img--small">
                        </a>
                    </div>
                    <div class="column column--50-25">
                        <img src="Galeria/carne.jpg" alt="" class="gallery__img gallery__img--small">
                        <img src="Galeria/lomoliso.jpg" alt="" class="gallery__img gallery__img--big">
                    </div>
                    <div class="column column--50-25">
                        <img src="Galeria/pollo.jpg" alt="" class="gallery__img gallery__img--big">
                        <img src="Galeria/trutro.jpg" alt="" class="gallery__img gallery__img--small">
                    </div>
                    <div class="column column--50-25">
                        <img src="Galeria/verduras.jpg" alt="" class="gallery__img gallery__img--small">
                        <img src="Galeria/Camarones.jpg" alt="" class="gallery__img gallery__img--big">
                    </div>
                <?php } ?>

            </div>
        </div>
    </main>

    <?php
    include("templates/footer.php");
    ?>
    <script src="JS/menu.js"></script>
    <script src="JS/modal.js"></script>


    <?= mysqli_close($conn) ?>
</body>

</html>