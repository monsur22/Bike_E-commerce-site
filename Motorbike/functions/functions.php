<?php

$con = mysqli_connect("localhost","root","","ecommerce");

function getcats(){
	global $con;
	$get_cats = "select * from catagories";
	$run_cats = mysqli_query($con,$get_cats);
	while ($row_cats=mysqli_fetch_array($run_cats)){
	$cat_id =$row_cats['cat_id'];
    $cat_title =$row_cats['cat_title'];
    
    echo "<li><a href='mon.php?cat=$cat_id'>$cat_title</a></li>";
	
		
	}

}




function getbrands(){
	global $con;
	$get_brands = "select * from brands";
	$run_brands = mysqli_query($con,$get_brands);
	while ($row_brands=mysqli_fetch_array($run_brands)){
	$brand_id =$row_brands['brand_id'];
    $brand_title =$row_brands['brand_title'];

    echo "<li><a href='mon.php?brand=$brand_id'>$brand_title</a></li>
	
	";
		
	}

}



function getbike(){
	if(!isset($_GET['cat'])){
		if(!isset($_GET['brand'])){
	global $con;
	
	$get_bike = "select * from bikes order by RAND() LIMIT 0,9";
	
	//$get_bike = "select * from bikes";
	
	$run_bike = mysqli_query($con, $get_bike);
	
	while($row_bike=mysqli_fetch_array($run_bike)){
	
	$bike_id=$row_bike['bike_id'];
	$bike_cat=$row_bike['bike_cat'];
	$bike_brand=$row_bike['bike_brand'];
	$bike_title=$row_bike['bike_title'];
	$bike_price=$row_bike['bike_price'];
	$bike_desc=$row_bike['bike_desc'];
	$bike_img=$row_bike['bike_img'];
	$bike_keywords=$row_bike['bike_keywords'];
	
	echo "
	
	<div id='single_product'>
	<h3>$bike_title</h3>
	
	<img src='ecommerce/adminarea/bike_img/$bike_img' width='180' height='180'/>
	
	<p><b> ৳ $bike_price </b></p>
	<a href='userdetails.php?pro_id=$bike_id' style='float:left;'>Details</a>
		
	
	
	</div>
	
	";
		
	}
		}

	}	
	
}




function getcatbike(){
	if(isset($_GET['cat'])){
	$cat_id = $_GET['cat'];	
	global $con;
	
	$get_cat_bike = "select * from bikes where bike_cat='$cat_id'";
	$run_cat_bike = mysqli_query($con, $get_cat_bike);
	
	while($row_cat_bike=mysqli_fetch_array($run_cat_bike)){
	
	$bike_id=$row_cat_bike['bike_id'];
	$bike_cat=$row_cat_bike['bike_cat'];
	$bike_brand=$row_cat_bike['bike_brand'];
	$bike_title=$row_cat_bike['bike_title'];
	$bike_price=$row_cat_bike['bike_price'];
	$bike_desc=$row_cat_bike['bike_desc'];
	$bike_img=$row_cat_bike['bike_img'];
	$bike_keywords=$row_cat_bike['bike_keywords'];
	
	echo "
	
	<div id='single_product'>
	<h3>$bike_title</h3>
	<img src='ecommerce/adminarea/bike_img/$bike_img' width='180' height='180'/>
	<p><b> ৳ $bike_price </b></p>
	<a href='details.php?pro_id=$bike_id' style='float:left;'>Details</a>
		<a href='login.php?pro_id=$bike_id'><button style='float:right;'>BUY</button></a>
	
	</div>
	
	";
		
	}
	

	}	
	
}



