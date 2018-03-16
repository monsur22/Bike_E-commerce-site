<!doctype>

<html>
<body bgcolor="#cccccc" >
<head>
<title>Delete Bike</title>

</head>

<form method="post" action="delete.php" method="post" enctype="multipart/form-data">

<table align="center" width="700" border="2" bgcolor="#E6E6FA">


<tr align="center">
<td colspan="7"><h2>Delete Bike<h2></td>
</tr>

<tr>
<td align="right"><b>Bike Title:</b></td>
<td> <input type="text" name="bike_title" size="60" />  </td>
</tr>





<tr align="center">
<td colspan="7"><input type="submit" name="Delete_product" value="Delete Now"/></td>
</tr>

</body>




</html>



<?php
include "user.php";

if(isset($_POST['Delete_product'])){
	
	$bike_title = $_POST['bike_title'];
	
	
         $delete_bike = "DELETE FROM bikes WHERE bike_title='$bike_title';";

  $delete_bi = mysqli_query($con,$delete_bike);
  if($delete_bi){
	  echo"<script>alart('bike has been delete!')</script>";
	  
  }
 
	 
 }
  
	
?>