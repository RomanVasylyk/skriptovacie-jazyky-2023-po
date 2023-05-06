<?php
session_start();
require_once('db.php');

$login = $_POST['login'];
$pass = md5($_POST['pass']);
$name = $_POST['name'];

if(empty($login) || empty($pass) || empty($name)){
    $_SESSION['blog1'] = "Vyplňte všetky polia";
    header('Location: ../removeblog.php');
}else{
    $sql = mysqli_query($conn, "SELECT *
    FROM `users`
    INNER JOIN `blog`
    ON `users`.`id` = `blog`.`id`
    WHERE `users`.`login` = '$login' AND `users`.`pass` = '$pass' AND `blog`.`name` = '$name'
    ");
    $row = mysqli_fetch_assoc($sql);
    if($row > 0){
        $qw = $row["id"];
        $sql1 =  mysqli_query($conn,"DELETE FROM `blog` WHERE `name` = '$name' AND `id` = '$qw'");

        $file_path = '../img/' . $row["img"];
        unlink($file_path);

        header('Location: ../index.php');
    }else{
        $_SESSION['blog1'] = "zly login ,pass alebo namov blogu";
        header('Location: ../removeblog.php');
    }
}

?>