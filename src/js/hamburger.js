const hamburger = document.querySelector("#hamburger");
const background = document.querySelector(".menu-background");
const menu = document.querySelector("#primary-menu");

if (hamburger && background && menu) {
  hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("fa-times");
    hamburger.setAttribute(
      'aria-expanded',
      hamburger.getAttribute('aria-expanded') === 'true'
        ? 'false'
        : 'true'
    );
    background.classList.toggle("menu-background--active");
    menu.classList.toggle("primary-menu--active");
  })
}