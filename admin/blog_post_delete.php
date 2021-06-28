<?php 
	include '../connection.php'
	$id=$_GET['id'];
	$query="DELETE FROM blog_post where id=$id";
	$res=mysqli_query($con,$query);
	if ($res){
		echo "Row deleted";
	}
	else{
		echo "Row not deleted. There was an error.";
	}

 ?>