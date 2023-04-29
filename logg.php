
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
    <?php
if($_COOKIE['user'] == ''):
?>
    <main style="margin-top: 150px;">
    <h1>Autorizácia</h1>
        <form action="reg/log.php" method="post">
            <input type="text" placeholder="login" name="login" class="feedback-input m">
            <input type="text" placeholder="password" name="pass" class="feedback-input">
            <?php
             if($_SESSION['pou']){
             echo '<p style="margin-top: -15px;padding: 5px;text-align: center;font-weight: bold;color: #ef0000;">' . $_SESSION['pou'] . '</p>';
             }
             unset($_SESSION['pou'])
             ?>
            <button type="submit">login</button>
            <p style="margin-top: 15px; color: #e89d9d;">Zatiaľ neregistrovaný?<a href="regg.php"> Registrácia</a>!</p>
        </form>
    </main>
    <?php else: ?>
    <section style="margin-top: 100px;">

        <h1>Vitajte vo svojom osobnom účte <?= $_COOKIE['user'] ?> !</h1>
        <div class="container2">
            <div class="item2">Login:  <?= $_COOKIE['user'];?></div>
            <div class="item2">Email: <?= $_SESSION['dany']['email'];?> </div>
            <div class="item2">Елемент 3</div>
        </div>
        
    </section>
    <section style="text-align: center;">

        <p style="margin-top: 150px; color: #e89d9d;">Ahoj <?=$_COOKIE['user']?> <a href="reg/exit.php"><button
                    style="font-family: fantasy;border-radius: 50%;background-color:rgb(202, 144, 144); ">logout</button></a>
        </p>
    </section>
    <?php endif;?>
    
</body>

</html>