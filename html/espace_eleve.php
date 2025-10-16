<?php
include("db.php");
include('requête_eleve.php');
include('requêteconn_elv.php');
if(isset($_GET['type']) && $_GET['type'] === "conn" && isset($_GET['email'])){      
    $email =$_GET['email'];
    $eleve= "SELECT eleve.id_Eleve, eleve.nom_Eleve, eleve.permis_Eleve,formules.nom_formule FROM eleve INNER JOIN formules ON eleve.id_formule=formules.id_formule where eleve.email_Eleve like '$email'";
    
}
else{
    $eleve= "SELECT eleve.id_Eleve, eleve.nom_Eleve, eleve.permis_Eleve,formules.nom_formule FROM eleve INNER JOIN formules ON eleve.id_formule=formules.id_formule ORDER BY  eleve.id_Eleve DESC LIMIT 1 ";
}

$stnt=$conn->prepare($eleve);
$stnt->execute();
$eleveData = $stnt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace_eleve</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body id="espace_eleve">
    <div class="nav-contain">
            <div class="liens">
                <a href="../html/A propos.php">A propos</a>
                <a href="../html/catégorie.php">Catégorie</a>
                <a href="../html/Formules.php">Formules</a>
                <a href="../html/contact.php">Contact</a>
                <a href="../html/accueil.php">Accueil</a>
            </div>
            <i class="fa-solid fa-bars hambur" onclick="hamburg()"></i>
            <div class="dropdown">
                <div class="liens">
                    <a href="../html/A propos.php">A propos</a>
                    <a href="../html/catégorie.php">Catégorie</a>
                    <a href="../html/Formules.php">Formules</a>
                    <a href="../html/contact.php">Contact</a>
                    <a href="../html/accueil.php">Accueil</a>
                    <i class="fa-solid fa-xmark cancel" onclick="cancel()"></i>
                </div>
            </div>
    </div>
    <h1 id=titre_eleve>ESPACE ELEVE</h1>
    <h2 id="introduce_eleve">Bienvenue sur votre espace personnel.</h2>
    <div id="identifiant_eleve">
        <?php if($eleveData): ?>
            <p><span class="mat_eleve">Matricule Élève: </span> <?= htmlspecialchars($eleveData['id_Eleve']) ?></p>
            <p><span class="nom_eleve">nom: </span> <?= htmlspecialchars($eleveData['nom_Eleve']) ?></p>
            <p><span class="permis_eleve">Permis: </span> <?= htmlspecialchars($eleveData['permis_Eleve']) ?></p>
            <p><span class="permis_eleve">Formule: </span> <?= htmlspecialchars($eleveData['nom_formule']) ?></p>   
        <?php else: ?>
            <p>Aucunes données de connexion!!</p>
        <?php endif; ?>
    </div>

    <div class="profil">
        <?php
            include('db.php');
            include('requête_moniteur.php');
            include('requête_eleve.php');
            
            $sth=$conn->prepare("SELECT moniteur.id_moniteur,moniteur.nom_moniteur,moniteur.prenom_moniteur,moniteur.email_moniteur,nom_ville FROM moniteur INNER JOIN ville ON moniteur.id_ville=ville.id_ville");
            $sth->execute();
            $utilisateur= $sth->fetchALL(PDO::FETCH_ASSOC);
            foreach($utilisateur as $row){
                echo "<div><ul class='bulles'>";
                    echo "<li>matricule moniteur:".$row['id_moniteur']."</li>";
                    echo "<li>Nom:".$row['nom_moniteur']."</li>";
                    echo "<li>Prenom:".$row['prenom_moniteur']."</li>";
                    echo "<li>email:".$row['email_moniteur']."</li>";
                    echo "<li>ville:".$row['nom_ville']."</li>";
                    if(!empty($eleveData) && isset($eleveData['id_Eleve'])){
                        echo "<form action='choix_eleve.php' method='POST'>
                            <input type='hidden' name='id_moniteur' value='".$row['id_moniteur']."'>
                            <input type='hidden' name='id_Eleve' value='".$eleveData['id_Eleve']."'>

                            <button type='submit' name='assigner'>Ajouter</button>
                            </form>";
                
                    }else{
                        echo'<div style="background-color: #ffe5e5; color: #a94442; padding: 12px; border: 1px solid #f5c6cb; border-radius: 5px; margin-top: 10px;">
                            ⚠️ <strong>Erreur :</strong> veuillez vous connecter avant de faire quoi que ce soit!!!
                        </div>';
                    }
                echo"</ul></div>";
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
