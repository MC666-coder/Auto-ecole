<?php
include('db.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'] ?? '';
    $prenom = $_POST['prenom'] ?? '';
    $email = $_POST['email'] ?? '';
    $date_naissance = $_POST['date_naissance'] ?? '';
    $sexe = $_POST['sexe'] ?? '';
    $permis = $_POST['permis'] ?? '';
    $ville = $_POST['ville'] ?? '';
    $formule = $_POST['formule'] ?? '';

    try{
            // Requête de selection et d'insertion d'identifiant pour la ville
        $sql_check=$conn->prepare("SELECT id_ville FROM ville WHERE nom_ville= ?");
        $sql_check->execute([$ville]);
        $sql_ville=$conn->prepare("INSERT INTO ville(nom_ville) VALUES(?)");
        $sql_ville->execute([$ville]);
        $id_ville=$conn->lastInsertId();
        // Requête de selection et d'insertion d'identifiant pour la formule
        $sql_chock=$conn->prepare("SELECT id_formule FROM formules WHERE nom_formule= ?");
        $sql_chock->execute([$formule]);
        $sql_formule=$conn->prepare("INSERT INTO formules(nom_formule) VALUES (?)");
        $sql_formule->execute([$formule]);
        $id_formule=$conn->lastInsertId();
       
        //requête d'insertion dans la table eleve
        $sql = "INSERT INTO eleve (nom_Eleve, prenom_Eleve, email_Eleve, ddn_Eleve, sexe_Eleve, permis_Eleve,id_formule,id_ville)
                VALUES (?,?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$nom, $prenom, $email, $date_naissance, $sexe, $permis,$id_formule,$id_ville]);
        
        echo "Données insérées avec succès ";
    } catch (PDOException $e){
        echo "Erreur lors de l'insertion ";

    }

    header("location: espace_eleve.php"); 
}



?>
