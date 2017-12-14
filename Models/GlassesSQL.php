<?php

/**
 * Created by PhpStorm.
 * User: davidcohen
 * Date: 14/12/2017
 * Time: 18:14
 */
class GlassesSQL
{

    public function AddGlasses()
    {
        global $bdd;

        $name = $_POST['name'];
        $marque = $_POST['marque'];
        $price = $_POST['price'];
        $size = $_POST['size'];
        $type = $_POST['type'];
        $ref = $_POST['ref'];
        $sexe = $_POST['sexe'];


        $add = $bdd->prepare("INSERT INTO glasses (name, marque,  price,  size, type, ref, sexe) VALUES(:name, :marque,  :price,  :size, :type, :ref, :sexe)");


        $add->bindParam(":name", $name, PDO::PARAM_STR);
        $add->bindParam(":marque", $marque, PDO::PARAM_STR);
        $add->bindParam(":price", $price, PDO::PARAM_STR);
        $add->bindParam(":size", $size, PDO::PARAM_STR);
        $add->bindParam(":type", $type, PDO::PARAM_STR);
        $add->bindParam(":ref", $ref, PDO::PARAM_STR);
        $add->bindParam(":sexe", $sexe, PDO::PARAM_STR);

        $add->execute();

    }

    public function selectGlasses()
    {
        global $bdd;



        $selectGlasses = $bdd->prepare("SELECT * FROM glasses");
        $selectGlasses->execute();
        $selectAllGlasses = $selectGlasses->fetchAll();

        return $selectAllGlasses;
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

    public function selectXGlasse()
    {
        global $bdd;

        $selectXGlassesLocal = $bdd->prepare("SELECT * FROM `glasses` t1 WHERE (SELECT COUNT(*) FROM `glasses` t2 WHERE t1.id < t2.id) < 6 ORDER BY id ASC");
        $selectXGlassesLocal->execute();
        $selectXNumber = $selectXGlassesLocal->fetchAll();

        return $selectXNumber;
    }

    public function selectSolaire()
    {
        global $bdd;

        $selectSolaire = $bdd->prepare("SELECT * FROM glasses WHERE type = 'Solaire'");
        $selectSolaire->execute();
        $solaireGlasses = $selectSolaire->fetchAll();

        return $solaireGlasses;
    }

    public function selectVue()
    {
        global $bdd;

        $selectVue = $bdd->prepare("SELECT * FROM glasses WHERE type = 'Vue'");
        $selectVue->execute();
        $vueGlasses = $selectVue->fetchAll();

        return $vueGlasses;
    }
}