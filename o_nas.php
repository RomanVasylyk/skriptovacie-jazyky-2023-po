<!DOCTYPE html>
<html lang="sk">
<?php
session_start();
require_once("reg/db.php");
include_once "parts/header.php";
?>
  <style>
.im{
  background-color: transparent;
  width: 5%;
}

    .btn {
      margin-top: 10px;
      margin-left: -100px;
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

.btn:hover {
  background-color: RoyalBlue;
}
.btn1:hover {
  background-color: RoyalBlue;
}
.btn1 {
      margin-top: 50px;
      margin-left: 50px;
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}
.btn2 {
  margin-top: 10px;
      margin-left: -100px;
  background-color: chartreuse;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}
.btn2:hover {
  background-color: green;
}
 
 
  .row::after {
    content: "";
    clear: both;
    display: table;
  }
  .col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
  }
  .col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
  }
 
  p {
    margin: 0;
    padding: 0;
    font-size: 14px;
    line-height: 1.5;
  }
  </style>
<body>

<?php
include_once "parts/nav.php";
?>
    
    <section class="header">
      <h1 class="h1">Blog</h1>
      <h1 class="h1">Rôzne recepty</h1>
      <p class="p">Company Mission Statement goes here</p>
      <a style="text-decoration: none;" href="https://karaoke-k3.ru/uk/cakes/kratkoe-opisanie-kafe-restoran-shantil-opisanie-menyu-otzyvy-poleznaya.htm" class="btn-bgstroke a">Recepty pre každý vkus</a>
  </section>
<section class="v s container">
  
  <div style="width: 100%;">
  <h1>Recept</h1>
  <h2>Vietnamská polievka PHO BO</h2>
</div>

</section>

<section class="v s container">
  <div class="row">
  <div class="col-75">

    
        <h3>POSTUP</h3>
        <li>Kosti zalejeme studenou vodou, privedieme k varu a varíme asi 15 minút. Potom ich scedíme a dobre opláchneme, opäť zalejeme a dáme variť spolu s celou očistenou cibuľou a sviečkovicou. Pridáme polievkovú lyžicu soli a cukru a varíme 2 až tri hodiny v závislosti od veľkosti sviečkovice. Nezakrývame a príležitostne zozbierame bielkovinu z povrchu vývaru. </li>
        <li>Medzitým pozdĺžne nakrájame zázvor na plátky, cibuľu rozrežeme na polovicu a spolu s škoricou, anízom a kardamonom, všetko opečieme na suchej panvici ci platni. Tak dosiahneme efektívnejšie uvoľnenie arómy z korenín. Takto pripravené koreniny pridáme k vriacemu vývaru a varíme kým mäsko nezmäkne. </li>
        <li>Ryžové rezance namočíme do studenej vody na 30 minút, následne krátko povaríme (postupujeme podľa návodu na prípravu) a rozdelíme do misiek. Rezance v miskách zalejeme scedeným vývarom, pridáme na plátky nakrájanú sviečkovicu, mungo klíčky, jarné cibuľky, nasekané čili, šalotku, bylinky a tesne pred podávaním pár kvapiek limetkovej šťavy.</li>
    
  </div>
<div class="col-25">
    <ol>
        <h3>INGREDIENCIE</h3>
        <li>2 ks - väčšia špiková kosť</li>
        <li>500 g - hovädzí chvost</li>
        <li>500 g - falošná hovädzia sviečkovica</li>
        <li>1 ks - väčšia cibuľa</li>
    </ol>
    <button class="bat" onclick="myFunction()">Hare me</button>
</div>
</div>
</section>
<section class="v container">
  <div >
    <table >
    
        <caption><mark><big>Nutričných hodnôt</big></mark></caption>
    
        <tr>
            <th colspan="5">Porcia (500 ml)</th>
            </tr>
        
        <tr >
            <th >Energetická hodnota</th>
            <th >Bielkoviny</th>
            <th >Sacharidy</th>
            <th >Tuky</th>
            <th >Vláknina</th>
        </tr>

        <tr >
            <td >362 kcal</td>
            <td >15 g</td>
            <td >40 g</td>
            <td > 15 g</td>
            <td >4 g</td>
        </tr>
    </table>
   
