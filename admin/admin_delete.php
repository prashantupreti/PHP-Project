<?php 
	include '../connection.php';
	$id=$_GET['id'];
	$query="DELETE FROM admin where id='$id'";
	$res=mysqli_query($con,$query);
	if ($res){
		header('location:admin_add.php?admin_deleted');
	}
	else{
		echo "Row not deleted. There was an error.";
	}

 ?>