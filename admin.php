<!DOCTYPE html>
<html lang="sk">
<?php
session_start();
include_once "parts/header.php";
require_once('reg/db.php');
?>
<style>
    .item3{
  color: red;
  padding-top: 15px;
  font-size: 15px;
  border: 2px solid rgb(202, 144, 144);
  text-align: center;

  
}
.container12 {
  padding-left:5%;
  padding-right:5%;
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  
}
.container13 {
  padding-left:5%;
  padding-right:5%;
  display: grid;
  grid-template-columns: repeat(1, 1fr);
  
}
.item4{
    color: white;
  padding-top: 15px;
  font-size: 15px;
  border: 2px solid rgb(202, 144, 144);
  text-align: center;

  
}
.hhh {
  font-size: 2.1em;
  padding: 10px 0;
  font-weight: 80;
  color: #33cccc;
}
</style>
<body>
<?php
include_once "parts/nav.php";
?>

<section style="margin-top: 100px;" >
<h1 style="margin: 10px;">Vitajte vo svojom osobnom účte admina <?= $_SESSION['dany']['login']?> !</h1>
<div class="container13">
<div class="item3 hhh"><big>Tabuľka používateľov</big></div>
</div>
<div class="container12">
            <div class="item3">id</div>
            <div class="item3"><p>Login</p><p><br></p></div>
            <div class="item3">Email</div>
            <div class="item3">Status</div>
            <div class="item3">Datum</div>
</div>
<?php
 $result = mysqli_query($conn, "SELECT * FROM `users`");

 while ($row = mysqli_fetch_assoc($result)) {

    echo '<div class="container12">
            <div class="item4">'. $row["id"] .'<p><br></p></div>
            <div class="item4">'. $row["login"] .'</div>
            <div class="item4">'. $row["email"] .'</div>
            <div class="item4">'. $row["admin"] .'</div>
            <div class="item4">'. $row["date"] .'</div>
         </div>';
 }
?>
</section>


</body>
</html>