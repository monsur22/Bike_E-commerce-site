<?php
// Start the session
session_start();
?>

<!doctype>
<html>

<head>
<title>
Login On Your Account
</title>
<link rel="stylesheet" href="styles/style.css" media="all" />
</head>
	<body>
     
		
		
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




