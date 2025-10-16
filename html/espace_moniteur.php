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
    <title>Espace Moniteur</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h1> bienvenue sur votre Espace Moniteur</h1>
    <div class="nav-contain">
        <div class="liens">
            <a href="../html/A propos.php">A propos</a>
            <a href="../html/connexion_moniteur.php">connexion</a>
            <a href="../html/contact.php">Contact</a>
            <a href="../html/accueil.php">Accueil</a>
            <a href="../html/mes_demandes.php">Mes demandes</a>
        </div>
        <i class="fa-solid fa-bars hambur" onclick="hamburg()"></i>
        <div class="dropdown">
            <div class="liens">
                <a href="../html/A propos.php">A propos</a>
                <a href="../html/connexion_moniteur.php">connexion</a>
                <a href="../html/contact.php">Contact</a>
                <a href="../html/accueil.php">Accueil</a>
                <a href="../html/mes_demandes.php">Mes demandes</a>

                <i class="fa-solid fa-xmark cancel" onclick="cancel()"></i>
            </div>
        </div>
    </div>
<div id="identifiant_moniteur">
        <?php if($moniteurData): ?>
            <p><span class="mat_moniteur">Matricule moniteur: </span> <?= htmlspecialchars($moniteurData['id_moniteur']) ?></p>
            <p><span class="Nom_moniteur">nom: </span> <?= htmlspecialchars($moniteurData['nom_moniteur']) ?></p>   
        <?php else: ?>
            <p>Aucunes données de connexion!!</p>
        <?php endif; ?>
    </div>


</div>
    
    
</body>
    <footer>
        <p>©️ Projet Annuel 2024-2025
            <br>Aurelie(1,52 m), the baby, Claude Marvine MBOUROU
            <br>Tous droits réservés
        </p>
    </footer>
</html>