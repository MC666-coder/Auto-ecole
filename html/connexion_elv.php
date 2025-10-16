<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion_eleve</title>
    <link rel="stylesheet" href="../css/styles.css">

</head>
<body>
    <h1>connexion_eleve</h1>
<form action="requêteconn_elv.php" method="POST">
    

<h2>connectez-vous</h2>

<label for="nom_elv">Nom</label>
<input type="text" id="nom_elv" name="nom_connelv" required>

<label for="prenom_elv">Prénom :</label>
<input type="text" id="prenom_elv" name="prenom_connelv" required>

<label for="email_elv">Mail :</label><br>
<input type="text" id="email_connelv" name="email_connelv" required>
<button type="submit" >Soumettre</button>
</form>
</body>
</html>