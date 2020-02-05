
<!DOCTYPE html>
<html style="background-size: cover;background-image: url(&quot;assets/img/restaurant-690569_1920.jpg&quot;);">

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

<body style="background-image: url(&quot;assets/img/raspberry-2023404_1920.jpg&quot;);background-size: cover;">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar" style="background-size: cover;">
        <div class="container"><a class="navbar-brand logo">Spindrift</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="features.php"><i class="fa fa-home"></i>Home</a></li>
                     <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page registration-page">
        <section class="clean-block clean-form dark" style="background-size: auto;">
            <div class="container" style="background-image: url(&quot;assets/img/beverage-3157395_1920.jpg&quot;);background-size: contain;">
                <div class="block-heading">
                    <h2 class="text-info">Employee Details</h2>
                </div>
                <form action="" method="POST">
                    <div class="form-group"><label for="name">Name</label><input pattern="[A-Za-z\s]{3,15}" placeholder="Enter the name" title="Enter a valid name[A-Za-z\s]"class="form-control item" type="text" id="name" name="name" required=""></div>
                    <div class="form-group"><label for="number">Phone</label><input pattern="[0-9]{10,10}" placeholder="Enter the phone number" title="enter phone number [0-9]" class="form-control" type="Phone" id="phno" name="phno" required="" maxlength="10"></div>
                   <div class="form-group"><label  for="name">Designation</label><select class="form-control" name="designation"><optgroup label="Select designation"><option value="Admin" selected="">Admin</option><option value="Maid" selected="">Maid</option><option value="Worker">Worker</option><option value="Employee" selected="">Employee</option></optgroup></select></div><label>Address</label><input pattern="[A-Za-z\s]{3,10}" placeholder="Enter the address" title="Enter the address within 10 characters" class="form-control" type="text" maxlength="10" name="address" required=""><br>
                    <button class="btn btn-primary" name="add" type="submit">ADD</button>
                </form>
                <div class="col-md-12 col-lg-8 offset-lg-2" style="text-align:center;margin-top:145px;">
        <a class="btn btn-danger" role="button" style="border:none;width:151px;height:58px;margin-left:14px;background-color:#face1a;color:rgb(0,0,0);" href="features.php"><i class="fa fa-user"></i>Employee Details</a>
        <a class="btn btn-danger" role="button" style="border:none;width:151px;height:58px;margin-left:14px;background-color:#3abaa1;color:rgb(255,255,255);margin-top:12px;"  href="billing.php"><i class="fa fa-file"></i>Billing</a>
            <a class="btn btn-danger" role="button" style="border:none;width:151px;height:58px;margin-left:14px;background-color:#a04563;color:rgb(255,255,255);margin-top:12px;" href="menuedit2.php"><i class="fa fa-edit" style='font-size:24px'></i>Edit Menu</a>
            <a class="btn btn-danger" role="button" style="border:none;width:151px;height:58px;margin-left:14px;background-color:#765613;color:rgb(255,255,255);margin-top:12px;" href="deleteemployee.php"><i class="fa fa-trash" style="font-size:24px"></i>Delete Employee?</a>
            <a class="btn btn-danger" role="button" style="border:none;width:151px;height:58px;margin-left:14px;background-color:#84878;color:rgb(255,255,255);margin-top:12px;" href="displayemployee.php"><i class="fa fa-search"></i>Display Employee</a>
            <br>
            <br>
        
    </div>
                <?php  
                            include('restaurant.php');
                               if(isset($_POST['add']))
                                 {
                                    $name=$_POST['name'];
                                     $phone=$_POST['phno'];
                                      $designation=$_POST['designation'];
                                        $address=$_POST['address'];


                                   $iq = mysqli_query($con," INSERT INTO `employee` ( `ename`,`phno`,`designation`,`address`)VALUES('".$name."','".$phone."','".$designation."','".$address."')");

                                 echo "<script>alert('Updated Successfully'); window.location='addemployee.php';</script>";
                                }

                ?>
 



</section>
    </main>

   

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>


</body>

</html>
