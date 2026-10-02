# Cahier des charges SAÉ (2026-2027)

## Structure type du Cahier des Charges  
 - **1 Introduction :** Information générale sur le document, les objectifs du document, sa structure et les documents référencés.

 - **2 Énoncé :** Description détaillée du problème à résoudre, le contexte, les objectifs du projet. Si besoin, on fait une présentation de l’existant. Définition des objectifs que doit atteindre la solution

 - **3 Pré-requis :** Connaissances requises, ressources matérielles et logicielles, compétences nécessaires

 - **4 Priorités :** Les priorités éventuelles du développement si elles ont été fixées avec l’accord du client.




## Introduction  
#### *Information générale sur le document, les objectifs du document, sa structure et les documents référencés.*  


 > Dans le cadre de la formation BUT (Bachelor universitaire de Technologies), les étudiants doivent réaliser par groupe de 4 à 5 une application web écrite essentiellement en PHP & MySQL qui aura pour but de proposer différents modules de type jeux, défis ou énigmes.  

 > L’objectif de ce document est de fournir un cahier des charges qui permettra à notre équipe d’avoir une vision d’ensemble sur les objectifs et les différentes contraintes du projet afin de pouvoir répondre au mieux aux attentes de nos clients.

 > Ce cahier des charges sera structuré en plusieurs parties qui porteront sur la définition des objectifs et des attentes de nos clients, les ressources que nous utiliserons ainsi que les pré-requis pour le bon déroulement du projet et l’organisation/les priorités du projet.  






## Enoncé
#### *Description détaillée du problème à résoudre, le contexte, les objectifs du projet. Si besoin, on fait une présentation de l’existant. Définition des objectifs que doit atteindre la solution*  


### Objectif
 > Mettre en place une application web écrite essentiellement en PHP & MySQL qui aura pour but de proposer différents modules de type jeux, défis ou énigmes.  
 > Cette application web sera par la suite possiblement utilisé dans le cadre de 	la journée d’intégration des élèves de première année de BUT informatique 	lors de l’année scolaire 2027-2028.  
 > Chaque module de type défis-jeu sera réalisée dans le cadre de différentes 	ressources et sera donné par le professeur enseignant cette matière.  
 > Le système sera installé sur un Raspberry PI (nano-ordinateur monocarte).
Un logo sera créé par notre équipe pour l’application web.  
 > L'utilisateur pourra se créer un compte (sans confirmation d’inscription), demander sa suppression et modifier son mot de passe depuis son espace personnel.  
 > Il pourra s’arrêter pendant qu’il joue à un module et reprendre sa progression quand il le souhaite.
L’administrateur système aura accès aux journaux d’activités de l’application web mais n'accède pas aux fonctionnalités de l’application web.  
 > Le design de l’application web doit être professionnel et doit respecter une adaptabilité sur différentes plateformes (ordinateur, mobile, tablette…)

 > Le client souhaite dans un premier temps une plateforme statique (site internet composé de fichiers (HTML, CSS et JavaScript pré-construits et livrés tels quels au navigateur de l'utilisateur) qui permettra :  
 > - Une navigation fictive de la page d’accueil vers une page d'authentification  
 > - Une navigation vers une page du module contenant un formulaire fictif qui renverra des données fictives  



### Identification des objets et acteurs  
 - **Objet :** Application/Plateforme Web  
 - **Acteurs :** un administrateur du système d’exploitation (qui va héberger la plateforme web), administrateur web (l’administrateur de la plateforme), un joueur inscrit et un visiteur  
 - **But :** proposer une appli interactivé (avec des jeux, défis ou énigmes) pour la journée d’intégration des étudiants INFO1 de l’année prochaine  











### Identification des actions  

| Objet | Acteur | Action |
| :-------- | :-------- | :-------- |
| Supervision | Admin Système | Accéder aux logs et journaux d’activité |
| Inscription | Visiteur | S’inscrire sur la plateforme web |
| Administration | Admin Web | Gestion des inscrits |
| Mot de passe | Joueur Inscrit | Changer son mot de passe sur son profil |
| Désinscription | Joueur Inscrit | Demander à l’administrateur web sa désinscription |
| Jeu | Joueur Inscrit | Accéder aux défis |
| Défi | Joueur Inscrit | Suspendre un défi commencé et le reprendre plus tard |
| Sauvegarde | Système | Sauvegarder la progression d’un défi |


## Pré-requis
#### *Connaissances requises, ressources matérielles et logicielles, compétences nécessaires*

**\- Compétences/connaissances requises**  
 - Savoir construire une page statique HTML/CSS  
 - Rédiger une documentation claire et la maintenir à jour par rapport au code  
 - Maîtriser l’installation et le paramétrage des serveurs web et SGBD  
 - Maîtriser les langages PHP & SQL  
 - Présenter son travail en anglais  

**\- Ressources matérielles requises**  
 - RPI 4 ou RPI 5  
 - Carte SD  

**\- Ressources logicielles requises**  
 - Compte GitHub ou GitLab  
 - Environnement de développement  




## Priorités
#### *Les priorités éventuelles du développement si elles ont été fixées avec l’accord du client.*  
