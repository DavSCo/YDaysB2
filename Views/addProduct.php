<?php require_once ("Views/LayoutAdmin.php");?>
<!--

<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
<header class="masthead">
    <div class="container h-100">
        <div class="login-page">

            <div class="form">
                <form class="ui form" method="post"enctype="multipart/form-data">
                    <h4 class="ui dividing header">Add Glasses</h4>
                    <div class="field">
                        
                        <div class="twelve wide field">
                            <div class="field">
                                <input type="text" name="name" id="essaie" placeholder="Name">
                            </div>
                        </div>
                    </div>
                    <div class="field">
                       
                        <div class="fields">
                            <div class="twelve wide field">
                                <input type="text" name="marque"id="essaie" placeholder="Marque">
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        
                        <div class="fields">
                            <div class="twelve wide field">
                                <input type="text" name="price"id="essaie" placeholder="Price">
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        
                        <div class="fields">
                            <div class="twelve wide field">
                                <input type="text" name="size" id="essaie" placeholder="Size">
                            </div>
                        </div>
                    </div>
                    <div class="field">
                          <label>Type</label>
                        <div class="fields">
                            <div class="twelve wide field">
                                <input type="radio" name="type" value="Solaire">
                                <label for="contactChoice1">Solaire</label>
                                <input type="radio" name="type" value="Vue">
                                <label for="contactChoice1">Vue</label>
                                 <input type="radio" name="type" value="Lentille">
                                <label for="contactChoice1">Lentille</label>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                     
                        <div class="fields">
                            <div class="twelve wide field">
                                <input type="text" name="ref" id="essaie" placeholder="Reference">
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Sexe</label>
                        <div class="fields">
                            <div class="twelve wide field">
                                <input type="radio" name="sexe" value="Homme">
                                <label for="contactChoice1">Homme</label>
                                <input type="radio" name="sexe" value="Femme">
                                <label for="contactChoice1">Femme</label>
                                <input type="radio" name="sexe" value="Mixte">
                                <label for="contactChoice1">Mixte</label>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        
                        <div class="fields">
                            <div class="twelve wide field">
                                <input type="file" placeholder="Image " name="image"> <br>
                            </div>
                        </div>
                    </div>


<br>
                    <button type="submit" class="ui button">Add Glasses</button>

                </form>
            </div>
        </div>
    </div>

</header>
        </div>
    </div>
</div>




-->


<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <h2>Add Product</h2>
        </div>
    </div>
    <div class="row">
        <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">

            <form id="contact-form" class="form " action="#" method="POST" role="form" style="text-align: center;">
                <div class="form-group">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label class="form-label" for="marque">Marque</label>
                    <input type="text" class="form-control"  name="marque" placeholder="Marque">
                </div>
                <div class="form-group">
                    <label class="form-label" for="price">Price</label>
                    <input type="text" class="form-control"  name="price" placeholder="Price">
                </div>
                <div class="form-group">
                    <label class="form-label" for="size">Size</label>
                    <input  name="size" class="form-control" placeholder="Size" >
                </div>
                <div class="form-group">
                    <input type="radio" name="type" value="Solaire">
                    <label for="contactChoice1">Solaire</label>
                    <input type="radio" name="type" value="Vue">
                    <label for="contactChoice1">Vue</label>
                </div>
                <div class="form-group">
                    <label class="form-label" for="ref">Ref</label>
                    <input  name="ref" class="form-control" placeholder="Ref" >
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