function getbrandbike(){
	
		if(isset($_GET['brand'])){
			$brand_id = $_GET['brand'];
	global $con;
	
	$get_brand_bike = "select * from bikes where bike_brand='$brand_id'";
	$run_brand_bike = mysqli_query($con, $get_brand_bike);
	
	while($row_brand_bike=mysqli_fetch_array($run_brand_bike)){
	
	$bike_id=$row_brand_bike['bike_id'];
	$bike_cat=$row_brand_bike['bike_cat'];
	$bike_brand=$row_brand_bike['bike_brand'];
	$bike_title=$row_brand_bike['bike_title'];
	$bike_price=$row_brand_bike['bike_price'];
	$bike_desc=$row_brand_bike['bike_desc'];
	$bike_img=$row_brand_bike['bike_img'];
	$bike_keywords=$row_brand_bike['bike_keywords'];
	
	echo "
	
	<div id='single_product'>
	<h3>$bike_title</h3>
	<img src='ecommerce/adminarea/bike_img/$bike_img' width='180' height='180'/>
	<p><b> ৳ $bike_price </b></p>
	<a href='details.php?pro_id=$bike_id' style='float:left;'>Details</a>
		<a href='login.php?pro_id=$bike_id'><button style='float:right;'>BUY</button></a>
	
	</div>
	
	";
		
	}
		}

	
	
}


function getbike1(){
	if(!isset($_GET['cat'])){
		if(!isset($_GET['brand'])){
	global $con;
	
	$get_bike = "select * from bikes order by RAND() LIMIT 0,9";
		//$get_bike = "select * from bikes";
	$run_bike = mysqli_query($con, $get_bike);
	
	while($row_bike=mysqli_fetch_array($run_bike)){
	
	$bike_id=$row_bike['bike_id'];
	$bike_cat=$row_bike['bike_cat'];
	$bike_brand=$row_bike['bike_brand'];
	$bike_title=$row_bike['bike_title'];
	$bike_price=$row_bike['bike_price'];
	$bike_desc=$row_bike['bike_desc'];
	$bike_img=$row_bike['bike_img'];
	$bike_keywords=$row_bike['bike_keywords'];
	
	echo "
	
	<div id='single_product'>
	<h3>$bike_title</h3>
	
	<img src='ecommerce/adminarea/bike_img/$bike_img' width='180' height='180'/>
	
	<p><b> ৳ $bike_price </b></p>
	<a href='details.php?pro_id=$bike_id' style='float:left;'>Details</a>
		<a href='login.php?pro_id=$bike_id'><button style='float:right;'>BUY</button></a>
	
	
	</div>
	
	";
	
		
	}
		}

	}

	
}




function getbike2(){
	if(!isset($_GET['cat'])){
		if(!isset($_GET['brand'])){
	global $con;
	
	$get_bike = "select * from bikes order by RAND() LIMIT 9,18";
		//$get_bike = "select * from bikes";
	$run_bike = mysqli_query($con, $get_bike);
	
	while($row_bike=mysqli_fetch_array($run_bike)){
	
	$bike_id=$row_bike['bike_id'];
	$bike_cat=$row_bike['bike_cat'];
	$bike_brand=$row_bike['bike_brand'];
	$bike_title=$row_bike['bike_title'];
	$bike_price=$row_bike['bike_price'];
	$bike_desc=$row_bike['bike_desc'];
	$bike_img=$row_bike['bike_img'];
	$bike_keywords=$row_bike['bike_keywords'];
	
	echo "
	
	<div id='single_product'>
	<h3>$bike_title</h3>
	
	<img src='ecommerce/adminarea/bike_img/$bike_img' width='180' height='180'/>
	
	<p><b> ৳ $bike_price </b></p>
	<a href='userdetails.php?pro_id=$bike_id' style='float:left;'>Details</a>
	<a href='login.php?pro_id=$bike_id'><button style='float:right;'>BUY</button></a>	
	
	
	</div>
	
	";
	
		
	}
		}

	}

	
}


