<?php
      include('restaurant.php');
            $sql="SELECT price FROM `edit_menu`";
            $sql1="SELECT item_name FROM `edit_menu`";
            $result=mysqli_query($con,$sql);
            $result1=mysqli_query($con,$sql1);

?>


<!DOCTYPE html>
<html style="background-image: url(&quot;assets/img/eat-1339061_1920.jpg&quot;);background-size: contain;">

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
                   <li class="nav-item" role="presentation"><a class="nav-link" href="features.php"><i class="fa fa-home"></i>Home</a></li> <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container" style="background-image: url(&quot;assets/img/eat-1339061_1920.jpg&quot;);background-size: contain;">
                <div class="block-heading">
                    <h2 class="text-info">BILLING</h2>
                </div>
                <form  action="" method="POST" style="background-image: url(&quot;assets/img/cook-366875_1920.jpg&quot;);filter: blur(0px) brightness(115%) contrast(94%);">
                     <div class="form-group"><label class="text-white" for="name">Item Name</label><select class="form-control" name="item_name" onblur="myFunction(this.value)">
                         

<?php
while($row=$result1->fetch_assoc()){
    ?>
    <option value="<?php
    echo($row['item_name'])
    ?>">
    <?php
    echo($row['item_name'])
    ?>
</option>
<?php
}
?>
</select>
<?php

if(isset($_POST["submit"])){
    if(!empty($_POST['item_name'])) {
        $item_name=$_POST['item_name'];


        $query=mysqli_query($con,"SELECT * FROM `edit_menu` WHERE item_name='".$item_name."'");
        $numrows=mysqli_num_rows($query);
        
    }
    
}

?>
<br>
    <div class="form-group"><label for="name" class="text-white">Quantity</label><input pattern="[0-9]" placeholder="Enter the quantity" title="Enter a valid number"class="form-control item" type="number"  name="quantity"  required=""></div><label class="text-white">Price</label><select class="form-control" type="number" name="price" onblur="myFunction(this.value)">
                                  
 <?php
while($row=$result->fetch_assoc()){
    ?>
    <option value="<?php
    echo($row['price'])
    ?>">
    <?php
    echo($row['price'])
    ?>
</option>
<?php
}
?>
</select>
</td>
  </div>
                         
                         <button class="btn btn-primary" type="submit" name="enter">enter</button>

                     
                   

                     <script>
    function myFunction(r){
        if(window.XMLHttpRequest){
            xmlhtp=new ActiveXObject ("Microsoft.XMLLHTTP");
        }
        xmlhttp.onreadystatechange=function() {
            if(xmlhttp.readyState==4 && xmlhttp.status==200) {
                document.getElementById("").value=xmlhttp.responseText;
            }
            }
            xmlhttp.open("GET","getdetails.php?sid="+r,true);
            xmlhttp.send();
        }
    </script>
     </form>
     <div class="col-md-12 col-lg-8 offset-lg-2" style="text-align:center;margin-top:145px;"><a class="btn btn-danger" role="button" style="border:none;width:151px;height:58px;margin-left:14px;background-color:#face1a;color:rgb(255,255,255);margin-top:12px;" href="untitled1code.php"><i class="fa fa-user"></i>Employee Details</a><a class="btn btn-danger" role="button" style="border:none;width:151px;height:58px;margin-left:14px;background-color:#3abaa1;color:rgb(255,255,255);margin-top:12px;"
            href="billing.php"><i class="fa fa-file"></i>Billing</a><a class="btn btn-danger" role="button" style="border:none;width:151px;height:58px;margin-left:14px;background-color:#a04563;color:rgb(255,255,255);margin-top:12px;" href="menuedit2.php"><i class="fa fa-edit" style="font-size:24px"></i>Edit Menu</a>
             <a
            class="btn btn-danger" role="button" style="border:none;width:151px;height:58px;margin-left:14px;background-color:#5286ced;color:rgb(255,255,255);margin-top:12px;" href="displaybilling.php"><i class="fa fa-file"></i>View Billing Details</a>
            <a
            class="btn btn-danger" role="button" style="border:none;width:151px;height:58px;margin-left:14px;background-color:#23ff;color:rgb(255,255,255);margin-top:12px;" href="deletebill.php"><i class="fa fa-trash" style="font-size:24px"></i>Delete Bill</a>
             <a
            class="btn btn-danger" role="button" style="border:none;width:151px;height:58px;margin-left:14px;background-color:#32864e;color:rgb(255,255,255);margin-top:12px;" href="dateamount.php"><i class="fa fa-calendar" style="font-size:24px"></i>Date & Bill Cancelled</a>

<?php

if(isset($_POST["submit"])){
    if(!empty($_POST['price'])) {
        $price=$_POST['price'];
        $query=mysqli_query($con,"SELECT * FROM `edit_menu` WHERE price='".$price."'");
        $numrows=mysqli_num_rows($query);
        
    }
    
}

?>
<br><br><br><br>

                         <?php  
                            include('restaurant.php');
                               if(isset($_POST['enter']))
                                 {
                                   
                                    $item_name=$_POST['item_name'];
                                     $quantity=$_POST['quantity'];
                                     $price=$_POST['price'];
                                    $iq1=mysqli_query($con,"CALL checkinsert('".$price."','".$item_name."','".$quantity."')");
                                 echo "<script>alert('Completed Successfully'); window.location='billing.php';</script>";

                                }
                ?>
</section>
    </main>
    
        
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>