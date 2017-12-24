<?php
require_once('Models/GlassesSQL.php');

$add = new GlassesSQL();

if (!empty($_POST)) {
    if (!empty($_FILES['image'])) {

        $finfo = finfo_open(FILEINFO_MIME_TYPE);

        $mime = finfo_file($finfo, $_FILES['image']['tmp_name']);
        finfo_close($finfo);
        $filename = explode('.', $_FILES['image']['name']);
        $extension = $filename[count($filename) - 1];
        $image = 'Views/images/upload/' . $_FILES['image']['name'];
        if ($extension == 'jpg' && $mime == 'image/jpeg' || $extension == 'png' && $mime == 'image/png') {
            move_uploaded_file($_FILES['image']['tmp_name'], $image);


        }
    }

    $add->AddGlasses($image);

}


require_once('Views/addProduct.php');

