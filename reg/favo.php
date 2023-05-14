<?php
session_start();
require_once('db.php');

if(isset($_POST['idr'])){
$idr = $_POST['idr'];
$id = $_SESSION['dany']['id'];
$sql1 = mysqli_query($conn, "INSERT INTO `favorite` (`idf`,`idr`,`id`) VALUES (NULL,'$idr' ,'$id')");
if($sql1 === TRUE){
    echo '<script>alert("Added Successfully"); window.location.href="../o_nas.php";</script>';
} else {
    echo '<script>alert("Chyba"); window.location.href="../o_nas.php";</script>';
}
}


?>