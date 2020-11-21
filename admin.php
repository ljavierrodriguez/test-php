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
        <div class="banner__content">Administrar Productos</div>
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
                    <a href="./crear.php">Crear Producto</a>
                    <table border="0" width="75%" align="center">
                            <tr bgcolor="#cccccc">
                                <th>#</th>
                                <th>Foto</th>
                                <th>Producto</th>
                                <th>Precio</th>
                                <th>Acciones</th>
                            </tr>

                            <?php while ($row = mysqli_fetch_assoc($sql)) { ?>

                            <tr>
                                <td><?=$row['id']?></td>
                                <td width="100"><img src="Fotos/<?= $row['filename']?>" width="100%"  alt="producto" /></td>
                                <td><?=$row['product_name']?></td>
                                <td><?=$row['price']?></td>
                                <td width="30" align="center">
                                <a href="edit.php?product_id=<?= $row['id'] ?>&action=edit">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="delete.php?product_id=<?= $row['id'] ?>&action=delete">
                                    <i class="fa fa-trash"></i>
                                </a>
                                </td>
                            </tr>
                            
                            <?php } ?>


                        </table>

                    

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