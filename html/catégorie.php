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
    <header>
    <img class="parking" src="../img/voiture.jpeg" alt="parking" height="250" width="100%">
    <h1 class="titrep">
        CHOISISSEZ VOTRE CATEGORIE DE PERMIS
    </h1>
    <h3 class=titre2>
        Trouvez la formation adaptée à vos besoins
    </h3>
    </header>
    <div class="categories">
         <!--carte1-->
         <div class="cartes">
            <img src="../img/moto.jpeg" alt="permis A">
            <h3>Permis A</h3>
            <p>Formation complète pour une moto.</p>
            <button>En savoir plus</button>
         </div>
     <!--carte2 -->
        <div class="cartes">
        <img src="../img/voiture.jpeg" alt="permis B">
        <h3>Permis B</h3>
        <p>Formation complète pour voiture.</p>
        <button>En savoir plus</button>
       </div>
       <!--carte3 -->
        <div class="cartes">
            <img src="../img/camions.jpeg" alt="permis C">
            <h3>Permis C</h3>
            <p>Formation poids lourds.</p>
            <button>En savoir plus</button>
        </div>
    </div>
    <!-- <div class="filtres">
        <h2>Filtres</h2>
        <form id="filtres">
            <label>
               <input type="checkbox" name="type" value="auto">
                Auto-école
              </label>
              <label>
                <input type="checkbox" name="type" value="moto">
                Moto-école
              </label>
              <label>
                <input type="checkbox" name="type" value="poids-lourd">
                Formation poids-lourds
              </label>
        
              <label for="region">Région :</label>
              <select id="region" name="region">
                <option value="paris">Paris</option>
                <option value="lyon">Lyon</option>
                <option value="marseille">Marseille</option>
                <option value="nantes">Nantes</option>
                <option value="tours">Tours</option>
                <option value="Nice">Nice</option>
                <option value="bordeaux">Bordeaux</option>
                <option value="toulouse">Toulouse</option>
                <option value="montpellier">Montpellier</option>
              </select>
              
              <button type="submit">Appliquer les filtres</button>
            </form>
          </div>
          <div id="results">
            Les résultats filtrés apparaîtront ici -->
            </label>
        </form>
    </div>
    
    <footer>
        <footer class="footer">
            <div class="footer-container">
              <!-- Colonne 1 : Informations -->
              <div class="footer-column">
                <h4>À propos</h4>
                <p>Nous sommes engagés à vous fournir une formation de conduite de qualité pour garantir votre réussite sur la route.</p>
              </div>
          
              <!-- Colonne 2 : Liens utiles -->
              <div class="footer-column">
                <h4>Liens utiles</h4>
                <ul>
                  <li><a href="../html/Acceuil.html">Accueil</a></li>
                  <li><a href="../html/Apropos.html">Nos services</a></li>
                  <li><a href="../html/contact.html">Contactez-nous</a></li>
                </ul>
              </div>
          
              <!-- Colonne 3 : Contact -->
              <div class="footer-column">
                <h4>Contact</h4>
                <p>Email : coffretonpermis.fr</p>
                <p>Téléphone : +33 7 61 81 42 00</p>

              </div>
              </div>
            <div class="footer-bottom">
              <p>© 2025 Auto-école. Tous droits réservés.</p>
            </div>
          </footer>
          
    </footer>
</body>
</html>