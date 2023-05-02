<?php
session_start();
$_SESSION['dany']['login'] = '';
header("Location: ../logg.php");
?>