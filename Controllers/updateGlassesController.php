<?php
require_once('Models/AdminSQL.php');
if (!isset($_SESSION['connected']) || $_SESSION['connected'] === false) header('Location: index.php?p=connectionAdmin');


$update = new AdminSQL();
$updateGlasses = $update->selectGlassesWithId($_GET['id']);


if (!empty($_POST['name']) && !empty($_POST['marque']) && !empty($_POST['price']) && !empty($_POST['size']) && !empty($_POST['type']) && !empty($_POST['ref']) && !empty($_POST['sexe'])) {
    $update->updateGlasses($_POST['name'], $_POST['marque'], $_POST['price'], $_POST['size'], $_POST['type'], $_POST['ref'], $_POST['sexe'], $_GET['id']);
    $succes = "<p class='erreur'>Modification terminée</p>";

}

require_once("Views/updateGlasses.php");