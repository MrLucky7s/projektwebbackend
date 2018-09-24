<?php

session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
<!--Navigacija-->
<nav class="navbar navbar-inverse">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#">MyTravel</a>
                  </div>
                  <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                      <li><a href="http://localhost/MyTravel/MyTravel.html">Home</a></li>
                      <li><a href="http://localhost/MyTravel/MyTravelCro.html">Croatia</a></li>
                      <li><a href="http://localhost/MyTravel/MyTravelSpa.html">Spain</a></li>
                      <li><a href="http://localhost/MyTravel/MyTravelIta.html">Italy</a></li>
                      <li><a href="http://localhost/MyTravel/MyTravelGer.html">Germany</a></li>
                      <li><a href="http://localhost/MyTravel/MyTravelAus.html">Austria</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="http://localhost/registration/register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                      <li><a href="http://localhost/registration/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                  </div>
                </div>
              </nav>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome your MyTravel page.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</body>
</html>