<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quote of the Day</title>
    <link rel="stylesheet" href="css/1styles.css">
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
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: url("images/1final.jpg") no-repeat center center fixed;
    background-size: cover;
}
h1{
    color: #000;
}

.quote-container {
    max-width: 500px;
    background-color: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 10px;
    text-align: center;
}

#quote-image {
    width: 150px;
    height: 150px;
    object-fit: cover;
    border-radius: 50%;
    margin: 0 auto;
    display: block;
}

#quote-text {
    font-size: 18px;
    margin-top: 10px;
}

#new-quote-btn {
    margin-top: 20px;
    padding: 10px 20px;
    font-size: 16px;
    background-color: #2d87a2;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.2s;
}

#new-quote-btn:hover {
    background-color: #24697e;
}

</style>
<body>

    <div class="background-image">
    @include('home.header')
    <div class="" style='display:flex;justify-content:center' >
    <div class="quote-container">
        <h1>Quote of the Day</h1>
        <img id="quote-image" src="" alt="Quote Image">
        <p id="quote-text"></p>
        <button id="new-quote-btn">New Quote</button>
    </div>
    </div>
    </div>
    <script src="js/1script.js"></script>
</body>
</html>
