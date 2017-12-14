<?php
ini_set('display_errors', 1);



if (!isset($_GET['p']) OR $_GET['p'] === 'index') {
require_once('Controllers/homeController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'adminUser'){
require_once ('Controllers/updateUserController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'delete_user'){
require_once ('Controllers/deleteUserController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'commandeUser'){
require_once ('Controllers/afficherCommandeController.php');
}