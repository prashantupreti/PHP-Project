 <!-- php work starts -->
<?php 
  session_start(); 
  include '../connection.php';
  if(isset($_POST['submit'])){
    
    
  
    $user=$_SESSION['Username'];
    $name=$_FILES['img']['name'];
    
    $tmp=$_FILES['img']['tmp_name'];
    $type=$_FILES['img']['type'];
    $size=$_FILES['img']['size'];
    $location='../server/upload/';
    $ext=strtolower(pathinfo($name,PATHINFO_EXTENSION));
    $random=rand(0000,9999);
    $syntax="IMG_";
    $newname=$syntax.$random.".".$ext;
    // $randomname=time().'.'.ext
    if(!empty($newname)){
      if($type=='image/jpg' || $type=='image/png' ||$type=='image/jpeg' ||$type=='image/gif'){
        if(file_exists($location.$newname)){
          echo "file already exists";
        }
        else{
          if($size<2000){
            echo "file too small";
          }
          else if($size>200000){
            echo "file too large";
          }
          else{
            if(move_uploaded_file($tmp,'../server/upload/'.$newname)){
        $query="UPDATE user SET Profile_pic='$newname' where Username='$user'";
        $res=mysqli_query($con,$query);
        if($res){
          header('location:user_information.php');
        }
        else{
          echo "upload failed";
        }
      }
          }
        }
      }
      else{
        echo "jpg , jpeg , png & gif are only accepted";
      }
    }
    else
    {
      echo "Choose your image";
    }
  }
 ?>

 <!-- php tag ends -->