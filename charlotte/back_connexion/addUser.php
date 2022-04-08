<?php 

namespace RegisterBdd;
include_once('connect_bdd.php');

use BddConnection\ConnectionToBdd;

class RegisterBdd {
    
    
    public function update() { 
        session_start();
        $bddAccess = new ConnectionToBdd;
        $bdd = $bddAccess->BddConnect();
        

        if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {

            
            $_SESSION['mail'] = $_POST['mail'];
            $options ="vive le projet tweet_academy";
            
            
            $str = $_POST['password'];
            $mdp = hash_hmac('ripemd160', $str, $options);

            $querry = $bdd->prepare("INSERT into users (username, slug, password, email, birthdate, location) VALUES ('" . $_POST['pseudo'] . "', '" . $_POST['arrobase'] . "', '" . $mdp . "','" . $_POST['mail'] . "','" . $_POST['date_de_naissance'] . "','" . $_POST['ville'] . "')");
            $querry->execute();

            header('Location: ../front%20connexion%20inscription/apres_linscription.php');

        } else { echo "L'adresse email : ".$_POST['mail']." est invider";};
    }
};

$obj = new RegisterBdd ;
$obj -> update();
?>