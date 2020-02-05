<?php
      include('restaurant.php');
            $sql="SELECT cname FROM `cashier`";
            $result=mysqli_query($con,$sql);
            ?><!DOCTYPE html>
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

<body style="background-color: rgb(227,198,198);">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar" style="background-size: cover;">
        <div class="container"><a class="navbar-brand logo">Spindrift</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="features.php"><i class="fa fa-home"></i>Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">logout</a></li>
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
        <br>
        <br>
    <section>
        <div class="container">
                <div class="block-heading">
                    <h2 class="text-info"><i class="fa fa-trash" style="font-size: 40px"></i>Delete Cashier</h2>
                </div>
            </div>
            <div class="input-group">
                <div class="input-group-prepend"></div>
                <div class="input-group-append"></div>
            </div>
            <div id="view" style="position: absolute;top:200px;left:600px;"><b><i><a href="displaycashier.php" align="center">Cashier Details</a></i></b>
    
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
                                <TH align="center" color="white">Select the cashier name</TH><br><br><br>
                                <td><select name="cname" onblur="myFunction(this.value)">
                                    <?php

while($row=$result->fetch_assoc()){
    ?>
    <option value="<?php
    echo($row['cname'])
    ?>">
    <?php
    echo($row['cname'])
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
       <input type="submit" align="center" value=" DELETE " name="submit" /> <input type="reset" />
   </pre>
</center>
</form>
<?php
if(isset($_POST["submit"])){
    if(!empty($_POST['cname'])) {
        $cname=$_POST['cname'];


        $query=mysqli_query($con,"SELECT * FROM `cashier` WHERE cname='".$cname."'");
        $numrows=mysqli_num_rows($query);
        if($numrows>0)
        {
            $sql="DELETE FROM `cashier` WHERE cname='".$cname."'";

            $result=mysqli_query($con,$sql);

            if($result) {
?>
<script type="text/javascript">
    alert("You have deleted the cashier succesfully ");
</script>
<?php
echo "Cashier  deleted succesfully";
}
}
else {
    ?>
    <script type="text/javascript">
        alert("Failed to delete the cashier from the cashier table. Try again! ");
    </script>
    <?php
    echo "Failure";
}
}
else {

    ?>
    <script type="text/javascript">
        alert("There is no such Cashier.");
</script>
<?php
echo "No such cashier";
}
} else {
    ?>
    <script type="text/javascript">
        alert("enter the cashier name");
    </script>
    <?php 
    
}

?>
<br><br><br><br>
<CENTER>
    <a href="cashiercode.php" >
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