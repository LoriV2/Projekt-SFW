let parameters={
  ilosc : false,
  litery : false,
  cyfry : false,
  specjalne : false
}

function hasłosprawdzacz(){
 let haslo = document.getElementById('haslo').value;



parameters.cyfry = (/[0-9]+/.test(haslo))?
true:false;
parameters.specjalne = (/[!\'$%&/()=?@~`#\\.\';:+=^*_-]+/.test(haslo))?
true:false;
parameters.ilosc = (haslo.length > 7)?
true:false;
parameters.litery = (/[A-Za-z]+/.test(haslo))?
true:false;

if(parameters.cyfry === true){
  document.getElementById("Liczby").style.color = "green";
} else document.getElementById("Liczby").style.color = "red";

if(parameters.specjalne === true){
  document.getElementById("Specjalne").style.color = "green";
} else document.getElementById("Specjalne").style.color = "red";

if(parameters.ilosc === true){
  document.getElementById("ilosc").style.color = "green";
} else document.getElementById("ilosc").style.color = "red";

if(parameters.litery === true){
  document.getElementById("litery").style.color = "green";
} else document.getElementById("litery").style.color = "red";
//tak nie umiem w switche
}