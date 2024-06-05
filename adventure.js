document.addEventListener('DOMContentLoaded', function () {
  const slides = ['slide1', 'slide2', 'slide3'];
  let currentSlide = 0;

  function showSlide(index) {
    for (let i = 0; i < slides.length; i++) {
      document.querySelector('#slideshow').classList.remove(slides[i]);
    }
    document.querySelector('#slideshow').classList.add(slides[index]);
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
  }

  showSlide(currentSlide);

  setInterval(nextSlide, 5000); // Cambia slide ogni 5 secondi

  // Aggiungi event listener per lo scorrimento delle immagini al clic
  document.querySelector('#slideshow').addEventListener('click', nextSlide);

  // menu a scomparsa

  menu = document.querySelector(".menu");
  menu.onclick = function () {
    navBar = document.querySelector(".nav-bar");
    navBar.classList.toggle("active");
  }

  // scroll verso l'alto

  const torna_su = document.querySelector(".torna_su");

  window.addEventListener("scroll", function () {
    if (document.documentElement.scrollTop > 600) {
      torna_su.style.display = "block";
    } else {
      torna_su.style.display = "none";
    }
  });

  torna_su.addEventListener("click", function () {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  // tasto models 

  $(document).ready(function () {
    function handleDropdown(event) {
      event.preventDefault();
      var $dropdown = $(this).closest('.models-dropdown');
      $dropdown.toggleClass('active');
      $dropdown.children('.dropdown__menu').slideToggle();
    }

    // Aggiungi event listener per il clic sull'elemento .models-dropdown per i dispositivi desktop
    if ($(window).width() > 690) {
      $('.models-dropdown > a').click(handleDropdown);
    } else { // Utilizza l'evento touchstart per i dispositivi mobili
      $('.models-dropdown > a').on('touchstart', handleDropdown);
    }

    // Nascondi il dropdown quando si fa clic fuori dall'elemento .models-dropdown
    $(document).on('click touchstart', function (event) {
      if (!$(event.target).closest('.models-dropdown').length) {
        $('.models-dropdown').removeClass('active');
        $('.models-dropdown .dropdown__menu').slideUp();
      }
    });

    // Evita la chiusura del dropdown quando si fa clic al suo interno
    $('.models-dropdown .dropdown__menu').on('click touchstart', function (event) {
      event.stopPropagation();
    });

    // Gestione del menu principale per dispositivi mobili
    $('.menu').click(function () {
      $('.nav-bar').toggleClass('nav-bar-open');
    });
  });


  



});
