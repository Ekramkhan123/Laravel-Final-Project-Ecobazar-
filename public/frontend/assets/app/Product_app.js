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

  let categoriesDiv = document.querySelector(".catagories");
  let categoriesContent = document.querySelector(".catagories_content");

  categoriesDiv.addEventListener("click", function () {
    categoriesContent.classList.toggle("show");
    categoriesDiv.classList.toggle("active");
  });

  let progress_btn = document.querySelector(".progress_heading");
  let progressContent = document.querySelector(".progress_bar");

  progress_btn.addEventListener("click", function () {
    progressContent.classList.toggle("show");
    progress_btn.classList.toggle("active");
  });

  let rating_btn = document.querySelector(".rating_heading");
  let ratingContent = document.querySelector(".rating_content");

  rating_btn.addEventListener("click", function () {
    ratingContent.classList.toggle("show");
    rating_btn.classList.toggle("active");
  });

  let tag_btn = document.querySelector(".tags_heading");
  let tagContent = document.querySelector(".tag_option");

  tag_btn.addEventListener("click", function () {
    tagContent.classList.toggle("show");
    tag_btn.classList.toggle("active");
  });

    const tooltipTriggerList = document.querySelectorAll(
      '[data-bs-toggle="tooltip"]'
    );
    const tooltipList = [...tooltipTriggerList].map(
      (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
    );

})
