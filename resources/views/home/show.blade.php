<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        .total-price {
            font-weight: bold;
            margin-top: 20px;
        }

        .delivery-options {
            margin-top: 20px;
        }

        .delivery-option {
            display: block;
            margin-bottom: 10px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    @include('home.header')
    <div class="container">
        <table>
            <thead>
            <h1 class= 'cart'> Your Cart</h1>
                <th>name </th>
                <th>price </th>
                <!-- <th> Image</th> -->
                <th>Delete </th>
            </thead>
            <tbody>
                @foreach ($data as $FormData)
                    <tr>
                    <!-- <img src="{{ $FormData->image }}" alt="{{ $FormData->name }}"> -->
                        <td>{{ $FormData->name }}</td>
                        <td>${{ $FormData->price }}</td>
                        <td><form action="{{ route('cart.delete', ['id' => $FormData->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- <p>Total Price: $</p> -->


        <!-- Add more product items here -->

        <p class="total-price">Total Price: $<span id="total-price">{{ $totalPrice }}</span></p>

        <div class="delivery-options">
            <h3>Select Delivery Option</h3>
            <label class="delivery-option">
                <input type="radio" name="delivery" value="standard" checked> Standard Delivery ($5.00)
            </label>
            <label class="delivery-option">
                <input type="radio" name="delivery" value="express"> Express Delivery ($10.00)
            </label>
        </div>
        <a href="/payment" class="btn1">
        <button >Proceed to Payment</button></a>
    </div>

    <script>
        let totalPrice = 0;

        function addToCart(price) {
            totalPrice += price;
            updateTotalPrice();
        }

        function updateTotalPrice() {
            const totalPriceDisplay = document.getElementById("total-price");
            totalPriceDisplay.textContent = totalPrice.toFixed(2);
        }

        function proceedToDelivery() {
            // Get the selected delivery option
            const deliveryOptions = document.getElementsByName("delivery");
            let selectedOption = "";
            for (const option of deliveryOptions) {
                if (option.checked) {
                    selectedOption = option.value;
                    break;
                }
            }

            // Here you can perform further actions, such as sending the cart data
            // and the selected delivery option to the server for processing and checkout.
            // For this example, we'll simply display an alert with the selected option.
            alert(`Selected Delivery Option: ${selectedOption}`);
        }


        let totalPrice = parseFloat(localStorage.getItem("totalPrice")) || 0;

        function addToCart(price) {
            totalPrice += price;
            updateTotalPrice();
        }

        function updateTotalPrice() {
            const totalPriceDisplay = document.getElementById("total-price");
            totalPriceDisplay.textContent = totalPrice.toFixed(2);
            localStorage.setItem("totalPrice", totalPrice);
        }

        function proceedToDelivery() {
            // Get the selected delivery option
            const deliveryOptions = document.getElementsByName("delivery");
            let selectedOption = "";
            for (const option of deliveryOptions) {
                if (option.checked) {
                    selectedOption = option.value;
                    break;
                }
            }

            // Here you can perform further actions, such as sending the cart data
            // and the selected delivery option to the server for processing and checkout.
            // For this example, we'll simply display an alert with the selected option.
            alert(`Selected Delivery Option: ${selectedOption}`);
        }

        // Initialize total price display on page load
        window.addEventListener("load", () => {
            updateTotalPrice();
        });

        let cartItems = [];

        function addToCart(product) {
            cartItems.push(product);
            updateCart();
        }

        function removeItemFromCart(productId) {
            cartItems = cartItems.filter(item => item.id !== productId);
            updateCart();
        }

        function updateCart() {
            // Save cart data to local storage
            localStorage.setItem('cartItems', JSON.stringify(cartItems));

            // Optionally, you can update the cart icon to show the number of items in the cart
            updateCartIcon();
        }

        function updateCartIcon() {
            // Add code to update the cart icon with the number of items in the cart
            // For example, update a badge on the cart icon
            const cartIconBadge = document.getElementById('cart-icon-badge');
            const cartItemCount = cartItems.length;
            cartIconBadge.textContent = cartItemCount;
        }

        document.addEventListener('DOMContentLoaded', function() {
                    // Retrieve cart data from local storage on page load
                    cartItems = JSON.parse
    </script>
</body>

</html>
