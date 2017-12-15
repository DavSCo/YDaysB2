<?php
require_once ('Models/GlassesSQL.php');

$add = new GlassesSQL();

if (!empty($_POST))
{
    if (isset($_FILES['image'])) {

        // echo $_FILES['nomDuInput']['name'] . '<br>'; // Nom du fichier
        $finfo = finfo_open(FILEINFO_MIME_TYPE); // Vérifie le type MIME du fichier
        $mime = finfo_file($finfo, $_FILES['image']['tmp_name']); // Regarde dans ce fichier le type MIME
        finfo_close($finfo); // Fermeture de la lecture
        $filename = explode('.', $_FILES['image']['name']); // Explosion du nom sur le point
        $extension = $filename[count($filename) - 1]; // L'extension du fichier
        //echo $extension . ' ' . $mime;
        if ($extension == 'jpg' && $mime == 'image/jpeg') {
            move_uploaded_file($_FILES['image']['tmp_name'],
                'upload/' . $_FILES['image']['name']);


        }
    }

    $add->AddGlasses($_FILES['image']['name']);
}

require_once ('Views/addProduct.php');
