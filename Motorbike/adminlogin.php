<!doctype>
<html>

<head>
<title>
ADMIN
</title>
<link rel="stylesheet" href="styles/style.css" media="all" />
</head>
	<body>
     
		<div class="user">
		
		<h1>ADMIN LOGIN</h1>
		
		</div>
	<!--	<div class="form1" >
			<form method="post" action="">
				<table>
				
				<tr>
					<td><b>Name:</b></td>
					<td> <input type="name" name="name" size="40" required />  </td>
				</tr>
				
				<tr>
					<td><b>Password:</b></td>
					<td> <input type="password" name="password" size="40" required/>  </td>
				</tr>
				
				
				<tr align="right">
					<td colspan="7"><input type="submit" name="bt" value="Login" /></td>

				</tr>
				
				
				
				</table>
				
			
			</form>
		
		</div>-->
		<form method="post" action="">


  <div class="container">

    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="name" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name="bt" >Login</button>

    
  
   
  </div>
  

</form>

	</body>


</html>


<?php
include "user.php";
$name = $password = $userError = $passError = '';
if(isset($_POST['bt'])){
  $name = $_POST['name']; $password = $_POST['password'];
  if($name === 'admin' && $password === 'password'){
    $_SESSION['login'] = true; header('LOCATION:admin.php'); die();
  }
  if($name !== 'admin'){
	  echo "<script>window.alert('Incorrect Name ')</script>";
  }
  if($password !== 'password')
  {
	  echo "<script>window.alert('Incorrect password ')</script>";
  }
}


?>





