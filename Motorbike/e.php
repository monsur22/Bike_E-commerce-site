<!DOCTYPE>
<?php
include("functions/functions.php");

 ?>
<html>
<head>

<title>  My online Bisness</title>

<link rel="stylesheet" href="styles/style.css" media="all" />

</head>
<body>

<!--main class start here-->
<div class="mainclass">

<div class="header">

<img id="logo" src="img/logo.jpg" style="width:100px;height:100px;" />
<img id="baner" src="img/baner.jpg" style="width:900px;height:100px;" />


</div>

<div class="manuber">
<!--This is manuber!-->

<ul id="manu">
<li> <a href="#">Home </a> </li>
<li> <a href="#">All Bike </a> </li>
<li> <a href="#">My Account</a> </li>
<li> <a href="#">Sing up</a> </li>
<li> <a href="#">Shoping card</a> </li>
<li> <a href="#">Contuct us</a> </li>

</ul>
<div id="form">
<form method="get" action="results.php" enctype="multipart/form-data">
<input type="text" name="user_query" placeholder="search a product"/>
<input type="submit" name="search" value="search"/>
</form>

</div>



<div class="content">
<div id="products_box">

<?php  getbike(); ?>

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


<div id="contentarea">


</div> 

</div>
</div>

<div class="footer">

<h2 style="text-align:center; padding:30px;">&copy; 2017 by Group:9 </h2>

</div>

</div>
<!--main class end here-->

</body>



</html>