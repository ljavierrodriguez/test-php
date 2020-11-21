<?php
$cart = 0;
if(isset($_SESSION['cart'])){
    foreach ($_SESSION['cart'] as $id => $value) {
        $cart += $value['quantity'];
    }
}
?>
<header class="main-header">
    <div class="container container--flex">
        <div class="logo-container column column--50">
            <img src="Fotos/logo/pescadopescado.png" alt="" class="logo">
        </div>
        <div class="main-header__contactInfo column column--50">
            <p class="main-header__contactInfo__phone">
                <span class="icon-telefono">+569 33433020</span>
            </p>
            <p class="main-header__contactInfo__address">
                <span class="icon-mapa">Calle Bagdad #1106</span>
            </p>
        </div>
    </div>
</header>

<nav class="main-nav">
    <div class="container container--flex">
        <span class="icon-menu" id="btnmenu"></span>
        <ul class="menu" id="menu">
            <li class="menu__item"><a href="index.php" class="menu__link menu__link--select">Inicio</a></li>
            <li class="menu__item"><a href="nosotros.php" class="menu__link">Nosotros</a></li>
            <li class="menu__item"><a href="galeria.php" class="menu__link">Nuestros Productos</a></li>
            <li class="menu__item"><a href="contacto.php" class="menu__link">Contacto</a></li>
            <li class="menu__item">
                <a href="cart.php" class="menu__link">
                    <i class="fa fa-shopping-cart"></i> (<?= $cart ?>)
                </a>
            </li>

            <?php if (@$_SESSION['correo'] == "") { ?>
                <li class="menu__item"><a href="ingreso.php" class="menu__link">Ingreso</a></li>
                <li class="menu__item"><a href="registro.php" class="menu__link">Registro</a></li>
            <?php } else { ?>
                <li class="menu__item"><a class="menu__link" href="admin.php">Administracion</a></li>
                <li class="menu__item"><a class="menu__link"><?= @$_SESSION['correo'] ?></a></li>
                <li class="menu__item"><a href="salir.php" class="menu__link">Salir</a></li>
            <?php } ?>
        </ul>
        <div class="social-icon">
            <a href="" class="social-icon__link"><span class="icon-facebook"></span></a>
            <a href="" class="social-icon__link"><span class="icon-instagram"></span></a>
        </div>
    </div>
</nav>