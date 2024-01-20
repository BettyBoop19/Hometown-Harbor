const menuToggle = document.querySelector('.main-menu');
window.addEventListener('resize', () => {
  if (window.innerWidth <= 800) {
    menuToggle.classList.add('show');
  } else {
    menuToggle.classList.remove('show');
  }
});



// Initialize cart
let cart = [];

// Get all add to cart buttons
const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');

// Add event listener to each button
addToCartButtons.forEach(button => {
  button.addEventListener('click', () => {
    // Get product information from the button's data attributes
    const productId = button.dataset.productId;
    const productName = button.dataset.productName;
    const productPrice = parseFloat(button.dataset.productPrice);

    // Create a new product object
    const product = {
      id: productId,
      name: productName,
      price: productPrice
    };

    // Add the product to the cart
    cart.push(product);

    // Update the cart display (you can implement this function as shown in the previous examples)
    // updateCartDisplay();
  });
});