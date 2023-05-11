<?php
session_start();
require_once('db.php');

if(isset($_POST['name']) && isset($_POST['comm'])){
    $up = $_POST['idc'];
    $name = $_POST['name'];
    $comm = $_POST['comm'];
    if(strlen($name) > 50){
        $_SESSION['up11'] = "(Nazov)Príliš veľa slov v príbehu môže mať iba 50 písmen";
        header('Location: ../upcomm.php');
    }
    if(strlen($comm) > 500){
        $_SESSION['up11'] = "(Comments)Príliš veľa slov v príbehu môže mať iba 500 písmen";
        header('Location: ../upcomm.php');
    }
    else{
        $sql = mysqli_query($conn, "UPDATE `comments` SET `name` = '$name', `comm` = '$comm' WHERE `idc` = '$up'");
     if($sql){
        $_SESSION['upp'] = "Commentar bol úspešne obnovlen";
            header('Location: ../logg.php');
        }else{
            $_SESSION['upp'] = "Niečo sa pokazilo.!";
            header('Location: ../logg.php');
        }
        
    }
}

?>