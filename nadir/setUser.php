<?php 

namespace RegisterBdd;
include_once('./config.php');

use BddConnection\ConnectionToBdd;
use PDO;

class RegisterBdd {


    public function addUser($nom, $prenom, $pseudo, $arobase, $password, $email, $birthdate) {
        
        $bddAccess = new ConnectionToBdd;
        $bdd       = $bddAccess->BddConnect();
        
        $querry = $bdd->prepare("INSERT INTO user (id, nom, prenom, pseudo, arobase, motDePasse, mail, follower, followin, bio, dateDeCreation, profilImage, dateDeNaissance) VALUES ('0', '$nom', '$prenom', '$pseudo', '$arobase', '$password', '$email', '0', '0', 'blabla', CURRENT_DATE, 'img' ,'$birthdate');");
        $querry->execute();
        
    }

    public function addFollower($email) {

        $bddAccess = new ConnectionToBdd;
        $bdd       = $bddAccess->BddConnect();

        // Faire un update quand click il gagne un abonné l'utilisateur gagne abonné.

        $querry = $bdd->prepare("UPDATE user SET follower = ((SELECT follower WHERE mail LIKE '$email') + 1) WHERE mail LIKE '$email'");
        $querry->execute();
     

    }


    public function looseFollower($email) {

        $bddAccess = new ConnectionToBdd;
        $bdd       = $bddAccess->BddConnect();

        // Faire un UPDATE quand l'utilisateur perd un abonné.

        $querry = $bdd->prepare("UPDATE user SET follower = ((SELECT follower WHERE mail LIKE '$email') -1) WHERE mail LIKE '$email'");
        $querry->execute();

    }

        public function addFollowin($email) {

        $bddAccess = new ConnectionToBdd;
        $bdd       = $bddAccess->BddConnect();

        // Faire un update quand le user click et ajoute un abonnement.

        $querry = $bdd->prepare("UPDATE user SET followin = ((SELECT followin WHERE mail LIKE '$email') + 1) WHERE mail LIKE '$email'");
        $querry->execute();

    }

    public function suppFollowin($email) {

        $bddAccess = new ConnectionToBdd;
        $bdd       = $bddAccess->BddConnect();

        // Faire un UPDATE quand l'utilisateur supprime un abonnement.

        $querry = $bdd->prepare("UPDATE user SET followin = ((SELECT followin WHERE mail LIKE '$email') -1) WHERE mail LIKE '$email'");
        $querry->execute();

    }


    public function addImg($img, $email) {
        
        $bddAccess = new ConnectionToBdd;
        $bdd       = $bddAccess->BddConnect();

        // faire un UPDATE pour ajouter le chemin de l'img

        $querry = $bdd->prepare("UPDATE user SET profilImage = '$img' WHERE mail LIKE '$email'");
        $querry->execute();

    }


    public function addBio($bio, $email) {


        $bddAccess = new ConnectionToBdd;
        $bdd       = $bddAccess->BddConnect();

        // Faire attention aux caractères spéciaux.

        $querry = $bdd->prepare("UPDATE user SET bio = '$bio' WHERE mail LIKE '$email'");
        $querry->execute();

    }

    
    function checkEmail($email) {

        
        $bddAccess = new ConnectionToBdd;
        $bdd       = $bddAccess->BddConnect();
        
        $check = $bdd->prepare("SELECT firstname, email, password FROM user WHERE email = ?");
        $check->execute(array($email));
        
        $row  = $check->rowCount();
        return $row;

    }
}


?>