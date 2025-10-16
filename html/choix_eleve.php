<?php
include('db.php');


if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['id_Eleve'], $_POST['id_moniteur'])){
    $id_Eleve=$_POST['id_Eleve'];
    $id_moniteur=$_POST['id_moniteur'];

    $requête = "INSERT INTO demande (id_Eleve, id_moniteur) VALUES (?, ?)";
    $stmt = $conn->prepare($requête);
    
    if($stmt->execute([$id_moniteur,$id_Eleve])){
        echo "<script>alert('moniteur sélectionné avec succès!.');window.location.href='espace_eleve.php';</script>";

    }else{
        echo"<script>alert('Échec lors du choix de Eleve.');</script>";
    }


}

?>