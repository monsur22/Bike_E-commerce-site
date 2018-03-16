
<?php
include("includes/db.php");

?>


<!doctype>



<html>
<body bgcolor="#cccccc" >
<head>
<title>Inserting Bike</title>

<script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>

<form method="post" action="insert.php" method="post" enctype="multipart/form-data">

<table align="center" width="700" border="2" bgcolor="	#E6E6FA">


<tr align="center">
<td colspan="7"><h2>Insert new Bike<h2></td>
</tr>

<tr>
<td align="right"><b>Bike Title:</b></td>
<td> <input type="text" name="bike_title" size="60" />  </td>
</tr>

<tr>
<td align="right"><b>Bike Catagories:</b></td>
<td> 
<select  name="bike_cat" requied/>  
<option>select a Catagories</option>
<?php 
    $get_cats = "select * from catagories";
	$run_cats = mysqli_query($con,$get_cats);
	while ($row_cats=mysqli_fetch_array($run_cats)){
	$cat_id =$row_cats['cat_id'];
    $cat_title =$row_cats['cat_title'];
    
    echo "<option value='$cat_id'>$cat_title</option>";
			
	}

?>
</select>
</td>
</tr>

<tr>
<td align="right"><b>Bike Brand:</b></td>
<td> 
<select name="bike_brand"/>
<option>Select a Brand</option>
<?php
    $get_brands = "select * from brands";
	$run_brands = mysqli_query($con,$get_brands);
	while ($row_brands=mysqli_fetch_array($run_brands)){
	$brand_id =$row_brands['brand_id'];
    $brand_title =$row_brands['brand_title'];

    echo "<option value='$brand_id'>$brand_title</option>";
		
	}


?>
<select>
  </td>
</tr>

<tr>
<td align="right"><b>Bike Image:</b></td>
<td> <input type="file" name="bike_img"/>  </td>
</tr>

<tr>
<td align="right"><b>Bike Description:</b></td>
<td><textarea name="bike_desc" cols="45" rows="10"> </textarea> </td>
</tr>



<tr>
<td align="right"><b>Bike Keywords:</b></td>
<td> <input type="text" name="bike_keywords" size="50"/>  </td>
</tr>

<tr>
<td align="right"><b>Bike Price:</b></td>
<td><input type="text" name="bike_price"/></td>
</tr>


<tr align="center">
<td colspan="7"><input type="submit" name="Insert_product" value="Insert Now"/></td>
</tr>

</body>




</html>



<?php
if(isset($_POST['Insert_product'])){
	
	$bike_title = $_POST['bike_title'];
	$bike_cat = $_POST['bike_cat'];
	$bike_brand = $_POST['bike_brand'];  
	
	$bike_desc= $_POST['bike_desc'];
	$bike_keywords = $_POST['bike_keywords'];
	$bike_price = $_POST['bike_price'];
	
	
	$bike_img = $_FILES['bike_img']['name'];
	$bike_img_tmp = $_FILES['bike_img']['tmp_name'];
	
	move_uploaded_file($bike_img_tmp,"bike_img/$bike_img");
	
  $insert_bike = "insert into bikes (bike_cat,bike_brand,bike_title,bike_price,bike_desc,bike_img,bike_keywords) values('$bike_cat','$bike_brand','$bike_title ','$bike_price','$bike_desc','$bike_img','$bike_keywords')";

  $insert_bi = mysqli_query($con,$insert_bike);
  if($insert_bi){
	   echo "<script>window.alert('Bike Insert ')</script>";
  }
 
	 
 }
  
	
?>