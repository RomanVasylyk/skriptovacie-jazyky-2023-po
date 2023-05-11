<?php
session_start();
require_once('db.php');

if(isset($_POST['name']) || isset($_POST['comm'])){
    $up = $_POST['idb'];
    $name = $_POST['name'];
    $history = $_POST['comm'];
    $sql1 = mysqli_query($conn, "SELECT * FROM `blog` WHERE `idb` = '$up'");
    $user = mysqli_fetch_assoc($sql1);
    $img = $user['img'];
    if(strlen($name) > 50){
        $_SESSION['up1'] = "(Nazov)Príliš veľa slov v príbehu môže mať iba 50 písmen";
        header('Location: ../upblog.php');
    }
    if(strlen($history) > 1000){
        $_SESSION['up1'] = "(Historia)Príliš veľa slov v príbehu môže mať iba 1000 písmen";
        header('Location: ../upblog.php');
    }
    else{
        $sql = mysqli_query($conn, "UPDATE `blog` SET `name` = '$name', `history` = '$history' WHERE `idb` = '$up'");
     if($sql){
        $_SESSION['up'] = "Blog bol úspešne obnovlen";
            header('Location: ../logg.php');
        }else{
            $_SESSION['up'] = "Niečo sa pokazilo.!";
            header('Location: ../logg.php');
        }
        
    }
}
if(isset($_FILES['image']) && $_FILES['image']['size'] > 0){
    $tmp_name = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $new_img_name = uniqid("IMG_",true) . '.' . $img_ex_lc;
        $img_upload_path = '../img/' . $new_img_name;
        move_uploaded_file($tmp_name,$img_upload_path);
        $sql2 = mysqli_query($conn, "UPDATE `blog` SET `img` = '$new_img_name' WHERE `idb` = '$up'");
        if($sql2){
            $file_path = '../img/' . $img;
            unlink($file_path);
            $_SESSION['up'] = "Blog bol úspešne obnovlen";
                header('Location: ../logg.php');
            }else{
                $_SESSION['up'] = "Niečo sa pokazilo.!";
                header('Location: ../logg.php');
            }
}
?>