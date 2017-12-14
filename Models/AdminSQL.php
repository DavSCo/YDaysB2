<?php


class AdminSQL
{
    public function selectGlassesWithId($id)
    {
        global $bdd;

        $selectGlassesWithId = $bdd->prepare("SELECT * FROM glasses WHERE id=:id");
        $selectGlassesWithId->bindParam(":id", $id, PDO::PARAM_STR);
        $selectGlassesWithId->execute();
        $selectGlassesId = $selectGlassesWithId->fetch();

        return $selectGlassesId;

    }


}