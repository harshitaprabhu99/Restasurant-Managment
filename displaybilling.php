<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Demo</title>
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

<body style="background-color: rgb(255,250,205);">
    <nav class="navbar navbar-light navbar-expand-md">
        <div class="container-fluid"><a class="navbar-brand" href="#">Spindrift</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar" style="background-size: cover;">
        <div class="container"><a class="navbar-brand logo">Spindrift</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="features.php"><i class="fa fa-home"></i>Home</a></li><li class="nav-item" role="presentation"><a class="nav-link" href="index.php">LOGOUT</a>               </ul>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <fieldset>
                <legend><h1><i class="fa fa-file" style="font-size:32px"> Billing Details</i></h1></legend>
                <center> <table width="700" cellpadding="5" cellspacing="5" border="1">
<tr>
    <th>Price</th><th>Bill Id</th><th>      Item name                    </th><th>Quantity</th><th>5% GST</th><th>Total amount(Rupees)</th> 
</tr>
<?php
include('restaurant.php');
$result=mysqli_query($con,"SELECT price,bill_id,item_name,quantity,GST,total FROM `billing`");
while($row=mysqli_fetch_array($result))
{
    ?>
    <tr>
        <td><?php echo $row['price']; ?></td>
        <td><?php echo $row['bill_id']; ?></td>
        <td><?php echo $row['item_name']; ?></td>
         <td><?php echo $row['quantity']; ?></td>
         <td><?php echo $row['GST']; ?></td>
         <td><?php echo $row['total'];?></td>  
    </tr>
    
     <?php
 }
 ?>
</table>
</center>
</fieldset>
<center> <a href="billing.php">
<input type="submit" value="Go Back">
</a></center>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
