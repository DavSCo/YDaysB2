<?php require_once('Views/Layout.php') ?>

<!-- Page Content -->
<div class="container">

    <!-- Page Heading -->
    <h1 class="my-4">Votre Panier
    </h1>

    <?php
    $number = count($_SESSION['panier']['idProduct']);
    for ($i = 0; $i < $number; $i++) { ?>
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0"
                         src="<?php if (!empty($_SESSION['panier']['imgProduct'][$i]['image'])) {
                             echo $_SESSION['panier']['imgProduct'][$i]['image'];
                         } else {
                             echo 'http://placehold.it/700x300';
                         } ?>" style="width:400px">
                </a>
            </div>
            <div class="col-md-5">
                <h3><?php echo $_SESSION['panier']['nameProduct'][$i] ?></h3>
                <h5><?php echo $_SESSION['panier']['brandProduct'][$i] ?></h5>
                <p><?php echo $_SESSION['panier']['priceProduct'][$i] ?> €</p>
                <a class="btn btn-primary"
                   href="index.php?p=rentPage&id=<?php echo $_SESSION['panier']['idProduct'][$i]; ?>">Payer</a>
                <a class="btn btn-primary" href="index.php?p=deleteItemPanier&id=<?php echo $i; ?>">Supprimer</a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

    <?php } ?>


    <!-- /.row -->


    <!-- /.row -->

    <hr>


</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
