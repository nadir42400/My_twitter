<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Page d'inscription</title>
    <link rel="stylesheet" href="../style/bootstrap.min.css" />
    <link rel="stylesheet" href="../style/style_connexion_inscription.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@1,200;1,300&family=Ubuntu+Mono:ital@1&display=swap" rel="stylesheet">
</head>

<body>

    <nav class="nav">
        <a class="nav-link" href="../front connexion inscription/page_de_connexion.php">Connexion</a>
    </nav>
    <h1>Bienvenue sur Twitter</h1>

    <div class="container">
        <div class="hidden-smart">
        <h3>Inscris-toi et viens découvrir twitter</h3>
        <img src="../style/twit.png" class="img-fluid" alt="photo twitter" id="img-twitter">
    </div>

    <div class="inscription">
        <h2>Inscrivez-vous</h2>
        <form action="../back_connexion/addUser.php" method="POST">

            <div class="form">
                <label for="pseudo" class="form-label">Pseudo:</label>
                <input type="text" name="pseudo" class="form-control" placeholder="Ex: pseudo" required /><br><br>
            </div>

            <div class="form">
                <label for="arrobase" class="form_label">@ :</label><br>
                <input type="text" name="arrobase" class="form_control" placeholder="Ex: @pseudo" required /><br><br>
            </div>

            <div class="form">
                <label for="ville" class="form_label">Ville :</label><br>
                <input type="text" name="ville" class="form_control" placeholder="Ex: Lyon" required /><br><br>
            </div>

            <div class="form">
                <label for="mail" class="form-label">Email:</label>
                <input type="text" name="mail" class="form-control" placeholder="Ex: exemple@exemple.com" required /> <br><br>
            </div>

            <div class="form">
                <label for="date de naissance" class="form-label">Date de naissance:</label>
                <input type="date" name="date de naissance" class="form-control" required /> <br><br>
            </div>

            <div class="form">
                <label for="password" class="form-label">Mot de passe:</label>
                <input type="password" name="password" class="form-control" placeholder="Ex: Mot de passe" required /> <br><br>
            </div>
            <div class="form">
                <input class="btn-primary" name="inscript" type="submit" value="S'inscrire" />
            </div>
        </form>
    </div>
</body>

</html>