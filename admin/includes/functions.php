<?php 

// $conn = mysqli_connect("localhost","root", "", "tms");
$conn = mysqli_connect("remotemysql.com","01PAz0UUnj", "01PAz0UUnj", "4KkQdzOZUt");

//get categories 
function get_cats(){
	
	global $conn;
	
	$get_cats = "select * from services";
	$run_cats = mysqli_query($conn, $get_cats);
	
	while($row_cats=mysqli_fetch_array($run_cats)){
		
		
		$id = $row_cats['id'];
		$title = $row_cats['service_name'];
		
		echo " <option value='$id'  class='form-control'>$title</option>";
		
		
	}
	
	
}

//get categories 
function get_brands(){
	
	global $conn;
	
	$get_brand = "select * from brands";
	$run_brand = mysqli_query($conn, $get_brand);
	
	while($row_cats=mysqli_fetch_array($run_brand)){
		
		
		$id = $row_cats['id'];
		$title = $row_cats['name'];
		
		echo " <option value='$id'  class='form-control'>$title</option>";
		
		
	}
	
	
}



?>