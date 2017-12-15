<?php
require_once ('Models/GlassesSQL.php');





$select = new GlassesSQL();
$selectPanier = $select->selectGlassesWithId($_GET['id']);



require_once ('Views/panier.php');