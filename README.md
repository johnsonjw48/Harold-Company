# Création d’une interface web dynamique pour une entreprise immobilière

"Harold Company" est une jeune startup implantée à Cotonou, dans le sud du Benin. Dans ce projet, je développe son site web de gestion en utilisant principalement PHP et avec une base de données MySQL. 


### Fonctionnalités du site : 

#### Pour tous
Système d'inscription et connexion : chaque utilisateur s’identifie avec son login et mot de passe. Si le système le reconnait en tant que q'admin, il aura alors les accès correspondants.

#### Pour l'admin (le gerant du site)
1. Déposer une annonce 
2. Consulter/modifier/supprimer une annonce
3. Tout les accès de l'utilisateur lambda

#### Pour l'utilisateur lambda
1. Utiliser le filtre de recherche
2. Consulter les annonces
3. Reserver  un bien
4. Consulter ses reservations
5. Annuler une reservation


### Conception : 
Ce projet est fait en programmation orientée objet (POO) et structurer en MVC (Modèle, Vue Contrôleur).


### Technologies utilisées : 

##### Front end:  

* HTML
* CSS
* JavaScript
* jQuerry

##### Back end: 

* PHP
* MySQL


La validation des formulaires (inscription et connexion) côté client est  faite en JavaScript. Je me suis protégé des failles XSS et injection SQL par hachage de mot de passe. Si un utilisateur est connecté, son prénom et son nom sont sur le header durant toute la navigation. 

Sur  la page d’accueil sont listé les dernières annonces déposées par l'admin. 



### Comment lancer le projet? 

Accéder au dossier dans lequel les fichiers ont été stocké via votre navigateur web en passant par vos serveurs.



### Bref apperçu de Harold Company : 

"HAROLD COMPANY" est une entreprise immobilière basé au Bénin. Elle permet aux usagers de pouvoir confier à une entreprise de confiance la gestion de leurs besoins immobiliers. Les services offerts sont entre autres, la construction de biens immobiliers, la gestion de la vente d’appartement, de maison, de studio ou autres et l’aide à trouver un bien immobiliers selon les besoins du client. Plusieurs entreprises concurrentielles sont sur le marché. HAROLD COMPANY se distingue de ses entreprises par ses efforts constant à digitaliser et numériser ses outils pour créer un espace de confort à ses clients.
