// header color while scrolling
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("header").style.background = "linear-gradient(120deg, white, #6EC1E4)";
  } else {
    document.getElementById("header").style.background = "transparent";
  }
}