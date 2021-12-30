let windowWidth = $(window).width();
let containerWidth = $('.container').width();

containerPadding = (windowWidth - containerWidth)/2;

$('.left-container').css({'margin-left': containerPadding + 'px'});

$('.header_toggle').on('click', function(){
  $(this).toggleClass('open');
  $('body').toggleClass('overflow-hidden');
  $('.modal_bg').toggleClass('show filter blur-lg');
  $('.menu_mobile').toggleClass('show');
});

$('.hamburger-toggle').on('click', function(){
  $(this).toggleClass('open');
  $('.mobile-menu').toggleClass('hidden').toggleClass('z-20');
  $('body').toggleClass('overflow-hidden');
});

var swiperPopularProduct = new Swiper('.swiper-popular-product-container', {
  slidesPerView: 3,
  spaceBetween: 16,
  loop: true,
  autoplay: {
    delay: 5000,
  },
  breakpoints: {
    // when window width is >= 320px
    769: {
      slidesPerView: 2,
      spaceBetween: 20
    }
  },
  navigation: {
    nextEl: '.popular_arrows_next',
    prevEl: '.popular_arrows_prev',
  },
});