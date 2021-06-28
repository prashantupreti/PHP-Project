<?php 
include '../connection.php'; 
session_start();
$user=$_SESSION['Username'];
if($user){
	 if(session_destroy()){
	 header('location:admin_login.php');
	 }
	 else{
	 	echo "Sorry, session not destroyed.";
	 }
}
else{
	echo "Sorry, not logged in. Session Expired.";
}	 
   ?>