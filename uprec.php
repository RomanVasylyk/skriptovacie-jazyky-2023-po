<?php
session_start();
require_once('reg/db.php');
?>
<!DOCTYPE html>
<html lang="sk">

<head>
  <meta charset="UTF-8">
  <title>Pridajte recept</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    
    body {
      background-image: url('https://fastly.picsum.photos/id/1000/1200/800.jpg?hmac=9R51YdhkDL7FU3du_P0gQyy4mFdf_Bg73l3zSCgcsbI');
      background-size: cover;
      background-position: center;
    }
    
    .container {
      background-color: rgba(255, 255, 255, 0.8);
      padding: 30px;
      margin-top: 50px;
      animation: fadeIn 1s;
    }
    
    @keyframes fadeIn {
      from {opacity: 0;}
      to {opacity: 1;}
    }
  </style>
</head>
<body>
<?php
if(isset($_POST['idr'])):
    ?>
    <?php
    $up = $_POST['idr'];
    $sql = mysqli_query($conn, "SELECT * FROM `recept` WHERE `idr` = '$up'");
    if(mysqli_num_rows($sql) > 0){
        $user = mysqli_fetch_assoc($sql);
    echo '
    <div class="container">
    <h1>Pridajte recept</h1>
    <form action="reg/upre.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Názov jedla:</label>
        <input value="'. $user['name'] .'" type="text" class="form-control" id="name" name="name" required>
      </div>

      <div class="form-group">
        <label for="ingredients">Ingrediencie:</label>
        <textarea  class="form-control" id="ingredients" name="ingredients" required>'. $user['ing'] .'</textarea>
      </div>

      <div class="form-group">
        <label for="steps">Kroky prípravy:</label>
        <textarea class="form-control" id="steps" name="steps" required>'. $user['krok'] .'</textarea>
      </div>

      <div class="form-group">
        <label for="category">Kategória:</label>
        <select class="form-control" id="category" name="category">
          <option value="soup">soup</option>
          <option value="drink">drink</option>
          <option value="lunch_dish">lunch dish</option>
          <option value="Fish">Fish</option>
          <option value="salad">salad</option>
          <option value="baking">baking</option>
          <option value="dessert">dessert</option>
        </select>
      </div>

      <div class="form-group">
        <label for="cooking_time">Čas varenia(minuty):</label>
        <input value="'. $user['time'] .'" type="number" class="form-control" id="cooking_time" name="cooking_time" required>
      </div>      
      <button value="'. $up .'" type="submit" class="btn btn-primary" name="idr">Pridať recept</button>
    </form>
  </div>';
  if($_SESSION['up11']){
    echo '<p style="margin-top: 15px;padding: 5px;text-align: center;font-weight: bold;color: #ef0000;">' . $_SESSION['up11'] . '</p>';
    }
    
    unset($_SESSION['up11']);
}
?>
<?php endif;?>
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
