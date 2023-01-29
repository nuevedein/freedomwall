// Javascript to make the website more interactive.
console.log("Hello 🌎");

window.onscroll = function() {scrollFunction()};

/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
let navBar = document.getElementById("myTopnav");
let topnavShadow = document.getElementById("topnavShadow");

let navIcon = document.getElementById("nIcon");
let firstTime = true;
const navMinHeight = 0;
const navMaxHeight = 100;
let nBarSize;
var nSchedule = 0;
var nDay = 0;

function dropDown() {
  if (navBar.className === "topnav") {      
    
    topnavShadow.style.display = "block";
    
    navBar.style.maxHeight = navMinHeight;
    navBar.className += " responsive";
    navBar.style.maxHeight = navMaxHeight + "%";
    for (nBarSize = navMinHeight; nBarSize <= navMaxHeight; nBarSize++) {
        navBar.style.maxHeight = nBarSize + "%";
      }
  }
  else {
    if(firstTime){
      firstTime = false;   
      
      topnavShadow.style.display = "none";
      
      navBar.style.position = "fixed";
      navBar.style.maxHeight = navMaxHeight;
      for (nBarSize = navMaxHeight; nBarSize >= navMinHeight; nBarSize--) {
        navBar.style.maxHeight = nBarSize + "%";
      }
      navBar.className = "topnav";
    } 
    else {
      shrinkBar();
    }
  }
}

function shrinkBar() {  
  
  topnavShadow.style.display = "none";
      
  navBar.style.position = "fixed";
  navBar.style.maxHeight = navMaxHeight;
  for (nBarSize = navMaxHeight; nBarSize >= navMinHeight; nBarSize--) {
    navBar.style.maxHeight = nBarSize + "%";
  }
  window.setTimeout(function() {navBar.className = "topnav";}, 200);
}

function scrollFunction() {
  if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
    if (navBar.className === "topnav responsive") {
      shrinkBar();
    }
  }
}

window.onresize = function(){
  console.log("resize");
  shrinkBar();
}

dropDown();
dropDown();

function helloThere() {
  alert("Hey Vsauce, Michael here!");
  alert("Where are your 🖐️?");
  let vsauce = document.getElementById("hVsauce");
  vsauce.play();
}

//              SLIDESHOW CODE
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides((slideIndex += n));
}

function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex - 1].style.display = "block";
}

function changeSched(d) {
  let games = document.getElementsByClassName("schedules-container");

  games[nSchedule].style.display = "none";
  games[nSchedule].getElementsByClassName("day-" + (nDay + 1))[0].style.display = "none";
  
  
  nSchedule = nSchedule + d < 0 ? 3 : (nSchedule + d) % 4;
  
  games[nSchedule].style.display = "block";
  games[nSchedule].getElementsByClassName("day-" + (nDay + 1))[0].style.display = "block";
}

function changeDay(day) {
  let buttons = document.getElementsByClassName("day-change-button");
  let games = document.getElementsByClassName("schedules-container")[nSchedule];
  
  buttons[nDay].style.backgroundColor = "#cb9a4a";
  games.getElementsByClassName("day-" + (nDay + 1))[0].style.display = "none";
  
  nDay = day;
  
  buttons[nDay].style.backgroundColor = "#a3712e";
  games.getElementsByClassName("day-" + (nDay + 1))[0].style.display = "block";
}