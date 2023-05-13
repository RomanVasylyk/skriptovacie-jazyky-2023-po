<?php
session_start();
require_once('db.php');

if(isset($_POST['name']) && isset($_POST['ingredients']) && isset($_POST['steps']) && isset($_POST['category']) && isset($_POST['cooking_time'])){
    $name = $_POST['name'];
$ingredients = $_POST['ingredients'];
$steps = $_POST['steps'];
$category = $_POST['category'];
$cooking_time = $_POST['cooking_time'];
$idr = $_POST['idr'];

if(strlen($name) > 100 || strlen($ingredients) > 500 || strlen($steps) > 1000){
    $_SESSION['rec'] = "Príliš veľa slov v príbehu môže mať iba nazov - 100 písmen, Ingrediencie - 500 písmen, Kroky - 1000 písmen";
    header('Location: ../uprec.php');
}
else{
    $sql1 = mysqli_query($conn, "SELECT * FROM kategori WHERE name = '$category'");
    $user = mysqli_fetch_assoc($sql1);
    $idk = $user['idk'];
    $id = $_SESSION['dany']['id'];

    $sql = "UPDATE `recept` SET `idk` = '$idk', `name` = '$name', `ing` = '$ingredients',`krok` = '$steps', `time` = '$cooking_time' WHERE `idr` = '$idr'";
    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Added Successfully"); window.location.href="../logg.php";</script>';
      } else {
        header('Location: ../uprec.php');
        echo '<script>alert("Chyba: ' . $sql . '"<br>"' . mysqli_error($conn).'");</script>';
      }
    


    
}
}

?>