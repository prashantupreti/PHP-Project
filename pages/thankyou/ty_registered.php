<?php 
    include '../../connection.php';
    
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
  <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../../css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Signed Up</div>
      <div class="card-body">
        <p>You have been signed up to the revolutionary social networking site of this era THE PACIFFIC and now you can login by clicking the login button or go buy a grocery.</p>
        <p>But wait before you login, you should verify your email address. Enter your UNIQUE 6-digit Email verification code in the following section.</p>

        <hr/>
        <form method="POST" action="../../email_verify.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label>Security Code:</label><input type="text" class="form-control" name="security" placeholder="XXX-XXX">
            <br>
              <input type="submit" class="btn btn-success" name="submit" value="Verify">
              <a href="" name="resend" class="btn btn-dark">Resend</a>
                      
        </form>

        
      </div>
    </div>
 
  <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-bottom animated slideInUp" id="mainNav">
      <div class="container" id="whole-nav">
        <a class="navbar-brand js-scroll-trigger" href="../../index.php">PACIFFIC</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" style="color: white;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../../blogs.php">Blogs</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  

  <!-- Bootstrap core JavaScript-->
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

  <script type="text/javascript" src="../../password-compare.js"></script>
</body>

</html>
