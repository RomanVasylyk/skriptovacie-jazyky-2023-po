<!DOCTYPE html>
<html lang="sk">
<?php
include_once "parts/header.php";
?>
<body>
<?php
include_once "parts/nav.php";
?>

  <main class="container">
    <h1 class="hh1">Galeria</h1>
  </main>


  <section>
    <div class="slideshow-container">
  
      <div class="mySlides fade">
        <div class="numbertext">1 / 10</div>
        <img src="./img/1883383.webp" style="width:100%">
      </div>
    
      <div class="mySlides fade">
        <div class="numbertext">2 / 10</div>
        <img src="./img/1883385.webp" style="width:100%">
      </div>
    
      <div class="mySlides fade">
        <div class="numbertext">3 / 10</div>
        <img src="./img/1883387.webp" style="width:100%">
      </div>
      <div class="mySlides fade">
        <div class="numbertext">4 / 10</div>
        <img src="./img/1883384.webp" style="width:100%">
      </div>
      <div class="mySlides fade">
        <div class="numbertext">5 / 10</div>
        <img src="./img/1883386.webp" style="width:100%">
      </div>
      <div class="mySlides fade">
        <div class="numbertext">6 / 10</div>
        <img src="./img/1883388.webp" style="width:100%">
      </div>
      <div class="mySlides fade">
        <div class="numbertext">7 / 10</div>
        <img src="./img/1883389.webp" style="width:100%">
      </div>
      <div class="mySlides fade">
        <div class="numbertext">8 / 10</div>
        <img src="./img/1883391.webp" style="width:100%">
      </div>
      <div class="mySlides fade">
        <div class="numbertext">9 / 10</div>
        <img src="./img/Tekst-dlya-reklamy-kafe-i-restoranov-primer-.webp" style="width:100%">
      </div>
      <div class="mySlides fade">
        <div class="numbertext">10 / 10</div>
        <img src="./img/Tekst-dlya-reklamy-kafe-i-restoranov-primer-2.webp" style="width:100%">
      </div>
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>
  </section>
<section class="conteiner">
  <div class="row">
    <div class="col-25 "><img class="i" style="width: 100%;" src="./img/5.jpeg" alt=""></div>
    <div class="col-25 "><img class="i" style="width: 100%;" src="./img/6.jpeg" alt=""></div>
    <div class="col-25 "><img class="i" style="width: 100%;" src="./img/7.jpeg" alt=""></div>
    <div class="col-25 "><img class="i" style="width: 100%;" src="./img/8.jpeg" alt=""></div>
  </div>
</section>
<br>
<section class="conteiner">
  <div class="row">
    <div class="col-25 "><img class="o" style="width: 100%;" src="./img/9.jpeg" alt=""></div>
    <div class="col-25 "><img class="o" style="width: 100%;" src="./img/10.jpeg" alt=""></div>
    <div class="col-25 "><img class="o" style="width: 100%;" src="./img/11.jpeg" alt=""></div>
    <div class="col-25 "><img class="o" style="width: 100%;" src="./img/12.jpeg" alt=""></div>
  </div>
</section>
<br>
<section class="conteiner">
  <div class="row">
    <div class="col-25 "><img class="u" style="width: 100%;" src="./img/13.jpeg" alt=""></div>
    <div class="col-25 "><img class="u" style="width: 100%;" src="./img/14.jpeg" alt=""></div>
    <div class="col-25 "><img class="u" style="width: 100%;" src="./img/15.jpeg" alt=""></div>
    <div class="col-25 "><img class="u" style="width: 100%;" src="./img/16.jpeg" alt=""></div>
  </div>
</section>


  <footer class="container">
    <div class="row1">
      <div class="col-25">
        <h4>Kto sme</h4>
        <p>O reštaurácii talianskej kuchyne "Valentino" možno povedať slovami Oscara Wilda: "Chuť je tichá."</p>
        <p>Toto tvrdenie platí pre elitnú reštauráciu, ktorá dokonale zapadá do atmosféry úzkej uličky a sprostredkúva čaro a pôvab Talianska.</p>
        <p>Jasné osvetlenie fasády a mramorového schodiska, nádherný kovaný plot, svieže kvety v črepníkoch pozývajú alebo dokonca lákajú vojsť dovnútra bez slov. Vládne tu pôvabná aristokracia a diskrétny luxus.</p>
      </div>
      <div class="col-25">
        <h4>Kontaktujte nás</h4>
        <ul>
          <li><i class="fa fa-envelope" aria-hidden="true"><a href="mailto:vasulukroma@gmail.com"> vasulukroma@gmail.com</a></i></li>
          <li><i class="fa fa-phone" aria-hidden="true"><a href="tel:0909500000"> 0909500000</a></i></li>
        </ul>
      </div>
      <div class="col-25">
        <h4>Rýchle odkazy</h4>
        <ul>
          <li><a href="index.html">Domov</a></li>
          <li><a href="o_nas.html">Blog</a></li>
          <li><a href="galeria.html">Galeria</a></li>
          <li><a href="kontakt.html">Kontakt</a></li>
        </ul>
      </div>
      <div class="col-25">
        <h4>Nájdete nás</h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1350063.94591879!2d16.109879762499993!3d48.631974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4714c91b15521805%3A0xcd5863381d254045!2sRestaurace%20Hoffer!5e0!3m2!1sru!2ssk!4v1669385778130!5m2!1sru!2ssk" style="border:0;width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>
    </div>
    <div class="row1">
      Created and designed by Roman Vasylyk
    </div>
  </footer>
  
  <script src="js/app .js"></script>
</body>
</html>