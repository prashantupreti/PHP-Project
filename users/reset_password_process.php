<?php 
include '../connection.php';
	if(isset($_POST['update'])){
		$old=md5($_POST['old']);
		$new=md5($_POST['new']);
		$conf=md5($_POST['conf']);
		$id=$_POST['id'];
		$query="select Password from user where id='$id' && Password='$old'";
		$res=mysqli_query($con,$query);
		$check=mysqli_num_rows($res);

		if($check=1){
			if($new== $conf){
				$query1="update user set Password='$new' ";
				$result=mysqli_query($con,$query1);
				echo "<center><span class='style'>Password Updated</span></center>";
			}
			else{
				echo "<span class='unmatched'>Password not matched</span>";
			}
		}
		else{
			echo "wrong old Password";
		}
	}
 ?>
 <style type="text/css">
 	.style{
 		background-color: green;
 		color: #fff;
 		padding: 5px;
 	}
 </style>