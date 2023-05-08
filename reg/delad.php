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
?>