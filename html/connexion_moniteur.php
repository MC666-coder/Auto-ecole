<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion_moniteur</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h1>connexion_moniteur</h1>
<form action="requêteconn_moni.php" method="POST">

<h2>Connectez-Vous</h2>

<label for="nom_elv">Nom:</label>
<input type="text" id="nom_connmoni" name="nom_connmoni" required><br>

<label for="prenom_elv">Prénom:</label>
<input type="text" id="prenom_connmoni" name="prenom_connmoni" required><br>

<label for="email_elv">Mail:</label>
<input type="text" id="email_connmoni" name="email_connmoni" required><br>
<button type="submit" >Se connecter</button>
</form>
</body>
    <footer>
        <p>©️ Projet Annuel 2024-2025
            <br>Aurelie(1,52 m), the baby, Claude Marvine MBOUROU
            <br>Tous droits réservés
        </p>
    </footer>
</html>