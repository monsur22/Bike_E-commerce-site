<!DOCTYPE>

<?php
include("functions/functions.php");

 ?>
 
<html>
<head>

<title>  </title>
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



</div>

<div class="manuber">
<ul id="manu">
<li> <a href="mon.php" >Home </a> </li>
<li> <a href="login.php" target="_blank">Account</a> </li>
<li> <a href="adminlogin.php" target="_blank">Admin</a> </li>
<li> <a href="contuct.php" target="_blank">Contuct us</a> </li>

</ul>
<div id="form">
<form method="get" action="search.php" enctype="multipart/form-data">
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
    if(isset($_GET['search'])){
		$search_query=$_GET['user_query'];
		
    $get_bike = "select * from bikes where  bike_keywords like '%$search_query%'";
	$run_bike = mysqli_query($con, $get_bike);
	
	while($row_bike=mysqli_fetch_array($run_bike)){
	
	$bike_id=$row_bike['bike_id'];
	$bike_cat=$row_bike['bike_cat'];
	$bike_brand=$row_bike['bike_brand'];
	$bike_title=$row_bike['bike_title'];
	$bike_price=$row_bike['bike_price'];
	$bike_desc=$row_bike['bike_desc'];
	$bike_img=$row_bike['bike_img'];
	$bike_keywords=$row_bike['bike_keywords'];
	
	echo "
	
	<div id='single_product'>
	<h3>$bike_title</h3>
	
	<img src='ecommerce/adminarea/bike_img/$bike_img' width='180' height='180'/>
	
	<p><b> ৳ $bike_price </b></p>
	<a href='details.php?pro_id=$bike_id' style='float:left;'>Details</a>
		<a href='mon.php?pro_id=$bike_id'><button style='float:right;'>Buy</button></a>
	
	
	</div>
	
	";
		
	}
	}
	?>



<!--<p>content</p>


<div id="contentarea">
<p>content area</p>

</div>-->
</div>
<div class="footer">

<h2 style="text-align:center; padding:30px;">&copy; 2017 by Group:9 </h2>

</div>

</div>


</body>
</html>