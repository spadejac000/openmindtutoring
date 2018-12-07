$('document').ready(() => {

  $('#menu-item-22').addClass('header-home-link');
  $('.drop-down-menu').addClass('header-home-link');

  $('.header-home-link').hover(() => {
    $('.drop-down-menu').css('display', 'block');
  });

  $('.header-home-link').mouseleave(() => {
    $('.drop-down-menu').css('display', 'none');
  });

  $('.fa-times').click(() => {
    $('.side-menu').animate({width: 'toggle'}, 300);
  })

  $('.fa-bars').click(() => {
    $('.side-menu').animate({width: 'toggle'}, 300);
  })

  // banner carousel code
  let slideIndex = 0;

  const showSlides = () => {
    const slides = $('.mySlides');
    const dots = $('.dot');

    for(let i=0; i < slides.length; i++) {
      slides[i].style.display = 'none';
    }

    slideIndex++;

    if(slideIndex > slides.length) {
      slideIndex = 1;
    }

    for(let i=0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(' active', '');
    }

    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";

    setTimeout(showSlides, 12000)
  }

  showSlides();

});