<?php

namespace GetUserInfo;
include_once('./config.php');

use BddConnection\ConnectionToBdd;
use PDO;


class GetUserInfo{


    public function getUserImg($email) {

        $bddAccess = new ConnectionToBdd;
        $bdd       = $bddAccess->BddConnect();

        // Recuperer l'img du user

        $querry = $bdd->prepare("SELECT profilImage FROM user WHERE mail LIKE '$email'");
        $querry->execute();
        $rechech = $querry->fetchAll(\PDO::FETCH_ASSOC);


       
    }

    public function getNbFollower($email) {
    
        $bddAccess = new ConnectionToBdd;
        $bdd       = $bddAccess->BddConnect();
        
        // recuperer la valeur de follower
        
        $querry = $bdd->prepare("SELECT follower FROM user WHERE mail LIKE '$email'");
        $querry->execute();
        $a      = $querry->fetchAll(PDO::FETCH_ASSOC);
        
        return $a[0]["follower"];
    }

    public function getNbFollowin($email) {
    
        $bddAccess = new ConnectionToBdd;
        $bdd       = $bddAccess->BddConnect();
        
        // recuperer la valeur de followin
        
        $querry = $bdd->prepare("SELECT followin FROM user WHERE mail LIKE '$email'");
        $querry->execute();
        $a      = $querry->fetchAll(PDO::FETCH_ASSOC);
        
        return $a[0]["followin"];
    }
    
    public function getUserBio($email) {
        
        $bddAccess = new ConnectionToBdd;
        $bdd       = $bddAccess->BddConnect();
        
        // recuperer la bio du user

        $querry = $bdd->prepare("SELECT bio FROM user WHERE mail LIKE '$email'");
        $querry->execute();
      
    }

    public function getUserPseudo($email) {

        $bddAccess = new ConnectionToBdd;
        $bdd       = $bddAccess->BddConnect();

        // recuperer le pseudo du user

        $querry = $bdd->prepare("SELECT pseudo FROM user WHERE mail LIKE '$email'");
        $querry->execute();
       
    }

    public function getUserTag($email) {

        $bddAccess = new ConnectionToBdd;
        $bdd       = $bddAccess->BddConnect();

        // recuperer l'arobase du user

        $querry = $bdd->prepare("SELECT arobase FROM user WHERE mail LIKE '$email'");
        $querry->execute();
     
    }

    public function getUserCreationDate($email){

        $bddAccess = new ConnectionToBdd;
        $bdd       = $bddAccess->BddConnect();

        // recuperer la date de création du user

        $querry = $bdd->prepare("SELECT dateDeCreation FROM user WHERE mail LIKE '$email'");
        $querry->execute();
      
    }

    public function getUserPassWord($email) {

        $bddAccess = new ConnectionToBdd;
        $bdd       = $bddAccess->BddConnect();

        // recuperer le mot de passe du user

        $querry = $bdd->prepare("SELECT motDePasse FROM user WHERE mail LIKE '$email'");
        $querry->execute();
       
    }

    public function getUserEmail($Tag){
        
        $bddAccess = new ConnectionToBdd;
        $bdd       = $bddAccess->BddConnect();
        
        // recuperer l'email du user 

        $querry = $bdd->prepare("SELECT mail FROM user WHERE arobase LIKE '$Tag'");
        $querry->execute();
       
    }

    public function getUserBirthdate($email) {

        $bddAccess = new ConnectionToBdd;
        $bdd       = $bddAccess->BddConnect();

        // recuperer la date de naissance du user

        $querry = $bdd->prepare("SELECT dateDeNaissance FROM user WHERE mail LIKE '$email'");
        $querry->execute();
      

    }

}

?>