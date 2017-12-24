<?php
require_once('Models/GlassesSQL.php');


if (!isset($_SESSION['connected']) || $_SESSION['connected'] === false) {
    echo "<div class=\"row\"><div class=\"col-md-7\"><p>Vous devez etre connecter pour acheter des lunettes.</p></div></div>";
} elseif (empty($_SESSION['panier']['idProduct'])) {
    echo "<p>Oups ! Votre Panier est vide.</p>";
}


require_once('Views/panier.php');