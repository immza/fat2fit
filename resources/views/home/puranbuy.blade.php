<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="home1/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home1/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home1/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home1/css/responsive.css" rel="stylesheet" />
</head>
<body>
@include('home.header')
@include('home.product')
<!-- Product items -->
<!-- Product items -->
  <div class="product">
    <h3>Product 1</h3>
    <p>Price: $10</p>
    <button class="add-to-cart-btn" data-product="Product 1" data-price="10">Add to Cart</button>
  </div>

  <div class="product">
    <h3>Product 2</h3>
    <p>Price: $20</p>
    <button class="add-to-cart-btn" data-product="Product 2" data-price="20">Add to Cart</button>
  </div>

  <!-- Cart section -->
  <div class="cart">
    <h2>Cart</h2>
    <ul class="cart-items">
      <!-- Cart items will be added dynamically using JavaScript -->
    </ul>
    
  </div>


</body>



<script>
  // Get all the "Add to Cart" buttons
  const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');
  
  // Create an array to store the cart items
  let cartItems = [];
  
  // Add click event listener to each "Add to Cart" button
  addToCartButtons.forEach(button => {
    button.addEventListener('click', addToCart);
  });

  // Function to add the product to the cart
  function addToCart(event) {
    // Get the product name and price from the button's data attributes
    const productName = event.target.dataset.product;
    const productPrice = parseFloat(event.target.dataset.price);
    
    // Check if the product is already in the cart
    const existingItemIndex = cartItems.findIndex(item => item.name === productName);
    
    if (existingItemIndex !== -1) {
      // If the product is already in the cart, increase its quantity
      cartItems[existingItemIndex].quantity++;
    } else {
      // If the product is not in the cart, add it as a new item
      cartItems.push({ name: productName, price: productPrice, quantity: 1 });
    }
    
    // Update the cart display
    updateCartDisplay();
  }

  // Function to update the cart display
  function updateCartDisplay() {
    const cartItemsList = document.querySelector('.cart-items');
    const cartTotal = document.getElementById('cart-total');
    
    // Clear the cart display
    cartItemsList.innerHTML = '';
    
    let total = 0;

    // Populate the cart items list and calculate the total price
    cartItems.forEach(item => {
      const itemPrice = item.price * item.quantity;
      total += itemPrice;

      cartItemsList.innerHTML += `
        <li>${item.name} - Quantity: ${item.quantity} - Price: $${itemPrice.toFixed(2)}</li>
      `;
    });

    // Update the total price
    cartTotal.textContent = total.toFixed(2);
  }
</script>


</html>