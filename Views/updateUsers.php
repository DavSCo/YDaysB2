<?php require_once ('Views/LayoutMonCompte.php'); ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <!-- Icon Cards-->
        <div class="row">
            <div class="formuaire col-xl-3 col-sm-6 mb-3">
<!--                <div class="card text-white bg-primary o-hidden h-100">
-->                    <div class="card-body">

                        <p>Mes Informations</p>
<!--                        <div class="mr-5"><?php /*echo $updateUsers[0]['name'] */?> Lunettes</div>
-->                    </div>
                    <form id="contact-form" class="form col-xs-4 col-xs-offset-2" method="POST" role="form" >
                        <div class="form-group">
                            <label class="form-label" for="name">Prenom</label>
                            <input type="text" class="form-control" id="name" name="name"  value="<?=$updateUsers[0]['name'] ?>">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="marque">Nom</label>
                            <input type="text" class="form-control" value="<?=$updateUsers[0]['last_name'] ?>" placeholder="Nom"  name="last_name">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="price">Mail</label>
                            <input type="email" class="form-control" value="<?=$updateUsers[0]['mail'] ?>"placeholder="Mail" name="mail">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="size">Telephone</label>
                            <input type="number"value="<?=$updateUsers[0]['phone'] ?>" class="form-control" placeholder="Telephone" name="phone">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="ref">Mot de Passe</label>
                            <input class="form-control" type="password"value="<?=$updateUsers[0]['password'] ?>" placeholder="Mot de Passe" name="password">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="ref">Rue</label>
                            <input class="form-control" type="text" value="<?=$updateUsers[0]['street'] ?>" placeholder="Rue" name="street">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="ref">Code Postal</label>
                            <input class="form-control" type="text" value="<?=$updateUsers[0]['zip_code'] ?>" placeholder="Code postal" name="zip_code">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="ref">Ville</label>
                            <input class="form-control" type="text" value="<?=$updateUsers[0]['city'] ?>" placeholder="Ville" name="city">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="ref">Pays</label>
                            <input class="form-control" type="text" value="<?=$updateUsers[0]['country'] ?>" placeholder="Pays" name="country">
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Modfier" class="btn btn-start-order">
                        </div>
                    </form>


<!--                </div>
-->            </div>
        </div>

        </tbody>
        </table>
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
