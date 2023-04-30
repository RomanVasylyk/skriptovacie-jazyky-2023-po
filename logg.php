
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

        <h1 style="margin: 10px;">Vitajte vo svojom osobnom účte <?= $_SESSION['dany']['login']?> !</h1>
        <div class="container2">
            <div class="item2"><p>Login:  <?= $_SESSION['dany']['login']?></p><br><p></p></div>
            <div class="item2">Email: <?= $_SESSION['dany']['email'];?> </div>
            <div class="item2">Password</div>
        </div>
        
        <div class="container2">
            <div class="item2">
                <form style="width: 75%;" action="reg/updetelog.php" method="post">
            <input type="text" placeholder="login" name="login" class="feedback-input m">
            <input type="text" placeholder="new login" name="newlogin" class="feedback-input">
            <input type="text" placeholder="password" name="pass" class="feedback-input">
            <?php
             if($_SESSION['po']){
             echo '<p style="margin-top: -15px;padding: 5px;text-align: center;font-weight: bold;color: #ef0000;">' . $_SESSION['po'] . '</p>';
             }
             unset($_SESSION['po'])
             ?>
            <button type="submit">Updete Login</button>
                </form>
            </div>
            <div class="item2">
                <form style="width: 75%;" action="reg/updetelog.php" method="post">
            <input type="text" placeholder="Email" name="email" class="feedback-input m">
            <input type="text" placeholder="new Email" name="newemail" class="feedback-input">
            <input type="text" placeholder="password" name="pass" class="feedback-input">
            <?php
             if($_SESSION['po1']){
             echo '<p style="margin-top: -15px;padding: 5px;text-align: center;font-weight: bold;color: #ef0000;">' . $_SESSION['po1'] . '</p>';
             }
             unset($_SESSION['po1'])
             ?>
            <button type="submit">Updete Email</button>
                </form> 
            </div>
            <div class="item2">
                <form style="width: 75%;" action="reg/updetelog.php" method="post">
                <br>
            <input type="text" placeholder="password" name="pass" class="feedback-input">
            <input type="text" placeholder="new password" name="newpass" class="feedback-input">
            <?php
             if($_SESSION['po2']){
             echo '<p style="margin-top: -15px;padding: 5px;text-align: center;font-weight: bold;color: #ef0000;">' . $_SESSION['po2'] . '</p>';
             }
             unset($_SESSION['po2'])
             ?>
            <button type="submit">Updete Password</button>
                </form>
             </div>
        </div>

    </section>
    <section style="text-align: center;">

        <p style="margin-top: 150px; color: #e89d9d;">Ahoj <?= $_SESSION['dany']['login']?> <a href="reg/exit.php"><button
                    style="font-family: fantasy;border-radius: 50%;background-color:rgb(202, 144, 144); ">logout</button></a>
        </p>
    </section>
    <?php endif;?>
    
</body>

</html>