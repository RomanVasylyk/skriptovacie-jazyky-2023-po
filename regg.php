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
    <form action="reg/reg.php" method="post">
        <input type="text" placeholder="login" name="login" class="feedback-input m">
        <input type="text" placeholder="password" name="pass" class="feedback-input">
        <input type="text" placeholder="repeat password" name="repeatpass" class="feedback-input">
        <input type="text" placeholder="email" name="email" class="feedback-input" placeholder="Email" required>
        <button type="submit">register</button>
    </form>
</main>
    <?php
include_once "parts/footer.php";
?>
</body>

</html>