<?php
session_start();
?>
<!DOCTYPE html>
<html lang="sk">
<?php
include_once "parts/header.php";
?>

<body>
<?php
include_once "parts/nav.php";
?>
<main style="margin-top: 100px;">
<h1 style="padding: 5px;margin:5px;">Registrácia</h1>
    <form action="reg/reg.php" method="post">
        <input type="text" placeholder="login" name="login" class="feedback-input ">
        <?php
        if($_SESSION['meno']){
         echo '<p style="margin-top: -15px;padding: 5px;text-align: center;font-weight: bold;color: #ef0000;">' . $_SESSION['meno'] . '</p>';
        }
        unset($_SESSION['meno'])
        ?>
        <input type="text" placeholder="password" name="pass" class="feedback-input ">
        <?php
        if($_SESSION['mes']){
         echo '<p style="margin-top: -15px;padding: 5px;text-align: center;font-weight: bold;color: #ef0000;">' . $_SESSION['mes'] . '</p>';
        }
        unset($_SESSION['mes'])
        ?>
        <input type="text" placeholder="repeat password" name="repeatpass" class="feedback-input ">
        <input type="text" placeholder="email" name="email" class="feedback-input " placeholder="Email" required>
        <?php
        if($_SESSION['pol']){
         echo '<p style="margin-top: -15px;padding: 5px;text-align: center;font-weight: bold;color: #ef0000;">' . $_SESSION['pol'] . '</p>';
        }
        unset($_SESSION['pol'])
        ?>
        <input class="z" maxlength="140" type="checkbox" id="vehicle1" name="vehicle1" required value="Bike">
        <label  class="z" for="vehicle1">Súhlas so spracovaním osobných údajov</label>
        <button style="margin:5px;" type="submit">register</button>
    </form>
</main>
    
</body>

</html>