<?php
session_start();
ini_set('display_errors',1);
ini_set('error_reporting',E_ALL);

/* Connexion à une base ODBC avec l'invocation de pilote */

$bdd = 'mysql:dbname=Ydays;host=localhost';
$user = 'root';
$password = '';
try {
    $bdd = new PDO($bdd ,$user,$password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
