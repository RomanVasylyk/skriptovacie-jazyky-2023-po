<?php
session_start();
require_once('db.php');


$name = $_POST['name'];
$ingredients = $_POST['ingredients'];
$steps = $_POST['steps'];
$category = $_POST['category'];
$cooking_time = $_POST['cooking_time'];
if(empty($name) || empty($ingredients) || empty($steps) || empty($category) || empty($cooking_time)){
    $_SESSION['rec'] = "Vyplňte všetky polia";
    header('Location: ../recept.php');
}
else if(strlen($name) > 100 || strlen($ingredients) > 500 || strlen($steps) > 1000){
    $_SESSION['rec'] = "Príliš veľa slov v príbehu môže mať iba nazov - 100 písmen, Ingrediencie - 500 písmen, Kroky - 1000 písmen";
    header('Location: ../recept.php');
}
else{
    $sql1 = mysqli_query($conn, "SELECT * FROM kategori WHERE name = '$category'");
    $user = mysqli_fetch_assoc($sql1);
    $idk = $user['idk'];
    $id = $_SESSION['dany']['id'];

    $sql = "INSERT INTO recept (idr, id, idk, name, ing, krok, time)
VALUES (NULL, '$id', '$idk', '$name', '$ingredients', '$steps', '$cooking_time')";
if (mysqli_query($conn, $sql)) {
    echo '<script>alert("Added Successfully"); window.location.href="../o_nas.php";</script>';
  } else {
    header('Location: ../recept.php');
    echo '<script>alert("Chyba: ' . $sql . '"<br>"' . mysqli_error($conn).'");</script>';
  }


    
}

?>