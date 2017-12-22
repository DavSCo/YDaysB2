<?php

/*unset($_SESSION['panier'][$_GET['id']]);

unset($_SESSION['panier']['idProduct'][$_GET['id']]);
unset($_SESSION['panier']['nameProduct'][$_GET['id']]);
unset($_SESSION['panier']['brandProduct'][$_GET['id']]);
unset($_SESSION['panier']['qteProduct'][$_GET['id']]);
unset($_SESSION['panier']['priceProduct'][$_GET['id']]);
unset($_SESSION['panier']['verrou'][$_GET['id']]);*/



    array_splice($_SESSION['panier']['idProduct'],$_GET['id']);
    array_splice($_SESSION['panier']['nameProduct'],$_GET['id']);
    array_splice($_SESSION['panier']['brandProduct'],$_GET['id']);
    array_splice($_SESSION['panier']['qteProduct'],$_GET['id']);
    array_splice($_SESSION['panier']['priceProduct'],$_GET['id']);
    array_splice($_SESSION['panier']['imgProduct'],$_GET['id']);





header('location:index.php?p=panier');

echo '<pre>';
var_dump($_SESSION['panier']);
echo '</pre>';



require_once ('Views/deleteItemPanier.php');