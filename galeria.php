<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
                <div class="column column--50-25">
                    <img src="Galeria/merluza.jpg" alt="" class="gallery__img gallery__img--big">
                    <img src="Galeria/reineta.jpg" alt="" class="gallery__img gallery__img--small">
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
            </div>
        </div>
    </main>

    <?php
    include("templates/footer.php");
    ?>
    <script src="JS/menu.js"></script>
    <script src="JS/modal.js"></script>

</body>

</html>