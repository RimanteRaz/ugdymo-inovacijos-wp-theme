// Navbar Toggle:

const navToggle = () => {
  const burger = document.querySelector(".burger");
  const navBar = document.querySelector(".nav-bar");
  const primaryMenu = document.querySelector(".primary-menu");
  const secondaryMenu = document.querySelector(".secondary-menu");
  const navCTA = document.querySelector(".nav-cta");

  burger.addEventListener("click", () => {
    burger.classList.toggle("open");
    navBar.classList.toggle("open");
    primaryMenu.classList.toggle("open");
    secondaryMenu.classList.toggle("open");
    navCTA.classList.toggle("open");
  });
};

navToggle();

// Masonry layot (WP core)

var msnry = new Masonry(".grid", {
  // options
  itemSelector: ".grid-item",
  columnWidth: ".grid-sizer",
  gutter: ".gutter-sizer",
  percentPosition: true,
  horizontalOrder: true,
});

// jQuery(function ($) {
//   var $grid = $(".grid").masonry({
//     // options
//     itemSelector: ".grid-item",
//     // columnWidth: 500,
//     columnWidth: ".grid-sizer",
//     // gutter: 120,
//     gutter: ".gutter-sizer",
//     percentPosition: true,
//     horizontalOrder: true,
//     // fitWidth: true,
//   });
//   // layout Masonry after each image loads
//   $grid.imagesLoaded().progress(function () {
//     $grid.masonry("layout");
//   });
// });
