<?php
session_start();
require_once('db.php');

$login = $_POST['login'];
$pass = md5($_POST['pass']);
$name = $_POST['name'];
$history = $_POST['history'];
$tmp_name = $_FILES['image']['tmp_name'];
$img_name = $_FILES['image']['name'];



if(empty($login) || empty($pass) || empty($name) || empty($history) || empty($tmp_name)){
    $_SESSION['blog'] = "Vyplňte všetky polia";
    header('Location: ../blogadd.php');
} else {
    $sql = mysqli_query($conn, "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
    if(mysqli_num_rows($sql) > 0){
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $new_img_name = uniqid("IMG_",true) . '.' . $img_ex_lc;
        $img_upload_path = '../img/' . $new_img_name;
        move_uploaded_file($tmp_name,$img_upload_path);

        $user = mysqli_fetch_assoc($sql);
        $id = $user['id'];
        $sql1 = mysqli_query($conn, "INSERT INTO `blog` (`idb`,`id`,`name`, `history`, `img`) VALUES (NULL,'$id' ,'$name', '$history', '$new_img_name')");
        if($sql1 === TRUE){
            header('Location: ../index.php');
        }
    } else {
        $_SESSION['blog'] = "bed login or pass";
        header('Location: ../blogadd.php');
    }
}
?>

