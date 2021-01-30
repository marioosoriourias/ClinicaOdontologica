

$(document).ready(function() {
    /*-----------------------TEXTO EN EL VIDEO----------------------------*/
    setTimeout(function() {
        $(".textoVideo").fadeIn(1500);
    },2000);

    setTimeout(function() {
        $(".textoVideo2").fadeIn(1500);
    },3000);


    $(".olis").click(function(){
        alert("asdasdasdasdsadsad");
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
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    }



    $(".servicio-desc").hoverIntent(function(){
        var texto = $(this).find("a p");
        var imagen = $(this).find("a img");  
        texto.fadeIn();
        imagen.hide();
    }, 
    function(){
        var texto = $(this).find("a p");
        var imagen = $(this).find("a img");  
        texto.hide();
        imagen.fadeIn();   
    });



   

});