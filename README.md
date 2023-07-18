<img src='./assets/images/logo_car_title.png' width="80">

## Projet Garage Parrot

Le Projet Garage Parrot (PEP) c'est un page internet d'une garage fictif dévélopé comme projet d’études du cours Graduate Fullstack de la formation Studi.

## Le client

Vincent Parrot a 15 années d'expérience dans le marché de la réparation automobile. Il a décidé d'ouvrir son propre garage à Toulouse en 2021. Depuis 2 ans, il propose un large gamme de services: réparation de la carrosserie et la mécanique des voitures ainsi que leur entretien régulier. En plus de ses services, il met en vente des véhicules d'occasion afin d'agrandir son chiffre d'affaires. Il considère son atelier comme un véritable lieu de confiance pour ses clients. Alors il veut que son garage soit visible sur internet et se faire une place parmi les concurrents.

## Objectif du projet

Créer une application web vitrine pour le Garage V. Parrot en mettant en avant la qualité des services délivrés par son garage.

## Les outils pour le projet

1. **SERVEUR**

- Hostinger
- PHP 8.2.4
- Extension PHP: PDO
- MariaDB 10.4.28
  <br>

2. **FRONT**

- HTML 5
- CSS 3
- JavaScript
- Bootstrap 4.3.1
- jQuery 3.3.1
- jQuery UI 1.13.2
  <br>

3. **BACK**

- PHP 8.2.4 sous PDO
- MYSQL
  <br>

### LE SITE INTERNET

https://garageparrot.net/

## Pour travailler en local

1.  <u>Cloner le projet</u>
    <br>
2.  <u>Communiquer avec le backend</u>
    Pour travailler avec la base de donnée (bdd), vous devez faire un petit configuration dans le fichier gparrot.sql

    - changer **lemotutilisateur** pour votre mot d'utilisateur de la bdd.
    - changer **votremotdepasse** si vous avez un pour la bdd.
    - changer **votreemail**. (en local il n'envoie pas des e-mails)
      <br>

          define("_DOMAIN_", "localhost");
          define("_GARAGE_IMAGES_FOLDER_", '/uploads/images/');
          define("_ASSETS_IMAGES_FOLDER_", '/assets/images/');
          define("_ADMIN_ITEM_PER_PAGE_",5);
          define("_DB_NAME_",'garageparrot');
          define("_DB_USER_",'**lemotutilisateur**');
          define("_DB_PASSWORD_",'**votremotdepasse**');
          define("_APP_EMAIL_",'**votreemail**');

3.  <u>Importer dans phpAdmin le fichier gparrot.sql</u>
    <br>
4.  <u>Dans xampp, wamp ou mamp activez Apache et Mysql</u>
    <br>
5.  <u>Pour lancer votre projet en local, ecrivez dans le terminal de votre IDE:</u>

    - php -S localhost:3000
      <br>

## Les diagrammes

Si vous avez VSCode comme IDE, vous pouvez téléchargé l'extension **Draw.io integration** et voir les fichiers dans les dossiers diagrammes du projet. Dans le cas de n'est pas avoir cette extension, vous pouvez aller sur le site https://app.diagrams.net/ et ouvrir les fichiers .drawio

<hr>
## Se connecter
**Utilisateurs concernés:** <u>Administrateur</u> (Vincent Parrot) et <u>employés du garage</u> . Seulement ces deux on le droit de se connecter sur le site.

1- **Vincent Parrot**
Vincent comme cheffe de l'entreprise, gère absolument tous les informations du site web (services, voitures, employés, avis client et les horaires du garage).

2- **Les employés**
Les employés du garage on aussi accès à la connexion du site, mais seulement les voitures et les avis des client.

**ps. Pour question de securité, les codes d'accès au site internet garage parrot sera disponible seulement dans le fichier officiel du projet.**
