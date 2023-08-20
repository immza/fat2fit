<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="home1/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home1/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home1/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home1/css/responsive.css" rel="stylesheet" />
</head>
<style>
body{
    margin: 0px;
    padding:0px;
    background: url('images/rope.jpg');
    background-size: 85%;
    background-position: 200px 0px;
}
.main{
    width: 400px;
    margin: 100px auto 0px auto;
}
h2{
    text-align: center;
    padding: 20px;
    font-family: sans-serif;
}
.register{
    background-color: rgba(0,0,0,0.5);
    width: 100%;
    font-size: 20px;
    border-radius: 10px;
    border: 1px solid rgba(255,255,255,0.3);
    box-shadow: 2px 2px 15px rgba(0,0,0,0.3) ;
    color:#fff; 
}
#register{
    margin: 40px;
}
label{
    font-family: sans-serif;
    font-size: 18px;
    font-style: italic;
}
input#name{
    width: 300px;
    border: 1px solid #ddd;
    border-radius: 3px;
    outline: 0;
    padding: 7px;
    background-color: #fff;
    box-shadow: inset 1px 1px 5px rgba(0,0,0,0.3);
}
#submit{
    width: 200px;
    padding: 7px;
    font-size: 16px;
    font-family: sans-serif;
    font-weight: 600;
    border: none;
    border-radius: 3px;
    background-color: rgba(250,100,0,0.8);
    color: #fff;
    cursor: pointer;
    border: 1px solid rgba(255,255,255,0.3);
    box-shadow: 1px 1px 5px rgba(0,0,0,0.3);
    margin-bottom: 20px;
}

label,span,h2{
    text-shadow: 0px 0px 0px;
    rgba:(0,0,0,0.3);

}


</style>
<body>
@include('home.header')
<div class="main">
<div class="register">
    <h2>Register Here</h2>
    <form id="register" action="{{ route('submit-reg') }}" method="POST">
    @csrf
        <label>First Name: </label><br>
        <input type="text" name="fname" id="name" placeholder="Enter your First Name:"><br>
        <label>Last Name: </label><br>
        <input type="text" name="lname" id="name" placeholder="Enter your Lirst Name:"><br>
        <label>Your Age: </label><br>
        <input type="number" name="age" id="name" placeholder="Enter your Age:"><br>
        <label>Email: </label><br>
        <input type="email" name="email" id="name" placeholder="Enter your valid Email:"><br>
        <label>Contact Number: </label><br>
        <input type="number" name="contact" id="name" placeholder="Enter your valid Contact Number::"><br>
        <label>Gender: </label><br>
        &nbsp; &nbsp; &nbsp;
        <div class="" style='display:flex;justify-content:center;align-items:center'>
        <span id="male">Male </span>
        <input type="radio" name="gender" id="male">
        </div>
        <br>
        <div class="" style='display:flex;justify-content:center;align-items:center'>
        <span id="female">Female</span>
        <input type="radio" name="gender" id="female">
        </div>
        <br><br>
        <label> Enter your new password: </label><br>
        <input type="password"  name="password" id="name" placeholder="Your new password:">
        <br>
        <button type="submit"  class="btn btn-primary">Submit</button>
        <br>
    </form>
</div>
</div>
</body>
</html>