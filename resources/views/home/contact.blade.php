<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Contact Page</title>
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
<style>
    body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    }

    .header {
        background-image: url("images/bg4.jpg");
        background-position: 0% 6% ;
        background-size: cover;
        text-align: center;
        padding: 180px 0;
    }

    .header h1 {
        color: white;
        font-size: 42px;
    }

    .contact-section {
        background-color: #f5f5f5;
        padding: 40px 0;
        text-align: center;
    }

    .contact-section h2 {
        font-size: 28px;
        margin-bottom: 20px;
    }

    .contact-section p {
        font-size: 18px;
        margin-bottom: 30px;
    }

    .icons {
        display: flex;
        justify-content: center;
        gap: 20px;
    }

    .icons img {
        width: 50px;
        height: 50px;
        cursor: pointer;
    }
</style>
<body>
@include('home.header')
    <div class="header">
        <h1>Contact</h1>
    </div>
    <div class="contact-section">
        <h2>Contact Us</h2>
        <p>We'd love to hear from you. Please contact us through the following methods:</p>
        <div class="icons">
            <a href="mailto:fat2fit4lifee@gmail.com"><img src="images/email.png" alt="Email"></a>
            <a href="https://www.facebook.com/profile.php?id=61550114901605&mibextid=LQQJ4d"><img src="images/facebook.png" alt="Facebook"></a>
            <a href="https://instagram.com/fat2fit.bd?igshid=NTc4MTIwNjQ2YQ=="><img src="images/instagram.png" alt="Instagram"></a>
        </div>
    </div>
</body>
@include('home.bot')
</html>
