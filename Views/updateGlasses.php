<?php require_once ('Views/LayoutAdmin.php');?>
<!--<div class="mainContent clearfix">
    <div id="update">
        <form id="form" class="topBefore" method="post">
            <input type="text" value="<?/*=$updateGlasses['name'] */?>" placeholder="Name"  name="name">
            <input type="text" value="<?/*=$updateGlasses['marque'] */?>"placeholder="marque"  name="marque">
            <input type="number" value="<?/*=$updateGlasses['price'] */?>" placeholder="price" name="price">
            <input type="text" value="<?/*=$updateGlasses['size'] */?>"placeholder="size" name="size">
            <input type="radio" name="type" value="Solaire">
            <label for="contactChoice1">Solaire</label>
            <input type="radio" name="type" value="Vue">
            <label for="contactChoice1">Vue</label>
            <input type="text" value="<?/*=$updateGlasses['ref'] */?>"placeholder="ref" name="ref">
            <input type="radio" name="sexe" value="Homme">
            <label for="contactChoice1">Homme</label>
            <input type="radio" name="sexe" value="Femme">
            <label for="contactChoice1">Femme</label>
            <input type="radio" name="sexe" value="Mixte">
            <label for="contactChoice1">Mixte</label>
            <input id="submit" type="submit" value="Modifier">
        </form>
    </div>

</div>-->



<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <h2>Update</h2>
        </div>
    </div>
    <div class="row">
        <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <form id="contact-form" class="form " action="#" method="POST" role="form" style="text-align: center;">
                <div class="form-group">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name"  value="<?=$updateGlasses['name'] ?>">
                </div>
                <div class="form-group">
                    <label class="form-label" for="marque">Marque</label>
                    <input type="text" class="form-control"  name="marque" value="<?=$updateGlasses['marque'] ?>">
                </div>
                <div class="form-group">
                    <label class="form-label" for="price">Price</label>
                    <input type="text" class="form-control"  name="price" value="<?=$updateGlasses['price'] ?>">
                </div>
                <div class="form-group">
                    <label class="form-label" for="size">Size</label>
                    <input  name="size" class="form-control" value="<?=$updateGlasses['size'] ?>" >
                </div>
                <div class="form-group">
                    <input type="radio" name="type" value="Solaire">
                    <label for="contactChoice1">Solaire</label>
                    <input type="radio" name="type" value="Vue">
                    <label for="contactChoice1">Vue</label>
                </div>
                <div class="form-group">
                    <label class="form-label" for="ref">Ref</label>
                    <input  name="ref" class="form-control" value="<?=$updateGlasses['ref'] ?>" >
                </div>
                <div class="form-group">
                    <input type="radio" name="sexe" value="Homme">
                    <label for="contactChoice1">Homme</label>
                    <input type="radio" name="sexe" value="Femme">
                    <label for="contactChoice1">Femme</label>
                    <input type="radio" name="sexe" value="Mixte">
                    <label for="contactChoice1">Mixte</label>
                </div>
                <div class="form-group">
                    <input type="file" class="file" placeholder="Image " name="image"> <br>
                </div>
                <div class="text-center">
                    <input type="submit" value="Update" class="btn btn-start-order">
                </div>
            </form>
        </div>
    </div>
</div>