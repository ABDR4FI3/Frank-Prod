<?php
/* -- Connection à la base de données -- */

   
$dbType = "mysql";
   $host = "localhost";
   $login = "root";
   $password = "";
   $dataBaseName = "frank";

/* -------------------------------------- */

   $prefixe_db = "fv_";
   $siteURL = "http://localhost/FrankVito/";
   $projet = "Frank Vito";

/* -- Variables globales -- */

   define("__prefixe_db__", $prefixe_db);
   global $siteURL;
   global $projet;
