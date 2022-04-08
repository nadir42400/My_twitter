<?php
include_once('config.php');

use BddConnection\ConnectionToBdd;


class connexion
{
    private $connect;
    

    public function __construct()
    {
        
        $this->connect  = new ConnectionToBdd();
       
    }

    public function verification()
    { 
        $errormessage = '';
        $email = $_POST['mail'];
        $password = $_POST['password'];
        $bdd          = $this->connect->BddConnect();

        $verif_mail = $bdd->prepare("SELECT * FROM users WHERE email = ?");
        $verif_mail->bindValue('email', $email);
        $verif_mail->execute([$email]);
        $rs = $verif_mail->fetch();

        if($rs){
            
            $requete = $bdd->prepare("SELECT password FROM users WHERE email LIKE '".$email."'");
            $requete->execute([$password]);
            $result = $requete->fetch();

             $hash = $result['password'];

             if(password_verify($_POST['password'], $hash)){
                 if ($password){
                    session_start();
                    $_SESSION['login'] = $_POST['mail'];

                    $requetes = $bdd->prepare("SELECT id, email FROM users WHERE email LIKE '".$_SESSION['login']."' AND passeword LIKE '".$password."'");
                    $requetes->execute();
                    $results = $requetes->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($results as $value){

                        $_SESSION['id'] = $value['id'];
                        $_SESSION['email'] = $value['email'];
                    }
                }
               
         } else {
            session_start();
            $errormessage = 'mot de passe incorrect!';
            $_SESSION['errorsur'] = $errormessage;
         }
    }else {
   $errormessage = "adresse mail inconnu!";
   $_SESSION['errorsur']= $errormessage;
   }
        echo $_SESSION['errorsur'];
}
};
$new = new connexion;
$new->verification(); 
?>