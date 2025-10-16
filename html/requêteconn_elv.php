<?php
include("db.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom_connelv'];
    $prenom = $_POST['prenom_connelv'];
    $email = $_POST['email_connelv'];
    

    header('Location: espace_eleve.php?type=conn&email=' . urlencode($email));
    //header("location: espace_elv.php?type=con&mail=$email");
}



?>