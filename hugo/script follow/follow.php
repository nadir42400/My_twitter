<?php 
session_start();
include('connect_bdd.php');

if(isset($_GET['followedid']) AND !empty($_GET['followedid'])){
$getfollowedid = intval($_GET['followedid']);
if($getfollowedid != $_SESSION['id']){
    $dejafollowed = $bdd->prepare('SELECT * FROM follow WHERE id_follower = ? AND id_following = ?');
    $dejafollowed->execute(array($_SESSION['id'],  $getfollowedid));
    $follow = $dejafollowed->rowCount();

    if($follow == 0){

     $addfollow = $bdd->prepare('INSERT INTO follow(id_follower,id_following) VALUES (?,?)');
     $addfollow->execute(array($_SESSION['id'], $getfollowedid));

    }elseif($follow == 1){

        $deletefollow = $bdd->prepare('DELETE FROM follow WHERE id_follower = ? AND id_following = ?');
        $deletefollow->execute(array($_SESSION['id'], $getfollowedid));
    }
}
}


//mettre sur la page des membres
if(isset($_SESSION['id']) AND $_SESSION['id'] != $getid){
    $iffollow = $bdd->prepare('SELECT * FROM follow WHERE id_follower = ? AND id_following = ?');
    $iffollow->execute(array($_SESSION['id'],$getid));
    $iffollow = $iffollow->rowCount();

    if($iffollow == 1){
       //cacher le bouton follow et créer un bouton ne plus follow
    }else{
       //afficher le bouton follow
    }
}
