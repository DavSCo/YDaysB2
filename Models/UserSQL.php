<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
class UserSQL
{


    public function inscriptionCompte()
    {
        global $bdd;
        $password = crypt($_POST['password'], '$2a$07$302838711915bef2db65cc$');
        $name = $_POST['name'];
        $lastName = $_POST['last_name'];
        $mail = $_POST['mail'];
        $street = $_POST['street'];
        $zip_code=$_POST['zip_code'];
        $city=$_POST['city'];
        $country=$_POST['country'];
        $phone = $_POST['phone'];

        $inscription = $bdd->prepare("INSERT INTO users (name, last_name,  mail,  password,street, zip_code,city,country,phone) VALUES(:name, :last_name, :mail,  :password,:street, :zip_code,:city,:country,:phone)");


        $inscription->bindParam(":name", $name, PDO::PARAM_STR);
        $inscription->bindParam(":last_name", $lastName, PDO::PARAM_STR);
        $inscription->bindParam(":mail", $mail, PDO::PARAM_STR);
        $inscription->bindParam(":password", $password, PDO::PARAM_STR);
        $inscription->bindParam(":street", $street, PDO::PARAM_STR);
        $inscription->bindParam(":zip_code", $zip_code, PDO::PARAM_STR);
        $inscription->bindParam(":city", $city, PDO::PARAM_STR);
        $inscription->bindParam(":country", $country, PDO::PARAM_STR);
        $inscription->bindParam(":phone", $phone, PDO::PARAM_STR);



        if ($inscription->execute()) {

            return $bdd->lastInsertId();
        }
    }


    public function connectionCompte()
    {

        global $bdd;
        $mail = $_POST['mail'];
        $password = crypt($_POST['password'], '$2a$07$302838711915bef2db65cc$');
        $connection = $bdd->prepare("SELECT * FROM users WHERE mail = :mail AND password = :password");
        $connection->bindParam(":mail", $mail, PDO::PARAM_STR);
        $connection->bindParam(":password", $password, PDO::PARAM_STR);
        $connection->execute();
        $compte = $connection->fetchAll();

        return $compte;
    }

    public function recupUser($id=null)
    {
        global $bdd;

        if ($id !== null){
            $recup=$bdd->prepare("SELECT * FROM users where id=:id");
            $cast=intval($id);
            $recup->bindParam(":id", $cast, PDO::PARAM_STR);
            $recup->execute();
            $users=$recup->fetchAll();
            return $users;
        }else{
            $recup=$bdd->prepare("select * from users");
            $recup->execute();
            $recupAll=$recup->fetchAll();
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
        $update->bindParam(":last_name", $last_name, PDO::PARAM_STR);
        $update->bindParam(":mail", $mail, PDO::PARAM_STR);
        $update->bindParam(":phone", $phone, PDO::PARAM_STR);
        $update->bindParam(":password", $password, PDO::PARAM_STR);
        $update->bindParam(":id", $id, PDO::PARAM_STR);
        $update->execute();

        var_dump($update->errorInfo());

    }

}