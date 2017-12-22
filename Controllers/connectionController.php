<?php
require_once('Models/UserSQL.php');


$connect = new UserSQL();


if (!empty($_POST['mail'])&& !empty($_POST['password'])) {

    $compte = $connect->connectionCompte();

    if (count($compte)>0){
        if(password_verify($_POST['password'],$compte[0]['password'])){

            $_SESSION['connected']=true;
            $_SESSION['id'] = $compte[0]['id'];
            $_SESSION['mail']=$compte[0]['mail'];

            header('location:index.php');
        }



    }else{
        $erreur = '<p class="erreur">Identifiants incorrects</p>';
        echo $erreur;
    }
}
require_once('Views/connection.php');