</section>

<section>
<h1 style="margin-top: 20px;">My favorite recipes</h1>
<?php
$idd = $_SESSION['dany']['id'];
 $ty = mysqli_query($conn, "SELECT * FROM `favorite` WHERE id = '$idd'");
 while ($w = mysqli_fetch_assoc($ty)) {

  $b = $w['idr'];
  $tyy =  mysqli_query($conn, "SELECT * FROM `recept` WHERE idr = '$b'");
  if($tyy == TRUE){
   $y = mysqli_fetch_assoc($tyy);
   $s = $y['id'];
   $resu = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$s'"));
   $tu = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `favorite` WHERE idr = '$b'"));
   echo '<button class="accordion">' . $y["name"] . '  <span style="margin-left:150px"> '. $tu .' like</span> <span style="float:right">vytvoril: ' . $resu["login"] . '</span></button>
    <div class="panel">
        <div class="container row">';
        echo '<form method="post" action="reg/favom.php"><button name="idr" value="'. $y['idr'] .'" class="btn2"><i class="fa fa-minus"></i> favorite</button></form>';

        echo '<div style="text-align: center;" class="col-25"><p >Ingrediencie:</p></div>
            <div class="col-75"><p >' . $y["ing"] . '</p></div>
        </div>
        <div class="container row">
            <div style="text-align: center;" class="col-25"><p >Kroky:</p></div>
            <div class="col-75"><p >' . $y["krok"] . '</p></div>
        </div>
        <div class="container row">
            <div style="text-align: center;" class="col-25"><p >Čas:</p></div>
            <div class="col-75"><p >' . $y["time"] . 'min</p></div>
        </div>
    </div>';
  }
 }
 ?>
</section>

<section>
<a href="recept.php"><button class="btn1"><i class="fa fa-plus"></i>recept</button></a>
<?php
 $result = mysqli_query($conn, "SELECT * FROM `recept`");
 while ($row = mysqli_fetch_assoc($result)) {
  $q = $row['id'];
  $b = $row['idr'];
  $result1 = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$q'");
  $ro = mysqli_fetch_assoc($result1);
  $tu = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `favorite` WHERE idr = '$b'"));
  echo '<button class="accordion">' . $row["name"] . '<span style="margin-left:150px"> '. $tu .' like</span> <span style="float:right">vytvoril: ' . $ro["login"] . '</span></button>
    <div class="panel">
        <div class="container row">';
        $id = $_SESSION['dany']['id'];
        $idr = $row['idr'];
  $p = mysqli_query($conn, "SELECT * FROM favorite WHERE id = '$id' AND idr = '$idr' ");
if(mysqli_num_rows($p) == 0){
  echo '<form method="post" action="reg/favo.php"><button name="idr" value="'. $idr .'" class="btn"><i class="fa fa-plus"></i> favorite</button></form>';
}else{
  echo '<form method="post" action="reg/favom.php"><button name="idr" value="'. $idr .'" class="btn2"><i class="fa fa-minus"></i> favorite</button></form>';
}
  echo '<div style="text-align: center;" class="col-25"><p >Ingrediencie:</p></div>
            <div class="col-75"><p >' . $row["ing"] . '</p></div>
        </div>
        <div class="container row">
            <div style="text-align: center;" class="col-25"><p >Kroky:</p></div>
            <div class="col-75"><p >' . $row["krok"] . '</p></div>
        </div>
        <div class="container row">
            <div style="text-align: center;" class="col-25"><p >Čas:</p></div>
            <div class="col-75"><p >' . $row["time"] . 'min</p></div>
        </div>
    </div>';
}
?>
</section>
<?php
include_once "parts/footer.php";
?>


<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
    </script>
    <script src="js/app .js"></script>
</body>
</html>