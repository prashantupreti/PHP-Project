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
</head>

<body class="bg-sth">
  <div class="container">
    <header><h1 class="text-center text-white"><b>Admin Login</b></h1></header>
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">
        <div class="btn-group center col-lg-12 col-md-12 col-sm-12 col-xs-12" role="group" aria-label="Basic example">
          <button type="button" class="btn btn-success col-lg-6 col-md-6 col-sm-6 col-xs-6  "><a href="../users/user-login.php">User Login</a></button>
          <button type="button" class="btn btn-success col-lg-6 col-md-6 col-sm-6 col-xs-6 disabled">Admin Login</button>
        </div>
      </div>
      <div class="card-body">
        <form method="post" action="admin_login.php">
          <?php include 'admin_login_process.php' ?>
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="username" placeholder="Enter Username" required>
          </div>
         <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <div class="input-group mb-3">
              <input id="exampleInputPassword1" type="password" placeholder="Enter Password" name="psw" required class="form-control input-flex" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <a class="btn btn-success" onclick="myFunction()" id="btn"><i class="fa fa-eye"></i></a>
              </div>
            </div>
          </div>  
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <input type="submit" class="btn btn-success btn-block" name="btn-submit" value="Log in">
        </form>
      </div>
    </div>
  </div>



   <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-bottom" id="mainNav">
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
  <!-- Password hide and show button -->
  <script type="text/javascript" src="../js/psw-hs.js"></script>
</body>

</html>
