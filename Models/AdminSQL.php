<?php


class AdminSQL
{
    public function selectGlasses()
    {
        global $bdd;



        $selectGlasses = $bdd->prepare("SELECT * FROM glasses");
        $selectGlasses->execute();
        $selectAllGlasses = $selectGlasses->fetchAll();

        return $selectAllGlasses;
    }


    public function deleteGlasses($id)
    {
        global $bdd;


        $delete=$bdd->prepare("DELETE from glasses where id= :id");
        $delete->bindParam(":id", $id, PDO::PARAM_STR);

        $delete->execute();


    }
    public function selectGlassesWithId($id)
    {
        global $bdd;

        $selectGlassesWithId = $bdd->prepare("SELECT * FROM glasses WHERE id=:id");
        $selectGlassesWithId->bindParam(":id", $id, PDO::PARAM_STR);
        $selectGlassesWithId->execute();
        $selectGlassesId = $selectGlassesWithId->fetch();

        return $selectGlassesId;



    }

    public function updateGlasses($name, $marque,$price,$size,$type,$ref,$sexe,$id)
    {
        global $bdd;


        $update=$bdd->prepare("UPDATE glasses SET  name = :name, marque= :marque , price = :price,size=:size,type=:type, ref = :ref , sexe=:sexe WHERE id=:id");
        $update->bindParam(":name", $name, PDO::PARAM_STR);
        $update->bindParam(":marque", $marque, PDO::PARAM_STR);
        $update->bindParam(":price", $price, PDO::PARAM_STR);
        $update->bindParam(":size", $size, PDO::PARAM_STR);
        $update->bindParam(":type", $type, PDO::PARAM_STR);
        $update->bindParam(":ref", $ref, PDO::PARAM_STR);
        $update->bindParam(":sexe", $sexe, PDO::PARAM_STR);

        $update->bindParam(":id", $id, PDO::PARAM_STR);


        $update->execute();

        var_dump($update->errorInfo());

    }
    public function updateImgGlasses($image)
    {
        global $bdd;

        $update=$bdd->prepare("UPDATE glasses SET image=:image WHERE id=:id");
        $update->bindParam(":image", $image, PDO::PARAM_STR);
    }


    public function connectionCompteAdmin()
    {

        global $bdd;
        $mail = $_POST['mail'];
        $password = $_POST['password'];
        $connection = $bdd->prepare("SELECT * FROM admin WHERE mail = :mail AND password = :password");
        $connection->bindParam(":mail", $mail, PDO::PARAM_STR);
        $connection->bindParam(":password", $password, PDO::PARAM_STR);
        $connection->execute();
        $compteAdmin = $connection->fetchAll();

        return $compteAdmin;
    }


}