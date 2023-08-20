<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Journey</title>
    <link rel="stylesheet" href="4style.css">
    <link rel="stylesheet" type="text/css" href="home1/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home1/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home1/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home1/css/responsive.css" rel="stylesheet" />
</head>
<style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

.background-image {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    
    background: url("images/2custoer.webp") no-repeat center center fixed;
    background-size: cover;
}


.container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    /*background-color: rgba(255, 255, 255, 0.8);
    border-radius: 10px;*/
    text-align: center;
}

h1 {
    font-size: 36px;
    margin-bottom: 20px;
    color: #007bff;
}

.journey-cards {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.journey-card {
    width: 300px;
    margin: 20px;
    padding: 10px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #fff;
}

.images-container {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
}

.before-image,
.after-image {
    width: 140px;
    height: 140px;
    object-fit: cover;
    border-radius: 10px;
}

.user-profile {
    display: flex;
    justify-content: center;
    align-items: center;
}

.profile-image {
    width: 60px;
    height: 60px;
    object-fit: cover;
    border-radius: 50%;
    border: 2px solid #007bff;
}

.quote {
    position: relative;
    margin-top: 10px;
}

.quote-text {
    font-size: 16px;
    line-height: 1.5;
    color: #333;
    background-color: #f9f9f9;
    padding: 15px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.quote:before {
    content: "";
    position: absolute;
    top: -10px;
    left: 50%;
    margin-left: -10px;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 0 10px 10px 10px;
    border-color: transparent transparent #f9f9f9 transparent;
}
.journey-cards .journey-card:not(:first-child) {
    display: none;
}
.journey-card {
    
    transition: transform 0.3s ease-in-out;
}

.journey-card:hover {
    transform: scale(1.05);
}

</style>
<body>
@include('home.header')
    <div class="background-image"></div>
    <div class="container">
        <h1>Fitness Journey</h1>
        <div class="journey-cards">
            <div class="journey-card">
                <div class="images-container">
                    <img class="before-image" src="images/4before1.webp" alt="Before">
                    <img class="after-image" src="images/4thin1.png" alt="After">
                </div>
                <div class="user-profile">
                    <img class="profile-image" src="images/4dp1.jpg" alt="User 1">
                </div>
                <div class="quote">
                    <p class="quote-text">"I started my fitness journey with determination and hard work. The results are incredible!"</p>
                </div>
            </div>

            <div class="journey-card">
                <!-- Add content for the next journey card -->
                <div class="images-container">
                    <img class="before-image" src="images/4fat2.jpg" alt="Before2">
                    <img class="after-image" src="images/4thin2.webp" alt="After2">
                </div>
                <div class="user-profile">
                    <img class="profile-image" src="images/4dp1.jpg" alt="User 2">
                </div>
                <div class="quote">
                    <p class="quote-text">"I started my fitness journey with determination and hard work. The results are incredible!"</p>
                </div>
            </div>

            <!-- Add more journey cards here for other people -->
            
        </div>
    </div>
    <script>
        const journeyCards = document.querySelectorAll('.journey-card');

let currentIndex = 0;
journeyCards[currentIndex].style.display = 'block';

function showNextCard() {
    journeyCards[currentIndex].style.display = 'none';
    currentIndex = (currentIndex + 1) % journeyCards.length;
    journeyCards[currentIndex].style.display = 'block';
}

document.addEventListener('click', showNextCard);
    </script>
</body>
</html>
