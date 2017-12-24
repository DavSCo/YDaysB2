<?php

/**
 * Created by PhpStorm.
 * User: Shmouel
 * Date: 14/12/2017
 * Time: 15:33
 */
class CommandeSQL
{

    public function afficherCommande($id)
    {
        global $bdd;
        $afficher=$bdd->prepare("SELECT * from commandes where user_id=:user_id");
        $afficher->bindParam(":user_id",$id,PDO::PARAM_STR);
        $afficher->execute();
        $afficherCommande=$afficher->fetchAll();

        return $afficherCommande;
    }



}