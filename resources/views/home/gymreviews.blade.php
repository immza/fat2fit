<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Reviews</title>
    <link rel="stylesheet" href="css/3styles.css">
</head>
<style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url("images/3bg4.webp") no-repeat center center fixed;
    background-size: cover;
}

.container {
    max-width: 800px;
    background-color: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}


h1 {
    font-size: 36px;
    margin-bottom: 20px;
    color: #5b290f;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

label {
    font-size: 18px;
    margin-bottom: 10px;
}

input {
    padding: 8px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 300px;
    margin-bottom: 10px;
}

button {
    padding: 10px 20px;
    font-size: 16px;
    background-color: #5b290f;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.2s;
}

button:hover {
    background-color: #3e1d0b;
}

#reviews-container {
    margin-top: 20px;
    display: none;
}

.review {
    padding: 10px;
    background-color: #f9f9f9;
    border-radius: 5px;
    margin-bottom: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.review p {
    font-size: 16px;
    line-height: 1.5;
    color: #333;
    display: flex;
    align-items: center;

}

.user-profile-img {
    width: 30px;
    height: 30px;
    object-fit: cover;
    border-radius: 50%;
    margin-right: 10px;
}


</style>
<body>
    <div class="background-image"></div>
    <div class="container">
        <h1>Gym Reviews</h1>
        <form id="search-form">
            <label for="gym-name">Enter the gym you want reviews for:</label>
            <input type="text" id="gym-name" required>
            <button type="submit">Search</button>
        </form>
        <div id="reviews-container"></div>
    </div>
    <script>
        const form = document.getElementById("search-form");
const reviewsContainer = document.getElementById("reviews-container");

form.addEventListener("submit", function (event) {
    event.preventDefault();
    const gymName = document.getElementById("gym-name").value;
    showReviews(gymName);
});

function showReviews(gymName) {
    // Replace this with your actual reviews data for the given gym
    const sampleReviews = [
        "The gym is well-equipped and the trainers are very helpful.",
        "Great environment, the gym is always clean, and the staff is friendly.",
        "The classes offered are fun and challenging. Definitely recommend this gym!",
        "I've been going to this gym for years, and I still love it.",
    ];

    reviewsContainer.innerHTML = "";
    sampleReviews.forEach((review) => {
        const reviewElement = document.createElement("div");
        reviewElement.classList.add("review");
        reviewElement.innerHTML = `<p>${review}</p>`;
        reviewsContainer.appendChild(reviewElement);
    });

    reviewsContainer.style.display = "block";
}

function showReviews(gymName) {
    const validGyms = ["GYM1", "GYM2", "GYM3"];
    reviewsContainer.innerHTML = "";

    if (validGyms.includes(gymName.toUpperCase())) {
        const sampleReviews = getSampleReviewsForGym(gymName);
        if (sampleReviews.length > 0) {
            sampleReviews.forEach((review) => {
                const { username, dp, comment } = review;
                const reviewElement = document.createElement("div");
                reviewElement.classList.add("review");
                reviewElement.innerHTML = `
                    <img class="user-profile-img" src="${dp}" alt="${username} DP">
                    <p><strong>${username}:</strong> ${comment}</p>`;
                reviewsContainer.appendChild(reviewElement);
            });
            reviewsContainer.style.display = "block";
        } else {
            reviewsContainer.innerHTML = "<p>No reviews available for this gym yet.</p>";
            reviewsContainer.style.display = "block";
        }
    } else {
        reviewsContainer.innerHTML = "<p>Sorry, we don't have any reviews for this gym.</p>";
        reviewsContainer.style.display = "block";
    }
}

function getSampleReviewsForGym(gymName) {
    const gymReviews = {
        GYM1: [
            { username: "John Doe", dp: "images/3dp1.jpg", comment: "The gym is well-equipped and the trainers are very helpful." },
            { username: "Jane Smith", dp: "images/3dp2.jpg", comment: "Great environment, the gym is always clean, and the staff is friendly." },
            // Add more reviews for GYM1 here
        ],
        GYM2: [
            { username: "Mike Johnson", dp: "images/3dp4.webp", comment: "I've been going to this gym for years, and I still love it." },
            { username: "Emma Lee", dp: "images/3dp3.webp", comment: "The facilities are top-notch, and the trainers are knowledgeable." },
            // Add more reviews for GYM2 here
        ],
        GYM3: [
            { username: "Sam Wilson", dp: "images/3dp5.png", comment: "This gym has everything I need for a complete workout." },
            { username: "Ava Brown", dp: "images/3dp6.jpg", comment: "The staff is friendly and supportive." },
            // Add more reviews for GYM3 here
        ],
    };

    return gymReviews[gymName.toUpperCase()] || [];
}

    </script>
</body>
</html>
