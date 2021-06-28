<?php 
    if(true){session_start(); 
    include '../connection.php';
    $user=$_SESSION['Username'];
    $query="select * from user where Username='$user' || Email='$user'";
    $res=mysqli_query($con,$query);
    $data=mysqli_fetch_assoc($res);}
    else{
      echo "Sorry, the session wasn't loaded, please, contact your webmaster.";
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>PACIFFIC | A Revolution in Social Networking</title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/mdb.min.css">

</head>

<body class="bg-sth-1">
  <div class="container-fluid">
    <header><h1 class="text-center text-white animated slideInDown"><b>Update Information</b></h1></header>
    <div class="card card-login mx-auto mt-5 animated slideInDown">
      <div class="card-header">
        <div class="btn-group center col-lg-12 col-md-12 col-sm-12 col-xs-12" role="group" aria-label="Basic example">
          <button type="button" class="btn btn-primary col-lg-12 col-md-12 col-sm-12 col-xs-12 disabled ">Update Information</button>
        </div>
      </div>
      <div class="card-body ">
        <?php 
            $query="SELECT * FROM user where Username='$user'";
            $sel=mysqli_query($con,$query);
            $fetch=mysqli_fetch_assoc($sel);
          ?>
        <form method="POST" action="reset_nca_process.php">
          <input type="hidden" name="id" value="<?php echo $fetch['id'];?>">
          <div class="form-group">
            <label for="exampleInputName">First Name</label>
            <input class="form-control"  type="text" name="f_name" value="<?php echo $fetch['First_Name'] ?>" required>
          </div>
          <div class="form-group">
            <label for="exampleInputName">Last Name</label>
            <input class="form-control"  type="text" name="l_name" value="<?php echo $fetch['Last_Name'] ?>" required>
          </div>
          <div class="form-group">
            <label for="exampleInputName">Address</label>
            <input class="form-control"  type="text" name="address" value="<?php echo $fetch['Address'] ?>" required>
          </div>
          <div class="form-group">
            <label for="exampleInputName">Contact No.</label>
            <input class="form-control"  type="text" name="contact" value="<?php echo $fetch['Contact_No'] ?>" required>
          </div>
          <div class="form-group">
            <label for="exampleInputName">Email</label>
            <input class="form-control"  type="text" name="email" value="<?php echo $fetch['Email'] ?>" required>
          </div>
          <input type="submit" class="btn btn-primary btn-block" name="update" value="Update">
          <p><a href="user_information.php"><-Get back to your profile</a></p>
        </form>
      </div>
    </div>
 </div>   
<br>
<br><br><br><br>
 <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-bottom animated slideInUp" id="mainNav">
      <div class="container" id="whole-nav">
        <a class="navbar-brand js-scroll-trigger" href="../index.php">PACIFFIC</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" style="color: white;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../blogs.php">Blogs</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
