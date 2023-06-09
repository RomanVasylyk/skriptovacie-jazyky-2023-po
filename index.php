<!DOCTYPE html>
<html lang="sk">
<?php
session_start();
require_once("reg/db.php");
include_once "parts/header.php";
?>
<style>
        .open-button {
            background-color: #555;
            color: white;
            padding: 12px 12px;
            border: none;
            cursor: pointer;
            opacity: 0.8;
            position: fixed;
            bottom: 23px;
            right: 28px;
            width: 280px;
        }

        .chat-popup {
        color: white;
            display: none;
            position: fixed;
            bottom: 0;
            right: 15px;
            border: 3px solid #f1f1f1;
            z-index: 9;
        }

        .form-container {

            max-width: 300px;
            padding: 10px;
            background-color: black;
        }

        .form-container textarea {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
            resize: none;
            min-height: 200px;
        }

        .form-container textarea:focus {
            background-color: #ddd;
            outline: none;
        }

        .form-container .btn {
            background-color: #04AA6D;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-bottom:10px;
            opacity: 0.8;
        }

        .form-container .cancel {
            background-color: red;
        }

        .form-container .btn:hover, .open-button:hover {
            opacity: 1;
        }
    </style>
<body>



    <?php
include_once "parts/nav.php";
?>
    <main>
        <div class="hero-img">
            <img style="width: 100%;" src="./img/image.jpeg" alt="">
        </div>

        <div class="hero-text">
            <h1 class="hh1" style="font-size:50px;font-family: fantasy;">Vitajte</h1><br>
            <p style="font-family: fantasy;">v</p><br>
            <p style="font-family: fantasy;"> Našej reštaurácii</p>
        </div>
        <div>
            <a
                href="https://karaoke-k3.ru/uk/cakes/kratkoe-opisanie-kafe-restoran-shantil-opisanie-menyu-otzyvy-poleznaya.html"><button
                    class="button" style="font-family: fantasy;">Hire me</button></a>
        </div>
        </div>
    </main>





    <section class="container s fo">
        <div class="row">
            <div class="col-50">
                <h4>Interiér</h4>
                <p>Vo vnútri reštaurácie Mriya je všetko veľmi dobre organizované. Aj preto sa do jej sál zmestí naraz
                    500 ľudí. Sály reštaurácie sú zariadené mäkkým nábytkom a podlaha je pokrytá kobercami. V hlavnej
                    sále reštaurácie je inštalovaný malý funkčný krb, ktorý je nielen miestnou dekoráciou, ale v
                    chladnom období zohrieva návštevníkov podniku a vytvára atmosféru domácej pohody. V tejto hale sa
                    nachádza vonkajší gril, kde sa pripravujú niektoré jedlá z jedálneho lístka.
                    Vo veľkej sále reštaurácie "Mriya" je karaoke, kde môžu hostia predviesť svoje schopnosti. Má tiež
                    vynikajúce zvukové vybavenie, vďaka ktorému je hlas znieť ešte jasnejší. Hostia zariadenia môžu
                    sedieť na farebných mäkkých pohovkách stojacich za stolmi vyrobenými z dreva. Interiér reštaurácie
                    je zariadený v klasickom štýle: podlaha je vyrobená z prírodných dubových dosiek a steny sú zdobené
                    tehlovým murivom.</p>
            </div>
            <div class="col-50">
                <img style="width: 100%;" src="./img/1.avif" alt="">
            </div>
        </div>


    </section>
    <section class="container s fo">
        <div class="row">
            <div class="col-50">
                <img style="width: 100%;" src="./img/2.avif" alt="">
            </div>
            <div class="col-50">
                <h4>Kuchyňa</h4>
                <p>V reštaurácii "Mriya" sa podávajú jedlá európskej, japonskej a stredomorskej kuchyne. Jedálny lístok
                    tohto zariadenia je pomerne rozmanitý, plný vynikajúcich európskych jedál. Môžete tu ochutnať
                    zaujímavé studené (tatarák z červeného tuniaka s krutónmi, lososové carpaccio s granulovaným
                    červeným kaviárom, bravčová masť s cesnakom a chlebom Borodino, syr "Pinocchio" s paradajkami) a
                    teplé predjedlá (zapečené krabie falangy, knedle, wasabi krevety) s krabmi s avokádo), šaláty (s
                    vyprážaným lososom, s kuracou pečeňou, "grécky", s grilovanou zeleninou s balzamikovým dresingom a
                    parmezánom). Na začiatok ponúkajú niekoľko možností polievok (šťaveľová polievka, jahňací lagman,
                    slepačia rezancová polievka, hríbová polievka) a ako hlavné jedlo teplé mäsové jedlá (mäso na
                    francúzsky spôsob, kačacie rezne, kuracie filé s orechovou omáčkou, mramor steak so sójovými bôbmi)
                    a jedlá z rýb (rezne zo šťuky, filé z murmanskej tresky, krabie rezne so šalátom chuka a avokádom).
                    Reštaurácia Mriya ponúka aj grilované jedlá (krevety, hrebenatky, chobotnice, dorado, chobotnice,
                    steak z lososa, lyula kebab, ribeye steak).</p>
            </div>
        </div>
    </section>
    <section class="container s fo">
        <div class="row">
            <div class="col-50">
                <h4>Raňajky</h4>
                <p>Každý hosť zariadenia môže využiť špeciálnu ponuku, ktorá platí počas celého dňa a nazýva sa
                    „Raňajky“. Ponuka tejto ponuky obsahuje niekoľko možností na varenie vajec, ktoré sú dodávané z
                    farmy Jevhena Savatova z dediny Orlya (región Kaluga). Aj v tomto malom sortimente je burger s
                    placičkou "Prime", tvarohové cheesecaky, ovsená kaša jogurt s višňovým džemom. Cena kompletnej sady,
                    ktorá môže obsahovať raňajky, je cca 500 eur.</p>
            </div>
            <div class="col-50">
                <img style="width: 100%;" src="./img/3.avif" alt="">
            </div>
        </div>
        
    </section>

    
    <section>
    <button type="submit" style="width: 3%;height: 50px;background:#CC6666;text-decoration: none;"><a style="text-decoration: none;" href="blogadd.php">+</a></button>
    <button type="submit" style="width: 3%;height: 50px;background:#CC6666;text-decoration: none;"><a style="text-decoration: none;" href="removeblog.php">-</a></button>

    


    <button class="accordion">Pilaf s baklažánom</button>
        <div class="panel">
            <div class="container row">
                <div class="col-50"><img style="width: 100%;" src="./img/4.png" alt=""></div>
                <div class="col-50">
                    <p style="font-family: fantasy;">Podľa legendy pilaf vynašli kuchári Alexandra Veľkého, pretože
                        miloval horúce a korenené jedlá. Teraz chápem, prečo sa toto jedlo považuje za mužské. Spolu so
                        šéfkuchárom a kvôli kompatibilite aj s kamarátom Dmytrom Kensytkym uvarili na ohni pilaf podľa
                        autorkinho receptu. Ukázalo sa to veľmi pikantné a bohaté na chuť.</p>
                </div>
            </div>
        </div>

        <button class="accordion">Ukrajinský boršč s fazuľou, žihľavou a opitou čerešňou</button>
        <div class="panel">
            <div class="container row">
                <div class="col-50"><img style="width: 100%;" src="./img/5.jpeg" alt=""></div>
                <div class="col-50">
                    <p style="font-family: fantasy;">Existuje názor, že ide o veľmi staré jedlo, ktoré kočovné
                        fínsko-maďarské kmene priniesli na územie moderného Maďarska a nášho ukrajinského Zakarpatska.
                        Prototypom tohto jedla bol recept nomádov, ktorí používali sušené konské mäso, hovädzie mäso
                        varené v kotlíku a pridávali ingrediencie trávy, korienkov a húb, ktoré v tom čase poznali.</p>
                </div>
            </div>
        </div>

        <button class="accordion">Rokotkrumpli</button>
        <div class="panel">
            <div class="container row">
                <div class="col-50"><img style="width: 100%;" src="./img/6.jpeg" alt=""></div>
                <div class="col-50">
                    <p style="font-family: fantasy;">Podivný názov hneď napovedá o cudzom pôvode. Vskutku, ide o
                        maďarské jedlo, ktoré si Ukrajinci osvojili do svojho každodenného života. Koniec koncov, recept
                        nie je vôbec zložitý a obsahuje ingrediencie, ktoré má každá rodina: zemiaky, syr, akékoľvek
                        údené mäso a vajcia. To všetko je rozložené v tenkých vrstvách, ochutené červenou paprikou a
                        zapečené.</p>
                </div>
            </div>
        </div>

        <button class="accordion">Knyshi</button>
        <div class="panel">
            <div class="container row">
                <div class="col-50"><img style="width: 100%;" src="./img/7.jpeg" alt=""></div>
                <div class="col-50">
                    <p style="font-family: fantasy;">O pôvode tohto jedla sa vedú mnohé spory. Podľa jednej verzie
                        pochádza z Bieloruska. Vo veľkej časti severných a stredoukrajinských regiónov sa však tešila
                        veľkej obľube. Knyshy sú okrúhle koláčiky z lístkového cesta, v strede ktorých je pomerne veľa
                        plnky. Náplň môže byť veľmi rôznorodá: kaša, zemiaková kaša, zelenina, syry a zelenina. Takouto
                        pochúťkou bola príloha k polievkam či mäsitým jedlám. Nechýbala ani sladká verzia jedla s
                        ovocím, bobuľami a domácim syrom.</p>
                </div>
            </div>
        </div>

        <button class="accordion">Kotsyurb</button>
        <div class="panel">
            <div class="container row">
                <div class="col-50"><img style="width: 100%;" src="./img/8.jpeg" alt=""></div>
                <div class="col-50">
                    <p style="font-family: fantasy;">Jedlo, ktoré kombinuje zemiakovú kašu a knedľu. Vzdialene
                        pripomínajúca taliansku variáciu cestovín, kde sa podáva aj so zemiakovou kašou. Nemenej chutné
                        je aj ukrajinské tradičné jedlo: malé halušky z cesta, zemiakov, oškvarkov a cesnaku sa zmiešajú
                        v makitre a to všetko sa podáva v jednej nádobe. Ďalšou verziou jedla je zemiaky nerozdrviť a
                        podávať ich v hrubých kúskoch.</p>
                </div>
            </div>
        </div>


        <?php
 $result = mysqli_query($conn, "SELECT * FROM `blog`");


 while ($row = mysqli_fetch_assoc($result)) {
    $qw = $row["id"];
    $idd = mysqli_query($conn, "SELECT *
    FROM `users`
    INNER JOIN `blog`
    ON `users`.`id` = `blog`.`id`
    WHERE `users`.`id` = '$qw'");

    
    $ro = mysqli_fetch_assoc($idd);

    echo '<button class="accordion">' . $row["name"] . '      , vytvoril:   ' . $ro["login"] . '</button>
    <div class="panel">
        <div class="container row">
            <div class="col-50"><img style="width: 100%;" src="./img/' . $row["img"] . '" alt=""></div>
            <div class="col-50" style="text-align: center;">
                <p style="font-family: fantasy;">' . $row["history"] . '</p>
            </div>
        </div>
        <div class="content" >';
        
$result1 = mysqli_query($conn, "SELECT * FROM comments WHERE idb = '".$row["idb"]."'");
if($result1->num_rows > 0){
while ($row1 = mysqli_fetch_assoc($result1)) {
$re = mysqli_query($conn, "SELECT * FROM users WHERE id = '".$row1["id"]."'");
$roww = mysqli_fetch_assoc($re);

echo '<h3>' . $roww["login"] . ':</h3> 
<h4>'. $row1["name"] .'</h4>    <p>'. $row1["comm"] .'</p>  <p>'. $row["date"] .'</p>';
}
}
     echo '</div>
          <div class="container row wrapper">
        <form  action="reg/komm.php" method="post" enctype="multipart/form-data">
           <input type="text" placeholder="Nazov teme" name="name" class="feedback-input m">
           <textarea  name="comm" required class="feedback-input" placeholder="Comments"></textarea>';

if($_SESSION['comm']){
   echo '<p style="margin-top: -15px;padding: 5px;text-align: center;font-weight: bold;color: #ef0000;">' . $_SESSION['comm'] . '</p>';
}
unset($_SESSION['comm']);

echo '<button name="idb" type="submit" value="' . $row["name"] . '">Add Comments</button>
           </form>
        </div>
    </div>';

 }
 ?>

    </section>



<?php
$lesson_id = "index.php";
?>

    <button class="open-button" onclick="openForm()">Add Notes</button>

<div class="chat-popup" id="myForm">
    <form action="notei.php" method="post" class="form-container">
        <h3>Add Notes</h3>
        <input type="hidden" name="add_note">
        <input type="hidden" name="add_note_main">
        <?php
        echo '<input type="hidden" name="lesson_id" value = "'.$lesson_id.'">';
        echo '<input type="hidden" name="user_id" value="'.$_SESSION["dany"]['id'].'">';
        ?>
        <input type="text" name="title_note" placeholder="Title">
            <br>
        <textarea placeholder="Your note" name="note_text" required></textarea>

        <button type="submit" class="btn">Add</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>
</div>


    <?php
 

include_once "parts/footer.php";
?>

    <script>
function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }




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