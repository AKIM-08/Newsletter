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
$postData = $_POST;
$error = null;
$success = null;

if (
    !isset($postData['email'])
    || !filter_var($postData['email'], FILTER_VALIDATE_EMAIL)
    || empty($postData['nom'])
    || trim($postData['nom']) === ''
    || empty($postData['numero'])
    || trim($postData['numero']) === ''
    || trim(!preg_match("/^\+\d{1,4} \d{6,15}$/", $postData['numero']))
) {
    $error = 'Il faut un numéro et une addresse email valide pour s\'inscrire !';
} else {
    $success = 'Inscription validée !';
}
?>


<?php if ($error) : ?>
    <div class="alert alert-danger">
        <?= $error ?>
    </div>
    <a style="margin-left:8rem" class="btn btn-primary" href="/index.php" role="button">Reprendre</a>
<?php endif ?>

<?php if ($success) : ?>
    <div class="alert alert-success">
        <?= $success ?>
    </div>
    <p class="text-center">Vous êtes maintenant inscrit à la newsletter et allez recevoir un mail à la prochaine vague.</p>
<?php endif ?>