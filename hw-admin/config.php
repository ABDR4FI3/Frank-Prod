<?php
/* -- Connection à la base de données -- */

$dbType = "mysql";
$host = "localhost";
$login = "root";
$password = "";
$dataBaseName = "frank";

/* -------------------------------------- */

$prefixe_db = "fv_";
$siteURL = "http://localhost/Frank-Prod/";
$projet = "Frank Vito";

/* -- Variables globales -- */

define("__prefixe_db__", $prefixe_db);
global $siteURL;
global $projet;

/* -- Connection à la base de données -- */
$mysqli = new mysqli($host, $login, $password, $dataBaseName);

// Vérifier la connexion
if ($mysqli->connect_error) {
    die("Échec de la connexion à la base de données: " . $mysqli->connect_error);
}

echo "Connexion réussie!";
?>
