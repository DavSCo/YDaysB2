<?php
ini_set('display_errors', 1);



if (!isset($_GET['p']) OR $_GET['p'] === 'index') {
require_once('Controllers/homeController.php');
}