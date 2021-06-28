<?php 
	include '../connection.php';
	$id=$_GET['id'];
	date_default_timezone_set("Asia/Kathmandu");
    $date=date('h:i a');
	$insert_y="UPDATE blog_post SET admin_approval='No',date_approv='$date' where id='$id'";
	$query=mysqli_query($con,$insert_y);
	if($query){
		header('location:admin_dashboard.php#blog_approve');
		
	}
	else{
		echo "Update Unsuccessful";
	}

 ?>