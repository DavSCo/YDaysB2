<?php
require_once('Models/GlassesSQL.php');

$select = new GlassesSQL();
$img = $select->selectImage($_GET['idProduct']);

if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = array();
    $_SESSION['panier']['idProduct'] = array();
    $_SESSION['panier']['nameProduct'] = array();
    $_SESSION['panier']['brandProduct'] = array();
    $_SESSION['panier']['qteProduct'] = array();
    $_SESSION['panier']['priceProduct'] = array();
    $_SESSION['panier']['imgProduct'] = array();
    $_SESSION['panier']['verrou'] = false;
}


if (!empty($_SESSION['panier'])) {
    $positionProduit = array_search($_GET['nameProduct'], $_SESSION['panier']['nameProduct']);

    if ($positionProduit !== false) {
        $_SESSION['panier']['qteProduit'][$positionProduit] += $_GET['qteProduct'];
    } else {
        array_push($_SESSION['panier']['idProduct'], $_GET['idProduct']);
        array_push($_SESSION['panier']['nameProduct'], $_GET['nameProduct']);
        array_push($_SESSION['panier']['brandProduct'], $_GET['brandProduct']);
        array_push($_SESSION['panier']['qteProduct'], $_GET['qteProduct']);
        array_push($_SESSION['panier']['priceProduct'], $_GET['priceProduct']);
        array_push($_SESSION['panier']['imgProduct'], $img);
    }
    header('Location: index.php?p=panier');
} else {
    echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}
require_once('Views/addPanier.php');