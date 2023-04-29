<?php
session_start();
require_once('db.php');

if (isset($_POST['login']) && isset($_POST['pass'])) {
    $login = $_POST['login'];
    $pass = md5($_POST['pass']);

    $sql = mysqli_query($conn, "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
    

    if (mysqli_num_rows($sql) > 0) {
        $user = mysqli_fetch_assoc($sql);
        $_SESSION['dany'] = [
            "id" => $user['id'],
            "login" => $user['login'],
            "email" => $user['email']
        ];
        setcookie('user', $user['login'], time() + 3600, "/");
        header('Location: ../index.php');
    } else {
        $_SESSION['pou'] = "Žiadny použivatel";
        header('Location: ../logg.php');
    }
} else {
    $_SESSION['pou'] = "Vyplňte všetky polia";
    header('Location: ../logg.php');
}



?>