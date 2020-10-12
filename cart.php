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
    <link rel="stylesheet" href="css/nosotros.css">

    <title></title>
</head>

<body>

    <?php
    include("templates/header.php");
    ?>

    <section class="banner">
        <img src="Fotos/Banner/Nosotros.jpg" alt="" class="banner__img">
        <div class="banner__content">Carro de Compras</div>
    </section>

    <main class="main">
        <section class="group group--color">
            <div class="container">
                <h2 class="main__title">Mi carro de compras</h2>
                <p class="main__txt"></p>
            </div>
        </section>
        <section class="group our-team">
            <?php if (isset($_SESSION['cart'])) { ?>
                <h2 class="group__title">Mis Productos</h2>
                <div class="container container--flex">
                    <div class="column column">
                        <table width="100%" cellpadding="5" border="1">
                            <tr style="color: white; background-color: black;">
                                <th>#</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>

                            <?php foreach ($_SESSION['cart'] as $id => $value) { ?>
                                <tr>
                                    <td><?=$id?></td>
                                    <td>Product Name</td>
                                    <td><?=$value['quantity']?></td>
                                    <td>$0.00</td>
                                    <td>$0.00</td>
                                </tr>
                            <?php } ?>

                        </table>
                    </div>
                </div>
            <?php } else { ?>
                <h2 class="group__title">Carrito de compras vacio!</h2>
            <?php } ?>

        </section>
    </main>

    <?php
    include("templates/footer.php");
    ?>
    <script src="JS/menu.js"></script>

</body>

</html>