<!DOCTYPE html>
<html lang="sk">
<?php
include_once "parts/header.php";
?>
<body>
<form action="reg.php" method="post">
<input type="text" placeholder="login" name="login" >
<input type="text" placeholder="password" name="pass" >
<input type="text" placeholder="repeat password" name="repeatpass" >
<input type="text" placeholder="email" name="email" >
<button type="submit">register</button>
</form>

<form action="log.php" method="post">
<input type="text" placeholder="login" name="login" >
<input type="text" placeholder="password" name="pass" >
<button type="submit">login</button>
</form>
</body>
</html>