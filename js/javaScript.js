//--------SideBar---------------
function openNav() {
    document.getElementById("main").style.marginRight = "0px"
    document.getElementById("main-nav").style.width = "300px";

}

function closeNav() {
    document.getElementById("main").style.marginRight = "0px";
    document.getElementById("main-nav").style.width = "0px";

}
  // -------------------Slider------------

  var slideIndex = 1;
  var n;
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlider");
  var dots = document.getElementsByClassName("dot");
 
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
showSlides(slideIndex);