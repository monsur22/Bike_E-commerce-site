<?php
// Start the session
session_start();
?>

<!doctype>
<html>

<head>
<title>
Fill This before Update Password
</title>
<link rel="stylesheet" href="styles/style.css" media="all" />
</head>
	<body>
     
	
		<div class="user">
		
		<h1>Forget Password</h1>
		
		</div>


<form method="post" action="">


  <div class="container">

    <label><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>


		
	<label><b>Phone Number</b></label>
    <input type="text" placeholder="Phone Number" name="phone_number" required>
        
    <button type="submit" name="bt" >Login</button>

    
  
   
  </div>

</form>

	</body>


</html>

<?php

include "user.php";
if(isset($_POST['bt'])){
	$email=$_POST['email'];
	$phone_number=$_POST['phone_number'];
	//$_SESSION["email"]=$email;
	

$sql=("select * from users where email='$email' and phone_number ='$phone_number'");
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

if($row['email']==$email && $row['phone_number']==$phone_number && $row['email']!=null){
	//echo "Your password Update";
	echo "<script>window.alert('Update Now ')</script>";
	header("Location:forgetpassword.php");
		}
	
	else{
		echo "query error";
		echo "<script>window.alert('Email or Phone Number Incorrect')</script>";
		
}

} 
?>




