<?php require_once ("Views/LayoutAdmin.php");?>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
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


