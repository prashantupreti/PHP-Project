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
          <a href="admin_dashboard.php">Admin Dashboard</a>
        </li>
        <li class="breadcrumb-item">
          <a href="#">Add Admins</a>
        </li>
      </ol>
      <div class="card bg-dark text-white text-inline" id="information_admin">
      This is the 'Add Admins' page for Admin. Any illegal entry and mischievous acts will not be tolerated. This website is an intellectual property of its owner and the brand name is possessed by Mr. Prashant Upreti. Here you can add admins and delete admins. Keep in mind 'admin' is the only official id which cannot be deleted or removed or remade. 
      </div>
      <br>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
  <i class="fa fa-plus" ></i> Add Admins
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Admins</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form method="POST" action="admin_add_process.php">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" placeholder="New Username"><br>
            </div>
            <div class="form-group">    
                <label>Password</label>
                <input type="Password" name="password" placeholder="New Password">
            </div>
          
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Back</button>
          <input type="submit" class="btn btn-danger" name="admin_submit" value="Add Admin">
        </div>
        </form>
        
      </div>
    </div>
  </div>
  


      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Admin Data Table</div>
        <div class="card-body">
          <div class="table-responsive">
              <div class="table-responsive">
            <?php 
                include '../connection.php';
                $query="select * from admin order by id asc;";
                $result=mysqli_query($con,$query);
            ?>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <tbody>
              <tr>
                <th>S.N.</th>
                <th>Username</th>
                <th>Password</th>

                <th>Update</th>
                <th>Delete</th>
              </tr>
              <?php 
              while($new=mysqli_fetch_array($result)){;
               ?>
              <tr>
                <td><?php echo $new['id']; ?></td>

                <td><?php echo $new['Username']; ?></td>
                <td><?php echo $new['Password']; ?></td>
                
                <td><a href="admin_login_update.php?id=<?php echo $new['id']; ?>">Edit</a></td>
                <td><a href="admin_delete.php?id=<?php echo $new['id']; ?>" onclick="return confirm('This row and the information related to the user will be removed, are you sure?');">Remove</a></td>
              </tr>
              <?php } ?>
              </tbody>
            </table>
    
          </div>

        </div>
        <div class="card-footer small text-muted">Updated at 09:57 PM 27/03/2018</div>
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
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../js/sb-admin-datatables.min.js"></script>
    <script src="../js/sb-admin-charts.min.js"></script>
  </div>
</body>
</html>