<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
    <link rel="stylesheet" href="parametre.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>


    <form class="col-md-4 container container-table" id="from" action="image.php" method ='post' name ="from" enctype="multipart/form-data">
        
        <div> 
            <div class="text-white bg-primary text-uppercase text-center "> Editer le profil </div>
            <div class="text-center" > photo de couverture 
            <img width = '500' height = '100'  id=conv >
            <input onchange=file_chang() type=file id=couverture name="counv">

        </div>
        <div class = "text-center">  photo de profil 
            <img width = '100' height = '100' class="rounded-circle" id=img >
            <input onchange=file_changed() type=file id=profil name = "img">

        </div> 
        <input type="submit" class="btn bg-primary text-white" value="image"></input>
</from>
        <form class="col-md-4 container container-table" id="from1" action="update.php" method ='post' name ="from">
        <div class="form-row">
            <div class="form-group col-md-12 text-center">
                <label for="inputEmail4">Nom</label>
                <input type="text" class="form-control" id="inputNom" name ="nom" placeholder="Nom">
            </div>

            <div class="col-sm-12 my-2 text-center">
                <label class="sr-only"  for="inlineFormInputGroupUsername">Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text bg-primary">@</div>
                    </div>
                        <input type="text" class="form-control" id="inputUsername" name="pseudo" placeholder="Pseudo">
                    </div>
                </div>
            </div>

            <div class="form-group col-md-12 text-center">
                <label for="inputCity">Localisation</label>
                <input type="text" class="form-control" id="inputCity" name="localisation" placeholder="ville">
            </div> <br>
            <div class="form-group col-md-12 text-center">
                <label for="inputSite" >Site web</label>
                <input type="text" class="form-control" id="inputSite" name ="site" placeholder="https://siteweb.com">
            </div> <br>
        </div>
        <div class="form-group text-center">
                   <label for="bio">Biographie</label>
                   <textarea class="form-control" id="bio" rows="4" name="bio" placeholder="bonjour je m'appel jean charles j'aime les jeux video comme call of et jaime la vie."></textarea>
                 </div>
        <input type="submit" class="btn bg-primary text-white" value="modifier"></input>
    </form>
             
    
    <script type="text/javascript" src="script.js"></script>
</body>
</html>