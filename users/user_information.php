<?php 
    session_start(); 
    include '../connection.php';
    $user=$_SESSION['Username'];
    $query="select * from user where Username='$user' || Email='$user'";
    $res=mysqli_query($con,$query);
    $data=mysqli_fetch_assoc($res);

    if(!$user){
      header('location:user-login.php');
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
  <title>PACIFFIC | Account Information | A Revolution in Social Networking</title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
          <a href="dashboard.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Account Information</li>
      </ol>
            <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-user-o"></i> Account Information</div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-10 my-auto">
            <p>Username: <?php echo $data['Username'];?></p>
            <p>Email: <?php echo $data['Email'];?></p>
            </div> 
            <div class="col-lg-2 col-sm-2">
              <?php 
              include 'display_dp_yn.php'; ?>

                
              <!-- The Modal -->
              <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                  <div class="modal-content">
                  
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Upload Your Profile Picture</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                      <form method="post" enctype="multipart/form-data" action="form_profile_pic.php">
                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                          <div class="input-control">
                          <input type="file" name="img">
                          </div>
                    <br>      
                     <div class="modal-footer">
                     <button type='button' class='btn btn-default' data-dismiss="modal">Close</button><input type="submit" class="btn btn-success" name="submit" value="Upload">
                    </div>     
                      </form> 
                    </div>
                  </div>
                </div>
              </div>



                            <!-- The Modal -->
              <div class="modal fade" id="myModal1">
                <div class="modal-dialog">
                  <div class="modal-content">
                  
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Update Your Profile Picture</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                      <form method="post" enctype="multipart/form-data" action="form_profile_pic.php?id=<?php echo $data['id']; ?>">
                          <div class="input-control">
                          <input type="file" name="img">
                          </div>
                    <br>      
                     <div class="modal-footer">
                     <button type='button' class='btn btn-default' data-dismiss="modal">Close</button><input type="submit" class="btn btn-success" name="submit" value="Upload">
                    </div>     
                      </form> 
                    </div>
                  </div>
                </div>
              </div>





              <div class="text-caption">Profile Picture</div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-lg-4">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-user"></i> Personal Information</div>
            <div class="card-body">
              <p>Name: <?php echo $data['First_Name'];?> <?php echo $data['Last_Name'];?></p>
              <p>Address: <?php echo $data['Address'];?></p>
              <p>Contact Number: <?php echo $data['Contact_No'];?></p>
            </div>
          </div>
        </div>
            
        <div class="col-lg-4">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-pencil"></i> Account Setting</div>
            <div class="card-body">
              <p><a href="reset_nca.php?id=<?php echo $data['id']; ?>">Reset Name, Contact and Address</a></p>
              <p><a href="reset_password.php?id=<?php echo $data['id']; ?>">Reset Password</a></p>

            </div>
          </div>
            </div>
    
        <div class="col-lg-4">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-cogs"></i> Personalization</div>
            <div class="card-body">
              <p><a href="recov_password.php?id=<?php echo $data['id']; ?>">Recovery Option</a>, make your experience secure.</p>    
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
