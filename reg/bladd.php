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
}else{
    $_SESSION['blog'] = "super";
    header('Location: ../blogadd.php');
}
?>