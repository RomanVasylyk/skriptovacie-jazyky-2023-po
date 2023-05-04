<?php
session_start();
unset($_SESSION['dany']);
header("Location: ../logg.php");
?>