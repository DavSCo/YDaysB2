<?php

require_once ('Models/UserSQL.php');

$update = new UserSQL();
$updateUsers=$update->recupUser($_SESSION['id']);



require_once ('Views/rentPage.php');