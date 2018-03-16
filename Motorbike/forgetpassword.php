<?php
// Start the session
session_start();
?>

<!doctype>
<html>

<head>
<title>
Update Your Password
</title>
<link rel="stylesheet" href="styles/style.css" media="all" />
</head>
	<body>
     
		<div class="user">
		
		<h1>Forget Password</h1>
		
		</div>


<form method="post" action="">


  <div class="container3">

    <label><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
	 <label><b>Re-password</b></label>
    <input type="password" placeholder="Re-Enter Password" name="password2" required>
        
    <button type="submit" name="bt" >Update</button>

    
  
   
  </div>
 

</form>

	</body>


</html>

<?php

include "user.php";
if(isset($_POST['bt'])){
	$email=$_POST['email'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$_SESSION["email"]=$email;

	//echo $email;
		if($password==$password2){
			
	$password=md5($_POST['password']);
	//echo $password;
$sql="UPDATE users SET password='$password' WHERE email='$email' ";
$result = mysqli_query($con,$sql);
if($result){
	echo "Your password Update";
	header("Location:usermon.php");
		}
	
	else{
		echo "query error";
		
}

} 
}



		
?>




