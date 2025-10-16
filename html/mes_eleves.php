<?php
include('db.php');
include('requête_moniteur.php');
include('requêteconn_moni.php');
if(isset($_GET['type']) && $_GET['type'] === "moni" && isset($_GET['email'])){
    $email = $_GET['email'];
    $moniteur= "SELECT id_moniteur, nom_moniteur FROM moniteur where email_moniteur like '$email'";
}
else{
    $moniteur= "SELECT id_moniteur, nom_moniteur FROM moniteur ORDER BY  id_moniteur DESC LIMIT 1 ";

}

$stnt=$conn->prepare($moniteur);
$stnt->execute();
$moniteurData = $stnt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mes_eleves_acceptés</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="nav-contain">
        <div class="liens">
            <a href="../html/A propos.php">A propos</a>
            <a href="../html/connexion_moniteur.php">connexion moniteur</a>
            <a href="../html/contact.php">Contact</a>
            <a href="../html/accueil.php">Accueil</a>
            <a href="../html/mes_demandes.php">mes_demandes</a>

        </div>
        <i class="fa-solid fa-bars hambur" onclick="hamburg()"></i>
        <div class="dropdown">
            <div class="liens">
                <a href="../html/A propos.php">A propos</a>
                <a href="../html/connexion_moniteur.php">connexion moniteur</a>
                <a href="../html/contact.php">Contact</a>
                <a href="../html/accueil.php">Accueil</a>
                <a href="../html/mes_demandes.php">mes_demandes</a>

                <i class="fa-solid fa-xmark cancel" onclick="cancel()"></i>
            </div>
        </div>
    </div>
     <div id="identifiant_moniteur">
        <?php if($moniteurData): ?>
            <p><span class="mat_moniteur">Matricule moniteur: </span> <?= htmlspecialchars($moniteurData['id_moniteur']) ?></p>
            <p><span class="nom_moniteur">nom: </span> <?= htmlspecialchars($moniteurData['nom_moniteur']) ?></p>   
        <?php else: ?>
            <p>Aucunes données de connexion!!</p>
        <?php endif; ?>
    </div>
    <div class="profil">
        <?php
            include('db.php');
            include('requête_moniteur.php');
            include('choix_eleve.php');
            include('requête_eleve.php');

            $dmd=$conn->prepare("SELECT 
                                    eleve.nom_Eleve, 
                                    eleve.id_Eleve,
                                    eleve.prenom_Eleve,
                                    eleve.permis_Eleve,
                                    ville.nom_ville,
                                    formules.nom_formule,
                                    demande.status,
                                    demande.id_demande
                                FROM 
                                    eleve
                                LEFT JOIN 
                                    ville ON eleve.id_ville = ville.id_ville 
                                LEFT JOIN 
                                    formules ON eleve.id_formule = formules.id_formule
                                LEFT JOIN 
                                    demande ON eleve.id_Eleve = demande.id_Eleve  
                                LEFT JOIN 
                                    moniteur ON demande.id_moniteur = moniteur.id_moniteur  
                                LEFT JOIN 
                                    ville AS ville_moniteur ON moniteur.id_ville = ville_moniteur.id_ville WHERE demande.status='accepté'; 
                                ");
            $dmd->execute();
            $liste= $dmd->fetchALL(PDO::FETCH_ASSOC);
            foreach($liste as $row){
                echo "<div><ul class='bulles'>";
                    echo "<li>Matricule Eleve:".$row['id_Eleve']."</li>";
                    echo "<li>nom:".$row['nom_Eleve']."</li>";
                    echo "<li>prenom:".$row['prenom_Eleve']."</li>";
                    echo "<li>permis:".$row['permis_Eleve']."</li>";
                    echo "<li>ville:".$row['nom_ville']."</li>";
                    echo "<li>formule souhaitée:".$row['nom_formule']."</li>";
                    echo "<li>matricule de la demande:".$row['id_demande']."</li>";
                    echo "<li>status de la demande:".$row['status']."</li>";
                    echo "</ul></div>";
            }
        ?>
    </div>

    
</body>
    <footer>
        <p>©️ Projet Annuel 2024-2025
            <br>Aurelie(1,52 m), the baby, Claude Marvine MBOUROU
            <br>Tous droits réservés
        </p>
    </footer>

</html>