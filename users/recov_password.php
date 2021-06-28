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
    <header><h1 class="text-center text-white animated slideInDown"><b>Recover Password</b></h1></header>
    <div class="container bg-white">
        <form method="POST" action="">
          <input type="hidden" name="id">
          <div class="form-group">
            <label for="Security">Security Questions</label><br/>
            <select>
              <option>What was your childhood nickname?</option>
              <option>What is the name of your favorite childhood friend?</option>
              <option>In what city or town did your mother and father meet?</option>
              <option>What is the middle name of your oldest child?</option>
              <option>What is your favorite team?</option>
              <option>What is your favorite movie?</option>
              <option>What was your favorite sport in high school?</option>
              <option>What was your favorite food as a child?</option>
              <option>What is the first name of the boy or girl that you first kissed?</option>
              <option>What was the make and model of your first car?</option>
              <option>What was the name of the hospital where you were born?</option>
              <option>Who is your childhood sports hero?</option>
              <option>What school did you attend for sixth grade?</option>
              <option>What was the last name of your third grade teacher?</option>
              <option>what town was your first job?</option>
              <option>What was the name of the company where you had your first job?</option>
            </select>
            
          </div>
          <div class="form-group">
            <input class="form-control"  type="text" name="old" placeholder="Enter your answers" required>
          </div>
            <input type="submit" class="btn btn-primary" name="update" value="Update">
          <p><a href="user_information.php"><-Get back to your profile</a></p>
        </form>
 </div>
 </div>   
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
