<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffre ton permis/contact</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
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
    
    <form class="contact" action="coffre.php" method="post">
        <h1>Contactez-nous</h1>
        Nom:<input type="text" name="nom"><br>
        prenom:<input type="text" name="prenom"><br>
        mail:<input type="text" name="email"><br>
        telephone:<input type="number" name="numero"><br>
        Entrez votre message:<textarea name="message" id="message"></textarea>
        <button id="button_contact" type="submit">Envoyer</button>
    </form>
    
</body>
<footer>
    <p>©️ Projet Annuel 2024-2025
        <br>Aurelie(1,52 m), the baby, Claude Marvine MBOUROU
        <br>Tous droits réservés
    </p>
</footer>
</html>