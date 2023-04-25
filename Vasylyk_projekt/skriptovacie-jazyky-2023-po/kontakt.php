<!DOCTYPE html>
<!DOCTYPE html>
<html lang="sk">
<?php
include_once "parts/header.php";
?>
<body>
<?php
include_once "parts/nav.php";
?>
<main>
  <h1 class="hh1">Kontakt</h1>
</main>

<section class="container">
  <form id="contact" action="thank.html">      
    <input  name="name" type="text" class="feedback-input m" placeholder="Name" required />   
    <input  name="email" type="email" class="feedback-input" placeholder="Email" required />
    <textarea  name="text" required class="feedback-input" placeholder="Comment"></textarea>
    <input class="z" maxlength="140" type="checkbox" id="vehicle1" name="vehicle1" required value="Bike">
    <label class="z" for="vehicle1">Súhlas so spracovaním osobných údajov</label>
   <input  type="submit" value="Odoslať" ></input>
   
  </form>
  <div id= "error" class="text-red">
            
  </div>
</section>





<?php
include_once "parts/footer.php";
?>

  <script src="js/app .js"></script>
</body>
</html>