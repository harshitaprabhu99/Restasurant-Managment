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
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar" style="background-size: cover;">
        <div class="container"><a class="navbar-brand logo">Spindrift</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar" style="background-size: cover;">
        <div class="container"><a class="navbar-brand logo">Spindrift</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="features.php"><i class="fa fa-home"></i>Home</a></li> <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <br>
    <fieldset>
                <legend><h1><i class='far fa-money-bill-alt' style='font-size:20px'><i class="fa fa-user" style="font-size:28px">Cashier Details</i></h1></legend>
                <center> <table width="400" cellpadding="5" cellspacing="4" border="1">
<tr>
    <th>Cid</th> <th> Cname </th><th>Phno</th>
</tr>
<?php
include('restaurant.php');
$result=mysqli_query($con,"SELECT cid,cname,phno FROM `cashier`");
while($row=mysqli_fetch_array($result))
{
    ?>
    <tr>
        <td><?php echo $row['cid']; ?></td>
        <td><?php echo $row['cname']; ?></td>
        <td><?php echo $row['phno']; ?></td>
        

    </tr>
    <?php
}
?>
</table>
</center>
</fieldset>
<center> <a href="cashiercode.php">
<input type="submit" value="Go Back">
</a></center>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>