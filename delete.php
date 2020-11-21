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
        <div class="banner__content">Delete Producto</div>
    </section>

    <main class="main">
        <div class="group gallery">
            <h2 class="group__title">Nuestros Productos</h2>
            <div class="container container--flex">
            <?php
                $sql = mysqli_query($conn, "SELECT * FROM tienda.products WHERE id=".$_GET['product_id']);
                if($row = mysqli_fetch_assoc($sql)) {
            ?>
                <form action="./actions/deleteProduct.php?id=<?=$_GET['product_id']?>" enctype="multipart/form-data" method="post" class="product-form">
                <table width="800" align="center" border="2">
                    <tr>
                        <td width="20%">
                            <label for="product_name">Nombre Producto</label> 
                        </td>
                        <td>
                            <input type="text" readonly id="product_name" name="product_name" placeholder="Ingrese Nombre Producto" style="width: 100%;" required
                            
                            value="<?=$row['product_name']?>"> <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="filename">Foto</label>
                        </td>
                        <td>
                            <input type="hidden" name="foto" value="<?=$row['filename']?>">
                            <img src="Fotos/<?=$row['filename']?>" alt="foto" width="130" height="130" class="foto">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><button>Para eliminar has click al boton</button></td>
                    </tr>
                </table>
                    
                    
                    
                    
                </form>
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