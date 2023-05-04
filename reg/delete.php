<?php
session_start();
require_once('db.php');

$login = $_POST['login'];
$pass = md5($_POST['pass']);

if($login == '' || $pass == 'd41d8cd98f00b204e9800998ecf8427e'){
    $_SESSION['po3'] = "Vyplňte všetky polia";
    header('Location: ../logg.php');
}
else{
$sql1 = mysqli_query($conn, "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
 if(mysqli_num_rows($sql1) > 0){
    $sql = "DELETE FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'";
    if (mysqli_query($conn, $sql)) {
        unset($_SESSION['dany']);
        header('Location: ../logg.php');
    }
}else{
    $_SESSION['po3'] = "Chyba zmeny prihlásenia";
    header('Location: ../logg.php');      
} 
}
?>