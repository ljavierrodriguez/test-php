<?php
session_start();

if(isset($_GET['product_id']) and $_GET['action'] == "add"){
    $product_id = $_GET['product_id'];

    if(isset($_SESSION["cart"][$product_id])){
        $_SESSION["cart"][$product_id]['quantity']++;
    }else{
        $_SESSION["cart"][$product_id]['quantity'] = 1;
    }

    header("Location: ../cart.php");
}

if(isset($_GET['product_id']) and $_GET['action'] == "del"){
    $product_id = $_GET['product_id'];

    if(isset($_SESSION["cart"][$product_id])){
        unset($_SESSION["cart"][$product_id]);
    }

    if(isset($_SESSION["cart"]) and count($_SESSION['cart']) == 0){
        unset($_SESSION["cart"]);
    }

    header("Location: ../cart.php");
}