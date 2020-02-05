<?php

session_start();


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - Brand</title>
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

<body style="background-image: url(&quot;assets/img/cook-366875_1920.jpg&quot;);background-size: cover;background-repeat: no-repeat;">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar" style="background-size: cover;">
        <div class="container"><a class="navbar-brand logo">Spindrift</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="features.php"><i class="fa fa-home"></i>Home</a></li><li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Logout</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <main class="page registration-page">
        <section class="clean-block clean-form dark" style="background-color: rgb(241,241,237);background-image: url(&quot;none&quot;);">
            <div class="container text-primary bg-danger border-danger shadow flex-shrink-0 flex-fill align-self-stretch" style="filter: blur(0px) contrast(106%);background-color: rgb(248,241,241);background-image: url(&quot;assets/img/cook-366875_1920.jpg&quot;);">
                <div class="block-heading">
                    <h2 class="text-info" style="color: rgb(247,237,237);">Cashier Details</h2>
                    <p></p>
                </div>
                <form action="" method="POST">
                    <div class="form-group"><label class="text-primary" for="name" style="color: rgb(8,8,8);">Name</label><input class="form-control item" type="text" id="name" name="name" pattern="[A-Za-z\s].{3,10}" placeholder="Enter the name" title="Enter a valid name[A-Za-z\s]" required=""></div>
                    <div class="form-group"><label for="password">Password</label><input pattern="(?=.*[A-Za-z]){8,10}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or 10 characters" placeholder="Enter the password"class="form-control item" type="password" id="myinput" required="" name="password" >
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
</div>
                    <div class="form-group"><label for="phone" type="number">Phone</label><input  pattern="[0-9]{5,10}" placeholder="Enter the phone number" title="enter phone number"class="form-control" type="tel" maxlength="9" name="phno" > </div>
                    <div class="btn-toolbar">
                        <div class="btn-group" role="group"><button class="btn btn-primary" type="submit" name="add">ADD</button></div>
                        <div class="btn-group" role="group"></div>
                    </div>
                    <div class="btn-group" role="group"></div>
                    <div class="btn-group" role="group"></div>

  </form>
  <br>
  <br>
  <br>
                  
             


    </main>
    <?php
    include('restaurant.php');
if (isset($_POST['add']))  {
$name=$_POST['name'];
$password=$_POST['password'];
    
    $sql = mysqli_query($con," SELECT * FROM `cashier` WHERE cname='$name' and password='$password'");

    $cnt=mysqli_num_rows($sql);

    if($cnt >0)
    {
        $_SESSION['name']= $name;
        echo  "<script>alert(' Cashier Login success'); window.location='billing.php';</script>";

    }


    else
    {
        
        
                                        $name=$_POST['name'];
                                        $password=$_POST['password'];
                                        $phno=$_POST['phno'];
                                        


                                    $iq = mysqli_query($con," INSERT INTO `cashier` ( `cname`,`password`,`phno`)VALUES('".$name."','".$password."','".$phno."')");

                                 echo "<script>alert('Updated Successfully'); window.location='cashiercode.php';</script>";
                                
}
    
}
?>
<div class="col-md-12 col-lg-8 offset-lg-2" style="text-align:center;margin-top:145px;"><a class="btn btn-danger" role="button" style="border:none;width:151px;height:58px;margin-left:14px;background-color:#face1a;color:rgb(0,0,0);" href="untitled1code.php"><i class="fa fa-user" style="font-size:20px"></i>Employee Details</a><a class="btn btn-danger" role="button" style="border:none;width:151px;height:58px;margin-left:14px;background-color:#3abaa1;color:rgb(255,255,255);margin-top:12px;"
            href="billing.php"><i class="fa fa-file" style="font-size:20px"></i>Billing</a><a class="btn btn-danger" role="button" style="border:none;width:151px;height:58px;margin-left:14px;background-color:#a04563;color:rgb(255,255,255);margin-top:12px;" href="menuedit2.php"><i class="fa fa-edit" style="font-size:20px"></i>Edit Menu</a>
            <a
            class="btn btn-danger" role="button" style="border:none;width:151px;height:58px;margin-left:14px;background-color:#75765f;color:rgb(255,255,255);margin-top:12px;" href="displaycashier.php"><i class="fa fa-search" style="font-size:20px"></i>View Cashier Details</a>
            <a class="btn btn-danger" role="button" style="border:none;width:151px;height:58px;margin-left:14px;background-color:#a04563;color:rgb(255,255,255);margin-top:12px;" href="deletecashier.php"><i class="fa fa-trash-o" style="font-size:20px"></i>Delete Cashier?</a>
       
    </div>                             
    </section>                               
<br>
<br>
<br>

    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>