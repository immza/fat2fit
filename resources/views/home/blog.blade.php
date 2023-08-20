<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Section</title>
    <link rel="stylesheet" type="text/css" href="home1/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home1/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home1/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home1/css/responsive.css" rel="stylesheet" />
</head>
<link rel="stylesheet" href="x.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100&family=Lato:wght@100;300;400;700;900&family=Patua+One&display=swap" rel="stylesheet">
<style>
body{
    margin:0px;
    padding: 0px;
    box-sizing:border-box;
    font-family:'Lato', sans-serif;
    background-image: url(images/bg1.jpg);
    line-height: auto;
}
.container{
    width:100%;
}
.row{
    width:80%;
    margin:auto;
}
.header{
    width: 60%;
    text-align: center;
    margin: auto;
}
.header h1{
    padding-top: 30px;
    font-size: 45px;
    color: #e19c30;
}
.header p{
    margin-top: 15px;
    font-size: 18px;
    line-height: 1.5;
    color: #e3d7b8
}
.content{
    display: flex;
    justify-content: center;
    align-items:center;
    margin:auto;
    border: 2px solid black;
}
.card{
    flex:1;
    margin: 50px 20px;
    box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.1);
    background-color: #fff;
}
.card img{
    width: 100%;
    height: auto;
}
.card h4{
    margin-top: 10px;
    margin-left: 10px;
    font-size:18px;
}
.card p{
    font-size: 15px;
    color: #6e6e6e;
    line-height: 1.5;
    padding: 10px;
}
.btn a:hover {
        text-decoration: underline;
        color:rgb(188, 32, 32);
}

.lol a{
    color: #e19c30;
}
.lol h5, lol a{
    font-size: 20px;
    text-align: center;
}
@media screen and (max-width: 768px){
    .content{
        flex-direction: column;
    }
}
</style>
<body>
@include('home.header')
    <div class="container">
        <div class="row">
            <div class="header">
                <h1>F2FBlog</h1>
                <p> A lifelong learner? Learn and grow with us. Spread the tongue
                    as we come up with new captivating articles and the latest 
                    researches everyday regarding the health and fitness industry.
                </p>  
            </div>
            <div class="content">
                <div class="card">
                    <img src="images/mentalhealth.jpg">
                    <a href="/blogp1" class="active"><h4 class="btn">The Mind-Body Connection: How Fitness Directly Affects Mental Health</a></h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Error autem soluta eveniet?
                        Quas, ratione quaerat necessitatibus cumque corporis unde ducimus, 
                        porro doloribus optio 
                        rem labore accusamus obcaecati? Labore, assumenda asperiores!</p>
                </div>
                <div class="card">
                    <img src="images/run.jpg">
                    <a href="/blogp2" class="active"><h4 class="btn">The Perfect Duo: Why Aerobic Activity is Essential for Weight Lifting</a></h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Error autem soluta eveniet?
                        Quas, ratione quaerat necessitatibus cumque corporis unde ducimus, 
                        porro doloribus optio 
                        rem labore accusamus obcaecati? Labore, assumenda asperiores!</p>
                </div>
                <div class="card">
                    <img src="images/bicep.png">
                    <a href="/blogp3" class="active"><h4 class="btn">Building Bigger Arms: Strategies for Increasing Muscle Size with Statistics</a></h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Error autem soluta eveniet?
                        Quas, ratione quaerat necessitatibus cumque corporis unde ducimus, 
                        porro doloribus optio 
                        rem labore accusamus obcaecati? Labore, assumenda asperiores!</p>
                </div>
            </div>
        </div>
    </div>    
    <div class="lol">
        <a href="mailto:fat2fit4lifee@gmail.com">><h5>Click Here to mail us @fa2fit4lifee </h5> </a>
    </div>
</body>
</html>