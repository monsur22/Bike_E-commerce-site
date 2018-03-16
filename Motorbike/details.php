<!DOCTYPE>

<?php
include("functions/functions.php");

 ?>
 
<html>
<head>

<title> Chose YOur Motorbyke </title>
<link rel="stylesheet" href="style.css" media="all" />






</head>
<body>

<div class="mainclass">

<div>
<img id="none" src="images.png" style="width:1000px;height:100px;" />
</div>
<div class="header">

<img id="baner" src="output_o5XFOZ.gif" style="width:1000px;height:200px;" />
<!--<img id="logo1" src="monsur/image/IMG_20160518_173415.jpg" style="width:100px;height:100px;" />-->
<?php
// Start the session
session_start();
?>


</div>

<div class="manuber">
<ul id="manu">
<li> <a href="mon.php">Home </a> </li>
<li> <a href="login.php">Account</a> </li>
<li> <a href="adminlogin.php">Admin</a> </li>
<li> <a href="contuct.php">Contuct us</a> </li>

</ul>
<div id="form">
<form method="get" action="results.php" enctype="multipart/form-data">
<input type="text" name="user_query" placeholder="search a product"/>
<input type="submit" name="search" value="search"/>
</form>

</div>
</div>

<div class="slider">
<div id="sidebar">Catagories</div>
<ul id="cats">
<?php getcats(); ?>



</ul>
<div id="sidebar">Brand</div>
<ul id="cats">
<?php getbrands(); ?>


</ul>

</div>

<div class="content">
<div id="products_box">

<?php

include "user.php";

if(isset($_GET['pro_id'])){
	$product_id = $_GET['pro_id'];
	/*$_SESSION["bikeid"]=$product_id;*/
	/*echo $product_id;*/
	
	$get_bike = "select * from bikes where bike_id='$product_id'";
	
	$run_bike = mysqli_query($con, $get_bike);
	
		
	while($row_bike=mysqli_fetch_array($run_bike)){
	
	$bike_id=$row_bike['bike_id'];
	
	$bike_title=$row_bike['bike_title'];
	$bike_price=$row_bike['bike_price'];
	$bike_desc=$row_bike['bike_desc'];
	$bike_img=$row_bike['bike_img'];
	
	echo "
	
	<div id='single_product'>
	<h3>$bike_title</h3>
	
	<img src='ecommerce/adminarea/bike_img/$bike_img' width='600' height='400'/>
	
	<p><b> ৳ $bike_price </b></p>
	<p>$bike_desc</p>
	<a href='mon.php' style='float:left;'>Go Back</a>
		<a href='login.php'><button style='float:right;'>Buy</button></a>
	
	
	</div>
	
	";
		
	}
	}
	
		
	
		
		



?>


</div>


<div class="footer">

<h2 style="text-align:center; padding:30px;">&copy; 2017 by Group:9 </h2>

</div>

</div>


</body>
</html>