Description :
Ce projet est un site web permettant de gérer les inscriptions, les moniteurs, les élèves et les demandes d’affectation dans une auto-école. Il repose sur une base de données MySQL et une interface PHP.

Technologies utilisées :
- HTML / CSS / JavaScript
- PHP
- MySQL (phpMyAdmin)
- WampServer
- Git

Structure de la base de données :
La base "auto_ecole" contient les tables suivantes :
- `ville` : villes disponibles
- `formules` : formules d’inscription
- `moniteur` : informations sur les moniteurs
- `eleve` : informations sur les élèves
- `moniteur_eleve` : lien entre moniteurs et élèves
- `demande` : demandes d’affectation avec statut

Chaque élève est lié à une ville et une formule. Chaque moniteur est lié à une ville. Les affectations et demandes sont gérées via les tables moniteur_eleve et demande.

Configuration :
Le fichier de connexion à la base est déjà présent dans le projet : `db.php`


Contenu de db.php :
--------------------------------------------------
```php
$servername = 'localhost';
$username = 'root';
$dbname = 'auto_ecole';
$password = '';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "erreurBG" . $e->getMessage();
    $conn = NULL;
}
```
--------------------------------------------------

Installation :
1. Cloner le projet :
  ``` git clone https://github.com/MC666-coder/Auto-ecole.git ```

2. Importer la base :
   - Ouvrir phpMyAdmin
   - Créer une base nommée "auto_ecole"
   - Importer le fichier sql/auto_ecole.sql

3. Lancer le projet :
   - Démarrer WampServer
   - Accéder au site via : ``` http://localhost/Auto-ecole ```

Contact :
Email : mbourouclaudemarvine@gmail.com
LinkedIn : www.linkedin.com/in/claude-marvine-mbourou-ab05a12b7


