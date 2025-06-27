<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <?php
    require 'assets/template/header.php' 
    ?>

        <h3>Newsletter</h3>
    <section class="about">
        <div class="row">
            <div class="col-12 text-truncate">
                <p>
                    🌟 Reprends le contrôle de tes journées, un mail à la fois. <br>
                    Tu veux te lever chaque matin avec une motivation claire, <br>
                    une direction, un mindset solide ? <br><br>
                    Notre newsletter te livre chaque semaine des pensées courtes, <br>
                    des réflexions puissantes et des leviers concrets pour bâtir  <br>
                    une version plus forte et plus disciplinée de toi-même. <br>
                    Pas de blabla. Juste de l'inspiration, de la stratégie, <br>
                    et du feu intérieur. <br><br><br>
                    🔥 Rejoins ceux qui veulent avancer chaque jour, sans excuses. <br>

                    📩 Inscris-toi maintenant. Ta nouvelle énergie commence ici.
                    </p>
            </div>
        </div>
    </section>    
    <section>
        <h3>S'inscrire à la newsletter</h3>
        <form>
            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" required>
                <div class="form-text">Nous ne partagerons jamais votre addresse élèctronique</div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" required>
                <label class="form-check-label">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>
    </section>
   

    <?php require 'assets/template/footer.php'  ?>
</body>
</html>