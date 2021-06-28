<?php 
session_start(); 
    include '../../connection.php';
    // $user=$_SESSION['Username'];
    // $query="select * from admin where Username='$user'";
    // $res=mysqli_query($con,$query);
    // $data=mysqli_fetch_assoc($res);
    // if($user){

    // }
    // else{
    //   header('location:../admin_login.php');
    // }

    if($_SESSION['Username']==null){
      header('location:../admin_login.php');
    }
   
    $user=$_SESSION['Username'];
    $query="select * from admin where Username='$user'";
    $res=mysqli_query($con,$query);
    $data=mysqli_fetch_assoc($res);
   
 ?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>PACIFFIC | Post in Homepage</title>
  <!-- Bootstrap core CSS-->
  <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../../css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <?php include 'nav1.php'; ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Post in Homepage</li>
      </ol>
    <?php 
                include '../../connection.php';
                $query="SELECT * FROM dynamic_index where id=1";
                $sel=mysqli_query($con,$query);
                $data=mysqli_fetch_assoc($sel);
                  
                 ?>
            <form method="POST" action="post_index_process.php">
              
                  <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                  <div class="form-group"> 
                        <label>Top description</label>
                        <textarea class="form-control" type="text" rows="5" cols="20" name="describe" required><?php echo $data['Describe']; ?></textarea>
                  </div>
                  <div class="form-group"> 
                        <label>About</label>
                        <textarea class="form-control" type="text" rows="5" cols="20" name="about" required><?php echo $data['About']; ?></textarea>
                  </div>

                  <div class="form-group"> 
                        <label>Contact</label>
                        <textarea class="form-control" type="text" rows="5" cols="20" name="contact" required><?php echo $data['Contact']; ?></textarea>
                  </div>
                  <div class="form-group"> 
                        <label>Phone No.</label>
                        <input class="form-control" type="text" name="phone" value="<?php echo $data['Phone']; ?>">
                  </div>
                  <div class="form-group"> 
                        <label>Email</label>
                        <input class="form-control" type="text" name="email" value="<?php echo $data['Email']; ?>">
                  </div>
                  


                  <div class="btn-group" role="group" aria-label="Basic example">
                    <input class="btn btn-success" type="submit" name="update" value="Update">
                    <input class="btn btn-success" type="reset" name="reset" value="Reset">
                  </div>
              </form>
         </div>
         </div> 

    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php include '../../footer.php' ?>
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
            <form action="../admin_logout.php">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

            <button class="btn btn-primary" name="logout">Logout</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../../vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../../js/sb-admin-datatables.min.js"></script>
    <script src="../../js/sb-admin-charts.min.js"></script>
  </div>
</body>
</html>