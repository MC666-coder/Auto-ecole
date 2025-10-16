<!DOCTYPE html> 
<html lang="fr"> <!-- Précision de la langue pour le navigateur-->

<head> <!-- Entête du document HTML -->

    <meta charset="UTF-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/styles.css" /> 
    <script type="text/javascript" src="../javascript/java.js"></script> 

    <title>COFFRE TON PERMIS</title> <!-- titre qui s'affiche dans le navigateur -->

</head>

<body>

    <!-- Entête de la page web avec lien pour naviguer entre les pages -->
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

    <!-- Section de présentation de l'équipe -->
    <section>
        <h1>Présentation de l'équipe :</h1>

        

        <!-- Fenêtre présentation 1,52 m -->
        <fieldset id="Aurelie" class="team">
            <legend class="name">1,52 m</legend>
            <div class="haut">
                <div class="photo">
                    <img src="" alt="Photo Profil : 1,52 m">
                </div>
                <div class="profil">
                    <p>Age : [...]
                        <br>Formation : 1ère année Bachelor Informatique
                        <br>Ecole : <a href="https://www.esgi.fr/campus-nantes.html">ESGI de Nantes</a>
                    </p>
                </div>
            </div>

            <div class="bas">

                <p>[Quelques mots de présentation]</p>
                <p>Domaine de compétence :
                    <br><i>(Axe : Projet Annuel)</i>
                </p>
                <ul>
                    <li>Compétence 1</li>
                    <li>Compétence 2</li>
                    <li>Compétence 3</li>
                    <li>Compétence 4</li>
                </ul>

            </div>
        </fieldset>

        <!-- Fenêtre présentation Marvine -->
        <fieldset id="marvine" class="team">
            <legend class="name">Claude Marvine MBOUROU</legend>
            <div class="haut">
                <div class="photo">
                    <img src="../img/marvine.jpg" alt="Photo Profil : marvine">
                </div>
                <div class="profil">
                    <p>Age : [...]
                        <br>Formation : 1ère année Bachelor Informatique
                        <br>Ecole : <a href="https://www.esgi.fr/campus-nantes.html">ESGI de Nantes</a>
                    </p>
                </div>
            </div>

            <div class="bas">

                <p>[Quelques mots de présentation]</p>
                <p>Domaine de compétence :
                    <br><i>(Axe : Projet Annuel)</i>
                </p>
                <ul>
                    <li>Compétence 1</li>
                    <li>Compétence 2</li>
                    <li>Compétence 3</li>
                    <li>Compétence 4</li>
                </ul>

            </div>
        </fieldset>

        <!-- Fenêtre présentation the baby -->
        <fieldset id="baby" class="team">
            <legend class="name">The baby</legend>
            <div class="haut">
                <div class="photo">
                    <img src="../img/titouan.jpg" alt="Photo Profil : the baby">
                </div>
                <div class="profil">
                    <p>Age : [...]
                        <br>Formation : 1ère année Bachelor Informatique
                        <br>Ecole : <a href="https://www.esgi.fr/campus-nantes.html">ESGI de Nantes</a>
                    </p>
                </div>
            </div>

            <div class="bas">

                <p>[Quelques mots de présentation]</p>
                <p>Domaine de compétence :
                    <br><i>(Axe : Projet Annuel)</i>
                </p>
                <ul>
                    <li>Compétence 1</li>
                    <li>Compétence 2</li>
                    <li>Compétence 3</li>
                    <li>Compétence 4</li>
                </ul>

            </div>
        </fieldset>
    </section>

    <!-- Section de présentation du projet -->
    <section>
        <h1>Présentation du projet :</h1>
        <p>[Texte de présentation du projet]</p>
    </section>


    <!-- Bas de la page web avec lien pour naviguer entre les pages et copyright -->
    
</body>
<footer>
    <p>©️ Projet Annuel 2024-2025
        <br>Aurelie(1,52 m), the baby, Claude Marvine MBOUROU
        <br>Tous droits réservés
    </p>
</footer>

</html>