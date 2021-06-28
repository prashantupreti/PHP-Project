<?php 
	include '../connection.php';
	$truncate="TRUNCATE user";
	$query=mysqli_query($con,$truncate);
	if($query==true){
		header('location:admin_dashboard.php?truncated_user');
	}
	else{
		header('location:admin_dashboard.php?failed_truncate');
	}

 ?>