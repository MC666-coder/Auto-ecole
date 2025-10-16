<?php
include('db.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom_moniteur'] ?? '';
    $prenom = $_POST['prenom_moniteur'] ?? '';
    $adresse = $_POST['email_moniteur'] ?? '';
    $date_naissance = $_POST['ddn_moniteur'] ?? '';
    $sexe = $_POST['sexe_moniteur'] ?? '';
    $ville = $_POST['ville_moniteur'] ?? '';

    try{
            // Requête d'insertion pour la ville
        $sql_check=$conn->prepare("SELECT id_ville FROM ville WHERE nom_ville= ?");
        $sql_check->execute([$ville]);
        $sql_ville=$conn->prepare("INSERT INTO ville(nom_ville) VALUES(?)");
        $sql_ville->execute([$ville]);
        $id_ville=$conn->lastInsertId();
        $sql = "INSERT INTO moniteur (nom_moniteur, prenom_moniteur, email_moniteur, ddn_moniteur, sexe_moniteur, id_ville)
                VALUES (?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$nom, $prenom, $adresse, $date_naissance, $sexe, $id_ville]);
        
        echo "Données insérées avec succès ";
    } catch (PDOException $e){
        echo "Erreur lors de l'insertion ";

    }

    header("location: espace_moniteur.php"); 
}



?>
