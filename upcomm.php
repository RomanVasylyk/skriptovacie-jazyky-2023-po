<!DOCTYPE html>
<html lang="sk">
<?php
session_start();
require_once('reg/db.php');
include_once "parts/header.php";
?>
<body>
<?php
include_once "parts/nav.php";
?>
<?php
if(isset($_POST['up1'])):
?>
<?php
$up = $_POST['up1'];
$sql = mysqli_query($conn, "SELECT * FROM `comments` WHERE `idc` = '$up'");
if(mysqli_num_rows($sql) > 0){
    $user = mysqli_fetch_assoc($sql);
    echo '
    <div class="container row" style="margin-top: 100px;">
  <form  action="reg/upcom.php" method="post" enctype="multipart/form-data">
     <input type="text" placeholder="meno" name="name" class="feedback-input m" value="'. $user['name'] .'">
     <textarea   name="comm" required class="feedback-input" placeholder="Comments">'. $user['comm'] .'</textarea>
     <button name="idc" type="submit" value="' . $up . '">Update</button>
           </form>
    </div>';
    if($_SESSION['up11']){
        echo '<p style="margin-top: 15px;padding: 5px;text-align: center;font-weight: bold;color: #ef0000;">' . $_SESSION['up11'] . '</p>';
        }
        
        unset($_SESSION['up11']);
}
?>


<?php endif;?>
</body>
</html>