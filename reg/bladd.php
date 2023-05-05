<?php
session_start();
require_once('db.php');

$login = $_POST['login'];
$pass = md5($_POST['pass']);
$name = $_POST['name'];
$img = $_POST['img'];
$history = $_POST['history'];

if(empty($login) || empty($pass) || empty($name) || empty($img) || empty($history)){
    $_SESSION['blog'] = "Vyplňte všetky polia";
    header('Location: ../blogadd.php');
} else {
    $sql = mysqli_query($conn, "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
    if(mysqli_num_rows($sql) > 0){
        $user = mysqli_fetch_assoc($sql);
        $id = $user['id'];
        $sql1 = mysqli_query($conn, "INSERT INTO `blog` (`idb`,`id`,`name`, `history`, `img`) VALUES (NULL,'$id' ,'$name', '$history', '$img')");
        if($sql1 === TRUE){
            header('Location: ../index.php');
        }
    } else {
        $_SESSION['blog'] = "bed login or pass";
        header('Location: ../blogadd.php');
    }
}
?>