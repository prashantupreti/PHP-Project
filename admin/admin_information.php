<?php 
    if(true){session_start(); 
    include '../connection.php';
    $user=$_SESSION['Username'];
    $query="select * from admin where Username='$user'";
    $res=mysqli_query($con,$query);
    $data=mysqli_fetch_assoc($res);
    if($user){

    }
    else{
      header('location:admin_login.php');
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
  <title>PACIFFIC | Admin Station</title>
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
  <?php include 'nav.php'; ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Account Information</li>
      </ol>
    
    <div class="row">
      <div class="col-lg-6 my-auto">
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-user-o"></i> Account Information</div>
          
          <div class="card-body">
            <p>Username: <?php echo $data['Username'];?></p>
            <p>About: </p>
              <div class="border border-success">
                <div class="mb-3">
                  <p><?php echo $data['About']; ?></p>
                  <!-- Button to Open the Modal -->
                   <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
                    <i class="fa fa-pencil" ></i>
                    </button>
                </div>  
              </div>

              <!-- The Modal -->
              <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                  <div class="modal-content">
                  
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">About</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                      <form method="POST" action="admin_about_process.php?id=<?php echo $data['id']; ?>">
                        <textarea cols="55" rows="5" placeholder="This will be posted in the index page of this website....." name="about"><?php echo $data['About']; ?></textarea>
                       <button type="button" class="btn btn-danger" data-dismiss="modal">Back</button>
                      <input type="submit" class="btn btn-success" name="submit" value="Post"> 
                      </form> 
                    </div>
                    
                    
                  </div>
                </div>
              </div>
             </div>  
             </div>
             </div>                  

        <div class="col-lg-6">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i> Account Setting</div>
            <div class="card-body">
              <p><a href="reset_password.php?id=<?php echo $data['id']; ?>">Reset Password</a></p>

            </div>
          </div>
            </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php include '../footer.php' ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <form action="admin_logout.php">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

            <button class="btn btn-primary" name="logout">Logout</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../js/sb-admin-datatables.min.js"></script>
    
  </div>
</body>
</html>