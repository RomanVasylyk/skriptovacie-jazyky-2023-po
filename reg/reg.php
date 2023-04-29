<?php
session_start();
require_once("db.php");

$login=$_POST['login'];
$pass=$_POST['pass'];
$repeatpass=$_POST['repeatpass'];
$email=$_POST['email'];

if(empty($login) || empty($pass) || empty($email)){
    $_SESSION['pol'] = "vyplňte všetky polia";
    header('Location: ../regg.php');
}else{
    if($pass != $repeatpass){
        $_SESSION['mes'] = "Heslá sa nezhodujú";
        header('Location: ../regg.php');
    }else{
        if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login']))
    {
        $_SESSION['meno'] = "Prihlasovacie meno môže pozostávať iba z písmen anglickej abecedy a číslic";
        header('Location: ../regg.php');
    }
    else if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30)
    {
        $_SESSION['meno'] = "Prihlasovacie meno nesmie mať menej ako 3 znaky a nie viac ako 30";
        header('Location: ../regg.php');
    }else{$query = mysqli_query($conn, "SELECT id FROM users WHERE login='".mysqli_real_escape_string($conn, $_POST['login'])."'");
     if(mysqli_num_rows($query) > 0)
    {
        $_SESSION['meno'] = "Používateľ s týmto prihlásením už v databáze existuje";
        header('Location: ../regg.php');
    }
    else{
        $quer = mysqli_query($conn, "SELECT id FROM users WHERE email='".mysqli_real_escape_string($conn, $_POST['email'])."'");
    if(mysqli_num_rows($quer) > 0){
        $_SESSION['pol'] = "Používateľ s týmto emailom už v databáze existuje";
        header('Location: ../regg.php');
    }else{
        $sql = "INSERT INTO `users` (login, pass, email) VALUES ('$login', '$pass', '$email')";
    if($conn->query($sql) === TRUE){
        
        header("Location: ../logg.php");
    }else{
        echo "error". $conn->error;
    }
    }
    }
}
    
 }
}


?>