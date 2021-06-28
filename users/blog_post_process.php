<?php 
	session_start();
    include '../connection.php';
    $user=$_SESSION['Username'];
    $query="select * from user where Username='$user' || Email='$user'";
    $res=mysqli_query($con,$query);
    $data=mysqli_fetch_assoc($res);
    

	if($user){

		if(isset($_POST['submit'])) {
			$v1=$_POST['title'];
			$v2=$_POST['description'];
			$name=$_FILES['img']['name'];
		    $tmp=$_FILES['img']['tmp_name'];
		    $location='../server/blog_upload/';
		    $ext=strtolower(pathinfo($name,PATHINFO_EXTENSION));
		    $random=rand(0000,9999);
		    $newname=$random.'.'.$ext;
		    $user=$_SESSION['Username'];
			if(!empty($name)){
				if(move_uploaded_file($tmp, $location.$newname)){
					$query="INSERT into blog_post(post_title,post_description,post_author,post_image_name) values('$v1','$v2','$user','$newname')";
					$result=mysqli_query($con,$query);
					if($result){
						header('location:user_blog_post.php');
					}
					else{
						echo "Oops! There was an error inserting.";
					}
				}
			}

			else{
				echo "upload failed";
			}		
		}	
	}
	else{
		echo "Sorry you are not logged in.";
	}	
 ?>
           