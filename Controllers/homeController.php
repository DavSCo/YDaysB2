<?php
require_once('Models/GlassesSQL.php');

$selectGlasses = new GlassesSQL();

$selectXGlasses = $selectGlasses->selectXGlasse();


require_once('Views/home.php');