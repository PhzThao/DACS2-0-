import noUiSlider from 'nouislider';
import 'nouislider/dist/nouislider.css';

document.addEventListener('DOMContentLoaded', () => {
  // Price range slider
  const slider = document.getElementById('price-range-slider');
  if (slider) {
    noUiSlider.create(slider, {
      start: [9, 399],
      connect: true,
      range: {
        min: 9,
        max: 399,
      },
    });

    const minPriceInput = document.getElementById('min-price');
    const maxPriceInput = document.getElementById('max-price');

    slider.noUiSlider.on('update', (values, handle) => {
      const value = values[handle];
      if (handle) {
        maxPriceInput.value = Math.round(value);
      } else {
        minPriceInput.value = Math.round(value);
      }
    });
  }

  // Mobile filters toggle
  const mobileFiltersToggle = document.getElementById('mobile-filters-toggle');
  const mobileFiltersDialog = document.getElementById('mobile-filters-dialog');
  if (mobileFiltersToggle && mobileFiltersDialog) {
    mobileFiltersToggle.addEventListener('click', () => {
      mobileFiltersDialog.classList.toggle('hidden');
    });
  }

  // Wishlist functionality
  const wishlistButtons = document.querySelectorAll('.wishlist-button');
  wishlistButtons.forEach((button) => {
    button.addEventListener('click', () => {
      button.classList.toggle('text-red-500');
      // Here you would typically send an AJAX request to update the wishlist
    });
  });
});
