<!doctype>

<html>
<body bgcolor="#cccccc" >
<head>
<title>Delivery Information</title>
<link rel="stylesheet" href="style1.css" media="all" />
</head>


<div class="d">

<div class="d1">
<form method="post" action="" enctype="multipart/form-data">

	<table align="center" width="500" border="2" bgcolor="#E6E6FA">


		<tr align="center">
		<td colspan="7"><h2>Delivery Bike<h2></td>
		</tr>

		<tr>
		<td align="right"><b>Date:</b></td>
		<td> <input type="date" name="date" size="60" />  </td>
		</tr>

		<tr align="center">
		<td colspan="7"><input type="submit" name="Delivery" value="Show"/></td>
		</tr>

</div>

<div class="d2">


<?php
include "user.php";

if(isset($_POST['Delivery'])){
	
	$delivery_date = $_POST['date'];
	
	
         $show_date = "select * from delivery_information where date='$delivery_date';";
         
  $show = mysqli_query($con,$show_date);
  while($row_delivery=mysqli_fetch_array($show)){
		$Reciver_name=$row_delivery['Reciver_name'];
	$Phone_number=$row_delivery['Phone_number'];
	$Address=$row_delivery['Address'];
	$Date=$row_delivery['Date'];
	$Pro_id=$row_delivery['Pro_id'];
	$Pament=$row_delivery['Pament'];

  
 echo "
	

	<p><b>Reciver Name: </b>$Reciver_name</p>
	
	
	<p><b>Phone Number: </b>$Phone_number</p>
	<p><b>Address: </b>$Address</p>
	
	<p><b>Date: </b>$Date</p>
	<p><b>Product ID: </b>$Pro_id</p>
	<p><b>Pamentb Method: </b>$Pament</p>
	
	
	
	
	
	";
	 
 }
	 
 }
  
	
?>



</div>

</div>
</body>




</html>





