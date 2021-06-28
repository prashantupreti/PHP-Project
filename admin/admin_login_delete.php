<?php 
 include '../connection.php'; #mysqli_connect(hostname,user,password,db)
  $id=$_GET['id'];
  $query="DELETE FROM user where id='$id'";
  $result=mysqli_query($con,$query);
  if($result){
  	header('location:pages/admin_user_del_success.php');
  }
  else{
    echo "Failed to delete the User.";
  }
  

 ?>