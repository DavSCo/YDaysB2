<?php
require_once ('Models/CommandeSQL.php');
$afficher = new CommandeSQL();
$afficherCommandeUser  = $afficher->afficherCommande($_SESSION['id']);

if (!empty($_SESSION))
{
    $afficher->afficherComande($_SESSION['id']);
    $succes = "<p class='erreur'>Local Actif</p>";

}
require_once ('Views/commandeUser.php');