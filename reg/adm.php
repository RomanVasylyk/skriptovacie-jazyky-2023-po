<?php
session_start();
require_once('db.php');

if(isset($_POST['adm'])){
    $adm = $_POST['adm'];
    $sql = mysqli_query($conn, "UPDATE `users` SET `admin` = 1 WHERE `id` = '$adm'");
    if($sql){
       $_SESSION['adm'] = "Admin bol úspešne pridany";
           header('Location: ../admin.php');
       }else{
           $_SESSION['adm'] = "Niečo sa pokazilo.!";
           header('Location: ../admin.php');
       }
}
if(isset($_POST['adm1'])){
    $adm1 = $_POST['adm1'];
    $sql1 = mysqli_query($conn, "UPDATE `users` SET `admin` = 0 WHERE `id` = '$adm1'");
    if($sql1){
       $_SESSION['adm'] = "Admin bol úspešne pridany";
           header('Location: ../admin.php');
       }else{
           $_SESSION['adm'] = "Niečo sa pokazilo.!";
           header('Location: ../admin.php');
       }
}
?>