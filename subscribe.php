<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/pictures/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <?php 
        $title = 'Confirmation_Inscription-MindFuel';
        require_once 'utils.php';
    ?>
    <title><?= $title ?></title>
</head>


<?php 
require 'config/db.php';
$postData = $_POST;
$error = null;
$success = null;
// vérification de la validité des champs remplis : nom, prenom, email, numéro
if (
    !isset($postData['email'])
    || !filter_var($postData['email'], FILTER_VALIDATE_EMAIL)
    || empty($postData['nom'])
    || trim($postData['nom']) === ''
    || empty($postData['prenom'])
    || trim($postData['prenom']) === ''
    || empty($postData['numero'])
    || trim($postData['numero']) === ''
    || trim(!preg_match("/^\+\d{1,4} \d{6,15}$/", $postData['numero']))
) {
    // message d'erreur en cas de format de numéro non respecter ou email non valide
    $error = 'Il faut un numéro et une addresse email valide pour s\'inscrire !';
} else {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $number = $_POST['numero'];
        $email = $_POST['email'];
        // verification de l'email pour voir s'il n'existe pas déjà, $verifie va vérifier si l'email existe après l'avoir use avec execute() et fetch() sert à récupérer les résultats de cette action
            if (!empty($prenom) && !empty($nom) && !empty($number) && !empty($email)) {
                $sql_vérifie = 'SELECT email FROM users where email = :email';
                $verifie = $pdo->prepare($sql_vérifie);
                $verifie->execute(['email' => $_POST['email']]);
                if ($verifie->fetch()) {
                        $error2 = 'Cet email est déjà lié à un compte, veuillez réessayer !';
                    } else {
                        // dans le cas où l'email est valide et n'existe pas on insère les données dans la bd 
                        $requete = $pdo->prepare('INSERT INTO users(first_name, name, number, email) VALUE (:first_name, :name, :number, :email)');
                        $requete->bindvalue(':first_name', $prenom);
                        $requete->bindvalue(':name', $nom);
                        $requete->bindvalue(':number', $number);
                        $requete->bindvalue(':email', $email);
                        $requete->execute();
                        $success = 'Inscription validée !';
                    }
                }
            }
    }
?>

// affichage des messages 
<?php if ($error) : ?>
    <div class="alert alert-danger">
        <?= $error ?>
    </div>
    <div class="d-flex justify-content-center">
        <a class="btn btn-primary text-center" href="/index.php" role="button">Reprendre</a>
    </div>
<?php endif ?>

<?php if ($error2) : ?>
    <div class="alert alert-danger">
        <?= $error2 ?>
    </div>
    <div class="d-flex justify-content-center">
        <a class="btn btn-primary text-center" href="/index.php" role="button">Reprendre</a>
    </div>
<?php endif ?>

<?php if ($success) : ?>
    <div class="alert alert-success">
        <?= $success ?>
    </div>
    <p class="text-center">Vous êtes maintenant inscrit à la newsletter et allez recevoir un mail à la prochaine vague.</p>
<?php endif ?>