📬 Projet : Newsletter de Développement Personnel
Ce projet est une application web simple permettant à des utilisateurs de s’inscrire à une newsletter pour recevoir des messages de développement personnel ainsi que des recommandations de livres.

🎯 Objectif
Suite à un cours sur la création de newsletters, j’ai voulu consolider mes apprentissages avec un exercice pratique : développer un système complet d’inscription à une newsletter, de la collecte des emails jusqu’à l’envoi automatique de messages.

🛠️ Technologies utilisées
HTML, CSS, Bootstrap : pour l’interface utilisateur (front-end)

PHP : pour le traitement des formulaires et la logique serveur (back-end)

MySQL : pour la base de données

Envoi d’emails via une API (Brevo ou Elastic Email) #dans mon cas j'ai utilisé Elastic Email

🗂️ Structure du projet
bash
Copier
Modifier
.
├── assets/                 # Ressources visuelles et style
│   ├── pictures/           # Images (logo, illustration, favicon)
│   ├── style.css           # Feuille de style principale
│   └── template/           # En-tête et pied de page partagés
├── config/
│   └── db.php              # Connexion à la base de données (utilise .env.php)
├── data/
│   ├── message/            # Contenu HTML du message envoyé
│   ├── archives/           # (Prévu) Archives des newsletters
│   └── logs/               # Logs d'envoi ou erreurs
├── index.php               # Page d'accueil avec formulaire d’inscription
├── subscribe.php           # Traitement du formulaire et insertion en base
├── send_newsletter.php     # Script d’envoi de la newsletter
├── utils.php               # Fonctions utilitaires
├── README.md               # Description du projet (ce fichier)
└── .env.php                # ⚠️ Non inclus : infos sensibles (BD, API)
✅ Fonctionnement
L’utilisateur remplit le formulaire sur index.php.

Les données sont vérifiées et stockées dans une base via subscribe.php.

Le script send_newsletter.php permet d’envoyer un email à chaque inscrit via une API d’emailing (Elastic Email ou Brevo).

Le contenu du message est chargé depuis un fichier HTML (data/message/message.html).

🔒 Sécurité
Les informations sensibles (mot de passe de base de données, clé API) sont stockées dans un fichier .env.php qui n’est pas versionné sur GitHub pour des raisons de sécurité.
