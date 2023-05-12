<?php

session_start();

$connect = new PDO('mysql:host=localhost;dbname=veb', 'root', '');

if(isset($_POST["title"]) && $_SESSION['dany']['admin'] == 1)
{
 $query = "
 INSERT INTO events 
 (title, start_event, end_event) 
 VALUES (:title, :start_event, :end_event)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start_event' => $_POST['start'],
   ':end_event' => $_POST['end']
  )
 );
}


?>