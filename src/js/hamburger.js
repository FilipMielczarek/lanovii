const hamburger = document.querySelector("#hamburger");
const background = document.querySelector(".menu-background");
const menu = document.querySelector("#primary-menu");

if (hamburger && background && menu) {
  hamburger.addEventListener("click", () => {
    console.log("clicked")
    background.classList.toggle("menu-background--active")
    menu.classList.toggle("primary-menu--active")
  })
}