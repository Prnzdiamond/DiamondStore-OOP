<?php
session_start();
include("../includes/al_cl.inc.php");

$url = $_SERVER['HTTP_REFERER'];
$prod_id ="";
$qty ="";

if($_SERVER['REQUEST_METHOD']== "GET"){
    $prod_id = $_GET['prod_id'];
    $qty = $_GET['qty'] ?? 1; 
}
if($_SERVER['REQUEST_METHOD'] == "POST"){
      $prod_id = $_POST['prod_id'];
    $qty = $_POST['qty'] ?? 1; 
}
$cartItems = new cartCtrl();
$cartItems->prepItemfrCart($prod_id, $qty);
echo $prod_id . $qty;


if(isset($_SESSION['cart-items'])){
    print_r($_SESSION['cart-items']);
}
header('location:'.$url);