<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>20 Minutes Workout plan</title>
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
            background-image: url('images/IndexBg.avif'); 
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        h1{
            color:black;
        }
        p{
            font-size: x-large;
            color:black;
        }

        .content-box {
            background-color: rgba(250, 248, 248, 0.701);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
        .content-box2 {
            background-color: rgba(250, 248, 248, 0.701);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            display:block;
        }
        .button {
            display: block;
            padding: 10px 20px;
            background-color: #3c3f2ce8;
            color: #ffffff;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px auto;
        }
        .button:hover {
            background-color: #3c3f2c;
        }
       
    </style>
</head>
<body>

    <div class="content-box">
        <h1>20 Minutes Workout Plans</h1>
        <p>If you want exercise at the comfort of home without any weight or equipment, then check out our workout plans.</p>
        <button class="button" onclick="goToAbs()">Abs workout</button>
        <button class="button" onclick="goToGlutes()">Glutes workout</button>
        <button class="button" onclick="goToArms()">Arms workout</button>
        <button class="button" onclick="goToLegs()">Leg workout</button>
        <p> No!!! You don't want to get sweaty? Go back to home.</p>
        <button class="button" onclick="Home()">Home</button>
    </div>
    


    <script>
        function goToAbs() {
            window.location.href = '/abs';
        }

        function goToGlutes() {
            window.location.href = '/glutes';
        }

        function goToArms() {
            window.location.href = '/arms';
        }

        function goToLegs() {
            window.location.href = '/legs';
        }
        function Home() {
            window.location.href = '/';
        }
    </script>
</body>
@include('home.bot')
</html>
