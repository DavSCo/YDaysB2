<?php
require_once ('Models/GlassesSQL.php');

$select = new GlassesSQL();

$selectWithId = $select->selectGlassesWithId($_GET['id']);

require_once ('Views/productDetail.php');