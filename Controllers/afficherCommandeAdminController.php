<?php
require_once ('Models/AdminSQL.php');

$selectCommande = new AdminSQL();

$selectAllGlasses = $selectCommande->afficherCommande();


require_once ('Views/commandeAdmin.php');