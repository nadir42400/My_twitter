<?php 

namespace RegisterBdd;
include_once('config.php');

use BddConnection\ConnectionToBdd;

class RegisterBdd {


public function update() { 
    $bddAccess = new ConnectionToBdd;
    $bdd = $bddAccess->BddConnect();


if (isset($_POST['nom']) && $_POST['localisation']== null && $_POST['site'] == null && $_POST['pseudo'] == null && $_POST['bio'] == null )
{
    $querry = $bdd->prepare("UPDATE users SET username = '".$_POST['nom']."' WHERE id LIKE '" . $_SESSION['id'] . "'");
    $querry->execute();
}
else if (isset($_POST['localisation']) && $_POST['nom']== null && $_POST['site'] == null && $_POST['pseudo'] == null && $_POST['bio'] == null )
{
    $querry = $bdd->prepare("UPDATE users SET location = '".$_POST['localisation']."'  WHERE id LIKE '" . $_SESSION['id'] . "'");
    $querry->execute();
}
else if (isset($_POST['site']) && $_POST['nom']== null && $_POST['localisation'] == null && $_POST['pseudo'] == null && $_POST['bio'] == null)
{
    $querry = $bdd->prepare("UPDATE users SET website = '".$_POST['site']."' WHERE id = '" . $_SESSION['id'] . "'");
    $querry->execute();
}
else if (isset($_POST['pseudo']) && $_POST['nom'] == null && $_POST['site'] == null && $_POST['localisation'] == null && $_POST['bio'] == null )
{
    $querry = $bdd->prepare("UPDATE users SET slug = '".$_POST['pseudo']."' WHERE id = '" . $_SESSION['id'] . "'");
    $querry->execute();
}

else if (isset($_POST['bio']) && $_POST['nom']== null && $_POST['site'] == null && $_POST['localisation'] == null && $_POST['pseudo'] == null )
{
    $querry = $bdd->prepare("UPDATE users SET description = '".$_POST['bio']."' WHERE id = '" . $_SESSION['id'] . "'");
    $querry->execute();
}

else if (isset($_POST['bio']) && isset($_POST['nom']) && $_POST['site'] == null && $_POST['localisation'] == null && $_POST['pseudo'] == null )
{
    $querry = $bdd->prepare("UPDATE users SET description = '".$_POST['bio']."', username = '".$_POST['nom']."' WHERE id = '" . $_SESSION['id'] . "'");
    $querry->execute();
}

else if (isset($_POST['bio']) && isset($_POST['pseudo']) && $_POST['site'] == null && $_POST['localisation'] == null && $_POST['pseudo'] == null )
{
    $querry = $bdd->prepare("UPDATE users SET description = '".$_POST['bio']."', slug ='".$_POST['pseudo']."' WHERE id = '" . $_SESSION['id'] . "'");
    $querry->execute();
}

else if (isset($_POST['bio']) && isset($_POST['localisation']) && $_POST['nom'] == null && $_POST['site'] == null && $_POST['pseudo'] == null )
{
    $querry = $bdd->prepare("UPDATE users SET description = '".$_POST['bio']."', location = '".$_POST['localisation']."' WHERE id = '" . $_SESSION['id'] . "'");
    $querry->execute();
}
else if (isset($_POST['nom']) && isset($_POST['localisation']) && $_POST['bio'] == null && $_POST['site'] == null && $_POST['pseudo'] == null )
{
    $querry = $bdd->prepare("UPDATE users SET username = '".$_POST['nom']."', location = '".$_POST['localisation']."' WHERE id = '" . $_SESSION['id'] . "'");
    $querry->execute();
}

else if (isset($_POST['nom']) && isset($_POST['site']) && $_POST['bio'] == null && $_POST['localisation'] == null && $_POST['pseudo'] == null )
{
    $querry = $bdd->prepare("UPDATE users SET username = '".$_POST['nom']."', website = '".$_POST['site']."' WHERE id = '" . $_SESSION['id'] . "'");
    $querry->execute();
}
else if(isset($_POST['nom']) && isset($_POST['pseudo']) && $_POST['bio'] == null && $_POST['site'] == null && $_POST['localisation'] == null )
{
    $querry = $bdd->prepare("UPDATE users SET username = '".$_POST['nom']."', slug = '".$_POST['pseudo']."' WHERE id = '" . $_SESSION['id'] . "'");
    $querry->execute();
}

else if (isset($_POST['site']) && isset($_POST['localisation']) && $_POST['bio'] == null && $_POST['nom'] == null && $_POST['pseudo'] == null )
{
    $querry = $bdd->prepare("UPDATE users SET website = '".$_POST['site']."', location = '".$_POST['localisation']."' WHERE id = '" . $_SESSION['id'] . "'");
    $querry->execute();
}

else if (isset($_POST['site']) && isset($_POST['pseudo']) && $_POST['bio'] == null && $_POST['nom'] == null && $_POST['localisation'] == null ) 
{
    $querry = $bdd->prepare("UPDATE users SET website = '".$_POST['site']."', slug = '".$_POST['pseudo']."' WHERE id = '" . $_SESSION['id'] . "'");
    $querry->execute();
}

else if (isset($_POST['localisation']) && isset($_POST['pseudo']) && $_POST['bio'] == null && $_POST['nom'] == null && $_POST['site'] == null )
{
    $querry = $bdd->prepare("UPDATE users SET slug = '".$_POST['pseudo']."', location = '".$_POST['localisation']."' WHERE id = '" . $_SESSION['id'] . "'");
    $querry->execute();
}

else if (isset($_POST['bio']) && isset($_POST['pseudo']) && $_POST['site'] == null && $_POST['nom'] == null && $_POST['localisation'] == null)
{
    $querry = $bdd->prepare("UPDATE users SET slug = '".$_POST['pseudo']."', description = '".$_POST['bio']."' WHERE id = '" . $_SESSION['id'] . "'");
    $querry->execute();
}
else if (isset($_POST['bio']) && isset($_POST['pseudo']) && $_POST['site'] == null && $_POST['nom'] == null && $_POST['localisation'] == null)
{
    $querry = $bdd->prepare("UPDATE users SET slug = '".$_POST['pseudo']."', description = '".$_POST['bio']."' WHERE id = '" . $_SESSION['id'] . "'");
    $querry->execute();
}
else if (isset($_POST['bio']) && isset($_POST['pseudo']) && isset($_POST['site']) && $_POST['nom'] == null && $_POST['localisation'] == null)
{
    $querry = $bdd->prepare("UPDATE users SET slug = '".$_POST['pseudo']."', description = '".$_POST['bio']."' , website = '".$_POST['site']."' WHERE id = '" . $_SESSION['id'] . "'");
    $querry->execute();
}
else if (isset($_POST['bio']) && isset($_POST['pseudo']) && isset($_POST['localisation']) && $_POST['nom'] == null && $_POST['site'] == null)
{
    $querry = $bdd->prepare("UPDATE users SET slug = '".$_POST['pseudo']."',  description = '".$_POST['bio']."' , location = '".$_POST['localisation']."' WHERE id = '" . $_SESSION['id'] . "'");
    $querry->execute();
}
else if (isset($_POST['bio']) && isset($_POST['pseudo']) && isset($_POST['nom']) && $_POST['localisation'] == null && $_POST['site'] == null)
{
    $querry = $bdd->prepare("UPDATE users SET slug = '".$_POST['pseudo']."', description = '".$_POST['bio']."' , username = '".$_POST['nom']."' WHERE id = '" . $_SESSION['id'] . "'");
    $querry->execute();
}

else if (isset($_POST['site']) && isset($_POST['localisation']) && isset($_POST['nom']) && $_POST['pseudo'] == null && $_POST['bio'] == null)
{
    $querry = $bdd->prepare("UPDATE users SET website = '".$_POST['site']."', location = '".$_POST['localisation']."' , username = '".$_POST['nom']."' WHERE id = '" . $_SESSION['id'] . "'");
    $querry->execute();
}
else if (isset($_POST['nom']) && isset($_POST['pseudo']) && isset($_POST['localisation']) && $_POST['site'] == null && $_POST['bio'] == null)
{
    $querry = $bdd->prepare("UPDATE users SET slug = '".$_POST['pseudo']."', location = '".$_POST['localisation']."' , username = '".$_POST['nom']."' WHERE id = '" . $_SESSION['id'] . "'");
    $querry->execute();
}
else if (isset($_POST['nom']) && isset($_POST['pseudo']) && isset($_POST['site']) && $_POST['localisation'] == null && $_POST['bio'] == null)
{
    $querry = $bdd->prepare("UPDATE users SET slug = '".$_POST['pseudo']."', website = '".$_POST['site']."' , username = '".$_POST['nom']."' WHERE id = '" . $_SESSION['id'] . "'");
    $querry->execute();
}
else if (isset($_POST['nom']) && isset($_POST['bio']) && isset($_POST['localisation']) && $_POST['site'] == null && $_POST['pseudo'] == null)
{
    $querry = $bdd->prepare("UPDATE users SET description = '".$_POST['bio']."', location = '".$_POST['localisation']."' , username = '".$_POST['nom']."' WHERE id = '" . $_SESSION['id'] . "'");
    $querry->execute();
}
else if (isset($_POST['nom']) && isset($_POST['bio']) && isset($_POST['site']) && $_POST['localisation'] == null && $_POST['pseudo'] == null)
{
    $querry = $bdd->prepare("UPDATE users SET description = '".$_POST['bio']."', website= '".$_POST['site']."' , username = '".$_POST['nom']."' WHERE id = '" . $_SESSION['id'] . "'");
    $querry->execute();
}
else if (isset($_POST['pseudo']) && isset($_POST['localisation']) && isset($_POST['site']) && $_POST['nom'] == null && $_POST['bio'] == null)
{
    $querry = $bdd->prepare("UPDATE users SET slug = '".$_POST['pseudo']."', website= '".$_POST['site']."' , location = '".$_POST['localisation']."' WHERE id = '" . $_SESSION['id'] . "'");
    $querry->execute();
}

else if (isset($_POST['bio']) && isset($_POST['localisation']) && isset($_POST['site']) && $_POST['nom'] == null && $_POST['pseudo'] == null)
{
    $querry = $bdd->prepare("UPDATE users SET description = '".$_POST['bio']."', website= '".$_POST['site']."' , location = '".$_POST['localisation']."' WHERE id = '" . $_SESSION['id'] . "'");
    $querry->execute();
}
else if (isset($_POST['bio']) && isset($_POST['localisation']) && isset($_POST['site']) && isset($_POST['nom']) && $_POST['pseudo'] == null)
{
    $querry = $bdd->prepare("UPDATE users SET description = '".$_POST['bio']."', website = '".$_POST['site']."' , location = '".$_POST['localisation']."' , username = '".$_POST['nom']."' WHERE id = '" . $_SESSION['id'] . "'");
    $querry->execute();
}
else if (isset($_POST['bio']) && isset($_POST['localisation']) && isset($_POST['site']) && isset($_POST['pseudo']) && $_POST['nom'] == null)
{
    $querry = $bdd->prepare("UPDATE users SET description = '".$_POST['bio']."', website = '".$_POST['site']."' , location = '".$_POST['localisation']."' , slug = '".$_POST['pseudo']."' WHERE id = '" . $_SESSION['id'] . "'");
    $querry->execute();
}
else if (isset($_POST['bio']) && isset($_POST['localisation']) && isset($_POST['nom']) && isset($_POST['pseudo']) && $_POST['site'] == null)
{
    $querry = $bdd->prepare("UPDATE users SET description = '".$_POST['bio']."', username = '".$_POST['nom']."' , location = '".$_POST['localisation']."' , slug = '".$_POST['pseudo']."' WHERE id = '" . $_SESSION['id'] . "'");
    $querry->execute();
}
else if (isset($_POST['bio']) && isset($_POST['site']) && isset($_POST['nom']) && isset($_POST['pseudo']) && $_POST['localisation'] == null)
{
    $querry = $bdd->prepare("UPDATE users SET description = '".$_POST['bio']."', username = '".$_POST['nom']."' , website = '".$_POST['site']."' , slug = '".$_POST['pseudo']."' WHERE id = '" . $_SESSION['id'] . "'");
    $querry->execute();
}
else if (isset($_POST['localisation']) && isset($_POST['site']) && isset($_POST['nom']) && isset($_POST['pseudo']) && $_POST['bio'] == null)
{
    $querry = $bdd->prepare("UPDATE users SET location= '".$_POST['localisation']."', username = '".$_POST['nom']."' , website = '".$_POST['site']."' , slug = '".$_POST['pseudo']."' WHERE id = '" . $_SESSION['id'] . "'");
    $querry->execute();
}
else if (isset($_POST['localisation']) && isset($_POST['site']) && isset($_POST['nom']) && isset($_POST['pseudo']) && isset($_POST['bio']))
{
    $querry = $bdd->prepare("UPDATE users SET location = '".$_POST['localisation']."', username = '".$_POST['nom']."' , website = '".$_POST['site']."' , slug = '".$_POST['pseudo']."' , description = '".$_POST['bio']."' WHERE id = '" . $_SESSION['id'] . "'");
    $querry->execute();
}

// header('Location: ../hugo/profil.php');
}

}


$obj = new RegisterBdd ;
$obj -> update();