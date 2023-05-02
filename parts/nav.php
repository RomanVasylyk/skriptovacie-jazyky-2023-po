<!DOCTYPE html>
<html lang="sk">
<?php
session_start();
include_once "parts/header.php";
?>

<body>
  <header class="container main-header">
    <div><img class="img" src="./img/images.jpeg" alt="Logo"></div>
    <nav class="main-nav">
      <ul class="main-menu" id="main-menu">
        <li><a class="d o" href="index.php">Domov</a></li>
        <li><a class="o" href="o_nas.php">Blog</a></li>
        <li><a class="g o" href="galeria.php">Galeria</a></li>
        <li><a class="k o" href="kontakt.php">Kontakt</a></li>
        <?php
        if($_SESSION['dany']['login'] == ''):
        ?>  
        <li><a class="k o" href="logg.php">log</a></li>
        <?php else: ?>
          <li><a class="k o" href="logg.php"><?= $_SESSION['dany']['login']?></a></li>
        <?php endif;?>
      </ul>
      <a class="hamburger" id="hamburger">
        <i class="fa fa-bars"></i>
      </a>
    </nav>
  </header>
  </body>

</html>
