<?php
require_once ('Views/Layout.php');
?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
            <h1 class="my-4">Optic</h1>
            <div class="list-group">
                <a href="index.php?p=solaire" class="list-group-item">Solaire</a>
                <a href="index.php?p=vue" class="list-group-item">Vue</a>
                <a href="index.php?p=lentille" class="list-group-item">Lentilles</a>

          </div>
            <a href="index.php?p=panier&id=<?php echo $selectWithId['id']?>" class="btn btn-success">Acheter</a>
        </div>

        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div class="card mt-4">
            <img class="card-img-top img-fluid" src="<?=$selectWithId['image'] ?>" alt="">
            <div class="card-body">
              <h3 class="card-title"><?php echo $selectWithId['name']?></h3>
              <h4><?php echo $selectWithId['price']?> €</h4>
              <p class="card-text"><?php echo $selectWithId['marque']?></p>
              <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
              4.0 stars
            </div>
          </div>
          <!-- /.card -->

          <div class="card card-outline-secondary my-4">
            <div class="card-header">
              Description
            </div>
            <div class="card-body">
              <p>Reference</p>
              <small class="text-muted"><?php echo $selectWithId['ref']?></small>
              <hr>
              <p>Size</p>
              <small class="text-muted"><?php echo $selectWithId['size']?></small>
              <hr>
              <p>Type</p>
              <small class="text-muted"><?php echo $selectWithId['type']?></small>
                <hr>
                <p>Sexe</p>
                <small class="text-muted"><?php echo $selectWithId['sexe']?></small>
              <hr>

            </div>
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col-lg-9 -->

      </div>

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
