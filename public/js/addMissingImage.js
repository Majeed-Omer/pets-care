// Get all product elements
const products = document.querySelectorAll('.grid-item');

// Loop through each product element
products.forEach(product => {
  // Get the button element
  const button = product.querySelector('.card-buttons');

  // Add a click event listener to the product element
  product.addEventListener('click', () => {
    // Toggle the display of the button element
    button.style.display = button.style.display === 'block' ? 'none' : 'block';
  });
});
