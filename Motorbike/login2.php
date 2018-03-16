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
<div class="user">
		
		<h1>User login</h1>
		
		</div>
<form method="post" action="">


  <div class="container">

    <label><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name="bt" >Login</button>

    
  
   
  </div>
  <div class="container1">
    <button onclick="window.location.href='beforeforget.php'">Forget Password</button>
     <button onclick="window.location.href='registration.php'">New User</button>
</div>

</form>

<div class="footer">
<div class="next"><a href="page-2.php">Next Page</a></div>

<h2 style="text-align:center; padding:30px;">&copy; 2017 by Group:9 </h2>

</div>

</div>



</body>
</html>




<?php

include "user.php";
if(isset($_POST['bt'])){
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	$_SESSION["email"]=$email;
	

$sql=("select * from users where email='$email' and password ='$password'");
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

if($row['email']==$email && $row['password']==$password && $row['email']!=null){
	echo "<script>window.alert('WellCome ')</script>";
	header("Location:usermon.php");
	}
	else{
		echo "<script>window.alert('Password Mismatch Or You Account is not Created')</script>";
		
		}
} 
//header("refresh:2;url=login.php");
?>