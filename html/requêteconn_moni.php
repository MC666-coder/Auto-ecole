<?php
include('db.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom_connmoni'];
    $prenom = $_POST['prenom_connmoni'];
    $email = $_POST['email_connmoni'];
    

    header('Location: espace_moniteur.php?type=moni&email=' . urlencode($email));
    //header("location: espace_elv.php?type=con&mail=$email");
}



?>