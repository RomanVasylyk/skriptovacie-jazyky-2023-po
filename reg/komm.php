<?php
session_start();
require_once('db.php');

$name = $_POST['name'];
$comm = $_POST['comm'];
$idba = $_POST['idb'];

if(empty($name) || empty($comm)){
    $_SESSION['comm'] = "Vyplňte všetky polia";
    header('Location: ../index.php');
}
else{
    if(strlen($name) > 50){
        $_SESSION['comm'] = "(name)Príliš veľa slov v príbehu môže mať iba 50 písmen";
        header('Location: ../index.php');
    }
    else if(strlen($comm) > 500){
        $_SESSION['comm'] = "(comm)Príliš veľa slov v príbehu môže mať iba 500 písmen";
        header('Location: ../index.php');
    }
    else{
        $id =  $_SESSION['dany']['id'];
        $sql = mysqli_query($conn, "SELECT `idb` FROM `blog` WHERE `name` = '$idba'");
        $user = mysqli_fetch_assoc($sql);
        $idb = $user['idb'];
        $sql1 = mysqli_query($conn, "INSERT INTO `comments` (`idc`,`idb`,`id`,`name`,`comm`) VALUES (NULL,'$idb','$id' ,'$name', '$comm')");
        header('Location: ../index.php');
    }
}

