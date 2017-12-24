<?php require_once("Views/LayoutAdmin.php"); ?>


<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <h2>Add Product</h2>
        </div>
    </div>
    <div class="row">
        <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">

            <form id="contact-form" class="form " action="#" method="POST" role="form" style="text-align: center;"
                  enctype="multipart/form-data">
                <div class="form-group">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label class="form-label" for="marque">Marque</label>
                    <input type="text" class="form-control" name="marque" placeholder="Marque">
                </div>
                <div class="form-group">
                    <label class="form-label" for="price">Price</label>
                    <input type="text" class="form-control" name="price" placeholder="Price">
                </div>
                <div class="form-group">
                    <label class="form-label" for="size">Size</label>
                    <input name="size" class="form-control" placeholder="Size">
                </div>
                <div class="form-group">
                    <input type="radio" name="type" value="Solaire">
                    <label for="contactChoice1">Solaire</label>
                    <input type="radio" name="type" value="Vue">
                    <label for="contactChoice1">Vue</label>
                </div>
                <div class="form-group">
                    <label class="form-label" for="ref">Ref</label>
                    <input name="ref" class="form-control" placeholder="Ref">
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
                    <input type="submit" value="Add" class="btn btn-start-order">
                </div>
            </form>
        </div>
    </div>
</div>