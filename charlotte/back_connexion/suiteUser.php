<?php 

namespace RegisterBdd;
include_once('connect_bdd.php');

use BddConnection\ConnectionToBdd;

use PDO;

class RegistereBdd {
        public function insert() { 
            session_start();
            $bddAccess = new ConnectionToBdd;
            $bdd = $bddAccess->BddConnect();

            $bio = $bdd->prepare("select id from user where mail = '".$_SESSION['mail']."'");
            $bio ->execute();
            $row = $bio->fetch();


$_SESSION['id'] = $row['id'];
    

            $bio = $bdd->prepare("update user set bio = '".$_POST['bio']."',  site = '".$_POST['site']."' where id = ".$row['id']."");
            $bio ->execute();
    
            $name = basename($_FILES["banniere"]["name"]);
            
            move_uploaded_file($_FILES['banniere']['tmp_name'], "../../images/couverture/$name");
    
            $profil = basename($_FILES["profil"]["name"]);
            
            move_uploaded_file($_FILES['profil']['tmp_name'], "../../images/profil/$profil");
    
        $dir = "../../images/couverture/";
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
    $profil = "../../images/profil/";
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


if($_FILES['banniere']['size'] > 0 && $_FILES['banniere']['size'] > 0){
    $querry = $bdd->prepare("insert into images (id, imagecounv,imageprofil ) values ('".$row['id']."','".$counv."','".$prof."')");
    $querry->execute();
    header("Location: ../../hugo/pageActu.php");
}
else if ($_FILES['profil']['size'] > 0 && $_FILES['banniere']['size']=== 0){
    
    $querry = $bdd->prepare("insert into images (id, imagecounv,imageprofil ) values ('".$row['id']."','image/defautcouverture.jpeg','".$prof."')");
    $querry->execute();
    header("Location: ../../hugo/pageActu.php");

}
else if ($_FILES['banniere']['size'] > 0 && $_FILES['profil']['size']=== 0 ){
    $querry = $bdd->prepare("insert into images (id, imagecounv,imageprofil ) values ('".$row['id']."','".$counv."','image/defaut.jpeg')");
    $querry->execute();
    header("Location: ../../hugo/pageActu.php");

} 
else if ($_FILES['banniere']['size'] === 0 && $_FILES['profil']['size']=== 0 ){
    $querry = $bdd->prepare("insert into images (id, imagecounv,imageprofil ) values ('".$row['id']."','image/defautcouverture.jpeg','image/defaut.jpeg')");
    $querry->execute();
    header("Location: ../../hugo/pageActu.php");

} 






        }
    
    }
    $obj = new RegistereBdd;
    $obj -> insert();
    
    
    
?>