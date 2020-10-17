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

                    <?php while ($row = mysqli_fetch_assoc($sql)) { ?>
                        <div class="column column--50-25" style="padding-left: 1px; padding-right: 1px; margin-bottom: 5px;">
                            <img src="Fotos/Pescados/Camarones.jpg" alt="" class="today-special__img">
                            <div class="today-special__title"><?= $row['product_name'] ?></div>
                            <div class="today-special__price">$<?= $row['price'] ?></div>
                            <a href="./actions/getCart.php?product_id=<?= $row['id'] ?>&action=add">
                                <i class="fa fa-shopping-cart"></i> Add to Cart
                            </a>
                        </div>
                    <?php } ?>

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