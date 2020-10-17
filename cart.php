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
                                <th width="5%">Action</th>
                            </tr>
                            <?php $total_cart = 0; ?>
                            <?php foreach ($_SESSION['cart'] as $id => $value) { ?>
                                <?php
                                $sql = mysqli_query($conn, "SELECT * FROM tienda.products WHERE id=$id");
                                if ($row = mysqli_fetch_assoc($sql)) {
                                    $total_cart += $value['quantity'] * $row['price'];
                                ?>
                                    <tr>
                                        <td><?= $id ?></td>
                                        <td><?= $row['product_name'] ?></td>
                                        <td><?= $value['quantity'] ?></td>
                                        <td>$<?= $row['price'] ?></td>
                                        <td>$<?= $value['quantity'] * $row['price'] ?></td>
                                        <td>
                                            <a href="./actions/getCart.php?product_id=<?= $row['id'] ?>&action=del">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                            <tr>
                                <td colspan="4" style="color: white; background-color: black; text-align: right;">
                                    <b>Total:</b>
                                </td>
                                <td style="color: white; background-color: blue; text-align: center;">
                                    $<?= $total_cart ?>
                                </td>
                            </tr>
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
    <?= mysqli_close($conn) ?>
</body>

</html>