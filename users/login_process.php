<?php
    session_start();
    include '../connection.php';
    if(isset($_POST['btn-submit'])){
        $user   = mysqli_real_escape_string($con,strip_tags($_POST['em_un']));
        $Password   = mysqli_real_escape_string($con,md5($_POST['psw']));

         
       $query="SELECT * FROM user WHERE (Username = '$user' || Email='$user') && Password = '$Password' && confirmed='Yes'";
       $result = mysqli_query($con,$query);
       $registered=mysqli_num_rows($result);
       if($registered==0){

         echo "<span class='style'>Invalid Email Address (Username) or Password.</span>";   
       }
       else{
        $_SESSION['btn-submit'] = "YES";
        $_SESSION['Username']=$user;
        $_SESSION['Email']=$email;
       
          if($user){

              header('location:dashboard.php');
            
            }
            else{
              echo'<span class="style">Session expired or you are not logged in.</span>';
 
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
