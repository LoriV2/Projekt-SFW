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
}

function onSignIn(googleUser) {
  // Useful data for your client-side scripts:
  var profile = googleUser.getBasicProfile();
  console.log("ID: " + profile.getId()); // Don't send this directly to your server!
  console.log('Full Name: ' + profile.getName());
  console.log('Given Name: ' + profile.getGivenName());
  console.log('Family Name: ' + profile.getFamilyName());
  console.log("Image URL: " + profile.getImageUrl());
  console.log("Email: " + profile.getEmail());

  // The ID token you need to pass to your backend:
  var id_token = googleUser.getAuthResponse().id_token;
  console.log("ID Token: " + id_token);
}