<?php
session_start();
require("../conexion.php");
require("../libs/functions.php");

if(isset($_GET['product_id']) and $_GET['action'] == "add"){
    $product_id = $_GET['product_id'];
    $user_id = $_SESSION['user_id'];

    if(isset($_SESSION["cart"][$product_id])){
        $_SESSION["cart"][$product_id]['quantity']++;
        updateCart($product_id, $user_id, $conn);
    }else{
        $_SESSION["cart"][$product_id]['quantity'] = 1;
        addCart($product_id, $user_id, $conn);
    }

    /* header("Location: ../cart.php"); */
}

if(isset($_GET['product_id']) and $_GET['action'] == "del"){
    $product_id = $_GET['product_id'];

    if(isset($_SESSION["cart"][$product_id])){
        unset($_SESSION["cart"][$product_id]);
        deleteCart($product_id, $user_id, $conn);
    }

    if(isset($_SESSION["cart"]) and count($_SESSION['cart']) == 0){
        unset($_SESSION["cart"]);
        deleteAllCart($user_id, $conn);
    }

    /* header("Location: ../cart.php"); */
}