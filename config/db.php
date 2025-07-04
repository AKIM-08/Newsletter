<?php 
    require '.env.php';

    try {
        $pdo = new PDO ("mysql:host=$hostname;dbname=$dbname", $user, $keypass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Echec de la connexion : ' . $e->getMessage();
    }
    
?>