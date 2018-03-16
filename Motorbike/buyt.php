<!doctype>

<?php
// Start the session
session_start();
?>

<html>
<body bgcolor="white" >
<head>
<title>Insert Delivery Information</title>

<!--<script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>-->
</head>

<form method="post" action="buyt.php" method="post" enctype="multipart/form-data">

<table align="center" width="700" border="2" bgcolor="	#E6EE87">


<tr align="center">
<td colspan="7"><h2>Insert Delivery Information<h2></td>
</tr>

<tr>
<td align="right"><b>Reciver Name</b></td>
<td> <input type="text" name="Reciver_name" size="60" />  </td>
</tr>

<tr>
<td align="right"><b>Payment System</b></td>
<td> 
<select  name="Pament" />  
<option>select any Pament System</option>
<?php 
include "user.php";
    $get_Pament = "SELECT * FROM pament";
	$run_Pament = mysqli_query($con,$get_Pament);
	while ($row_Pament=mysqli_fetch_array($run_Pament)){
	$Pament_id =$row_Pament['Pament_id'];
    $Pament_title =$row_Pament['Pament_title'];
    
    echo "<option value='$Pament_id'>$Pament_title</option>";
			
	}

?>
</select>
</td>
</tr>



<tr>
<td align="right"><b>Address</b></td>
<td><textarea name="Address" cols="45" rows="10" > </textarea> </td>
</tr>

<tr>
<td align="right"><b>Phone Number</b></td>
<td> <input type="text" name="Phone_number" size="60" />  </td>
</tr>



<tr>
<td align="right"><b>Product ID</b></td>
<td> <?php echo $bid = $_SESSION["bikeid"]; ?> </td>
</tr>
<td align="right"><b>Delivery Date</b></td>
<td><input type="date"placeholder="YYYY-MM-DD" name="date" /></td>
</tr>


<tr align="center">
<td colspan="7"><input type="submit" name="Insert_inform" value="Submit"/></td>
</tr>


</body>




</html>



<?php
if(isset($_POST['Insert_inform'])){
	//echo "right";
	$Reciver_name = $_POST['Reciver_name'];
	$Pament= $_POST['Pament'];
	$Address = $_POST['Address']; 
	$Phone_number= $_POST['Phone_number']; 
	
	$Pro_id= $bid;
	$date = $_POST['date'];
	//echo "right1";
	 $Insert_inform = "insert into delivery_information (Reciver_name,Pament,Address,Pro_id,date,Phone_number) values('$Reciver_name','$Pament','$Address','$Pro_id','$date','$Phone_number')";
//echo "right2";
  $Insert_in= mysqli_query($con,$Insert_inform);
  if($Insert_in){
	   echo "<script>window.alert('Information Insert We Will Contact With You ')</script>";
	  header("refresh:1;url=usermon.php");
  }
 
	 
 }
  
	
?>