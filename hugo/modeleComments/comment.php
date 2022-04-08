<?php
$connect = new PDO('mysql:host=65.108.127.22;port=3306;dbname=common-database;charset=utf8', 'epitech', 'ZIX@rFN00UyqNCr.');

$query = "SELECT * FROM tweets WHERE id_parent = '0' ORDER BY id DESC";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$output = '';
foreach($result as $row)
{
 $output .= '
 <div class="panel panel-default">
    <div class="panel-heading">    
        <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Gull_portrait_ca_usa.jpg" alt="profil_image" class="rounded-circle image_chat"/>
        <i>'.$row["date_post"].'</i>
    </div>
    <div class="panel-body">
        '.$row["tweet"].'
    </div>
    <div class="footer-comment" align="right">
        <button type="button" class="btn btn-default repondre" id="'.$row["id"].'">
            Répondre
        </button>
    </div>
 </div>
    ';
 $output .= get_reply_comment($connect, $row["id"]);
}

echo $output;

function get_reply_comment($connect, $parent_id = 0, $marginleft = 0)
{
 $query = "SELECT * FROM tweets WHERE id_parent = '".$parent_id."'";
 $output = '';
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $count = $statement->rowCount();
 if($parent_id == 0)
 {
  $marginleft = 0;
 }
 else
 {
  $marginleft = $marginleft + 45;
 }
 if($count > 0)
 {
  foreach($result as $row)
  {
   $output .= '
<div class="panel panel-default" style="margin-left:'.$marginleft.'px">
    <div class="panel-heading">
    <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Gull_portrait_ca_usa.jpg" alt="profil_image" class="rounded-circle image_chat image_chat"/>
        <i>'.$row["date_post"].'</i>
    </div>
    <div class="panel-body">
        '.$row["tweet"].'
    </div>
    <div class="footer-comment" align="right">
        <button type="button" class="btn btn-default repondre" id="'.$row["id"].'">
            Répondre
        </button>
    </div>
</div>
   ';
   $output .= get_reply_comment($connect, $row["id"], $marginleft);
  }
 }
 return $output;
}

?>