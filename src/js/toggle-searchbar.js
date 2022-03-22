const showSearchbar = document.querySelector('#header__menu__search');
const searchbar = document.querySelector('.header__searchbar');

if (showSearchbar && searchbar) {
  showSearchbar.addEventListener('click', () => {
    searchbar.classList.toggle('header__searchbar--active');
  });
}
