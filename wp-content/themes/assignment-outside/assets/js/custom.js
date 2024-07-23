$('.same-height-1').matchHeight();
$('.same-height-2').matchHeight();

$('.slider-mobile').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    prevArrow: '<button class="slick-prev"></button>',
    nextArrow: '<button class="slick-next"></button>',
    responsive: [
      {
        breakpoint: 1024,
        settings: "unslick"
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });