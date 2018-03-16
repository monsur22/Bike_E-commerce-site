<!doctype>
<html>

<head>
<title>
Creat A New Account
</title>
<link rel="stylesheet" href="styles/style.css" media="all" />
</head>
	<body>
     
		<div class="user">
		
		<h1>User Registration</h1>
		
		</div>
		<form method="post" action="">


  <div class="container2">

    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user_name" required>

	
	 <label><b>Email   </b></label>
    <input type="Email" placeholder="Enter Email" name="email" required>
		
	<label><b>Phone Number</b></label>
    <input type="text" placeholder="Phone Number" name="phone_number" required>
	
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
	
    <label><b>Re-password</b></label>
    <input type="password" placeholder="Re-Enter Password" name="password2" required>
        
    <button type="submit" name='submit_btn' value="submit">Sumbit</button>

    
  
   
  </div>


</form>

	</body>


</html>


<?php

include "user.php";
if(isset($_POST['submit_btn'])){
	$username = $_POST['user_name'];
	$email = $_POST['email'];
	$phone_number = $_POST['phone_number'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	
	
		if($password==$password2){
			$password = md5($password);
		
		$sql ="insert into users(user_name,email,phone_number,password) values('$username','$email','$phone_number','$password');";
		$result = mysqli_query($con,$sql); 
		
		
		if($result){
	echo "<script>window.alert('WellCome ')</script>";
	header("Location:usermon.php");
	
		}
	
	else{
		echo "query error";
		
}
		
		}
		
		
	
}
?>
