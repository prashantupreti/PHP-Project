<?php 
    if(true){session_start(); 
    include '../connection.php';
    $user=$_SESSION['Username'];
    $query="select * from user where Username='$user' || Email='$user'";
    $res=mysqli_query($con,$query);
    $data=mysqli_fetch_assoc($res);
    $email=$data['Email'];
    if($user){
      
    }
    else{
      header('location:user-login.php');
    }
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
  <title>PACIFFIC | Notification | A Revolution in Social Networking</title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <?php include 'nav_user.php' ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Notification</a>
        </li>

      </ol>


    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <div class="card mb-3">
          <div class="card-header bg-success text-white">
            Accepted
          </div>
          <div class="card-body"><?php include 'user_blog_appr_notify.php'; ?></div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <div class="card mb-3">
          <div class="card-header bg-danger text-white">
            Rejected
          </div>
          <div class="card-body"><?php include 'user_blog_rej_notify.php'; ?></div>
        </div>
      </div>
    </div> 
     
     
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php include '../footer.php'; ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
   


   <style type="text/css">
     #word-wrap{
      word-wrap:break-word;
     }
   </style>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>

  </div>
</body>

</html>
