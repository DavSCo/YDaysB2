<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Views/css/normalize.css">
    <link rel="stylesheet" href="Views/css/styleform.css" charset="utf-8"/>
    <title>Profil</title>
</head>
<body>
<div class="admin-panel clearfix">
    <div class="slidebar">
        <div class="logo">
            <a href=""></a>
        </div>
        <h1></h1>
        <ul>
            <li><a href="index.php?p=commandeUser" id="targeted">My Products</a></li>
            <li><a href="index.php?p=updateUser">Update</a></li>
            <li><a href="#delete">Delete</a></li>
        </ul>
    </div>
    <div class="main">
        <div class="mainContent clearfix">
            <div id="update">
                <form id="form" class="topBefore" method="post">
                    <input type="text" value="<? $updateUsers[0]['name'] ?>" placeholder="Name" name="name">
                    <input type="text" value="<? $updateUsers[0]['last_name'] ?>" placeholder="LastName"
                           name="last_name">
                    <input type="email" value="<? $updateUsers[0]['mail'] ?>" placeholder="Mail" name="mail">
                    <input type="number" value="<? $updateUsers[0]['phone'] ?>" placeholder="Phone" name="phone">
                    <input type="password" value="<? $updateUsers[0]['password'] ?>" placeholder="Password"
                           name="password">
                    <input id="submit" type="submit" value="Modifier">
                </form>
            </div>
            <div class="delete" id="delete">
                <a href="index.php?p=delete_user&id=<?= $_SESSION['id'] ?>">Confirmer</a>
            </div>
        </div>
    </div>
</body>
</html>









