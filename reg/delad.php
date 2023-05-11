<?php
session_start();
require_once('db.php');

if(isset($_POST['del']) && $_POST['del'] != ""){
    $del = $_POST['del'];
    
    $sql1 = mysqli_query($conn, "SELECT * FROM `blog` WHERE `idb` = '$del'");
    $row = mysqli_fetch_assoc($sql1);
    $file_path = '../img/' . $row["img"];
    unlink($file_path);

    $sql = mysqli_query($conn, "DELETE FROM `blog` WHERE `idb` = '$del'");
    if($sql){
    $_SESSION['del'] = "Blog bol úspešne odstránený";
        header('Location: ../admin.php');
    }else{
        $_SESSION['del'] = "Niečo sa pokazilo.!";
        header('Location: ../admin.php');
    }
}
if(isset($_POST['del3']) ){
    $del3 = $_POST['del3'];
    
    $sql11 = mysqli_query($conn, "SELECT * FROM `blog` WHERE `idb` = '$del3'");
    $row = mysqli_fetch_assoc($sql11);
    $file_path = '../img/' . $row["img"];
    unlink($file_path);

    $sqll = mysqli_query($conn, "DELETE FROM `blog` WHERE `idb` = '$del3'");
    if($sqll){
    $_SESSION['del3'] = "Blog bol úspešne odstránený";
        header('Location: ../logg.php');
    }else{
        $_SESSION['del3'] = "Niečo sa pokazilo.!";
        header('Location: ../logg.php');
    }
}
if(isset($_POST['del1'])){
    $del1 = $_POST['del1'];
    $sql2 = mysqli_query($conn, "DELETE FROM `users` WHERE `id` = '$del1'");
    if($sql2){
        $_SESSION['del1'] = "User/Admin bol úspešne odstránený";
            header('Location: ../admin.php');
        }else{
            $_SESSION['del1'] = "Niečo sa pokazilo.!";
            header('Location: ../admin.php');
        }
}
if(isset($_POST['del2'])){
    $del2 = $_POST['del2'];
    $sql22 = mysqli_query($conn, "DELETE FROM `comments` WHERE `idc` = '$del2'");
    if($sql22){
        $_SESSION['del2'] = "Komentar bol úspešne odstránený";
            header('Location: ../logg.php');
        }else{
            $_SESSION['del2'] = "Niečo sa pokazilo.!";
            header('Location: ../logg.php');
        }
}
?>