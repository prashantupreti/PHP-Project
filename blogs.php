<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blogs | PACIFFIC | A Revolution in Social Networking</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container" id="whole-nav">
        <a class="navbar-brand" href="index.php">PACIFFIC</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="blogs.php">Blogs</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="users/user-login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="register.php">Sign Up</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <header class="bg-sth-2 text-center text-white d-flex" >
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>BLOGS</strong>
            </h1>
            <hr>
          </div>
        </div>
      </div>
    </header>

    <br/>
   
    <?php 
      include 'connection.php';

      $query="SELECT * FROM blog_post where admin_approval='Yes'";
      $result=mysqli_query($con,$query);
      
      while($display=mysqli_fetch_assoc($result)){
     ?>
      <div class="container">
        <div class="card mb-4 mr-2 border-success">
          <div class="card-header bg-success text-white">

          <div class="row">
            <div class="col-lg-8"><h2 class="text-left"><b><?php echo $display['post_title']; ?></b></h2></div>
              <?php 
                $user=$display['post_author'];
                $select="SELECT * FROM user where Username='$user' OR Email='$user'";
                $query1=mysqli_query($con,$select);
                $fetch=mysqli_fetch_assoc($query1);

               ?>
            <div class="col-lg-4">   
            <h6 class="text-right mt-2"> by <?php echo $fetch['First_Name'] ?> <?php echo $fetch['Last_Name'] ?></h6>
            </div>
            </div>
            
          </div>
          <div class="card-body">
            <p class="text-left"><small>
                   <?php 
                   $timestamp = $display['date'];
                    $timestamp = date_create_from_format('Y-m-d H:i:s', $timestamp);
                    echo date_format($timestamp, 'M d, Y'); ?>
                 </small></p>
            <div class="row">
              
              <div class="description text-justify col-lg-8 col-md-8 col-sm-8 col-xs-8">
                
                <p><?php echo $display['post_description']; ?></p>
              </div>
              
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  
  
                <img class="img-fluid img-thumbnail" src="server/blog_upload/<?php echo $display['post_image_name']; ?>" height="80%" width="80%">

                  
              </div>
              </div>
          </div>
        </div>
      </div>
      <?php } ?>

    


    <section class="bg-dark text-white">
      <div class="container text-center">
        <h2 class="mb-4">Free Sign Up at PACIFFIC!</h2>
        <p>Start posting now.....</p>
        <a class="btn btn-light btn-xl sr-button" href="register.php">Sign Up Now!</a>
        <a class="btn btn-light btn-xl sr-button" href="users/user-login.php">Login!</a>
      </div>
    </section>

    
    <?php include 'footer.php'; ?>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>