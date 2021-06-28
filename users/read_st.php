<?php 
	session_start(); 
	include '../connection.php';
	$id=$_GET['id'];
	$update="UPDATE message SET St_read=1 where id='$id' ";
	$query=mysqli_query($con,$update);	
	if($query){
		header('location:items?id='.$id);
	}
	else{
		header('location:items?failed_updating_status_read');
	}
		

 ?>