<?php
require_once ('Models/GlassesSQL.php');
if (!isset($_SESSION['connected']) || $_SESSION['connected'] === false) header('Location: index.php?p=connectionAdmin');
$select = new GlassesSQL();

$selectWithId = $select->selectGlassesWithId($_GET['id']);


require_once ('Views/paymentPage.php');