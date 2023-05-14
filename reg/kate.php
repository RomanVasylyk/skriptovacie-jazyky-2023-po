<?php
session_start();
require_once('db.php');

if(isset($_POST['name'])){
$name = $_POST['name'];

$sql1 = mysqli_query($conn, "INSERT INTO `kategori` (`idk`,`name`) VALUES (NULL,'$name')");
if($sql1 === TRUE){
    echo '<script>alert("Added Successfully"); window.location.href="../admin.php";</script>';
} else {
    echo '<script>alert("Chyba"); window.location.href="../admin.php";</script>';
}
}


?>