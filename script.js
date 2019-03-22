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
//***********^^^^^^^Fonction bouton top^^^^^^^^^**************************

//sliders tom
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
//end tom sliders

// tom validation front

function validateForm() {

  document.getElementById('nameLabel').classList.remove('text-danger');
  document.getElementById('countryLabel').classList.remove('text-danger');
  document.getElementById('descLabel').classList.remove('text-danger');
  document.getElementById('beerPriceLabel').classList.remove('text-danger');
  document.getElementById('sixPackPriceLabel').classList.remove('text-danger');
  document.getElementById('kegPriceLabel').classList.remove('text-danger');

  document.getElementById('nameLabel').innerHTML  = 'Nom de la biere';
  document.getElementById('countryLabel').innerHTML = 'Pays d\'origine';
  document.getElementById('descLabel').innerHTML = 'Description';
  document.getElementById('beerPriceLabel').innerHTML = 'Prix unitaire';
  document.getElementById('sixPackPriceLabel').innerHTML = 'Prix du pack';
  document.getElementById('kegPriceLabel').innerHTML = 'Prix du fut';


  var name =  document.getElementById('name').value;

  if (name == "") {
    document.getElementById('nameLabel').innerHTML += "  : Ce champ est obligatoire.";
    document.getElementById('nameLabel').classList.add('text-danger');
    return false;
  }


  var country =  document.getElementById('country').value;
  if (country == "") {
    document.getElementById('countryLabel').innerHTML += "  : Ce champ est obligatoire.";
    document.getElementById('countryLabel').classList.add('text-danger');
    return false;
  }

  var desc =  document.getElementById('desc').value;
  if (desc == "") {
    document.getElementById('descLabel').innerHTML += "  : Ce champ est obligatoire.";
    document.getElementById('descLabel').classList.add('text-danger');
    return false;
  }

  var beerPrice =  document.getElementById('beerPrice').value;
  if (beerPrice == "") {
    document.getElementById('beerPriceLabel').innerText += "  : Ce champ est obligatoire.";
    document.getElementById('beerPriceLabel').classList.add('text-danger');
    return false;
  }


  var sixPackPrice =  document.getElementById('sixPackPrice').value;
  if (sixPackPrice == "") {
    document.getElementById('sixPackPriceLabel').innerHTML += "  : Ce champ est obligatoire.";
    document.getElementById('sixPackPriceLabel').classList.add('text-danger');
    return false;
  }

  var kegPrice =  document.getElementById('kegPrice').value;
  if (kegPrice == "") {
    document.getElementById('kegPriceLabel').innerHTML += "  : Ce champ est obligatoire.";
    document.getElementById('kegPriceLabel').classList.add('text-danger');
    return false;
  }
  document.getElementById('submitBtn').innerHTML = "Sending...";
  document.getElementById('contact-form').submit();

}

function check(id) {
  document.getElementById(id).checked = true;
}

function uncheck(id) {
  document.getElementById(id).checked = false;
}


function btnSwap(id){
  if(document.getElementById(id).checked == true;){
    check(id);
  }else{
    uncheck(id);
  }

}

//end tom validation front


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

  $(input[type="radio"]).on('click change', btnSwap(this.id));

//end sliders tom

});
