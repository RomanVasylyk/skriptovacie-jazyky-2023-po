
<!DOCTYPE html>
<html lang="sk">
<?php
session_start();
include_once "parts/header.php";
require_once('reg/db.php');
?>

<body>
<style>
    .item3{
  color: red;
  padding-top: 15px;
  font-size: 15px;
  border: 2px solid rgb(202, 144, 144);
  text-align: center;
  word-wrap: break-word;
  
}
.container12 {
  padding-left:5%;
  padding-right:5%;
  display: grid;
  grid-template-columns: repeat(6, 1fr);
  word-wrap: break-word;
}
.container14 {
  padding-left:5%;
  padding-right:5%;
  display: grid;
  grid-template-columns: 60px 60px 100px 250px 626px 100px 100px;
  
  
}
.container111 {
  padding-left:5%;
  padding-right:5%;
  display: grid;
  grid-template-columns: 90px 90px 550px 260px 100px 100px 106px ;
  word-wrap: break-word;
}
.container1111 {
  padding-left:5%;
  padding-right:5%;
  display: grid;
  grid-template-columns: 110px 110px 270px 580px 100px 126px ;
  word-wrap: break-word;
}
.container13 {
  padding-left:5%;
  padding-right:5%;
  display: grid;
  grid-template-columns: repeat(1, 1fr);
  
}
.container11 {
    padding-left:10%;
  padding-right:10%;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  
}
.item4{
    color: white;
  padding-top: 15px;
  font-size: 15px;
  border: 2px solid rgb(202, 144, 144);
  text-align: center;
  word-wrap: break-word;
}
.hhh {
  font-size: 2.1em;
  padding: 10px 0;
  font-weight: 80;
  color: #33cccc;
}
.it{
  width: 50%;

}
</style>
    <?php
include_once "parts/nav.php";
?>
    <?php
if($_SESSION['dany']['login'] == ''):
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
                <form style="width: 75%;" action="reg/updatelog.php" method="post">
            <input type="text" placeholder="login" name="login" class="feedback-input m">
            <input type="text" placeholder="new login" name="newlogin" class="feedback-input">
            <input type="text" placeholder="password" name="pass" class="feedback-input">
            <?php
             if($_SESSION['po']){
             echo '<p style="margin-top: -15px;padding: 5px;text-align: center;font-weight: bold;color: #ef0000;">' . $_SESSION['po'] . '</p>';
             }
             unset($_SESSION['po'])
             ?>
            <button type="submit">Update Login</button>
                </form>
            </div>
            <div class="item2">
                <form style="width: 75%;" action="reg/updateemail.php" method="post">
            <input type="text" placeholder="Email" name="email" class="feedback-input m">
            <input type="text" placeholder="new Email" name="newemail" class="feedback-input">
            <input type="text" placeholder="password" name="pass" class="feedback-input m">
            <?php
             if($_SESSION['po1']){
             echo '<p style="margin-top: -15px;padding: 5px;text-align: center;font-weight: bold;color: #ef0000;">' . $_SESSION['po1'] . '</p>';
             }
             unset($_SESSION['po1'])
             ?>
            <button type="submit">Update Email</button>
                </form> 
            </div>
            <div class="item2">
                <form style="width: 75%;" action="reg/updatepass.php" method="post">
                <br>
            <input type="text" placeholder="password" name="pass" class="feedback-input">
            <input type="text" placeholder="new password" name="newpass" class="feedback-input">
            <?php
             if($_SESSION['po2']){
             echo '<p style="margin-top: -15px;padding: 5px;text-align: center;font-weight: bold;color: #ef0000;">' . $_SESSION['po2'] . '</p>';
             }
             unset($_SESSION['po2'])
             ?>
            <button type="submit">Update Password</button>
                </form>
             </div>
        </div>

        <div class="container11">
            <div class="item2"><p>Delete Account   </p><br><p></p></div>
            <div class="item2">Logout  </div>
        </div>

        <div class="container11">
        <div class="item2">
                <form style="width: 75%;" action="reg/delete.php" method="post">
                <br>
            <input type="text" placeholder="login" name="login" class="feedback-input">
            <input type="text" placeholder="password" name="pass" class="feedback-input">
            <?php
             if($_SESSION['po3']){
             echo '<p style="margin-top: -15px;padding: 5px;text-align: center;font-weight: bold;color: #ef0000;">' . $_SESSION['po3'] . '</p>';
             }
             unset($_SESSION['po3']);
             ?>
            <button type="submit">Delete</button>
                </form>
             </div>
             <div class="item2">
        <p style="margin-top: 50px; color: #e89d9d;">Ahoj <?= $_SESSION['dany']['login']?> </p><br>
        <a href="reg/exit.php"><button
                    style="font-family: fantasy;border-radius: 50%;background-color:rgb(202, 144, 144);width: 20%; ">logout</button></a>
        </div>
        </div>

    </section>
    

    
    <section style="margin-top: 100px;" >
