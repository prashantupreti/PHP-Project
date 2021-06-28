<?php
	include '../connection.php';
	if (isset($_POST['submit'])) {
		$id=$_GET['id'];
		$about=$_POST['about'];
		$query1="UPDATE admin SET About='$about' where id='$id'";
		$update=mysqli_query($con,$query1);
			if($update==true){					
				header('location:admin_information.php?admin_about-success');
			}			
			else{
				echo "Your about post wasn't updated.";
			}
	}

 ?>