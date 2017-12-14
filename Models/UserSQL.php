<?php

class UserSQL
{


    public function recupererUtilisateur($id=null)
    {
        global $bdd;

        if ($id !== null){
            $recuperer=$bdd->prepare("SELECT * FROM users where id=:id");
            $cast=intval($id);
            $recuperer->bindParam(":id", $cast, PDO::PARAM_STR);
            $recuperer->execute();
            $users=$recuperer->fetchAll();
            return $users;
        }else{
            $recuperer=$bdd->prepare("select * from users");
            $recuperer->execute();
            $recupAll=$recuperer->fetchAll();
            return $recupAll;

        }




    }

    public function supprimerCompte($id)
    {
        global $bdd;


        $delete=$bdd->prepare("DELETE from users where id= :id");
        $delete->bindParam(":id", $id, PDO::PARAM_STR);

        $delete->execute();


    }


    public function updateCompte($name, $last_name,$mail,$phone,$password,$id)
    {
        global $bdd;


        $password = crypt($password, '$2a$07$302838711915bef2db65cc$');
        $update=$bdd->prepare("UPDATE users SET  name = :name, last_name= :last_name , mail = :mail,phone=:phone, password = :password WHERE id=:id");
        $update->bindParam(":name", $name, PDO::PARAM_STR);
        $update->bindParam(":lastName", $last_name, PDO::PARAM_STR);
        $update->bindParam(":mail", $mail, PDO::PARAM_STR);
        $update->bindParam(":phone", $phone, PDO::PARAM_STR);
        $update->bindParam(":password", $password, PDO::PARAM_STR);
        $update->bindParam(":id", $id, PDO::PARAM_STR);
        $update->execute();


    }

}