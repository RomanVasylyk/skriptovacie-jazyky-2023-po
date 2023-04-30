<?php
session_start();
require_once('db.php');

$login = $_POST['login'];
$newlogin = $_POST['newlogin'];
$pass = md5($_POST['pass']);
if($login == $newlogin){
    $_SESSION['po'] = "nové používateľské meno je rovnaké ako staré";
    header('Location: ../logg.php');
}else{
$sql1 = mysqli_query($conn, "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
if(mysqli_num_rows($sql1) > 0){
    $sql = "UPDATE `users` SET `login` = '$newlogin' WHERE `pass` = '$pass'";
if (mysqli_query($conn, $sql)) {
    $_SESSION['dany']['login'] = $newlogin;
    $_SESSION['po'] = "Hotový";
    header('Location: ../logg.php');
} else {
    $_SESSION['po'] = "Chyba zmeny prihlásenia";
    header('Location: ../logg.php');
}
}else{
    $_SESSION['po'] = "Vyplňte všetky polia";
    header('Location: ../logg.php');
}
}


?>