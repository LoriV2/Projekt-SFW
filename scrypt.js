var modal = document.getElementById('modal');
var modal2 = document.getElementById('modal2');

function pokaz() {
    document.getElementById("wiesz").style.display = "block";
  }

  function pokaz2(){
      document.getElementById("niewiesz").style.display="block"; 
       }
window.onclick = function(event) {
if (event.target == modal )  
{
  modal.style.display = "none";
}

if (event.target == modal2 )  
{
  modal2.style.display = "none";
}
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