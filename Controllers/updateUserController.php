<?php
require_once ('Models/UserSQL.php');
if (!isset($_SESSION['connected']) || $_SESSION['connected'] === false) header('Location: index.php');


$update = new UserSQL();
$updateUsers=$update->recupUser($_SESSION['id']);



if (!empty($_POST['name']) && !empty($_POST['last_name']) && !empty($_POST['mail']) &&!empty($_POST['phone'])&& !empty($_POST['password']))
{
    $update->updateCompte($_POST['name'], $_POST['last_name'], $_POST['mail'],$_POST['phone'], $_POST['password'], $_SESSION['id']);
    $succes = "<p class='erreur'>Modification terminée</p>";

}

require_once ("Views/adminUser.php");