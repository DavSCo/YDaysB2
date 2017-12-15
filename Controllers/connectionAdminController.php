<?php
require_once('Models/AdminSQL.php');


$connect = new AdminSQL();


if (!empty($_POST['mail'])&& !empty($_POST['password'])) {

    $compteAdmin = $connect->connectionCompteAdmin();

    if (count($compteAdmin)>0){

            $_SESSION['connected']=true;
            $_SESSION['id'] = $compteAdmin[0]['id'];
            $_SESSION['mail']=$compteAdmin[0]['mail'];

        header('Location: index.php?p=layoutAdministrateur');



    } else{
        $erreur = '<p class="erreur">Identifiants incorrects</p>';
        echo $erreur;
    }

}
require_once('Views/connectionAdmin.php');