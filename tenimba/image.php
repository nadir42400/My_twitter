<?php 

namespace RegisterBdd;
include_once('config.php');

use BddConnection\ConnectionToBdd;

use PDO;

class RegisterBdd {
    
    
    public function image() { 
        
        session_start();
        $bddAccess = new ConnectionToBdd;
        $bdd = $bddAccess->BddConnect();

        $name = basename($_FILES["counv"]["name"]);
        rename($name,$_SESSION['mail']);
        
        move_uploaded_file($_FILES['counv']['tmp_name'], "../images/couverture/$name");

        $profil = basename($_FILES["img"]["name"]);
        
        move_uploaded_file($_FILES['img']['tmp_name'], "../images/profil/$profil");



        $dir = "../images/couverture/";
        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {     
                    if ( $file != "." &&  $file != ".." ) {
                    
                    $counv = $dir. $file;
                    }
                }
                closedir($dh);
            }
        }

        $profil = "../images/profil/";

        if (is_dir($profil)) {
            if ($dt = opendir($profil)) {
                while (($files = readdir($dt)) !== false) {

                    if ( $files != "." &&  $files != ".." ) {  
                    
                    $prof =  $profil.$files;    
                    }
                }
                closedir($dt);
            }
        }

        $querry = $bdd->prepare("UPDATE images SET imagecounv = '".$counv."',imageprofil = '".$prof."' WHERE id = '".$_SESSION['id']."')");
        $querry->execute();
        header('Location: update.php');
    }

}
$obj = new RegisterBdd;
$obj -> image();


?>