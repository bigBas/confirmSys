// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
var account = document.getElementById("myBtn");

// if(account == ''){
//   modal.style.display = "none";
// }
var formRes = document.getElementById('formRes');

function resetear(){
  document.forms['formRes'].reset();
  }

btn.onclick = setTimeout(function() { modal.style.display = "block"; }, 10) 

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


