<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>20 Minutes Arms Workout</title>
</head>
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        overflow: hidden;
    }

    .background-image {
        background-image: url('images/ArmsBg.webp');
        background-size: cover;
        background-position: center;
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .exercise-container {
        background-color: rgba(255, 255, 255, 0.8);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .exercise {
        margin-top: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    #exercise-name {
        margin: 10px 0;
    }

    #exercise-description {
        margin: 10px 0;
        font-size: 14px;
    }

    .image-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 10px 0;
    }

    #exercise-image {
        width: 200px; /* Fixed image width */
        max-width: 100%;
        max-height: 200px;
    }

    #skip-button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
        transition: background-color 0.3s ease;
    }

    #skip-button:hover {
        background-color: #0056b3;
    }

    .timer {
        font-size: 2rem;
        margin: 10px 0;
    }

    .timer-container {
        display: flex;
        align-items: center;
    }

    .time-remaining {
        margin-right: 10px;
        font-size: 14px;
    }

    .congratulations-container {
        text-align: center;
        margin-top: 20px;
        color: white;
    }

    .go-to-button {
        background-color: #28a745;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
        display: inline-block;
        margin: 10px;
    }

    .go-to-button:hover {
        background-color: #218838;
    }
</style>
<body>
    <div class="background-image">
        <div class="exercise-container">
            <h1>20 Minutes Arms Workout</h1>
            <div class="exercise">
                <h2 id="exercise-name">Exercise Name</h2>
                <p id="exercise-description">Exercise Description</p>
                <div class="image-container">
                    <img id="exercise-image" src="" alt="Exercise Image">
                </div>
                <div class="timer-container">
                    <p class="time-remaining">Time Remaining:</p>
                    <div id="timer" class="timer">45</div>
                </div>
                <button id="skip-button">Skip</button>
            </div>
        </div>
    </div>
    <script>
        const exerciseName = document.getElementById('exercise-name');
        const exerciseDescription = document.getElementById('exercise-description');
        const exerciseImage = document.getElementById('exercise-image');
        const timerDisplay = document.getElementById('timer');
        const skipButton = document.getElementById('skip-button');

        const exercises = [
            {
                name: 'Push Up',
                description: 'Hold a plank position for the specified time.',
                image: 'images/ArmsPushup.gif'
            },
            {
                name:'Break Time',
                description:'remember to drink water',
                image: 'images/Break.jpg'
            },
            {
                name: 'Downward Dog',
                description: 'Perform crunches to target your core muscles.',
                image: 'images/ArmsDD.webp'
            },
            // Add more exercises in the desired order
        ];

        let currentExerciseIndex = 0;
        let exerciseTime = 5;
        let timerInterval;

        function updateTimerDisplay() {
            timerDisplay.textContent = exerciseTime;
            exerciseTime--;
            if (exerciseTime < 0) {
                clearInterval(timerInterval);
                skipToNextExercise();
            }
        }

        function startExerciseTimer() {
            timerInterval = setInterval(updateTimerDisplay, 1000);
            updateTimerDisplay();
        }

        function displayExercise() {
            const exercise = exercises[currentExerciseIndex];
            exerciseName.textContent = exercise.name;
            exerciseDescription.textContent = exercise.description;
            exerciseImage.src = exercise.image;
            exerciseTime = 5;
            startExerciseTimer();
        }
        // ... Previous JavaScript code ...

        function redirectToCongratulationsPage() {
            window.location.href = "/congo";
        }

        function skipToNextExercise() {
            clearInterval(timerInterval);
            currentExerciseIndex = (currentExerciseIndex + 1) % (exercises.length + 1);
            if (currentExerciseIndex === exercises.length) {
                redirectToCongratulationsPage();
            } else {
                displayExercise();
            }
        }

        // ... Rest of the JavaScript code ...

        skipButton.addEventListener('click', skipToNextExercise);

        // Initial exercise display
        displayExercise();

    </script>
</body>
</html>
