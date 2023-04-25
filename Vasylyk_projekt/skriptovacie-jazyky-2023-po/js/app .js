var hamburger = document.getElementById("hamburger");
hamburger.addEventListener("click",myNav);

function myNav() {
    var menu = document.querySelector(".main-menu");
    menu.classList.toggle("responsive");
}

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}


function myFunction() {
  alert("Neviem čo sem napísať\nPreto som to napísal");
}


function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000);
}


