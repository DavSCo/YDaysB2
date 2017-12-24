<?php
require_once('Models/GlassesSQL.php');
if (!isset($_SESSION['connected']) || $_SESSION['connected'] === false) header('Location: index.php?p=connectionAdmin');

$select = new GlassesSQL();
$countId = $select->countGlasses();


require_once('Views/AdminView.php');