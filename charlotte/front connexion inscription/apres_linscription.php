<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>après inscription</title>
    <link rel="stylesheet" href="../style/bootstrap.min.css" />
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@1,200;1,300&family=Ubuntu+Mono:ital@1&display=swap" rel="stylesheet">
</head>

<body>
    <h4>Termine ton inscription</h4>
    <div class="continue">
        <form action="../back_connexion/suiteUser.php" method="POST" enctype="multipart/form-data">
    
            <div class="form">
                <label for="profil" class="form_label">Photo de bannière :</label>
                <input onchange=file_chang() type="file" name="profil" class="form_control"/><br><br>
                <img width='500' height='100' class="rounded-circle" id="profil">
            </div>

            <div class="form">
                <label for="banniere" class="form_label">Photo de banniére :</label>
                <input onchange=file_chang() type="file" name="banniere" class="form_control"/><br><br>
                <img width='500' height='100' id="banniere">
            </div>

            <div class="form">
                <label for="bio" class="form_label">Bio :</label>
                <input type="text" name="bio" class="form_control" placeholder="Ajoute une description"/><br><br>
            </div>
            
            <div class="form">
                <label for="site" class="form_label">Site internet :</label>
                <input type="text" name="site" class="form_control" placeholder="Ex: site_exemple.fr"/><br><br>
            </div>
            <div class="form">
                <input class="btn-primary" name="continue" type="submit" value="Valider" />
            </div>
        </form>
    </div>
</body>

</html>

</body>

</html>