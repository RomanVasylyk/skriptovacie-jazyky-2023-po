<?php
require_once("db.php");
$login=$_POST['login'];
$pass=$_POST['pass'];
$repeatpass=$_POST['repeatpass'];
$email=$_POST['email'];

if(empty($login) || empty($pass) || empty($email)){
    echo "заповніть віс поля";
}else{
    if($pass != $repeatpass){
     echo "Паролі не співпадають";
    }else{
    $sql = "INSERT INTO `users` (login, pass, email) VALUES ('$login', '$pass', '$email')";
    if($conn->query($sql) === TRUE){
      echo "Super";
    }else{
        echo "error". $conn->error;
    }
 }
}


?>
