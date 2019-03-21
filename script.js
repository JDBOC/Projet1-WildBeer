function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

function tomSliderGout(val){
  document.getElementById('goutField').innerHTML = val;
}
function tomSliderSoif(val){
  document.getElementById('soifField').innerHTML = val;
}
function tomSliderAmertume(val){
  document.getElementById('amertumeField').innerHTML = val;
}
function tomSliderAlcohol(val){
  document.getElementById('alcoholField').innerHTML = val;
}


$( document ).ready(function() {

  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};


//sliders tom
  document.getElementById('gout').onchange = function () {tomSliderGout(this.value);}
  document.getElementById('goutField').innerHTML = document.getElementById('gout').value;

  document.getElementById('soif').onchange = function () {tomSliderSoif(this.value);}
  document.getElementById('soifField').innerHTML = document.getElementById('soif').value;

  document.getElementById('amertume').onchange = function () {tomSliderAmertume(this.value);}
  document.getElementById('amertumeField').innerHTML = document.getElementById('amertume').value;

  document.getElementById('alcohol').onchange = function () {tomSliderAlcohol(this.value);}
  document.getElementById('alcoholField').innerHTML = document.getElementById('alcohol').value;

//end sliders tom

});
