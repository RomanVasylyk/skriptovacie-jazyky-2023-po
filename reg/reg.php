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
        if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login']))
    {
        echo "Логин может состоять только из букв английского алфавита и цифр";
    }else if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30)
    {
        echo "Логин должен быть не меньше 3-х символов и не больше 30";
    }$query = mysqli_query($conn, "SELECT id FROM users WHERE login='".mysqli_real_escape_string($conn, $_POST['login'])."'");
    if(mysqli_num_rows($query) > 0)
    {
        echo "Пользователь с таким логином уже существует в базе данных";
    }
    else{
        $sql = "INSERT INTO `users` (login, pass, email) VALUES ('$login', '$pass', '$email')";
    if($conn->query($sql) === TRUE){
        
        header("Location: ../thank.php");
    }else{
        echo "error". $conn->error;
    }
    }
    
 }
}


?>