const showFilters = document.querySelector('#show-filters');
const filters = document.querySelector('.widget-product-filters');

if (showFilters && filters) {
  showFilters.addEventListener('click', () => {
    filters.classList.toggle('widget-product-filters--active');
  });
}
