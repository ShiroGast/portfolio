import './bootstrap';

window.onscroll = function() {navSticky()};

var header = document.getElementById("header");

var sticky = header.offsetTop;

function navSticky() {
  if (window.scrollY >= sticky) {
    header.classList.add("sticky")
  } else {
    header.classList.remove("sticky");
  }
}
