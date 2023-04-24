window.addEventListener('scroll', function() {
    var navbar = document.querySelector('.navbar');
    if(window.scrollY > 50) {
      navbar.classList.add('navbar-scroll'); /* clase con estilo de navbar transparente */
    } else {
      navbar.classList.remove('navbar-scroll');
    }
});
