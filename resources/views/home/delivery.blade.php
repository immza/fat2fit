<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Page</title>
    <link rel="stylesheet" type="text/css" href="home1/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home1/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home1/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home1/css/responsive.css" rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .delivery-form {
            display: flex;
            flex-direction: column;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .submit-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
@include('home.header')
<div class="container">
    <form method="POST" action="{{ route('submit-form') }}">
    @csrf
    <label for="full_name">Full Name:</label>
    <input type="text" name="full_name" id="full_name">

    <label for="address">Address:</label>
    <input type="text" name="address" id="address">

    <label for="city">City:</label>
    <input type="text" name="city" id="city">

    <label for="postal_code">Postal Code:</label>
    <input type="text" name="postal_code" id="postal_code">

    <label for="country">Country:</label>
    <input type="text" name="country" id="country">

    <button type="submit"  class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>
