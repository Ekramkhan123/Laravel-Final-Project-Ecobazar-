$(function(){
    let mobileSearchIcon = document.querySelector(".mobile-search");
    let mobileSearchscreen = document.querySelector("#search");
    let searchClose = document.querySelector(".search-close");

    mobileSearchIcon.addEventListener('click', function(){
        mobileSearchscreen.classList.add("search_active");
    });

    searchClose.addEventListener('click', function(){
        mobileSearchscreen.classList.remove("search_active");
    });
})