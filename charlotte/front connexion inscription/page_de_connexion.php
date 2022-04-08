<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>page de connexion</title>
    <link rel="stylesheet" href="../style/bootstrap.min.css" />
    <link rel="stylesheet" href="../style/style_connexion_inscription.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@1,200;1,300&family=Ubuntu+Mono:ital@1&display=swap" rel="stylesheet">
</head>
<body>
    <div class="linear-gradient">
        <h1>Bienvenue sur Twitter</h1>
        <img src="../style/twitter-logo.jpg" class="img-fluid" alt="logo twitter" id="img-logo">
        <div class="container">
            <div class="hidden-smart">
             <h3>Reste connecté, où que tu sois.</h3>
            <img src="../style/social-media-marketing-network-img1.png" class="img-fluid" alt="logo twitter" id="img-tel">
            </div>
        </div>
            <div class="connexion">
                <h2>Connectez-vous</h2><br>
                <form action="../back_connexion/connexion.php" method="POST">
                    <div class="form">
                        <label for="mail">email:</label><br>
                        <input type="mail" name="mail" required /><br><br>
                    </div>
                    <div class="form">
                        <label for="password">mot de passe:</label>
                        <input type="password" name="password" required /><br>
                    </div>
                    <div class="form">
                        <input class="btn-primary" name="connect" type="submit" value="Connexion" />
                    </div>
                </form>
                <div class="container-fluid">
                    <p>Tu n'as pas encore de compte?</p>
                    <nav class="nav">
                        <a class="nav-link" href="page_d'inscription.php">S'incrire</a>
                    </nav>
                </div>
            </div>
        </div>
</body>
</html>