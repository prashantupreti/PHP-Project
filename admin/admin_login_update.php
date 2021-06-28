<?php 
include '../connection.php';
$query="select * from user";
$result=mysqli_query($con,$query);
$new=mysqli_fetch_assoc($result);
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>PACIFFIC | Edit User Settings</title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Admin || Update Information<br>
        <small class="small-admin-notify">Here you can update the user information if needed.*</small>
      </div>
      <div class="card-body">
        <form method="post" action="admin_login_update_process.php">
          <input type="hidden" name="id">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">First name</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" name="f_name" value="<?php echo $new['First_Name']; ?>" required>
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Last name</label>
                <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" value="<?php echo $new['Last_Name']; ?>" name="l_name" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" value="<?php echo $new['Email']; ?>" name="email" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Contact No.</label>
            <input class="form-control" id="exampleInputContact" type="text" aria-describedby="emailHelp" value="<?php echo $new['Contact_No']; ?>" name="tel" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <input class="form-control" id="exampleInputAddress" type="text" aria-describedby="emailHelp" value="<?php echo $new['Address']; ?>" name="Address" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input class="form-control" id="exampleInputUsername" type="text" aria-describedby="emailHelp" value="<?php echo $new['Username']; ?>" name="username" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" type="text" value="<?php echo $new['Password']; ?>" name="password" id="psw" required onkeyup="match()">
                
          </div>
          <div class="form-group">    
                <label for="exampleConfirmPassword">Confirm password</label>
                
          <div class="input-group mb-3">
              <input class="form-control" id="exampleConfirmPassword" type="password" placeholder="Confirm password" name="confirm_password" id="cfm-psw" onkeyup="match()">
               <div class="input-group-append">
              <span class="input-group-text" name="match">Password Status</span>
              </div>
          </div>
          <input class="btn btn-primary btn-block" type="submit" name="submit" value="Sign Up!">
        </form>
        
<?php 
  include 'connection.php'; #mysqli_connect(hostname,user,password,db)


  if(isset($_POST['submit'])) {
    $id=$_POST['id'];
    $v1=$_POST['f_name'];
    $v2=$_POST['l_name'];
    $v3=$_POST['tel'];
    $v4=$_POST['Address'];
    $v5=$_POST['email'];
    $v6=$_POST['username'];
    $v7=md5($_POST['password']);
    $v8=md5($_POST['confirm_password']);


    if($v7==$v8){
      $query="UPDATE 'user' First_Name='$v1',Last_Name='$v2',Contact_No='$v3',Address='$v4',Email='$v5',Username='$v6',Password='$v7' where id='$id'";
    $result=mysqli_query($con,$query);
    if($result){
      echo "Updated";;
    }
    else{
      echo "Oops! There was an error inserting.";
    }
    }
    else{
      echo "password not matched";
    }   
  } 

 ?>


  
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Login Page</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
        </div>
      </div>
      
 
    <?php include '../footer.php'; ?>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <script src="../password-compare.js"></script>
</body>

</html>




  