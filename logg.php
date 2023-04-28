<!DOCTYPE html>
<html lang="sk">
<?php
include_once "parts/header.php";
?>

<body>
<?php
include_once "parts/nav.php";
?>
<?php
if($_COOKIE['user'] == ''):
?>
<main style="margin-top: 150px;">
<form action="reg/log.php" method="post">
        <input type="text" placeholder="login" name="login" class="feedback-input m">
        <input type="text" placeholder="password" name="pass" class="feedback-input">
        <button type="submit">login</button>
        <p style="margin-top: 15px; color: #e89d9d;">Zatiaľ neregistrovaný?<a href= "regg.php"> Registrácia</a>!</p>
    </form>
</main>
    <?php else: ?>
        <section style="text-align: center;">
       <p style="margin-top: 150px; color: #e89d9d;">Ahoj  <?=$_COOKIE['user']?>  <a  href="reg/exit.php"><button
                     style="font-family: fantasy;border-radius: 50%;background-color:rgb(202, 144, 144); ">logout</button></a></p>
        </section>
    <?php endif;?>
    <?php
include_once "parts/footer.php";
?>
</body>

</html>