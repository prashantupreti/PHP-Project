<?php 
include '../connection.php';
	if(isset($_POST['update'])){
		$id=$_POST['id'];
		$v1=$_POST['f_name'];
		$v2=$_POST['l_name'];
		$v3=$_POST['address'];
		$v4=$_POST['contact'];
		$v5=$_POST['email'];
			$query1="update user set First_Name='$v1',Last_Name='$v2',Address='$v3',Contact='$v4',Email='$v5' where id='$id'";
			$result=mysqli_query($con,$query1);
		if($result){
			header('location:reset_nca.php?success');
		}
		else{
			header('location:reset_nca.php?failed');
			
		}
	}
 ?>