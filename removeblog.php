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
<h1>Odstrániť svoj blog</h1>
<form action="reg/removebl.php" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="login" name="login" class="feedback-input m">
            <input type="text" placeholder="password" name="pass" class="feedback-input">
            <input type="text" placeholder="name riadu" name="name" class="feedback-input">
            
            <?php
             if($_SESSION['blog1']){
             echo '<p style="margin-top: -15px;padding: 5px;text-align: center;font-weight: bold;color: #ef0000;">' . $_SESSION['blog1'] . '</p>';
             }
             unset($_SESSION['blog1']);
             ?>
            <button type="submit">Remove blog</button>
        </form>
</section>

</body>
</html>