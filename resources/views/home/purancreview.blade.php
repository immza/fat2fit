<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Reviews</title>
    <link rel="stylesheet" href="css/2styler.css">
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

</style>
<body>
   

    <div class="background-image"></div>
    <div class="container">
        <h1>Customer Reviews</h1>
        <div class="reviews">
            <div class="review">
                <img src="images/2customer1.jpg" alt="Customer 1">
                <h3>John Doe</h3>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam et turpis vitae massa tincidunt."</p>
            </div>
            <div class="review">
                <img src="images/2customer2.jpg" alt="Customer 2">
                <h3> Sultana Mumu</h3>
                <p>"In sed euismod est. Suspendisse malesuada sapien vitae justo ullamcorper, vel rhoncus dui vestibulum."</p>
            </div>
            <div class="review">
                <img src="images/2customer3.jpg" alt="Customer 3">
                <h3>Esteban Julio</h3>
                <p>"In sed euismod est. Suspendisse malesuada sapien vitae justo ullamcorper, vel rhoncus dui vestibulum."</p>
            </div>
            <div class="review">
                <img src="images/2customer4.webp" alt="Customer 4">
                <h3>Ricardo Montoya</h3>
                <p>"In sed euismod est. Suspendisse malesuada sapien vitae justo ullamcorper, vel rhoncus dui vestibulum."</p>
            </div>
            <div class="review">
                <img src="images/2customer5.jpg" alt="Customer 5">
                <h3>Rosa Ramirez</h3>
                <p>"In sed euismod est. Suspendisse malesuada sapien vitae justo ullamcorper, vel rhoncus dui vestibulum."</p>
            </div>
            <!-- Add more customer reviews here -->
        </div>
    </div>
</div>
</div>
    <!--<script src="script.js"></script>-->
</body>
</html>
