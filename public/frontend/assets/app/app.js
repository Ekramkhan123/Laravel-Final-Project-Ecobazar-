$(function(){
    let mobileSearchIcon = document.querySelector(".mobile-search");
    let mobileSearchscreen = document.querySelector("#search");
    let searchClose = document.querySelector(".search-close");

    mobileSearchIcon.addEventListener('click', function(){
        mobileSearchscreen.classList.add("search_active");
    });

    searchClose.addEventListener('click', function(){
        mobileSearchscreen.classList.remove("search_active");
    })

    $(".sliders").slick({
      dots: true,
      slidesToShow: 1,
      arrows: true,
      nextArrow: `<span class="next"><iconify-icon icon="mingcute:arrow-right-line" width="24" height="24"></iconify-icon></span>`,
      prevArrow: `<span class="prev"><iconify-icon icon="lets-icons:arrow-left" width="24" height="24"></iconify-icon></span>`,
      autoplay: true,
      autoplaySpeed: 2500,
    });

    $(".product_parent_sliders").slick({
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 2500,
      dots:false,
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

    const tooltipTriggerList = document.querySelectorAll(
      '[data-bs-toggle="tooltip"]'
    );
    const tooltipList = [...tooltipTriggerList].map(
      (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
    );

    $('.category-button').categoryFilter();

    const countDate = $(".count_down").attr('data-time');
    $('.count_down').countdown(
      {
      date: countDate,
      },
       function () {
        alert('Times up !!!');
    });

    // jQuery Version
        $('.venobox').venobox({
          // settings here
        });

})
