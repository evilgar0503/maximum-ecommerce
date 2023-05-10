cards = document.querySelectorAll('.swiper-slide');
console.log(cards)
cont = 0;
if(cards.length <=1 ) {
    cont = 1;
}
else if(cards.length == 2) {
    cont=2;
}
else  if(cards.length >=3) {
    cont = 3;

}
else  if(cards.length >=4) {
    cont = 4;

}
else  if(cards.length >=5) {
    cont = 5;

}
// Swiper

var slider = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 50,
    slidesPerGroup: 1,
    loop: false,
    breakpoints: {
    '767': {
    slidesPerView: cont,
    spaceBetween: 50,},
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    autoplay: {
        delay: 2500,
    }
})

