
<?php 
	include '../connection.php'; #mysqli_connect(hostname,user,password,db)


	if(isset($_POST['submit'])) {
		$v1=$_POST['f_name'];
		$v2=$_POST['l_name'];
		$v3=$_POST['tel'];
		$v4=$_POST['Address'];
		$v5=$_POST['email'];
		$v6=$_POST['username'];
		$v7=md5($_POST['password']);
		$v8=md5($_POST['confirm_password']);


		if($v7==$v8){
			$query="UPDATE 'user' First_Name='$v1',Last_Name='$v2',Contact_No='$v3',Address='$v4',Email='$v5',Username='$v6',Password='$v7' where='id=$id'";
		$result=mysqli_query($con,$query);
		if($result){
			header('location:pages/thankyou/ty_registered.php');
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


	