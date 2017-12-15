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
        <h1>Login</h1>
        <!--            <p> Inscription</p>
        -->            <form class="login-form" method="post" enctype="multipart/form-data">
            <div class="form-item"> <input type="mail" name="mail" placeholder="email address" /></div>
            <div class="form-item"> <input type="password" name="password" placeholder="password"></div>
       
            
            
            <div class="button-panel">

                <input type="submit" class="button" title="Join us" value="Register">
            </div>
        </form>

</body>
</html>

