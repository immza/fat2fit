<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to Cart</title>
    <link rel="stylesheet" type="text/css" href="home1/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home1/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home1/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home1/css/responsive.css" rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .product {
            display: flex;
            align-items: center;
            border-bottom: 1px solid #ccc;
            padding: 10px;
        }
        .product img {
            max-width: 100px;
            margin-right: 20px;
        }
        .product .info {
            flex: 1;
        }
        .product h3 {
            margin: 0;
        }
        .product .price {
            font-weight: bold;
            margin-bottom: 10px;
        }
        .add-to-cart {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        .add-to-cart:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
@include('home.header')
    <div class="container">
        <h2>Product Details</h2>
        <div class="product">
            <img src="images/cute.jpeg" alt="Product 1">
            <div class="info">
                <h3>Product 1</h3>
                <p class="price">$20.00</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="product">
            <img src="images/set.jpeg" alt="Product 2">
            <div class="info">
                <h3>Product 2</h3>
                <p class="price">$25.00</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="product">
            <img src="images/p2.png" alt="Product 2">
            <div class="info">
                <h3>Product 3</h3>
                <p class="price">$25.00</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="product">
            <img src="images/absgirl.jpeg" alt="Product 2">
            <div class="info">
                <h3>Product 4</h3>
                <p class="price">$25.00</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="product">
            <img src="images/dumbell.jpeg" alt="Product 2">
            <div class="info">
                <h3>Product 5</h3>
                <p class="price">$25.00</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="product">
            <img src="images/jump_rope.jpeg" alt="Product 2">
            <div class="info">
                <h3>Product 6</h3>
                <p class="price">$25.00</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="product">
            <img src="images/protein_powder.jpeg" alt="Product 2">
            <div class="info">
                <h3>Product 7</h3>
                <p class="price">$25.00</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="product">
            <img src="images/shoe.jpeg" alt="Product 2">
            <div class="info">
                <h3>Product 8</h3>
                <p class="price">$25.00</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="product">
            <img src="images/white.jpeg" alt="Product 2">
            <div class="info">
                <h3>Product 9</h3>
                <p class="price">$25.00</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="product">
            <img src="images/white.jpeg" alt="Product 2">
            <div class="info">
                <h3>Product 10</h3>
                <p class="price">$25.00</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="product">
            <img src="images/white.jpeg" alt="Product 2">
            <div class="info">
                <h3>Product 11</h3>
                <p class="price">$25.00</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        
        </div>
        <div class="form-group">
                <label for="delivery-option">Delivery Option:</label>
                <select id="delivery-option" name="delivery-option" required>
                    <option value="">Select Delivery Option</option>
                    <option value="standard">Standard Delivery</option>
                    <option value="express">Express Delivery</option>
                </select>
            </div>
            <button type="submit">Save Product</button>
            <div class="container">
        <h2>Product Price Calculator</h2>
        <div class="form-group">
            <label for="product-1">Product 1 Price:</label>
            <input type="number" id="product-1" class="product-price" step="0.01">
        </div>
        <div class="form-group">
            <label for="product-2">Product 2 Price:</label>
            <input type="number" id="product-2" class="product-price" step="0.01">
        </div>
        <div class="form-group">
            <label for="product-3">Product 3 Price:</label>
            <input type="number" id="product-3" class="product-price" step="0.01">
        </div>
        <button onclick="calculateTotal()">Calculate Total</button>
        <p class="total-price" id="total-price">Total Price: $0.00</p>
    </div>
    <script>
        function calculateTotal() {
            // Get the input elements
            const productPrices = document.getElementsByClassName("product-price");
            let totalPrice = 0;

            // Calculate the total price by adding the values together
            for (let i = 0; i < productPrices.length; i++) {
                const price = parseFloat(productPrices[i].value);
                if (!isNaN(price)) {
                    totalPrice += price;
                }
            }

            // Update the total price display
            const totalPriceDisplay = document.getElementById("total-price");
            totalPriceDisplay.textContent = "Total Price: $" + totalPrice.toFixed(2);
        }
    </script>
    </div>

        <!-- Add more product items here -->

</body>
</html>
