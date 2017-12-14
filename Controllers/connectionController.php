<?php
require_once('Models/UserSQL.php');


$connect = new UserSQL();

if (!empty($_POST)) {
    $compte = $connect->connectionCompte();
      $_SESSION['connected'] = true;
      $_SESSION['id'] = $compte[0]['id'];

}
        var_dump($_SESSION);
       
    
require_once('Views/connection.php');