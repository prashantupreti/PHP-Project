<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PACIFFIC | A Revolution in Social Networking</title>

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

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container" id="whole-nav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">PACIFFIC</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#Team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="blogs">Blogs</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="users/user-login">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="register">Sign Up</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Your Network<br/>You Connect</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <?php 
            include 'connection.php';
            $query="SELECT * FROM dynamic_index";
            $sel=mysqli_query($con,$query);
            $data=mysqli_fetch_assoc($sel); 
             ?>
            <p class="text-white mb-5"><?php echo $data['Describe']; ?></p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">About</h2>
            <hr class="light my-4">
            <?php 
            include 'connection.php';
            $query="SELECT * FROM dynamic_index";
            $sel=mysqli_query($con,$query);
            while ($data=mysqli_fetch_array($sel)) {;
              
             ?>
            <p class="text-white mb-4"><?php echo $data['About']; ?></p>
            <?php }; ?>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">At Your Service</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-pencil text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Post Blogs</h3>
              <p class="text-muted mb-0">You can post your own thoughts on the all new site PACIFFIC.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Thoughts</h3>
              <p class="text-muted mb-0">You can use your idea to enlighten millions of other users.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Up to Date</h3>
              <p class="text-muted mb-0">We update the site to keep things fresh.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-sliders text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Your Control</h3>
              <p class="text-muted mb-0">You have complete control over your post and profiles.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-dark text-white" id="Team">
      <h1 class="section-heading text-center">Our Team</h1>
      <div class="row">
        <div class="container">
          
            <img src="img\portfolio\avatar\1.png" class="rounded-circle" width="20%" align="left">

            <p class="px-2">
              <?php 
                include 'connection.php';

                $select_admin="SELECT * FROM admin";
                $query_admin=mysqli_query($con,$select_admin);
                while($admin_fetch=mysqli_fetch_assoc($query_admin)){
                 if($admin_fetch['About']){ 
                  if($query==true){
                    echo "'".$admin_fetch['About']."'<small class='text-right'> -".$admin_fetch['Username']."</small>";
                  }    
                  else{
                    echo "Failed to post";
                  }
                 } 
              }

                ?> 
            </p>
        </div>
      </div>
      <div class="container text-center">
        <h2 class="mb-4">Free Sign Up at PACIFFIC!</h2>
        <a class="btn btn-light btn-xl sr-button" href="register">Sign Up Now!</a>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">
            
            <p class="mb-5">
              <?php 
            include 'connection.php';
            $query="SELECT * FROM dynamic_index";
            $sel=mysqli_query($con,$query);
            $data=mysqli_fetch_assoc($sel); 
            echo $data['Contact']; ?></p>
           
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p><a href="tel:<?php echo $data['Phone']; ?>" onclick="window.open('tel:<?php echo $data["Phone"]; ?>')"><?php echo $data['Phone']; ?></a></p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:<?php echo $data['Email']; ?>"><?php echo $data['Email']; ?></a>
            </p>
          </div>
        </div>
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
