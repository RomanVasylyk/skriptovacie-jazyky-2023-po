<?php
session_start();
require_once('db.php');

$email = $_POST['email'];
$newemail = $_POST['newemail'];
$pass = md5($_POST['pass']);

if($email == '' || $newemail == ''|| $pass == 'd41d8cd98f00b204e9800998ecf8427e'){
    $_SESSION['po1'] = "Vyplňte všetky polia";
    header('Location: ../logg.php');
}
else if($email == $newemail){
    $_SESSION['po1'] = "novy Email je rovnaky ako stary";
    header('Location: ../logg.php');
}else{
$sql1 = mysqli_query($conn, "SELECT * FROM `users` WHERE `email` = '$email' AND `pass` = '$pass'");
if(mysqli_num_rows($sql1) > 0){
    $sql = "UPDATE `users` SET `email` = '$newemail' WHERE `pass` = '$pass'";
if (mysqli_query($conn, $sql)) {
    $_SESSION['dany']['email'] = $newemail;
    $_SESSION['po1'] = "Hotový";
    header('Location: ../logg.php');
} 
}else {
    $_SESSION['po1'] = "Chyba zmeny prihlásenia";
    header('Location: ../logg.php');
}
}
?>