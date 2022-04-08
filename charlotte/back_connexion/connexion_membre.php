<?php

namespace connect;

use PDO;
use BddConnection\ConnectionToBdd;
session_start();


class connect{

  private $mail;
  private $mdp;

    public function __construct(){
     $this->mail = $_POST["mail"];
     $this->mdp = $_POST["password"];
     
    }

  public function verification_mail($mail_send){
    $booleen = false;
    $request = new ConnectionToBdd();
    $bdd = $request->BddConnect();

    $requete = $bdd->prepare("SELECT mail, password FROM user WHERE mail = ?");
    $requete->bindValue(':mail', $mail_send);
    $requete->execute(array($this->mail));
    $result =  $requete->fetchAll();


    foreach ($result as $key) {
      if ($key['mail'] == $mail_send) {
        $booleen = true;
      }
    }
    return $booleen;
  }

  public function verification_password($mdp_send)
  {
    $booleen = false;
    $request = new ConnectionToBdd();
    $bdd = $request->BddConnect();

    $requete = $bdd->prepare("SELECT mail, password FROM user WHERE password = ?");
    $requete->bindValue(':motDePasse', $mdp_send);
    $requete->execute(array($this->mdp));
    $results = $requete->fetchAll();
    foreach ($results as $key) {
      if ($key['password'] == hash("ripemd160", $this->mdp)) {
        $booleen = true;
      }
    }
    return $booleen;
  }

  public function verifications()
  {
    $mail = $this->verification_mail($this->mail);
    $mdp = $this->verification_password($this->password);

    if ($this->mail != "" && $this->password != "") {
      if ($mail == true && $mdp == true) {
        $_SESSION['mail'] = $this->mail;
        echo "OK";
      }

      if ($mail == false && $mdp == false) {
        echo "infos incorrectes";
      }

      if ($mail == false) {
        echo "mail inconnu";
      }

      if ($mdp == false) {
        echo "mot de passe incorrect";
      }
    } else {
      echo "champ vide";
    }
  }

}