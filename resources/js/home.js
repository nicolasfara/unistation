hideSlide();
showSlides();

function hideSlide(){
  var slides = document.getElementsByClassName("mySlide");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
}
function showSlides() {
  var slides = document.getElementsByClassName("mySlide");
  for(var i = 0; i < slides.length; i++) {
    //setTimeout(function() {
    	//slides[i].style.display = "inline";  
    //},2000); // Change image every 2 seconds
    (function(i){ 

         setTimeout(function() { slides[i].style.display = "inline"; }, 2000);

     })(i);
  } 
}
