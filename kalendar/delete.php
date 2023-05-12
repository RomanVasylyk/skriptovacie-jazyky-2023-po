<?php

session_start();

if(isset($_POST["id"]) && $_SESSION['dany']['admin'] == 1)
{
 $connect = new PDO('mysql:host=localhost;dbname=veb', 'root', '');
 $query = "
 DELETE from events WHERE id=:id
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':id' => $_POST['id']
  )
 );
}

?>