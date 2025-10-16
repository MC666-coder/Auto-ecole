<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Document</title>
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
<h1>Formulaire d'Élève</h1>
<form action="requête_eleve.php" method="POST">

    <label for="nom">Nom :</label><br>
    <input type="text" id="nom" name="nom" required>

    <label for="prenom">Prénom :</label><br>
    <input type="text" id="prenom" name="prenom" required>

    <label for="email">Mail :</label><br>
    <input type="email" id="email" name="email" required>

    <label for="date_naissance">Date de Naissance:</label><br>
    <input type="date" id="date_naissance" name="date_naissance" required>

    <label for="sexe">Sexe :</label><br>
    <select id="sexe" name="sexe" required>
        <option value="masculin">Masculin</option>
        <option value="féminin">Féminin</option>
        <option value="autre">Autre</option>
    </select>
    <label for="sexe">Permis :</label><br>
    <select id="sexe" name="permis" required>
        <option value="Permis A">Permis A</option>
        <option value="Permis B">Permis B</option>
        <option value="Permis C">Permis C</option>
    </select>

    <label for="formule">formules :</label><br>
    <select id="formule" name="formule" required>
        <option value="Départ_Rapide">Départ_Rapide</option>
        <option value="Coffre fort">Coffre fort</option>
        <option value="Aventure">Aventure</option>
        <option value="VIP(Very Importannt Permis)">VIP(Very Importannt Permis)</option>
    </select>

    <label for="ville">Ville:</label><br>
    <input type="text" id="ville" name="ville" required>

    <button type="submit">Soumettre</button><br>
</form>
</body>
    <footer>
        <p>©️ Projet Annuel 2024-2025
            <br>Aurelie(1,52 m), the baby, Claude Marvine MBOUROU
            <br>Tous droits réservés
        </p>
    </footer>
</html>