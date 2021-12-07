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