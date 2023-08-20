<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health and Fitness</title>
    <link rel="stylesheet" type="text/css" href="home1/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home1/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home1/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home1/css/responsive.css" rel="stylesheet" />
      
    <link rel="stylesheet" href="css/chat.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('images/0bg4.jpg'); /* Replace with your background image */
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .button {
            padding: 10px 20px;
            background-color: #3c3f2c92;
            color: #ffffff;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px;
        }
        .button:hover {
            background-color: #3c3f2ca9;
        }
    </style>
</head>
<body>
@include('home.header')
    <div class="container">
        <h1>Welcome to Health and Fitness</h1>
        <a href='/quote'><button class="button" onclick="goToMotivationalQuotes()">Motivational Quotes</button></a>
        <a href='/creview'><button class="button" onclick="goToCustomerReviews()">Customer Reviews</button></a>
        <a href='/gymreviews'><button class="button" onclick="goToGymReviews()">Search specific Gym Reviews</button></a>
        <a href='/glowup'><button class="button" onclick="goToGlowUps()">Glow Ups</button></a>
        <a href='/glowup'><button class="button" onclick="goToGlowUps()">Nearby Gym info</button></a>

    </div>

    <script>
        function goToMotivationalQuotes() {
            window.location.href = '1motivational-quotes.html';
        }

        function goToCustomerReviews() {
            window.location.href = '2customer-reviews.html';
        }

        function goToGlowUps() {
            window.location.href = '4glow-ups.html';
        }
        function goToGymReviews() {
            window.location.href = '3index.html';
        }
    </script>
</body>
@include('home.bot')
</html>
