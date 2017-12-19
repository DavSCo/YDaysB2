<?php require_once ('Views/LayoutAdmin.php');?>
<div class="mainContent clearfix">
    <div id="update">
        <form id="form" class="topBefore" method="post">
            <input type="text" value="<?=$updateGlasses['name'] ?>" placeholder="Name"  name="name">
            <input type="text" value="<?=$updateGlasses['marque'] ?>"placeholder="marque"  name="marque">
            <input type="number" value="<?=$updateGlasses['price'] ?>" placeholder="price" name="price">
            <input type="text" value="<?=$updateGlasses['size'] ?>"placeholder="size" name="size">
            <input type="radio" name="type" value="Solaire">
            <label for="contactChoice1">Solaire</label>
            <input type="radio" name="type" value="Vue">
            <label for="contactChoice1">Vue</label>
            <input type="text" value="<?=$updateGlasses['ref'] ?>"placeholder="ref" name="ref">
            <input type="radio" name="sexe" value="Homme">
            <label for="contactChoice1">Homme</label>
            <input type="radio" name="sexe" value="Femme">
            <label for="contactChoice1">Femme</label>
            <input type="radio" name="sexe" value="Mixte">
            <label for="contactChoice1">Mixte</label>


            <input id="submit" type="submit" value="Modifier">
        </form>
    </div>

</div>
