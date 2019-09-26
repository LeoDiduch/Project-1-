// Get the modal
let modal = document.getElementsByClassName('modal');

// Get the button that opens the modal
let btn = document.getElementsByClassName("myBtn");


// Get the <span> element that closes the modal
let span = document.getElementsByClassName("close");

//Clicks the button to open the modal 
btn[0].onclick = function() {
    modal[0].style.display = "block";
}

btn[1].onclick = function() {
    modal[1].style.display = "block";
}

btn[2].onclick = function() {
    modal[2].style.display = "block";
}

// When clicking on <span> (x), close the modal
span[0].onclick = function() {
    modal[0].style.display = "none";
}

span[1].onclick = function() {
    modal[1].style.display = "none";
}

span[2].onclick = function() {
    modal[2].style.display = "none";
}

//Clicking anywhere outside of the modal make it close
window.onclick = function(event) {
    //alert(event.target)
      if (event.target == modal) {
          modal.style.display = "none";
      } 
  }