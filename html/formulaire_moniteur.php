<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COFFRE TON PERMIS</title>
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

  <form action="requête_moniteur.php" method="POST">
    <h2>Formulaire Moniteur</h2>

    <label for="nom_moniteur">Nom</label>
    <input type="text" id="nom_moniteur" name="nom_moniteur" required>

    <label for="prenom_moniteur">Prénom</label>
    <input type="text" id="prenom_moniteur" name="prenom_moniteur" required>

    <label for="email_moniteur">Adresse email</label>
    <input type="text" id="email_moniteur" name="email_moniteur" required>

    <label for="ddn_moniteur">Date de naissance</label>
    <input type="date" id="ddn_moniteur" name="ddn_moniteur" required>

    <label for="ville_moniteur">Ville</label>
    <input type="text" id="nom_moniteur" name="ville_moniteur" required>

    <label for="sexe_moniteur">Sexe</label>
    <select id="sexe_moniteur" name="sexe_moniteur" required>
      <option value="Masculin">Masculin</option>
      <option value="Feminin">Feminin</option>
      <option value="autre">Autre</option>
    </select>

    <button type="submit">Enregistrer</button>
  </form>
</body>
    <footer>
        <p>©️ Projet Annuel 2024-2025
            <br>Aurelie(1,52 m), the baby, Claude Marvine MBOUROU
            <br>Tous droits réservés
        </p>
    </footer>
</html>