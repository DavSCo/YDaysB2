<?php
ini_set('display_errors', 1);

require_once ('Models/dbConn.php');
require_once ('Models/UserSQL.php');
require_once ('Models/CommandeSQL.php');
require_once ('Models/GlassesSQL.php');



if (!isset($_GET['p']) OR $_GET['p'] === 'index') {
require_once('Controllers/homeController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'adminUser'){
require_once ('Controllers/updateUserController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'delete_user'){
require_once ('Controllers/deleteUserController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'commandeUser'){
require_once ('Controllers/afficherCommandeController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'register'){
    require_once('Controllers/registerController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'addProduct'){
    require_once('Controllers/addProductController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'solaire'){
    require_once('Controllers/solaireController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'vue'){
    require_once('Controllers/vueController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'productDetail'){
    require_once('Controllers/productDetailController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'connection'){
    require_once('Controllers/connectionController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'deconnection'){
    require_once('Controllers/deconnectionController.php');
}
