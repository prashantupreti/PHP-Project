<?php 
	include 'connection.php';
	if (isset($_POST['submit'])) {
		$id=$_POST['id'];
		$security=mysql_real_escape_string($_POST['security']);
		$select="SELECT * FROM user where id='$id'";
		$query=mysqli_query($con,$select);
		$fetch=mysqli_fetch_assoc($query);
		$confirm_code=$fetch['confirm_code'];
		if($security==$confirm_code){
			$update="UPDATE user SET confirmed='Yes' where id='$id'";
			$query_update=mysqli_query($con,$update);
			if($query_update){
				header('location:users/dashboard.php');
			}
			else{
				echo "Failed to load your request.";
			}
		}
		else{
			echo "Email verification code wasn't correct.";
		}
	}	


 ?>