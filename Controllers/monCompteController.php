<?php

require_once('Models/UserSQL.php');
if (!isset($_SESSION['connected']) || $_SESSION['connected'] === false) header('Location: index.php');


$users = new UserSQL();
$usersId = $users->recupUser($_SESSION['id']);
require_once('Views/monCompte.php');