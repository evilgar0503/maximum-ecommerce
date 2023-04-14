window.addEventListener("DOMContentLoaded", function () {
    var form = document.querySelector(".form");
    var style = window.getComputedStyle(form);
    var margin_Right = parseInt(style.left);
    var objetivo = 0;
    var intervalo = 0;
    var cargado = false;
    window.addEventListener("scroll", function () {
        if (window.scrollY >= 1847 && !cargado) {
            setTimeout(moverForm, intervalo * 1000);
            cargado = true;
        }
    });
    function moverForm() {
        if (margin_Right > objetivo) {
            margin_Right = margin_Right - 5;
            form.style.left = margin_Right + "px";
            setTimeout(moverForm, (intervalo * 1000) / margin_Right);
        }
    }
});


