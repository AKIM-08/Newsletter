<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="icon" href="assets/pictures/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Funnel+Display:wght@300..800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <?php 
        $title = 'MindFuel';
        require_once 'utils.php';
    ?>
    <title><?= $title ?></title>
</head>
<body>
    <?php
    require 'assets/template/header.php' 
    ?>
    <section class="position-relative">
            <span>
                <img src="/assets/pictures/woman.webp" class="img-fluid" alt="people">
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-50"></div>
                <div class="position-absolute top-50 start-50 translate-middle text-white">
                    <h1 class="h1">Débutez votre journée fortement avec des mots forts !</h1>
                </div>
            </span>
    </section>
    <h2 class="mt-4 text-center h2" id="about">MINDFUEL</h2>
    <section class="text">
        <p class="text-center p-3 fs-4 fs-md-3 fs-lg-1">
            🌟 Reprends le contrôle de tes journées, un mail à la fois. <br>
            Tu veux te lever chaque matin avec une motivation claire, <br>
            une direction, un mindset solide ? <br><br>
            Mindfuel te livre chaque semaine des pensées courtes, <br>
            des réflexions puissantes et des leviers concrets pour bâtir  <br>
            une version plus forte et plus disciplinée de toi-même. <br>
            Pas de blabla. Juste de l'inspiration, de la stratégie, <br>
            et du feu intérieur. <br><br><br>
            🔥 Rejoins ceux qui veulent avancer chaque jour, sans excuses. <br>

            📩 Inscris-toi maintenant. Ta nouvelle énergie commence ici.
        </p>
    </section>  
    <section class="other-text">
         <h3 class="text-center" id="sign_up">S'inscrire à la newsletter</h3>
        <div class="container py-5 px-3">
            <form action="/subscribe.php" method="POST" class="form">
                <div class="mb-3">
                    <label class="form-label">Prénom</label>
                    <input type="text" class="form-control" name="prenom" placeholder="John" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nom</label>
                    <input type="text" class="form-control" name="nom" placeholder="Doe" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Numéro</label>
                    <input type="text" class="form-control" name="numero" placeholder="+225 0101010101" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="johndoe@gmail.com" required>
                    <div class="form-text">Nous ne partagerons jamais votre addresse élèctronique</div>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" required>
                    <label class="form-check-label">J'ai lu et j'approuve</label>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary "><i class="bi bi-person-add"></i> S'inscrire</button>
                </div>
            </form>
        </div>
    </section>

    <?php require 'assets/template/footer.php'  ?>
</body>
</html>