function getbike3(){
	if(!isset($_GET['cat'])){
		if(!isset($_GET['brand'])){
	global $con;
	
	$get_bike = "select * from bikes order by RAND() LIMIT 9,18";
	
	//$get_bike = "select * from bikes";
	
	$run_bike = mysqli_query($con, $get_bike);
	
	while($row_bike=mysqli_fetch_array($run_bike)){
	
	$bike_id=$row_bike['bike_id'];
	$bike_cat=$row_bike['bike_cat'];
	$bike_brand=$row_bike['bike_brand'];
	$bike_title=$row_bike['bike_title'];
	$bike_price=$row_bike['bike_price'];
	$bike_desc=$row_bike['bike_desc'];
	$bike_img=$row_bike['bike_img'];
	$bike_keywords=$row_bike['bike_keywords'];
	
	echo "
	
	<div id='single_product'>
	<h3>$bike_title</h3>
	
	<img src='ecommerce/adminarea/bike_img/$bike_img' width='180' height='180'/>
	
	<p><b> ৳ $bike_price </b></p>
	<a href='userdetails.php?pro_id=$bike_id' style='float:left;'>Details</a>
		
	
	
	</div>
	
	";
		
	}
		}

	}	
	
}

function getcatbike1(){
	if(isset($_GET['cat'])){
	$cat_id = $_GET['cat'];	
	global $con;
	
	$get_cat_bike = "select * from bikes where bike_cat='$cat_id'";
	$run_cat_bike = mysqli_query($con, $get_cat_bike);
	
	while($row_cat_bike=mysqli_fetch_array($run_cat_bike)){
	
	$bike_id=$row_cat_bike['bike_id'];
	$bike_cat=$row_cat_bike['bike_cat'];
	$bike_brand=$row_cat_bike['bike_brand'];
	$bike_title=$row_cat_bike['bike_title'];
	$bike_price=$row_cat_bike['bike_price'];
	$bike_desc=$row_cat_bike['bike_desc'];
	$bike_img=$row_cat_bike['bike_img'];
	$bike_keywords=$row_cat_bike['bike_keywords'];
	
	echo "
	
	<div id='single_product'>
	<h3>$bike_title</h3>
	<img src='ecommerce/adminarea/bike_img/$bike_img' width='180' height='180'/>
	<p><b> ৳ $bike_price </b></p>
	<a href='userdetails.php?pro_id=$bike_id' style='float:left;'>Details</a>
		
	
	</div>
	
	";
		
	}
	

	}	
	
}



function getbrandbike1(){
	
		if(isset($_GET['brand'])){
			$brand_id = $_GET['brand'];
	global $con;
	
	$get_brand_bike = "select * from bikes where bike_brand='$brand_id'";
	$run_brand_bike = mysqli_query($con, $get_brand_bike);
	
	while($row_brand_bike=mysqli_fetch_array($run_brand_bike)){
	
	$bike_id=$row_brand_bike['bike_id'];
	$bike_cat=$row_brand_bike['bike_cat'];
	$bike_brand=$row_brand_bike['bike_brand'];
	$bike_title=$row_brand_bike['bike_title'];
	$bike_price=$row_brand_bike['bike_price'];
	$bike_desc=$row_brand_bike['bike_desc'];
	$bike_img=$row_brand_bike['bike_img'];
	$bike_keywords=$row_brand_bike['bike_keywords'];
	
	echo "
	
	<div id='single_product'>
	<h3>$bike_title</h3>
	<img src='ecommerce/adminarea/bike_img/$bike_img' width='180' height='180'/>
	<p><b> ৳ $bike_price </b></p>
	<a href='userdetails.php?pro_id=$bike_id' style='float:left;'>Details</a>
		
	
	</div>
	
	";
		
	}
		}

	
	
}


function getcats1(){
	global $con;
	$get_cats = "select * from catagories";
	$run_cats = mysqli_query($con,$get_cats);
	while ($row_cats=mysqli_fetch_array($run_cats)){
	$cat_id =$row_cats['cat_id'];
    $cat_title =$row_cats['cat_title'];
    
    echo "<li><a href='usermon.php?cat=$cat_id'>$cat_title</a></li>";
	
		
	}

}




function getbrands1(){
	global $con;
	$get_brands = "select * from brands";
	$run_brands = mysqli_query($con,$get_brands);
	while ($row_brands=mysqli_fetch_array($run_brands)){
	$brand_id =$row_brands['brand_id'];
    $brand_title =$row_brands['brand_title'];

    echo "<li><a href='usermon.php?brand=$brand_id'>$brand_title</a></li>
	
	";
		
	}

}



?>