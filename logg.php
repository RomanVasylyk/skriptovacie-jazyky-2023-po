<!DOCTYPE html>
<html lang="sk">
<?php
include_once "parts/header.php";
?>

<body>
<?php
include_once "parts/nav.php";
?>
<main style="margin-top: 150px;">

<form action="reg/log.php" method="post">
        <input type="text" placeholder="login" name="login" class="feedback-input m">
        <input type="text" placeholder="password" name="pass" class="feedback-input">
        <button type="submit">login</button>
    </form>

    <main>
    <?php
include_once "parts/footer.php";
?>
</body>

</html>