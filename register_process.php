
<?php 
	include 'connection.php'; #mysqli_connect(hostname,user,password,db)


	if(isset($_POST['submit'])) {
		$v1=mysqli_real_escape_string($con,$_POST['f_name']);
		$v2=mysqli_real_escape_string($con,$_POST['l_name']);
		$v3=mysqli_real_escape_string($con,$_POST['tel']);
		$v4=mysqli_real_escape_string($con,$_POST['Address']);
		$v5=mysqli_real_escape_string($con,$_POST['email']);
		$v6=mysqli_real_escape_string($con,$_POST['username']);
		$v7=mysqli_real_escape_string($con,md5($_POST['password']));
		$v8=mysqli_real_escape_string($con,md5($_POST['confirm_password']));
		$v9=rand(000000,999999);
		
		$select="SELECT * FROM user where";
		$query_select=mysqli_query($con,$select);
		
		
		if($v7==$v8){
			$query="INSERT into user(First_Name,Last_Name,Contact_No,Address,Email,Username,Password,confirm_code,confirmed) values('$v1','$v2','$v3','$v4','$v5','$v6','$v7','$v9','Yes')";

		$result=mysqli_query($con,$query);
		if($result){	

		header('location:users/dashboard.php');
		}
		    
		
		else{
			echo "Oops! There was an error inserting.";
		}
		}

		else{
			echo "password not matched";
		}		
		}

 ?>

