<?php require_once ('Views/Layout.php')?>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">Votre Panier
      </h1>


      <div class="row">
        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3><?php echo $selectPanier['name'];?></h3>
            <h4><?php echo $selectPanier['marque'];?></h4>
          <p><?php echo $selectPanier['price'];?> €</p>
          <a class="btn btn-primary" href="index.php?p=rentPage&id=<?php echo $selectPanier['id'];?>">Payer</a>
        </div>
      </div>

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
