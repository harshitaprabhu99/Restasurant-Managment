<?php

session_start();


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akronim">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/css/dh-header-cover-image-button.css">
    <link rel="stylesheet" href="assets/css/header-1.css">
    <link rel="stylesheet" href="assets/css/header-2.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
    <link rel="stylesheet" href="assets/css/text-box.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar" style="background-size: cover;">
        <div class="container"><a class="navbar-brand logo">Spindrift</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li><li class="nav-item" role="presentation"><a class="nav-link" href="untitled1code.php">LOGOUT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page login-page">
        <section class="clean-block clean-form dark" style="background-image: url(&quot;assets/img/restaurant-691397_1920.jpg&quot;);">
            <div class="container" style="background-size: cover;height: 776px;">
                <div class="block-heading">
                    <h1 class="text-info" style="color: rgb(255,255,255);">Log In</h1>
                    <p></p>
                </div>
                <form  action="login_check.php" method="POST" style="background-color: rgb(179,216,242);filter: blur(0px) brightness(97%);">
                    <div class="form-group"><label for="uname">Username</label><input  id="name" pattern="[A-Za-z\s].{,10}" placeholder="Enter username" title="Enter a valid username[A-Za-z\s]" required=""class="form-control" type="text" name="username"></div>
                    <div class="form-group"><label for="password">Password</label><input class="form-control" type="password" placeholder="Enter password" title="Enter valid password " name="password" id="myinput">
                        <input type="checkbox" onclick="myFunction()">Show Password

<script>
function myFunction() {
  var x = document.getElementById("myinput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
                    </div><button class="btn btn-primary btn-block" type="submit" name="save"  >Log In</button></form>
            </div>
        </section>
    </main>
<?php


include('restaurant.php');
if (isset($_POST['save']))  {
    $username =$_POST['username'];
    $password=$_POST['password'];
    $sql = mysqli_query($con,"SELECT * FROM admin WHERE username='$username' and password='$password'");

    $cnt=mysqli_num_rows($sql);

    if($cnt >0)
    {
        $_SESSION['username']= $username;
        echo  "<script>alert('Login Success'); window.location='features.php';</script>";

    }
    else
    {
        echo "<script>alert('Login failed'); window.location='login.php';</script>";
    }

    }


?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>