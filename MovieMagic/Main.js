const slides = document.querySelectorAll('.slide');
const next = document.querySelector('#next');
const prev = document.querySelector('#prev');
const auto = true; // Auto scroll
const intervalTime = 7000;
let slideInterval;

const nextSlide = () => {
  // Get current class
  const current = document.querySelector('.current');
  // Remove current class
  current.classList.remove('current');
  // Check for next slide
  if (current.nextElementSibling) {
    // Add current to next sibling
    current.nextElementSibling.classList.add('current');
  } else {
    // Add current to start
    slides[0].classList.add('current');
  }
  setTimeout(() => current.classList.remove('current'));
};

const prevSlide = () => {
  // Get current class
  const current = document.querySelector('.current');
  // Remove current class
  current.classList.remove('current');
  // Check for prev slide
  if (current.previousElementSibling) {
    // Add current to prev sibling
    current.previousElementSibling.classList.add('current');
  } else {
    // Add current to last
    slides[slides.length - 1].classList.add('current');
  }
  setTimeout(() => current.classList.remove('current'));
};

// Button events
next.addEventListener('click', e => {
  nextSlide();
  if (auto) {
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, intervalTime);
  }
});

prev.addEventListener('click', e => {
  prevSlide();
  if (auto) {
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, intervalTime);
  }
});

// Auto slide
if (auto) {
  // Run next slide at interval time
  slideInterval = setInterval(nextSlide, intervalTime);
}
AOS.init({
  offset:200,
  duration:1000
});
var pic=document.getElementById("image");
function BW(){
  var a= document.getElementById("ddText");
  a.innerHTML="Black Widow";
  pic.src="POSTER/BW.jpg";
  var b=document.getElementById("Movie");
  b.value="Black Widow";
  var d=document.getElementById("Movie1");
  d.value="Black Widow";
}
function BS(){
    var a= document.getElementById("ddText");
    a.innerHTML="Bloodshot";
    pic.src="POSTER/BS.jpg";
    var b=document.getElementById("Movie");
    b.value="Bloodshot";
  var d=document.getElementById("Movie1");
  d.value="Bloodshot";
  }
function BBFL(){
    var a= document.getElementById("ddText");
    a.innerHTML="Bad Boys For Life";
    pic.src="POSTER/BBFL.jpg";
    var b=document.getElementById("Movie");
    b.value="Bad Boys For Life";
  var d=document.getElementById("Movie1");
  d.value="Bad Boys For Life";
} 
function OW(){
    var a= document.getElementById("ddText");
    a.innerHTML="Onward";
    pic.src="POSTER/OW.jpg";
    var b=document.getElementById("Movie");
    b.value="Onward";
  var d=document.getElementById("Movie1");
  d.value="Onward";
} 
function UW(){
    var a= document.getElementById("ddText");
    a.innerHTML="Underwater";
    pic.src="POSTER/UW.jpg";
    var b=document.getElementById("Movie");
    b.value="Underwater";
  var d=document.getElementById("Movie1");
  d.value="Underwater";
} 
function EH(){
    var a= document.getElementById("ddText");
    a.innerHTML="Enola Holmes";
    pic.src="POSTER/EH.webp";
    var b=document.getElementById("Movie");
    b.value="Enola Holmes";  
  var d=document.getElementById("Movie1");
  d.value="Enola Holmes";
} 
//EDIT POST
function forEdit(){
  document.getElementById("hiddenA").click();
  
}
