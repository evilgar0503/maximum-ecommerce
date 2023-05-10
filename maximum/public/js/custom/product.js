$(function () {
    $(".heart").on("click", function () {
        $(this).toggleClass("is-active");
    });
});

$(document).ready(function () {
    $(".accordion-header").click(function () {
        $(this).toggleClass("active");
        $(this).next(".accordion-content").slideToggle();
    });
});
