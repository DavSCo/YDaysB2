<?php require_once ('Views/Layout.php')?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Views/css/connection.css">
    <title>Document</title>
</head>
<body>
<div class="login-page">
    <div class="form-wrapper">
        <h1>Inscription</h1>
        <!--            <p> Inscription</p>
        -->            <form class="login-form" method="post" enctype="multipart/form-data">
            <div class="form-item">
                <input type="text" name="name" placeholder="Prenom"></div>
            <div class="form-item"><input type="text" name="last_name" placeholder="Nom"></div>
            <div class="form-item"> <input type="mail" name="mail" placeholder="Mail" /></div>
            <div class="form-item"> <input type="password" name="password" placeholder="Mot de Passe"></div>
            <div class="form-item"> <input type="text" name="street" placeholder="Rue"></div>
            <div class="form-item"> <input type="text" name="zip_code" placeholder="Code Postal"></div>
            <div class="form-item"> <input type="text" name="city" placeholder="Ville"></div>
            <div class="form-item"> <input type="text" name="country" placeholder="Pays"></div>
            <div class="form-item"> <input type="number" name="phone" placeholder="Telephone"></div>
            <div class="button-panel">

                <input type="submit" class="button" title="Join us" value="Inscription">
            </div>
        </form>

</body>
</html>

