<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Options</title>
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
        .payment-options {
            display: flex;
            flex-direction: column;
        }
        .option {
            margin-bottom: 20px;
        }
        .option label {
            font-weight: bold;
            margin-right: 10px;
        }
        .payment-method {
            display: flex;
            align-items: center;
        }
        .payment-method input[type="radio"] {
            margin-right: 10px;
        }
        .card-details {
            display: none;
            margin-top: 10px;
        }
        .payment-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        .payment-btn:hover {
            background-color: #45a049;
        }
    </style>
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
    <div class="container">
        <h2>Payment Options</h2>
        <div class="payment-options">
            <div class="option">
                <div class="payment-method">
                    <input type="radio" id="credit-card" name="payment-method" value="credit-card" >
                    <label for="credit-card">Credit Card</label>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="/card" class="option1">
                           <button class="payment-btn" >Proceed for card payment</button></a>
                        </div>
                    </div>
                  </div>
                </div>
            <div class="option">
                <div class="payment-method">
                    <input type="radio" id="cash-on-delivery" name="payment-method" value="cash-on-delivery">
                    <label for="cash-on-delivery">Cash on Delivery</label>

                </div>
            
                <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="/delivery" class="option1">
                           <button class='payment-btn'> Proceed for Home delivery </button>
                           </a>
                </div>
        </div>
    </div>

    <script>
        function showCardDetails() {
            const cardDetails = document.getElementById("card-details");
            const creditCardOption = document.getElementById("credit-card");
            cardDetails.style.display = creditCardOption.checked ? "block" : "none";
        }

        function proceedToPayment() {
            // Get the selected payment method
            const paymentOptions = document.getElementsByName("payment-method");
            let selectedOption = "";
            for (const option of paymentOptions) {
                if (option.checked) {
                    selectedOption = option.value;
                    break;
                }
            }

            // Here you can perform further actions based on the selected payment method.
            // For this example, we'll simply display an alert with the selected option.
            alert(`Selected Payment Method: ${selectedOption}`);
        }
    </script>
</body>
</html>
