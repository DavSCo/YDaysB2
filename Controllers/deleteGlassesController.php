<?php
require_once ('Models/AdminSQL.php');
$delete= new AdminSQL();
$delete->deleteGlasses($_GET['id']);

require_once ('Views/listGlassesAdmin.php');