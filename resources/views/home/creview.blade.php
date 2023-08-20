<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Reviews</title>
    
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        font-family: Arial, sans-serif;
        overflow-x: hidden; /* To prevent horizontal overflow */
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
        margin: 20px;
        background-color: rgba(255, 255, 255, 0.8);
        padding: 20px;
        border-radius: 10px;
        text-align: center;
    }

    h1 {
        font-size: 36px;
        margin-bottom: 20px;
    }

    .reviews {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .review {
        width: 250px;
        padding: 20px;
        margin: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .review img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 50%;
        margin: 0 auto 10px;
        display: block;
    }

    .review h3 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .review p {
        font-size: 16px;
        line-height: 1.5;
    }
    .rating {
        color: gold; /* Color of the filled stars */
        font-size: 24px; /* Adjust as needed */
    }

    .star {
        display: inline-block;
        margin-right: 5px; /* Adjust spacing between stars */
    }

    .average-rating {
        width: 600px;
        padding: 20px;
        margin: 20px auto;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .average-rating h4{
        font-size: 24px;
    }

</style>
<body>
    <div class="background-image"></div>
    <div class="container">
        <h1>Customer Reviews</h1>
        <h3>See what our clients have to say about our website</h3>

        <!-- Display average rating -->
        <div class="average-rating">
            <h4>Average Rating</h4>
            <div class="rating" id="averageStars">
                <!-- JavaScript will dynamically populate this area -->
            </div>
            <p id="averageRatingText">Calculating average rating...</p>
        </div>

        <div class="reviews">
            <div class="review">
                <img src="images/2customer1.jpg" alt="Customer 1">
                <h3>John Doe</h3>
                <div class="rating">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9734;</span>
                </div>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam et turpis vitae massa tincidunt."</p>
            </div>
            <div class="review">
                <img src="images/2customer2.jpg" alt="Customer 2">
                <h3>Jane Smith</h3>
                <div class="rating">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                </div>
                <p>"In sed euismod est. Suspendisse malesuada sapien vitae justo ullamcorper, vel rhoncus dui vestibulum."</p>
            </div>
            <div class="review">
                <img src="images/2customer3.jpg" alt="Customer 3">
                <h3>Esteban Julio</h3>
                <div class="rating">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9734;</span>
                    <span class="star">&#9734;</span>
                </div>
                <p>"In sed euismod est. Suspendisse malesuada sapien vitae justo ullamcorper, vel rhoncus dui vestibulum."</p>
            </div>
            <div class="review">
                <img src="images/2customer5.jpg" alt="Customer 4">
                <h3>Ricardo Montoya</h3>
                <div class="rating">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9734;</span>
                    <span class="star">&#9734;</span>
                    <span class="star">&#9734;</span>
                </div>
                <p>"In sed euismod est. Suspendisse malesuada sapien vitae justo ullamcorper, vel rhoncus dui vestibulum."</p>
            </div>
            <div class="review">
                <img src="images/2customer4.webp" alt="Customer 5">
                <h3>Rosa Ramirez</h3>
                <div class="rating">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9734;</span>
                </div>
                <p>"In sed euismod est. Suspendisse malesuada sapien vitae justo ullamcorper, vel rhoncus dui vestibulum."</p>
            </div>
            <!-- Add more customer reviews here -->
            <!-- Display average rating -->
            
        </div>
    </div>
    <script>
        // JavaScript code to calculate and update average rating
        window.onload = function () {
            const ratings = [4, 5, 3, 2, 4]; // Replace with your actual ratings
            const totalRatings = ratings.length;
            const sumRatings = ratings.reduce((sum, rating) => sum + rating, 0);
            const averageRating = sumRatings / totalRatings;
    
            const averageStarsContainer = document.getElementById('averageStars');
            const averageRatingText = document.getElementById('averageRatingText');
    
            // Update the average rating stars
            for (let i = 0; i < 5; i++) {
                const star = document.createElement('span');
                if (i < Math.floor(averageRating)) {
                    star.classList.add('star');
                    star.innerHTML = '&#9733;';
                } else {
                    star.classList.add('star-outline');
                    star.innerHTML = '&#9734;';
                }
                averageStarsContainer.appendChild(star);
            }
    
            // Update the average rating text
            averageRatingText.textContent = `${averageRating.toFixed(1)} average rating based on ${totalRatings} reviews`;
        };
    </script>
</body>
</html>
