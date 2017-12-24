<?php
require_once ('Views/Layout.php');
?>
<body>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-lg-3">

            <h1 class="my-4">Optic</h1>
            <div class="list-group">
                <a href="index.php?p=solaire" class="list-group-item">Solaire</a>
                <a href="index.php?p=vue" class="list-group-item">Vue</a>
            </div>

        </div>
        <!-- /.col-lg-3 -->
        <div class="col-lg-9">
            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">

            </div>

            <div class="row">
                <?php foreach ($solaireGlasses as $item) { ?>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="index.php?p=productDetail&id=<?php echo $item['id'] ?>"><img class="card-img-top"
                                                                                                  src="<?= $item['image'] ?>"
                                                                                                  alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="index.php?p=productDetail&id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a>
                                </h4>
                                <h5><?php echo $item['price'] ?> €</h5>
                                <p class="card-text"><?php echo $item['marque'] ?></p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                <?php } ?>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; YDAYS 2017 - Samuel Mrejen - Sara Ayache - David Cohen</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="Views/vendor/jquery/jquery.min.js"></script>
<script src="Views/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
