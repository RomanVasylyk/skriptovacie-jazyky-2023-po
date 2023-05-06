<!DOCTYPE html>
<html lang="sk">
<?php
session_start();
include_once "parts/header.php";
?>
<body>
<?php
include_once "parts/nav.php";
?>
<section style="margin-top: 100px;">
<h1>Pridaj svoj recept</h1>
<form action="reg/bladd.php" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="login" name="login" class="feedback-input m">
            <input type="text" placeholder="password" name="pass" class="feedback-input">
            <input type="text" placeholder="name riadu" name="name" class="feedback-input">
            <input type="file" name="image" class="feedback-input">
            <textarea  name="history" required class="feedback-input" placeholder="History"></textarea>
            <?php
             if($_SESSION['blog']){
             echo '<p style="margin-top: -15px;padding: 5px;text-align: center;font-weight: bold;color: #ef0000;">' . $_SESSION['blog'] . '</p>';
             }
             unset($_SESSION['blog']);
             ?>
            <button type="submit">Add blog</button>
        </form>
</section>

</body>
</html>