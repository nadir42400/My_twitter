<?php 


namespace RegisterBdd;
include_once('../charlotte/back_connexion/connect_bdd.php');

use BddConnection\ConnectionToBdd;

// use PDO;

$inst = new ConnectionToBdd;
        $bdd = $inst->BddConnect();


        session_start();

    
            $querry = $bdd->prepare("select * from images where id = '".$_SESSION['id']."'");
            $querry->execute();
            $bs= $querry->fetch();



  $_SESSION['profil']= $bs['imageprofil'];
  $_SESSION['counv']= $bs['imagecounv'];




  $querry = $bdd->prepare("select bio from user where id = '".$_SESSION['id']."'");
  $querry->execute();
  $bio= $querry->fetch();

  $_SESSION['bio']=$bio['bio'];


header('location: profil.php');
?>