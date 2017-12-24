<?php require_once ('Views/layoutAdmin.php');?>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <!-- Icon Cards-->
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">

                <?php   for ($i=0;$i<count($selectAllGlasses); $i++){?>
                    <div class="local" id="local">
                        <div class="col-xs-2 col-xs-offset-1 table-caption">
                            <div class="card h-100">
                                <a href="#"><img class="card-img-top"  src="<?= $selectAllGlasses[$i]['photo'] ?>" alt=""></a>
                                <div class="card-body">
                                    <h1><?= $selectAllGlasses[$i]['ref'] ?></h1>
                                    <h4 class="card-title">
                                        <a href="#"><?= $selectAllGlasses[$i]['user_id'] ?></a>
                                    </h4>
                                    <p class="card-text"><?= $selectAllGlasses[$i]['glasses_id'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>


</div>


<div class="col-lg-9">
    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">

    </div>

    <div class="row">
        <?php foreach ($selectAllGlasses as $item) { ?>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top"  src="<?= $selectAllGlasses[$i]['photo'] ?>" alt=""></a>
                    <div class="card-body">
                        <h1><?= $selectAllGlasses[$i]['ref'] ?></h1>
                        <h4 class="card-title">
                            <a href="#"><?= $selectAllGlasses[$i]['user_id'] ?></a>
                        </h4>
                        <p class="card-text"><?= $selectAllGlasses[$i]['glasses_id'] ?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                    </div>
                </div>
            </div>

        <?php }?>

    </div>
    <!-- /.row -->

</div>