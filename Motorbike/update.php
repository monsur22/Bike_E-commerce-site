<!doctype>



<html>
<body bgcolor="#cccccc" >
<head>
<title>Update Bike</title>

<script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>

<form method="post" action="" method="post" enctype="multipart/form-data">

<table align="center" width="700" border="2" bgcolor="	#E6E6FA">


<tr align="center">
<td colspan="7"><h2>update Bike<h2></td>
</tr>

<tr>
<td align="right"><b>Bike Title:</b></td>
<td> <input type="text" name="bike_title" size="60" required/>  </td>
</tr>

<tr>
<td align="right"><b>Bike Description:</b></td>
<td><textarea name="bike_desc" cols="20" rows="10" required> </textarea> </td>
</tr>



<tr>
<td align="right"><b>Bike Keywords:</b></td>
<td> <input type="text" name="bike_keywords" size="50"required/>  </td>
</tr>

<tr>
<td align="right"><b>Bike Price:</b></td>
<td><input type="text" name="bike_price"required/></td>
</tr>


<tr align="center">
<td colspan="7"><input type="submit" name="Update_product" value="Update Now"/></td>
</tr>

</body>




</html>



<?php
include "user.php";
if(isset($_POST['Update_product'])){
	
	$bike_title = $_POST['bike_title'];
	$bike_desc= $_POST['bike_desc'];
	$bike_keywords = $_POST['bike_keywords'];
	$bike_price = $_POST['bike_price'];
	
  $update_bike = "update bikes set bike_desc='$bike_desc',bike_keywords='$bike_keywords', bike_price='$bike_price' where bike_title='$bike_title';";

  $udate_bi = mysqli_query($con,$update_bike);
  if($udate_bi){
	 echo "<script>window.alert('Update ')</script>";
	  
  }
 
	 
 }
  
	

	?>
