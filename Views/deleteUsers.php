<?php require_once('Views/LayoutMonCompte.php'); ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <!-- Icon Cards-->
        <div class="row">
            <div class=" col-xl-12 col-sm-6 mb-3">
                <a style="text-decoration: none;border:1px solid black; border-radius: 3px; padding: 10px; color: black;"
                   href="index.php?p=delete_user&id=<?= $_SESSION['id'] ?>">Supprimer Mon Compte</a>


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
