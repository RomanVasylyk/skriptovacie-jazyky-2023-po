<?php
session_start();
require_once('db.php');

$login = $_POST['login'];
$newlogin = $_POST['newlogin'];
$email = $_POST['email'];
$newemail = $_POST['newemail'];
$pass = md5($_POST['pass']);
$newpass = md5($_POST['newpass']);

if($newlogin != ''){
if($login == $newlogin){
    $_SESSION['po'] = "nové používateľské meno je rovnaké ako staré";
    header('Location: ../logg.php');
}else{
$sql1 = mysqli_query($conn, "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
if(mysqli_num_rows($sql1) > 0){
    $sql = "UPDATE `users` SET `login` = '$newlogin' WHERE `pass` = '$pass'";
if (mysqli_query($conn, $sql)) {
    $_SESSION['dany']['login'] = $newlogin;
    $_SESSION['po'] = "Hotový";
    header('Location: ../logg.php');
} else {
    $_SESSION['po'] = "Chyba zmeny prihlásenia";
    header('Location: ../logg.php');
}
}else{
    $_SESSION['po'] = "Vyplňte všetky polia";
    header('Location: ../logg.php');
}
}
}
else if($newemail != ''){
    if($email == $newemail){
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
    } else {
        $_SESSION['po1'] = "Chyba zmeny prihlásenia";
        header('Location: ../logg.php');
    }
    }else{
        $_SESSION['po1'] = "Vyplňte všetky polia";
        header('Location: ../logg.php');
    }
    }
}
else{
    if($newpass != ''){
        header('Location: ../logg.php');
    }else if($pass == $newpass){
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
    } else {
        $_SESSION['po2'] = "Chyba zmeny prihlásenia";
        header('Location: ../logg.php');
    }
    }else{
        $_SESSION['po2'] = "Vyplňte všetky polia";
        header('Location: ../logg.php');
    }
    }
}
?>