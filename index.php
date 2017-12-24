<?php
ini_set('display_errors', 1);

require_once ('Models/dbConn.php');
require_once ('Models/UserSQL.php');
require_once ('Models/CommandeSQL.php');
require_once ('Models/GlassesSQL.php');
require_once ('Models/AdminSQL.php');



if (!isset($_GET['p']) OR $_GET['p'] === 'index') {
require_once('Controllers/homeController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'updateUsers'){
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
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'lentille'){
    require_once('Controllers/lentilleController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'deleteUsers'){
    require_once('Controllers/afficherDeleteController.php');
}
elseif(!isset($_GET['p']) OR $_GET['p'] === 'productDetail'){
    require_once('Controllers/productDetailController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'connection'){
    require_once('Controllers/connectionController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'deconnection'){
    require_once('Controllers/deconnectionController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'connectionAdmin'){
    require_once('Controllers/connectionAdminController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'deleteGlasses'){
    require_once('Controllers/deleteGlassesController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'updateGlasses'){
    require_once('Controllers/updateGlassesController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'panier'){
    require_once('Controllers/panierController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'rentPage'){
    require_once('Controllers/rentPageController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'paymentPage'){
    require_once('Controllers/paymentPageController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'adminView'){
    require_once('Controllers/adminViewController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'listProductAdmin'){
    require_once('Controllers/ListProductAdminController.php');
} elseif(!isset($_GET['p']) OR $_GET['p'] === 'monCompte'){
    require_once('Controllers/monCompteController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'addPanier'){
    require_once('Controllers/addPanierController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'deleteItemPanier'){
    require_once('Controllers/deleteItemPanierController.php');
}





