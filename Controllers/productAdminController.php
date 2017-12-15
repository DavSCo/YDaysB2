<?php
/*require_once ('Models/AdminSQl.php');*/

$select = new AdminSQL();

$selectGlasses = $select->selectGlasses();

require_once ('Views/listGlassesAdmin.php');