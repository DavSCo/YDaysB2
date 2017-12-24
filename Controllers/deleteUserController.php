<?php
require_once('Models/UserSQL.php');
if (!isset($_SESSION['connected']) || $_SESSION['connected'] === false)
    header('Location: index.php?p=connection');

$delete = new UserSQL();

if (!empty($_GET['id'])) {
    $delete->supprimerCompte($_GET['id']);
    header('Location: index.php?p=register ');


}
require_once('Views/deleteUsers.php');

