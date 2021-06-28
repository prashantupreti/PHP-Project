
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
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/mdb.min.css">
</head>

<body class="bg-sth-3">
  <div class="container-fluid">
    <header><h1 class="text-center text-white animated slideInDown"><b>Register</b></h1></header>
    <div class="container card animated fadeInDown">
      <p class="text-center">This is the registration page for Users. You must try to give the information as specifically/minutely as possible.</p>
    </div>
    <div class="card card-register mx-auto mt-5 animated fadeIn">
      <div class="card-header bg-success text-white text-center"><header><h2>Sign Up</h2></header></div>
      <div class="card-body">
        <form method="post" action="register_process.php">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">First name</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter first name" name="f_name" required>
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Last name</label>
                <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter last name" name="l_name" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Contact No.</label>
            <input class="form-control" id="exampleInputContact" type="text" aria-describedby="emailHelp" placeholder="Enter contact number" name="tel" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <input class="form-control" id="exampleInputAddress" type="text" aria-describedby="emailHelp" placeholder="Enter address" name="Address" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input class="form-control" id="exampleInputUsername" type="text" aria-describedby="emailHelp" placeholder="Enter username" name="username" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" type="password" placeholder="Password" name="password" id="psw" required>   
          </div>
          <div class="form-group">    
                <label for="exampleConfirmPassword">Confirm password</label>
                <div class="row">      
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                        <input class="form-control" type="password" placeholder="Confirm password" name="confirm_password" id="cfm-psw" onkeyup="match()">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <p id="status">Status</p>
                    </div>
                </div>    
          </div>
          <input class="btn btn-success btn-block" type="submit" name="submit" value="Sign Up!">
        </form>
        <div class="text-center">
          <div class="row d-block small mt-3">Already have an account? <a href="users/user-login.php">Login</a></div>
          <a class="d-block small" href="users/forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <br>
  <br>
  <br>
  <br>
  <br>
      <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-bottom animated slideInUp" id="mainNav">
      <div class="container" id="whole-nav">
        <a class="navbar-brand js-scroll-trigger" href="index.php">PACIFFIC</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" style="color: white;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="blogs.php">Blogs</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <script src="js/password-compare.js"></script>
</body>

</html>