<div class="container13">
<div class="item3 hhh"><big>Tabuľka Blogov</big></div>
</div>
<div class="container111">
            <div class="item3">id blogu</div>
            <div class="item3"><p>Nazov</p><p><br></p></div>
            <div class="item3">Historia</div>
            <div class="item3">Img</div>
            <div class="item3">Datum</div>
            <div class="item3">Update</div>
            <div class="item3">Delete</div>
</div>
<?php
$iddd = $_SESSION['dany']['id'];
 $result = mysqli_query($conn, "SELECT * FROM `blog` WHERE `id` = '$iddd'");

 while ($row = mysqli_fetch_assoc($result)) {

    echo '<div class="container111">
            <div class="item4">'. $row["idb"] .'<p><br></p></div>
            <div class="item4">'. $row["name"] .'</div>
            <div class="item4">'. $row["history"] .'</div>
            <div class="item4">'. $row["img"] .'</div>
            <div class="item4">'. $row["date"] .'</div>
            <div class="item4"><form action="upblog.php" method="post"><button  name="up" value="' . $row["idb"] . '" type="submit">Update</button></form></div>
            <div class="item4"><form action="reg/delad.php" method="post"><button  name="del3" value="' . $row["idb"] . '" type="submit">Delete</button></form></div>
         </div>';
 }
 if($_SESSION['up']){
  echo '<p style="margin-top: 15px;padding: 5px;text-align: center;font-weight: bold;color: #ef0000;">' . $_SESSION['up'] . '</p>';
  }
  
  unset($_SESSION['up']);
 if($_SESSION['del3']){
  echo '<p style="margin-top: 15px;padding: 5px;text-align: center;font-weight: bold;color: #ef0000;">' . $_SESSION['del3'] . '</p>';
  }
  
  unset($_SESSION['del3']);
?>

</section>

<section style="margin-top: 100px;" >
<div class="container13">
<div class="item3 hhh"><big>Tabuľka Komentárov</big></div>
</div>
<div class="container1111">
            <div class="item3">id komm</div>
            <div class="item3"><p>id blogu</p><p><br></p></div>
            <div class="item3">Nazov</div>
            <div class="item3">Komentár</div>
            <div class="item3">Datum</div>
            <div class="item3">Delete</div>
</div>
<?php
$iddd = $_SESSION['dany']['id'];
 $result5 = mysqli_query($conn, "SELECT * FROM `comments` WHERE `id` = '$iddd'");

 while ($row5 = mysqli_fetch_assoc($result5)) {

    echo '<div class="container1111">
            <div class="item4">'. $row5["idc"] .'<p><br></p></div>
            <div class="item4">'. $row5["idb"] .'</div>
            <div class="item4">'. $row5["name"] .'</div>
            <div class="item4">'. $row5["comm"] .'</div>
            <div class="item4">'. $row5["date"] .'</div>
            <div class="item4"><form action="reg/delad.php" method="post"><button  name="del2" value="' . $row5["idc"] . '" type="submit">Delete</button></form></div>
         </div>';
 }

 if($_SESSION['del2']){
  echo '<p style="margin-top: 15px;padding: 5px;text-align: center;font-weight: bold;color: #ef0000;">' . $_SESSION['del2'] . '</p>';
  }
  
  unset($_SESSION['del2']);
?>

</section>
<?php endif;?>
</body>

</html>