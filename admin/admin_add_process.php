
<?php 
	include '../connection.php'; #mysqli_connect(hostname,user,password,db)


	if(isset($_POST['admin_submit'])) {
		$v1=$_POST['username'];
		$v2=md5($_POST['password']);
		$query="INSERT into admin(Username,Password) values('$v1','$v2')";
		$result=mysqli_query($con,$query);
		if($result){
			echo "admin added";
		}
		else{
			echo "Oops! There was an error inserting.";
		}
	}	

 ?>
