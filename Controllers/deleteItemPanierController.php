<?php
array_splice($_SESSION['panier']['idProduct'], $_GET['id']);
array_splice($_SESSION['panier']['nameProduct'], $_GET['id']);
array_splice($_SESSION['panier']['brandProduct'], $_GET['id']);
array_splice($_SESSION['panier']['qteProduct'], $_GET['id']);
array_splice($_SESSION['panier']['priceProduct'], $_GET['id']);
array_splice($_SESSION['panier']['imgProduct'], $_GET['id']);


header('location:index.php?p=panier');
require_once('Views/deleteItemPanier.php');