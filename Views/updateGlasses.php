<?php require_once('Views/LayoutAdmin.php'); ?>
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
                    <input type="text" class="form-control" id="name" name="name" value="<?= $updateGlasses['name'] ?>">
                </div>
                <div class="form-group">
                    <label class="form-label" for="marque">Marque</label>
                    <input type="text" class="form-control" name="marque" value="<?= $updateGlasses['marque'] ?>">
                </div>
                <div class="form-group">
                    <label class="form-label" for="price">Price</label>
                    <input type="text" class="form-control" name="price" value="<?= $updateGlasses['price'] ?>">
                </div>
                <div class="form-group">
                    <label class="form-label" for="size">Size</label>
                    <input name="size" class="form-control" value="<?= $updateGlasses['size'] ?>">
                </div>
                <div class="form-group">
                    <label class="form-label" for="contactChoice1">Type</label>
                    <input type="radio" name="type" value="Solaire"<?php if ($updateGlasses['type'] == 'Solaire') echo 'checked="checked"'; ?>>
                    <label for="contactChoice1">Solaire</label>
                    <input type="radio" name="type" value="Vue"<?php if ($updateGlasses['type'] == 'Vue') echo 'checked="checked"'; ?>>
                    <label for="contactChoice1">Vue</label>
                </div>
                <div class="form-group">
                    <label class="form-label" for="ref">Ref</label>
                    <input name="ref" class="form-control" value="<?= $updateGlasses['ref'] ?>">
                </div>
                <div class="form-group">
                   
                    <label class="form-label" for="contactChoice1">sexe</label>
                    <input type="radio"  name="sexe" value="Homme"<?php if ($updateGlasses['sexe'] == 'Homme') echo 'checked="checked"'; ?>>
                    <label for="contactChoice1">Homme</label>
                    <input type="radio" name="sexe" value="Femme"<?php if ($updateGlasses['sexe'] == 'Femme') echo 'checked="checked"'; ?>>
                    <label for="contactChoice1">Femme</label>
                    <input type="radio" name="sexe" value="Mixte"<?php if ($updateGlasses['sexe'] == 'Mixte') echo 'checked="checked"'; ?>>
                    <label for="contactChoice1">Mixte</label>
                </div>
                <div class="text-center">
                    <input type="submit" value="Modifier" class="btn btn-start-order">
                </div>
            </form>
        </div>
    </div>
</div>