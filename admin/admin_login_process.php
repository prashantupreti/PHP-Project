<?php
    session_start();
    include '../connection.php';
    if(isset($_POST['btn-submit'])){
        $Username   = mysqli_escape_string($con,strip_tags($_POST['username']));
        $Password   = mysqli_escape_string($con,md5($_POST['psw']));
        
       $query="SELECT * FROM admin WHERE Username = '$Username' AND Password = '$Password'";
       $result = mysqli_query($con,$query);
       $registered=mysqli_num_rows($result);
    if($registered==0){
         echo "<span class='style'>Invalid Username or Password.</span>";
       }
       else{
        $_SESSION['btn-submit'] = "YES";
        $_SESSION['Username']=$Username;
          if($Username){
            header('location:admin_dashboard.php');
          }
          else{
            error('You are not logged in.');
          }  
       } 
     }  
       
       
       
?>
<style type="text/css">
  .style{
    color: red;
    border:1px solid #000;
    background-color: #f4d442;
    font-weight: bolder;
  }
</style>
