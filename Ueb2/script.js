
  var currentUrl = window.location.href;
  var links = document.querySelectorAll('.menu li a');
  for (var i = 0; i < links.length; i++) {
    if (links[i].href === currentUrl) {
      links[i].classList.add('active');
    }
  }
