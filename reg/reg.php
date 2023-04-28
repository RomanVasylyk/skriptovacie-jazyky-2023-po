<?php
require_once("db.php");
$login=$_POST['login'];
$pass=$_POST['pass'];
$repeatpass=$_POST['repeatpass'];
$email=$_POST['email'];

if(empty($login) || empty($pass) || empty($email)){
    echo "vyplňte všetky polia";
}else{
    if($pass != $repeatpass){
     echo "heslá sa nezhodujú";
    }else{
        if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login']))
    {
        echo "Prihlasovacie meno môže pozostávať iba z písmen anglickej abecedy a číslic";
    }else if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30)
    {
        echo "Prihlasovacie meno nesmie mať menej ako 3 znaky a nie viac ako 30";
    }$query = mysqli_query($conn, "SELECT id FROM users WHERE login='".mysqli_real_escape_string($conn, $_POST['login'])."'");
    if(mysqli_num_rows($query) > 0)
    {
        echo "Používateľ s týmto prihlásením už v databáze existuje";
    }
    else{
        $sql = "INSERT INTO `users` (login, pass, email) VALUES ('$login', '$pass', '$email')";
    if($conn->query($sql) === TRUE){
        
        header("Location: ../logg.php");
    }else{
        echo "error". $conn->error;
    }
    }
    
 }
}


?>