 
            <!DOCTYPE html>
<html style="background-image: url(&quot;assets/img/restaurant-690569_1920.jpg&quot;);">

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

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar" style="background-size: cover;">
        <div class="container"><a class="navbar-brand logo">Spindrift</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="untitled1code.php"><i class="fa fa-home"></i>Home</a></li><li class="nav-item" role="presentation"><a class="nav-link" href="index.php">logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container" style="background-image: url(&quot;assets/img/menu-3206749_1920.jpg&quot;);background-size: contain;background-repeat: none;">
                <div class="block-heading">
                    <h2 class="text-info">Menu Edit</h2>
                </div>
                <br>
                <br>

                <form action="" method="POST" >
                    <div class="form-group"><label for="name">Name</label><br><input class="form-control item" type="text" id="name" name="name" pattern="[A-Za-z\s]{5,15}" placeholder="Enter item name" title="Enter the item name "></div>
                    <div class="form-group"><label for="price" >Price</label><input class="form-control" type="number" name="amount" id="amount" pattern="[0-9].{2,4}" placeholder="Enter price of the item" title="Enter the price"></div><button class="btn btn-primary btn-block" name= "add" type="submit">ADD</button>
                </form>


<br>
<br>
<br>

                <?php
                    include('restaurant.php');
                    if(isset($_POST['add']))
                    {
                        
                        $name = $_POST['name'];
                        $price= $_POST['amount'];
                        
                        $iq = mysqli_query($con,"INSERT INTO `edit_menu`( `item_name`, `price`) VALUES ('".$name."','".$price."')");

                        echo "<script>alert('Updated Successfully'); window.location='menuedit2.php';</script>";
                    }
                    
                ?>
            
             
            

           

        </section>
            

    </main>
    <div class="col-md-12 col-lg-8 offset-lg-2" style="text-align:center;margin-top:145px;"><a class="btn btn-danger" role="button" style="border: none;width: 151px;height: 58px;margin-left: 14px;background-color: #0d0c0c;color: rgb(255,255,255);margin-top: 12px;"
           href="features.php"><i class="fa fa-user" style="font-size:18px"></i>Employee Details</a><a class="btn btn-danger" role="button" style="border: none;width: 151px;height: 58px;margin-left: 14px;background-color: #0d0c0c;color: rgb(255,255,255);margin-top: 12px;"
            href="billing.php"><i class="fa fa-file" style="font-size:17px"></i>Billing</a><a class="btn btn-danger" role="button" style="border: none;width: 151px;height: 58px;margin-left: 14px;background-color: #100e0f;color: rgb(255,255,255);margin-top: 12px;" href="tabledisplay.php"><i class="fa fa-bars" style="font-size:18px"></i>Menu List</a>
            <a class="btn btn-danger" role="button" style="border: none;width: 151px;height: 58px;margin-left: 14px;background-color: #100e0f;color: rgb(255,255,255);margin-top: 12px;" href="deletemenu.php"><i class="fa fa-trash-o" style="font-size:20px"></i>Delete Item</a>
        
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>