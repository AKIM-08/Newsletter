<?php
// chargement de la BD et du fichier .env.php, ici on charge .env.php uniquement à cause la clé API puisque les infos de la BD sont déjà dans db.php via un require
require_once 'config/.env.php';
require_once 'config/db.php'; 

// selectionner le prenom et l'email depuis la base de donnée, la commande fetchAll sert à récuperer tous les résultats de la requête
$sql = "SELECT first_name, email FROM users";
$stmt = $pdo->query($sql);
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
// récupération du message à envoyé 
$htmlMessage = file_get_contents('data/message/message.html');

// boucle pour parcourir chaque utilisateur et lui envoyé un mail personnalisé via l'API de elastic-email 
foreach ($users as $user) {
    $email = $user['email'];
    $firstName = $user['first_name'];

    $message = str_replace('{{prenom}}', $firstName, $htmlMessage);

    // gestion de l'expéditeur, utilisateurs et du message à envoyé par mail 

    $postData = [
        'apikey' => ELASTIC_API_KEY,
        'from' => 'johndoe@exemple.com',  // email de l'expéditeur 
        'fromName' => 'Newsletter',
        'to' => $email,
        'subject' => 'Ta newsletter du jour ✉️',
        'bodyHtml' => $message,
        'isTransactional' => false 
    ];

    // config de l'API 

    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => 'https://api.elasticemail.com/v2/email/send',
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($postData),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER => false
    ]);
    $result = curl_exec($ch);
    $error = curl_error($ch);
    curl_close($ch);

    // message d'erreur ou de confirmation de l'envoi

    if ($error) {
        echo "❌ Erreur pour $email : $error\n";
    } else {
        echo "✅ Email envoyé à $email\n";
    }
}
?>
