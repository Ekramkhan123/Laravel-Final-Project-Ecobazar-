$(function(){
    $(".employeesliders").slick({
      dots: false,
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows: true,
      nextArrow: `<span class="next"><iconify-icon icon="mingcute:arrow-right-line" width="24" height="24"></iconify-icon></span>`,
      prevArrow: `<span class="prev"><iconify-icon icon="lets-icons:arrow-left" width="24" height="24"></iconify-icon></span>`,
      autoplay: false,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots:false,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            dots: false,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
          },
        },
      ],
    });

    $(".clientsliders").slick({
      dots: true,
      slidesToShow: 1,
      arrows: true,
      nextArrow: `<span class="next"><iconify-icon icon="mingcute:arrow-right-line" width="24" height="24"></iconify-icon></span>`,
      prevArrow: `<span class="prev"><iconify-icon icon="lets-icons:arrow-left" width="24" height="24"></iconify-icon></span>`,
      autoplay: false,
    });
});