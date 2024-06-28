# The Artbox

![The Artbox](img/the-artbox.png)

***<p>"The Arbox était à la base un site en HTML et CSS pour présenter les œuvres exposées dans leur galerie.<br>***
***La cliente a souhaitée une refonte du site pour qu’il soit plus facilement modifiable.<br>*** 
***Mission : factoriser le code du site avec PHP !"</p>***

### Les étapes
  - Identifier les éléments à externaliser.
  - Créer les fichiers php.
  - Incérer les code HTML correspondant dans chaque fichier.
  - Modifier les pages existantes pour utiliser `include`.
  - Changer l’extension de chaque fichier HTML en .php afin qu’ils puissent interpréter le code PHP.
  - Insertion des includes.
  - Vérification et test.
  - Commentaire et documentation ***(important pour la cliente)***
   - Ajouter des commentaires dans les fichiers `header.php` et `footer.php` pour indiquer leur fonction.
   - Documenter également dans le code principal où se trouve l’inclusion des fichiers pour que d’autres développeurs comprennent la structure.

### Création des oeuvres
  - Analyser les informations actuelles des œuvres.
  - Noter les identifiants uniques pour chaque œuvre.
  - Crée le fichier `oeuvres.php` contenant un tableau PHP qui contient toutes les informations des œuvres.

### Inclusion du fichier
  - Inclure le fichier `oeuvres.php` dans les pages d’accueil et de détail des œuvres ***(avec la fonction `include`)***.

### Utilisation du tableau
   - On remplace les descriptions d’œuvres en dur par des accès dynamiques au tableau `$oeuvres`.
   - Sur la page d’accueil, on parcours le tableau pour afficher les œuvres.
   - Sur la page de détail d’une œuvre, on utilise l’identifiant de l’œuvre pour accéder aux informations spécifiques depuis le tableau.
   - Factoriser la page d'acceuil et la page de détail.
   - Vérification et test.
  
#### Voir le projet en ligne : 🔗 [The Artbox](https://jean-assoumani.github.io/the-artbox/)
***<p>Projet 5 - Premiers pas sur le langage PHP - Openclassrooms 2024</p>***