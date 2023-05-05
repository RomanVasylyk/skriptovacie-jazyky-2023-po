<?php
session_start();
require_once('db.php');

if (isset($_POST['login']) && isset($_POST['pass'])) {
    $login = $_POST['login'];
    $pass = md5($_POST['pass']);

    $sql = mysqli_query($conn, "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
    
if($login != "" && $pass != "d41d8cd98f00b204e9800998ecf8427e"){
    if (mysqli_num_rows($sql) > 0) {
        $user = mysqli_fetch_assoc($sql);
        $_SESSION['dany'] = [
            "id" => $user['id'],
            "login" => $user['login'],
            "email" => $user['email']
        ];
        header('Location: ../index.php');
    } else {
        $_SESSION['pou'] = "Žiadny použivatel";
        header('Location: ../logg.php');
    }
    }else {
    $_SESSION['pou'] = "Vyplňte všetky polia";
    header('Location: ../logg.php');
}
}



?>