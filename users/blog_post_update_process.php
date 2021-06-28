
<?php 
	session_start();
    include '../connection.php';
	if(isset($_POST['submit'])) {
		$id=$_POST['id'];
		$v1=$_POST['title'];
		$v2=$_POST['description'];
	    $user=$_SESSION['Username'];

		$query="UPDATE blog_post SET post_title='$v1',post_description='$v2',post_author='$user' where id='$id'";
		$result=mysqli_query($con,$query);

		
		if($result==true){
			header("location:blog_post_update.php?id=$id");
			
		}
		else{
			echo "Oops! There was an error updating.";

		}
	}

 ?>
           