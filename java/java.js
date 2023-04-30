/*transition*/
function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 50;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);

/*scroll bookmark*/
$(".btn").click(function() {
  e.preventDefault();
  var target = $(this).attr('href');
  $('html, body').animate({
      scrollTop: ($(target).offset().top)
  }, 2000);
});