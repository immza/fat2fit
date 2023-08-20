<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            margin: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        #bmiForm {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        label {
            display: block;
            margin-bottom: 10px;
            color: #666;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            transition: border-color 0.3s ease;
        }
        input[type="number"]:focus {
            border-color: #4CAF50;
        }
        button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            outline: none;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #45a049;
        }
        #bmiResult {
            margin-top: 20px;
            text-align: center;
            font-size: 18px;
            color: #333;
            font-weight: bold;
        }
        .converter {
            margin-top: 10px;
            align-items: center;
        }
        .converter label,
        .converter button {
            margin-right: 5px;
            color: #666;
        }
        .converter input {
            width: 200px;
            padding: 5px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            transition: border-color 0.3s ease;
        }
        .converter input:focus {
            border-color: #4CAF50;
        }
        .converter button {
            padding: 5px;
            width: 200px;
            font-size: 14px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            outline: none;
            transition: background-color 0.3s ease;
        }
        .converter button:hover {
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
      <link rel="stylesheet" href="css/chat.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
@include('home.header')

    
    <h1>BMI Calculator</h1>
    <div id="bmiForm">
        <label for="weightInput">Weight (kg):</label>
        <input type="number" id="weightInput" step="0.1" required>
        <label for="heightInput">Height (m):</label>
        <input type="number" id="heightInput" step="0.01" required>
        <button id="calculateBtn">Calculate BMI</button>
        <div id="bmiResult"></div>
    </div>

    <!-- Converters -->
    <div class="converter">
        <label for="kgToLbs">kg to lbs:</label>
        <input type="number" id="kgToLbs" step="0.1">
        <button id="convertKgToLbs">Convert</button>
    </div>
    <div class="converter">
        <label for="lbsToKg">lbs to kg:</label>
        <input type="number" id="lbsToKg" step="0.1">
        <button id="convertLbsToKg">Convert</button>
    </div>
    <div class="converter">
        <label for="mToFeet">m to feet:</label>
        <input type="number" id="mToFeet" step="0.01">
        <button id="convertMToFeet">Convert</button>
    </div>
    <div class="converter">
        <label for="feetToM">feet to m:</label>
        <input type="number" id="feetToM" step="0.01">
        <button id="convertFeetToM">Convert</button>
    </div>

    <script>
        document.getElementById('calculateBtn').addEventListener('click', function() {
            var weight = parseFloat(document.getElementById('weightInput').value);
            var height = parseFloat(document.getElementById('heightInput').value);

            if (isNaN(weight) || isNaN(height) || weight <= 0 || height <= 0) {
                alert('Please enter valid weight and height values.');
                return;
            }

            var bmi = calculateBMI(weight, height);
            displayResult(bmi);
        });

        function calculateBMI(weight, height) {
            return weight / (height * height);
        }

        function displayResult(bmi) {
            var resultElement = document.getElementById('bmiResult');
            var category;

            if (bmi < 18.5) {
                category = 'Underweight';
            } else if (bmi >= 18.5 && bmi < 24.9) {
                category = 'Normal Weight';
            } else if (bmi >= 25 && bmi < 29.9) {
                category = 'Overweight';
            } else {
                category = 'Obese';
            }

            resultElement.innerHTML = 'BMI: ' + bmi.toFixed(2) + '<br>Category: ' + category;
        }

        // Converters
        document.getElementById('convertKgToLbs').addEventListener('click', function() {
            var kg = parseFloat(document.getElementById('kgToLbs').value);
            if (!isNaN(kg)) {
                document.getElementById('lbsToKg').value = (kg * 2.20462).toFixed(1);
            }
        });

        document.getElementById('convertLbsToKg').addEventListener('click', function() {
            var lbs = parseFloat(document.getElementById('lbsToKg').value);
            if (!isNaN(lbs)) {
                document.getElementById('kgToLbs').value = (lbs / 2.20462).toFixed(1);
            }
        });

        document.getElementById('convertMToFeet').addEventListener('click', function() {
            var m = parseFloat(document.getElementById('mToFeet').value);
            if (!isNaN(m)) {
                document.getElementById('feetToM').value = (m * 3.28084).toFixed(2);
            }
        });

        document.getElementById('convertFeetToM').addEventListener('click', function() {
            var feet = parseFloat(document.getElementById('feetToM').value);
            if (!isNaN(feet)) {
                document.getElementById('mToFeet').value = (feet / 3.28084).toFixed(2);
            }
        });
    </script>
    @include('home.bot')
</body>
</html>
