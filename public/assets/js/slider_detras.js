var swiper = new Swiper(".swiper-container", {
  autoplay: {
   delay: 2500,
 },
 clickable:'true',
 slidesPerGroup:1,
 effect: "coverflow",
  loop: true,
 centeredSlides: true,
 slideToClickedSlide: true, 
allowTouchMove: false,
 grabCursor: false,
 slidesPerView: "auto",
 coverflowEffect: {
   rotate: 0,
   stretch: 0,
   depth: 50,
   modifier: 2,
   slideShadows: true
 },
 navigation: {
  nextEl: ".swiper-button-next",
  prevEl: ".swiper-button-prev",
  },
 pagination: {
   el: ".swiper-pagination"
 }

});
