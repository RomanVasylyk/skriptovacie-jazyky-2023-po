<?php
require_once('db.php');

$login = $_POST['login'];
$pass = $_POST['pass'];

if(empty($login) || empty($pass)){
    echo "Заповніть всі поля";
}else{
    $sql = "SELECT * FROM `users` WHERE login = '$login' AND pass = '$pass'";
    $result = $conn->query($sql);

    if($result->num_rows >0){
        echo "Welcome" . $row['login'];
    }else{
        echo "немає такого користувача";
    }
}


?>