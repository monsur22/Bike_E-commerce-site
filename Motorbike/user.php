<?php

$host = "localhost";
$user = "root"; 
$password = "";
$datbase = "ecommerce";

$con = mysqli_connect($host,$user,$password ,$datbase);

if(mysqli_connect_errno()){
	
	die("fixed eror");
	
}
else{
	/*echo "connect";*/
}


/*


$sql = "insert into users(user_name,email,phone_number,password) values('Nahian','aaaaaaaa','00000000','password');";
		$result = mysqli_query($con,$sql); 
		if($result){
	echo "You are now logged in";
		}
	
	else{
		echo "query error";

	}*/

?>


