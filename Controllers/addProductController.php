<?php
require_once ('Models/GlassesSQL.php');

$add = new GlassesSQL();

if (!empty($_POST))
{
    $add->AddGlasses();

}

require_once ('Views/addProduct.php');
