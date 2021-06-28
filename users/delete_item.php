<?php 
	include '../connection.php';
	$id=$_GET['id'];
	$query="DELETE from message where id='$id'";
    $result=mysqli_query($con,$query);
    if($result){
    	header('location:inbox?success');
    }
    else{
    	echo "Failed to delete the message.";
    }


 ?>