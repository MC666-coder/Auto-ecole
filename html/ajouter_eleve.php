<?php
include("db.php");
$sth=$conn->prepare("SELECT id_Eleve, nom_Eleve, prenom_Eleve, email_Eleve, nom_ville FROM eleve INNER JOIN ville ON ville.id_ville= eleve.id_ville");




?>