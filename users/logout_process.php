<?php 
include '../connection.php'; 
session_start();
$user=$_SESSION['Username'];
if(session_destroy()){
	 if($user){
	 header('location:user-login.php');
	 }
	 else{
	 	echo "Sorry, not logged in. Session Expired.";
	 }
}
?>