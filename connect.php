<?php 
	
	
	$servername ="localhost";
	$username="root";
	$password="";
	$db="tbl_property";
	$conn=mysqli_connect($servername, $username ,$password,$db) or die("connection failed: ".mysql_connect());
	//echo "connection establised";
	mysqli_select_db($conn,$db);

	?>
