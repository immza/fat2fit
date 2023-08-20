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
            { username: "John Doe", dp: "3dp1.jpg", comment: "The gym is well-equipped and the trainers are very helpful." },
            { username: "Jane Smith", dp: "3dp2.jpg", comment: "Great environment, the gym is always clean, and the staff is friendly." },
            // Add more reviews for GYM1 here
        ],
        GYM2: [
            { username: "Mike Johnson", dp: "3dp4.webp", comment: "I've been going to this gym for years, and I still love it." },
            { username: "Emma Lee", dp: "3dp3.webp", comment: "The facilities are top-notch, and the trainers are knowledgeable." },
            // Add more reviews for GYM2 here
        ],
        GYM3: [
            { username: "Sam Wilson", dp: "3dp5.png", comment: "This gym has everything I need for a complete workout." },
            { username: "Ava Brown", dp: "3dp6.jpg", comment: "The staff is friendly and supportive." },
            // Add more reviews for GYM3 here
        ],
    };

    return gymReviews[gymName.toUpperCase()] || [];
}
