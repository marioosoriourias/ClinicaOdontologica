/******/ (() => { // webpackBootstrap
/*!*********************************!*\
  !*** ./resources/js/estilos.js ***!
  \*********************************/
$(document).ready(function () {
  /*-----------------------TEXTO EN EL VIDEO----------------------------*/
  setTimeout(function () {
    $(".textoVideo").fadeIn(1500);
  }, 2000);
  setTimeout(function () {
    $(".textoVideo2").fadeIn(1500);
  }, 3000);
  $('.dots').children('.dot').click(function () {
    var index = $(this).index() + 1;
    currentSlide(index);
  });
  /*-------------------------- ANIMACION DEL SLIDER -------------------------------*/

  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");

    if (n > slides.length) {
      slideIndex = 1;
    }

    if (n < 1) {
      slideIndex = slides.length;
    }

    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }

    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }

    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
  }

  $(".servicio-desc").hoverIntent(function () {
    var texto = $(this).find("a p");
    var imagen = $(this).find("a img");
    texto.fadeIn();
    imagen.hide();
  }, function () {
    var texto = $(this).find("a p");
    var imagen = $(this).find("a img");
    texto.hide();
    imagen.fadeIn();
  });
});

window.onload = function () {
  $(window).scroll(function () {
    var NosotrosImg = $("#nosotrosImg").offset().top;
    var NosotrosDesc = $("#nosotrosDesc").offset().top;
    var ServiciosImg = $("#ServiciosImg").offset().top;
    var AcercaImg = $("#AcercaImg").offset().top;
    var AcercaDesc = $("#AcercaDesc").offset().top;
    var ClientesImg = $("#ClientesImg").offset().top; //var ClientesDesc = $("#ClientesDesc").offs

    var scrollTop = $(window).scrollTop();

    if (scrollTop > NosotrosImg - 300) {
      $(".show").fadeIn('slow');
    }

    if (scrollTop > NosotrosDesc - 300) {
      $(".nosotrostext").fadeIn(1000);
    }

    if (scrollTop > ServiciosImg - 300) {
      $("#ServiciosText").fadeIn(2000);
    }

    if (scrollTop > AcercaImg - 300) {
      $(".showAcerca").fadeIn(2000);
    }

    if (scrollTop > AcercaDesc - 300) {
      $(".AcercaText").fadeIn(2000);
    }

    if (scrollTop > ClientesImg - 300) {
      $("#ClientesDesc").fadeIn(2000);
    }

    if (scrollTop > ClientesImg - 300) {
      $("#ClientesText").fadeIn(2000);
    }
  });
};
/******/ })()
;