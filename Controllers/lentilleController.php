<?php
require_once ('Models/GlassesSQL.php');

$selectLentille = new GlassesSQL();

$lentilleGlasses = $selectLentille->selectLentille();


require_once ('Views/lentille.php');