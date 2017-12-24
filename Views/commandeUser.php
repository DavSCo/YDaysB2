<?php require_once ('Views/LayoutMonCompte.php'); ?>

    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <!-- Icon Cards-->
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">

                 <?php   for ($i=0;$i<count($afficherCommandeUser); $i++){?>
                    <div class="local" id="local">
                        <div class="col-xs-2 col-xs-offset-1 table-caption">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top"  src="<?= $afficherCommandeUser[$i]['photo'] ?>" alt=""></a>
                                <div class="card-body">
                                    <h1><?= $afficherCommandeUser[$i]['ref'] ?></h1>
                                    <h4 class="card-title">
                                        <a href="#"><?= $afficherCommandeUser[$i]['user_id'] ?></a>
                                    </h4>
                                    <p class="card-text"><?= $afficherCommandeUser[$i]['glasses_id'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    </div>
                </div>
            </div>


        </div>





    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
    </div>
    </body>

    </html>












