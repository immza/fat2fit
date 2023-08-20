<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Journey</title>
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
        background: url("images/4bg.jpg") no-repeat center center fixed;
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
        color: #ffffff;
    }
    h2{
        font-size:medium;
        margin-bottom: 20px;
        color:white;

    }

    .journey-cards {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        gap: 20px;
    }

    .journey-card {
        size-adjust: auto;
        margin: 20px;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #0000005d;
    }

    .images-container {
        justify-content: space-between;
        margin-bottom: 10px;
    }

    .before-image,
    .after-image {
        width: 300px;
        height: 300px;
        margin: 10px;
        object-fit: cover;
        border-radius: 5px;
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
        border: 2px solid #ffffff;
    }
    .username h3{
        color: #ffffff;
    }

    .quote {
        position: relative;
        margin-top: 10px;
    }

    .quote-text {
        font-size: 16px;
        line-height: 1.5;
        color: #ffffff;
        background-color: #000000de;
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
    <div class="background-image"></div>
    <div class="container">
        <h1>Fitness Journey</h1>
        <h2>Take a look at these wonderful transformations of some of our friends</h2>
        <div class="journey-cards">
            <div class="journey-card">
                <div class="images-container">
                    <img class="before-image" src="images/4before1.webp" alt="Before">
                    <img class="after-image" src="images/4thin1.png" alt="After">
                </div>
                <div class="user-profile">
                    <img class="profile-image" src="images/4dp1.jpg" alt="User 1">
                </div>
                <div class="username">
                    <h3>Zayn Mallik</h3>
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
                    <img class="profile-image" src="images/3dp5.png" alt="User 2">
                </div>
                <div class="username">
                    <h3>Gigi Hadid</h3>
                </div>
                <div class="quote">
                    <p class="quote-text">"Here people would write about their fitness journeys, telling us their stories, struggles and their joy of success"</p>
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
