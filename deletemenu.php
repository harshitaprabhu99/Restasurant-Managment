      <?php
      include('restaurant.php');
            $sql="SELECT item_name FROM `edit_menu`";
            $result=mysqli_query($con,$sql);
            ?>
            <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Payment - Brand</title>
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
    <link rel="stylesheet" href="assets/css/text-box.css"><br><br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <title>Delete Menu</title>
    <div id="view" style="position: absolute;top:200px;left:600px;"><b><i><a href="tabledisplay.php" align="right">EDIT MENU</a></i></b>
    <h1><CENTER><font color="white"><u>DELETE MENU</u></font></CENTER></h1>
    <hr color="white" width=400 height=400 />
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
</head>

<body style="background-image:url(assets/img/cook-366875_1920.jpg);" >
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

    
<form action="" method="POST">
                    <center>
                        <table border="4" cellpadding="10" cellspacing="10">
                            <TR>
                                <TH align="center" class="text-white">enter the item name</TH>
                                <td><select name="item_name" onblur="myFunction(this.value)">
                                    <?php
while($row=$result->fetch_assoc()){
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
</td>
</TR>
</table>
<pre>
    <br>
    <br>
       <input type="submit" value="Delete" name="submit" /> <input type="reset" />
   </pre>
</center>
</form>
<?php
if(isset($_POST["submit"])){
    if(!empty($_POST['item_name'])) {
        $name=$_POST['item_name'];


        $query=mysqli_query($con,"SELECT * FROM `edit_menu` WHERE item_name='".$name."'");
        $numrows=mysqli_num_rows($query);
        if($numrows>0)
        {
            $sql="DELETE FROM `edit_menu` WHERE item_name='".$name."'";

            $result=mysqli_query($con,$sql);

            if($result) {
?>
<script type="text/javascript">
    alert("You have deleted the item succesfully ");
</script>
<?php
echo "Item deleted succesfully";
}
}
else {
    ?>
    <script type="text/javascript">
        alert("Failed to delete the item from the menu try again");
    </script>
    <?php
    echo "Failure";
}
}
else {

    ?>
    <script type="text/javascript">
        alert("There is no such item.");
</script>
<?php
echo "There is no such item";
}
} else {
    ?>
    <script type="text/javascript">
        alert("enter the item name");
    </script>
    <?php 
    
}

?>
<br><br><br><br>
<CENTER>
    <a href="menuedit2.php" >
        <input type="submit" value="Go Back">
    </a>
</CENTER>  
    <main class="page payment-page"></main>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>