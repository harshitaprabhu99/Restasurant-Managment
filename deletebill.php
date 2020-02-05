<?php
      include('restaurant.php');
            $sql="SELECT bill_id FROM `billing`";
            $result=mysqli_query($con,$sql);
            ?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Pricing - Brand</title>
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

<body  style="background-color: rgb(227,198,198);">
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section>
          <div class="container">
                <div class="block-heading">
                    <h2 class="text-info"><i class="fa fa-trash" style="font-size:32px"></i>Deleting a Bill</h2>
                </div>
            </div>
            <div class="input-group">
                <div class="input-group-prepend"></div>
                <div class="input-group-append"></div>
            </div>
            <div id="view" style="position: absolute;top:200px;left:600px;"><b><i><a href="displaybilling.php" align="center">Billing Details</a></i></b>
    
    <style type="text/css">
    INPUT:hover{color:white;}
    INPUT:focus{color:white;}
    </style> <script>
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
    <form action="" method="POST">
                    <center>
                        <table border="4" cellpadding="10" cellspacing="10">
                            <TR>
                           <br><br>     <TH align="center" color="white">Select the employee name</TH>
                                <td><select name="bill_id" onblur="myFunction(this.value)">
                                    <?php

while($row=$result->fetch_assoc()){
    ?>
    <option value="<?php
    echo($row['bill_id'])
    ?>">
    <?php
    echo($row['bill_id'])
    ?>
</option>
<?php
}
?>
</select>
</td>
</TR>
</table>
<pre>
    <br>
    <br>
    <CENTER>
       <input type="submit" align="center" value=" Delete " name="submit" /> <input type="reset" />
   </CENTER>
   </pre>
</center>
</form>
<?php
if(isset($_POST["submit"])){
    if(!empty($_POST['bill_id'])) {
        $bill_id=$_POST['bill_id'];


        $query=mysqli_query($con,"SELECT * FROM `billing` WHERE bill_id='".$bill_id."'");
        $numrows=mysqli_num_rows($query);
        if($numrows>0)
        {
            $sql="DELETE FROM `billing` WHERE bill_id='".$bill_id."'";

            $result=mysqli_query($con,$sql);

            if($result) {
?>
<script type="text/javascript">
    alert("You have deleted the bill succesfully ");
</script>
<?php
echo "Bill  deleted succesfully";
}
}
else {
    ?>
    <script type="text/javascript">
        alert("Failed to delete the bill from the billing table. Try again! ");
    </script>
    <?php
    echo "Failure";
}
}
else {

    ?>
    <script type="text/javascript">
        alert("There is no such Bill id.");
</script>
<?php
echo "No such bill id";
}
} else {
    ?>
    <script type="text/javascript">
        alert("enter the bill id");
    </script>
    <?php 
    
}

?>
<br><br><br><br>
<CENTER>
    <a href="billing.php" >
        <input type="submit" value="Go Back">
    </a>
</CENTER>


    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>