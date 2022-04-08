<?php
$connect = new PDO('mysql:host=65.108.127.22;port=3306;dbname=common-database;charset=utf8', 'epitech', 'ZIX@rFN00UyqNCr.');

$error = '';
$comment_name = 1;
$comment_content = '';



if(empty($_POST["comment_content"]))
{
 $error .= '<p class="text-danger">Vous devez remplir la case de commentaire</p>';
}
else
{
 $comment_content = $_POST["comment_content"];
}

if($error == '')
{
 $query = "INSERT INTO tweets (id_user, id_parent,tweet ) VALUES (:id_user, :id_parent, :tweet)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':id_user' => $comment_name,
   ':id_parent'    => $_POST["id"],
   ':tweet' => $comment_content
  )
 );
 $error = '<label class="text-success">Le commentaire a été poster</label>';
}

$data = array(
 'error'  => $error
);

echo json_encode($data);

?>