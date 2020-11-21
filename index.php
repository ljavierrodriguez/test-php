<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./css/font.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <title></title>
</head>

<body>

    <?php
    include("templates/header.php");
    ?>

    <section class="banner">
        <img src="Fotos/Banner/banner.jpg" alt="" class="banner__img">
        <div class="banner__content">Los Mejores Productos Congelados</div>
    </section>

    <main class="main">
        <section class="group group--color">
            <div class="container">
                <h2 class="main__title">Bienvenidos a Nuestra Web</h2>
                <p class="main__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus fuga voluptas nulla, repudiandae consectetur quo veniam magni dolorem distinctio deserunt voluptatum aut dicta debitis, sed incidunt nihil et nisi consequatur.</p>
            </div>
        </section>

        <section class="group main__about__description">
            <div class="container container--flex">
                <div class="column column--50">
                    <img src="Fotos/Pescados/seafood-165220_1280.jpg" alt="">
                </div>
                <div class="column column--50">
                    <h3 class="column__title">Efkljh</h3>
                    <p class="column__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non pariatur commodi, odit atque praesentium placeat fugiat itaque nobis velit qui nisi minus a autem est, harum similique reprehenderit id maiores.</p>
                    <a href="" class="btn btn--contact">Contact</a>
                </div>
            </div>
        </section>

        <section class="group today-special">
            <h2 class="group__title">Especiales de Hoy</h2>
            <div class="container container--flex">
                <div class="column column--50-25">
                    <img src="Fotos/Pescados/Camarones.jpg" alt="" class="today-special__img">
                    <div class="today-special__title">Especial de hoy</div>
                    <div class="today-special__price">$10.000</div>
                </div>
                <div class="column column--50-25">
                    <img src="Fotos/Pescados/salm%C3%B3n.jpg" alt="" class="today-special__img">
                    <div class="today-special__title">Especial de hoy</div>
                    <div class="today-special__price">$10.000</div>
                </div>
                <div class="column column--50-25">
                    <img src="Fotos/PolloCarne/carne.jpg" alt="" class="today-special__img">
                    <div class="today-special__title">Especial de hoy</div>
                    <div class="today-special__price">$10.000</div>
                </div>
                <div class="column column--50-25">
                    <img src="Fotos/PolloCarne/pollo.jpg" alt="" class="today-special__img">
                    <div class="today-special__title">Especial de hoy</div>
                    <div class="today-special__price">$10.000</div>
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