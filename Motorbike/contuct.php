<!DOCTYPE>

<?php
include("functions/functions.php");

 ?>
 
<html>
<head>

<title> Chose YOur Motorbyke 


</title>

<link rel="stylesheet" href="style.css" media="all" />






</head>
<body>

<div class="mainclass">
<div>
<img id="none" src="6a05ebd6f1fc13e17585425e83af5b8e.png" style="width:1000px;height:100px;" />
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
<li> <a href="contuct.php" target="_blank">Contact us</a> </li>

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

	<!--	<?php  getbike(); ?>
		<?php getcatbike(); ?>
		<?php getbrandbike(); ?>

		-->
<div class="contuct">

<h1><u>Group-9</u><h2>
<p>Contact Us</p>

<p><b>Address</b></p>
<p>Online Bike Shop</p>
<p>30/1 sukrabad</p>
<p>Dhanmondi-32,Dhaka-1209</p>
<a href="https://www.facebook.com/"><img src="facebook_logo.jpg" title="Contact With Facebook" width="150" height="50" /></a>
<a href="https://www.TWITTER.com"><img src="FOLLOWS US ON TWITTER.PNG" title="Contact With Twitter" width="150" height="50" /></a>
<a href="https://www.gmail.com"><img src="5167671844_b26432c9ac_b.jpg" title="Contact With Email" width="150" height="50" /></a>

</div>
	


</div>
<div class="footer">

<h2 style="text-align:center; padding:30px;">&copy; 2017 by Group:9 </h2>

</div>

</div>


</body>
</html>