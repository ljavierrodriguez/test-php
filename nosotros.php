<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
        <div class="banner__content">Los Mejor de Nosotros a tu Servicio</div>
    </section>

    <main class="main">
        <section class="group group--color">
            <div class="container">
                <h2 class="main__title">Sobre Nosotros</h2>
                <p class="main__txt">Dani & Domi , es una empresa familiar, que ingresa al Mercado en Septiembre del 2018. Ofrecemos una gran variedad de los mejores productos congelados y refrigerados a precios bajos.Estamos comprometidos con nuestros clientes, que siempre encontraran productos de calidad, a precios bajos y una rápida y cordial atención.</p>
            </div>
        </section>
        <section class="group our-team">
            <h2 class="group__title">Nuestro Equipo</h2>
            <div class="container container--flex">
                <div class="column column--33">
                    <h3 class="our-team__title">Cindy Durán</h3>
                    <img src="Fotos/Nosotros/Cindy.jpg" alt="" class="our-team__img">
                    <p class="our-team__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi optio cumque quam voluptatem, incidunt molestias, possimus ut repudiandae reprehenderit nam autem culpa praesentium. Optio distinctio consequatur atque dolore quod, iste!</p>
                </div>
                <div class="column column--33">
                    <h3 class="our-team__title">Nicole Meller</h3>
                    <img src="Fotos/Nosotros/Nicole.jpg" alt="" class="our-team__img">
                    <p class="our-team__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, autem alias placeat blanditiis ipsam quas ipsum similique! Inventore minima, molestiae earum quaerat necessitatibus ea, odio, ducimus magni dolorem tempora accusamus.</p>
                </div>
                <div class="column column--33">
                    <h3 class="our-team__title">Kevin Pardo</h3>
                    <img src="Fotos/Nosotros/Kevin.jpg" alt="" class="our-team__img">
                    <p class="our-team__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla laudantium error omnis amet dignissimos corporis aliquam accusamus suscipit quae, quam illo, recusandae, dolorem odio praesentium rem laboriosam dicta earum delectus!</p>
                </div>
            </div>

        </section>







    </main>

    <?php
    include("templates/footer.php");
    ?>
    <script src="JS/menu.js"></script>

</body>

</html>