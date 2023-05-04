<?php
session_start();
require_once('db.php');

$pass = md5($_POST['pass']);
$newpass = md5($_POST['newpass']);

if($newpass == 'd41d8cd98f00b204e9800998ecf8427e' || $pass == 'd41d8cd98f00b204e9800998ecf8427e'){
    $_SESSION['po2'] = "Vyplňte všetky polia";
    header('Location: ../logg.php');
}
else if($pass == $newpass){
    $_SESSION['po2'] = "nové heslo je rovnaké ako staré";
    header('Location: ../logg.php');
}
else{
$sql1 = mysqli_query($conn, "SELECT * FROM `users` WHERE `pass` = '$pass'");
if(mysqli_num_rows($sql1) > 0){
    $sql = "UPDATE `users` SET `pass` = '$newpass' WHERE `pass` = '$pass'";
if (mysqli_query($conn, $sql)) {
    $_SESSION['po2'] = "Hotový";
    header('Location: ../logg.php');
} 
}else {
    $_SESSION['po2'] = "Chyba zmeny prihlásenia";
    header('Location: ../logg.php');
}
}
?>