<?php
require_once ('Models/AdminSQL.php');
$delete= new AdminSQL();
$delete->deleteGlasses($_GET['id']);
header('Location:index.php?p=listProductAdmin');

require_once ('Views/listGlassesAdmin.php');