<?php
require_once('Models/GlassesSQL.php');

$selectSolaire = new GlassesSQL();

$solaireGlasses = $selectSolaire->selectSolaire();


require_once('Views/solaire.php');