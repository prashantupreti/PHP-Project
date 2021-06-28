<?php 
	include '../../connection.php';
	if(isset($_POST['update'])){	
		$id=$_POST['id'];
		$one=$_POST['about'];
		$two=$_POST['contact'];
		$three=$_POST['describe'];
		$four=$_POST['phone'];
		$five=$_POST['email'];

		$update="UPDATE dynamic_index SET About='$one',Contact='$two',Describe='$three',Phone='$four',Email='$five' WHERE id='$id'";
		$query=mysqli_query($con,$update);
			if($query==true){		
				header('location:post_index.php?success');
			}
			else{
				header('location:post_index.php?failed');
			}
	}
?>