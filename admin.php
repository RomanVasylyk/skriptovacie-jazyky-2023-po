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
  word-wrap: break-word;
  
}
.container12 {
  padding-left:5%;
  padding-right:5%;
  display: grid;
  grid-template-columns: 90px 90px 350px 100px 260px 150px 150px 106px ;
  word-wrap: break-word;
}
.container14 {
  padding-left:5%;
  padding-right:5%;
  display: grid;
  grid-template-columns: 60px 60px 100px 250px 526px 100px 100px 100px;
  
  
}
.container111 {
  padding-left:5%;
  padding-right:5%;
  display: grid;
  grid-template-columns: 90px 90px 550px 260px 100px 100px 106px ;
  word-wrap: break-word;
}
.container1111 {
  padding-left:5%;
  padding-right:5%;
  display: grid;
  grid-template-columns: 100px 100px 260px 530px 100px 100px 106px ;
  word-wrap: break-word;
}
.container13 {
  padding-left:5%;
  padding-right:5%;
  display: grid;
  grid-template-columns: repeat(1, 1fr);
  
}
.container11 {
    padding-left:10%;
  padding-right:10%;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  
}
.item4{
    color: white;
  padding-top: 15px;
  font-size: 15px;
  border: 2px solid rgb(202, 144, 144);
  text-align: center;
  word-wrap: break-word;
}
.hhh {
  font-size: 2.1em;
  padding: 10px 0;
  font-weight: 80;
  color: #33cccc;
}
.it{
  width: 50%;

}
</style>
<body>
<?php
if($_SESSION['dany']['admin'] == 1):
?>
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
            <div class="item3">Add admin</div>
            <div class="item3">Del admin</div>
            <div class="item3">Delete</div>
</div>
<?php
 $result = mysqli_query($conn, "SELECT * FROM `users`");

 while ($row = mysqli_fetch_assoc($result)) {

    echo '<div class="container12">
            <div class="item4">'. $row["id"] .'<p><br></p></div>
            <div class="item4">'. $row["login"] .'</div>
            <div class="item4">'. $row["email"] .'</div>
            <div class="item4">'. (($row["admin"] == 1) ? "Admin" : "User") .'</div>
            <div class="item4">'. $row["date"] .'</div>
            <div class="item4"><form action="reg/adm.php" method="post"><button  name="adm1" value="' . $row["id"] . '" type="submit">Admin del</button></form></div>
            <div class="item4"><form action="reg/adm.php" method="post"><button  name="adm" value="' . $row["id"] . '" type="submit">Admin add</button></form></div>
            <div class="item4"><form action="reg/delad.php" method="post"><button  name="del1" value="' . $row["id"] . '" type="submit">Delete</button></form></div>
         </div>';
 }
 if($_SESSION['adm']){
  echo '<p style="margin-top: 15px;padding: 5px;text-align: center;font-weight: bold;color: #ef0000;">' . $_SESSION['adm'] . '</p>';
  }
  
  unset($_SESSION['adm']);
 if($_SESSION['del1']){
  echo '<p style="margin-top: 15px;padding: 5px;text-align: center;font-weight: bold;color: #ef0000;">' . $_SESSION['del1'] . '</p>';
  }
  
  unset($_SESSION['del1']);
?>

</section>

<section style="margin-top: 100px;" >
<div class="container13">
<div class="item3 hhh"><big>Tabuľka blogov</big></div>
</div>
<div class="container14">
            <div class="item3">id blogu</div>
            <div class="item3">id autora</div>
            <div class="item3"><p>Autor</p><p><br></p></div>
            <div class="item3">Email autora</div>
            <div class="item3">Historia</div>
            <div class="item3">Datum</div>
            <div class="item3">Update</div>
            <div class="item3">Delete</div>
</div>
<?php
 $result = mysqli_query($conn, "SELECT * FROM `blog`");

 while ($row = mysqli_fetch_assoc($result)) {
    $qw = $row["id"];
    $idd = mysqli_query($conn, "SELECT `email`, `login`
    FROM `users`
    WHERE `id` = '$qw'");
    $ro = mysqli_fetch_assoc($idd);

    echo '<div class="container14">
            <div class="item4">'. $row["idb"] .'<p><br></p></div>
            <div class="item4">'. $row["id"] .'</div>
            <div class="item4">'. $ro["login"] .'</div>
            <div class="item4">'. $ro["email"] .'</div>
            <div class="item4">'. $row["history"] .'</div>
            <div class="item4">'. $row["date"] .'</div>
            <div class="item4"><form action="upblog.php" method="post"><button  name="up" value="' . $row["idb"] . '" type="submit">Update</button></form></div>
            <div class="item4"><form action="reg/delad.php" method="post"><button name="del" value="' . $row["idb"] . '" type="submit">Delete</button></form></div>

         </div>';
 }
 if($_SESSION['up']){
  echo '<p style="margin-top: 15px;padding: 5px;text-align: center;font-weight: bold;color: #ef0000;">' . $_SESSION['up'] . '</p>';
  }
  
  unset($_SESSION['up']);
 if($_SESSION['del']){
  echo '<p style="margin-top: 15px;padding: 5px;text-align: center;font-weight: bold;color: #ef0000;">' . $_SESSION['del'] . '</p>';
  }
  
  unset($_SESSION['del'])
?>
</section>

<section style="margin-top: 100px;" >
<div class="container13">
<div class="item3 hhh"><big>Tabuľka Komentárov</big></div>
</div>
<div class="container1111">
            <div class="item3">id komm</div>
            <div class="item3"><p>id blogu</p><p><br></p></div>
            <div class="item3">Nazov</div>
            <div class="item3">Komentár</div>
            <div class="item3">Datum</div>
            <div class="item3">Update</div>
            <div class="item3">Delete</div>
</div>
<?php
$iddd = $_SESSION['dany']['id'];
 $result5 = mysqli_query($conn, "SELECT * FROM `comments` WHERE `id` = '$iddd'");

 while ($row5 = mysqli_fetch_assoc($result5)) {

    echo '<div class="container1111">
            <div class="item4">'. $row5["idc"] .'<p><br></p></div>
            <div class="item4">'. $row5["idb"] .'</div>
            <div class="item4">'. $row5["name"] .'</div>
            <div class="item4">'. $row5["comm"] .'</div>
            <div class="item4">'. $row5["date"] .'</div>
            <div class="item4"><form action="upcomm.php" method="post"><button  name="up1" value="' . $row5["idc"] . '" type="submit">Update</button></form></div>
            <div class="item4"><form action="reg/delad.php" method="post"><button  name="del2" value="' . $row5["idc"] . '" type="submit">Delete</button></form></div>
         </div>';
 }
 if($_SESSION['upp']){
  echo '<p style="margin-top: 15px;padding: 5px;text-align: center;font-weight: bold;color: #ef0000;">' . $_SESSION['upp'] . '</p>';
  }
  unset($_SESSION['upp']);
 if($_SESSION['del2']){
  echo '<p style="margin-top: 15px;padding: 5px;text-align: center;font-weight: bold;color: #ef0000;">' . $_SESSION['del2'] . '</p>';
  }
  
  unset($_SESSION['del2']);
?>

</section>
<?php endif;?>
</body>
</html>