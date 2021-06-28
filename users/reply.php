<?php 
	session_start(); 
	include '../connection.php';
	if (isset($_POST['submit'])){
		date_default_timezone_set('Asia/Kathmandu');
		$user=$_SESSION['Username'];
		$id=$_POST['id'];
    	$v1=date('h:i a');
		$v2=mysqli_real_escape_string($con,$_POST['to']);
		$v3=mysqli_real_escape_string($con,$_POST['subject']);
		$v4=mysqli_real_escape_string($con,$_POST['message']);	
		$v5=mysqli_real_escape_string($con,$_POST['cc']);
		$select="SELECT * FROM message where id='$id'";
		$query=mysqli_query($con,$select);
		$fetch=mysqli_fetch_assoc($query);
		$rand=$fetch['reply'];
		if($v2==$user){
			header('location:items?error you cant reply email to yourself');
		}

		else{
		$insert="INSERT INTO message(`date`,`Frm`,`To`,`Message`,`cc`,`Subject`,`St_read`,`reply`) values('$v1','$user','$v2','$v4','$v5','$v3','false','$rand')";
		$query1=mysqli_query($con,$insert);
		
		if($query1){
			header('location:items?id='.$id);
		}
		else{
			header('location:items?replyfailed');
		}
		}
	}

 ?>