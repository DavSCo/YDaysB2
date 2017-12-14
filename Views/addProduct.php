<?php require_once ("Views/Layout.php");?>


<header class="masthead">
    <div class="container h-100">
        <div class="login-page">
            <div class="form">
                <form class="ui form" method="post">
                    <h4 class="ui dividing header">Add Glasses</h4>
                    <div class="field">
                        <label>Name</label>
                        <div class="twelve wide field">
                            <div class="field">
                                <input type="text" name="name" placeholder="Name">
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Marque</label>
                        <div class="fields">
                            <div class="twelve wide field">
                                <input type="text" name="marque" placeholder="Marque">
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Price</label>
                        <div class="fields">
                            <div class="twelve wide field">
                                <input type="text" name="price" placeholder="Price">
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Size</label>
                        <div class="fields">
                            <div class="twelve wide field">
                                <input type="text" name="size" placeholder="Size">
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
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Reference</label>
                        <div class="fields">
                            <div class="twelve wide field">
                                <input type="text" name="ref" placeholder="Reference">
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


                    <button type="submit" class="ui button">Add Glasses</button>

                </form>
            </div>
        </div>
    </div>

</header>


