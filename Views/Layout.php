<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>YDAYS</title>

    <!-- Bootstrap core CSS -->
    <link href="Views/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Views/css/shop-homepage.css" rel="stylesheet">
    <link href="Views/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="Views/css/sb-admin.css" rel="stylesheet">
    <link href="Views/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="Views/css/1-col-portfolio.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">


</head>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">Optic En Ligne</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <?php if (!isset($_SESSION['connected']) || $_SESSION['connected'] === false) { ?>

                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=register">Inscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=connection">Connection</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=panier"><i class="material-icons">shopping_basket</i></a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=deconnection">Deconnection</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=monCompte">Mon Compte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=panier"><i class="material-icons">shopping_basket</i></a>
                    </li>


                <?php } ?>
            </ul>
        </div>
    </div>
</nav>