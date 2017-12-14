<?php require_once ('layoutAdministrateur.php');

    for ($i=0;$i<count($selectWithId); $i++){
    ?>
    <div class="local" id="local">
        <div class="col-xs-2 col-xs-offset-1 table-caption">
            <div class="card h-100">
                <a href="#"><img class="card-img-top"  src="<?= $selectWithId[$i][''] ?>" alt=""></a>
                <div class="card-body">
                    <h1><?= $selectWithId[$i]['name'] ?></h1>
                    <h4 class="card-title">
                        <a href="#">Marque:<?= $selectWithId[$i]['marque'] ?></a>
                    </h4>
                    <p class="card-text">Size:<?= $selectWithId[$i]['size'] ?></p>
                </div>
                <div class="card-footer">
                    <p><?= $selectWithId[$i]['price'] ?>€</p> <br>
                    <p><?= $selectWithId[$i]['type'] ?></p><br>
                    <p>reference:<?= $selectWithId[$i]['ref'] ?></p>
                    <p>sexe:<?= $selectWithId[$i]['sexe'] ?></p>

                </div>
            </div>
        </div>

    </div>
<?php } ?>
