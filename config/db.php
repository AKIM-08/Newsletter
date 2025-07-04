<?php 
    require '.env.php'; // le fichier .env.php est le fichier qui contient les informations de la base de donnée, vous ne le trouverez pas parmi les dossier
// requêtes sql pour la connexion à la base de donnée
    try {
        $pdo = new PDO ("mysql:host=$hostname;dbname=$dbname", $user, $keypass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Echec de la connexion : ' . $e->getMessage();
    }
    
?>