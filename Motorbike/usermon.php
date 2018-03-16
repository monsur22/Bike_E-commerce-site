<!DOCTYPE>

<?php
include("functions/functions.php");

 ?>
 
 <?php
// Start the session
session_start();
?>
<html>
<head>

<title> Chose YOur Motorbyke </title>
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
<li> <a href="usermon.php" >Home </a> </li>
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

<div class="userbar">

<?php

$user=$_SESSION["email"];
echo "Welcome ".$user." ";
?>
<button onclick="window.location.href='mon.php'">logout</button>

</div>
<div class="slider">
<div id="sidebar">Catagories</div>
<ul id="cats">
<?php getcats1(); ?>



</ul>
<div id="sidebar">Brand</div>
<ul id="cats">
<?php getbrands1(); ?>

</ul>

</div>

<div class="content">
<div id="products_box">

<?php  getbike(); ?>
<?php getcatbike1(); ?>
<?php getbrandbike1(); ?>



<!--<p>content</p>


<div id="contentarea">
<p>content area</p>

</div>-->
</div>
<div class="footer">
<div class="next"><a href="userpage-2.php">Next Page</a></div>
<h2 style="text-align:center; padding:30px;">&copy; 2017 by Group:9 </h2>

</div>

</div>


</body>
</html>