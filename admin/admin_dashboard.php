<?php 
    session_start(); 
    include '../connection.php';
    $user=$_SESSION['Username'];
    $query="select * from admin where Username='$user'";
    $res=mysqli_query($con,$query);
    $data=mysqli_fetch_assoc($res);
    if(!$user){
      header('location:admin_login.php');
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
          <a href="#">Admin Dashboard</a>
        </li>
      </ol>
      <div class="card bg-dark text-white text-inline" id="information_admin">
      This is the control centre for Admin. Any illegal entry and mischievous acts will not be tolerated. This website is an intellectual property of its owner and the brand name is possessed by Mr. Prashant Upreti. 
      </div>
      <br>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> User Data Table</div>
        <div class="card-body">
          <div class="table-responsive">
            <?php 
                include '../connection.php';
                $query="select * from user order by id asc;";
                $result=mysqli_query($con,$query);
 
            ?>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <tbody>
              <tr>
                <th>S.N.</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone No.</th>
                <th>Username</th>

                
                <th>Password</th>
                <th>No. of Post(s)</th>
                <th>Email Conf. Status</th>
                <th>Security Code</th>


                <th>Update</th>
                <th>Delete</th>
              </tr>
              <?php 
              while($new=mysqli_fetch_array($result)){;
               ?>
              <tr>
                <td><?php echo $new['id']; ?></td>

                <td><?php echo $new['First_Name']; ?></td>
                <td><?php echo $new['Last_Name']; ?></td>
                <td><?php echo $new['Email']; ?></td>
                <td><?php echo $new['Address']; ?></td>
                <td><?php echo $new['Contact_No']; ?></td>
                <td><?php echo $new['Username']; ?></td>
                <td><?php echo $new['Password']; ?></td>
                <td><?php $author=$new['Username'];
                 $Select1="select * from blog_post where post_author='$author'";
                $query1=mysqli_query($con,$Select1);
                $num_rows = mysqli_num_rows($query1);
                echo $num_rows; ?></td>
                <td><?php echo $new['confirmed']; ?></td>
                <td><?php echo $new['confirm_code']; ?></td>

                
                <td><a href="admin_login_update.php?id=<?php echo $new['id']; ?>">Edit</a></td>
                <td><a href="admin_login_delete.php?id=<?php echo $new['id']; ?>" onclick="return confirm('This row and the information related to the user will be removed, are you sure?');">Remove</a></td>
              </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
          <a class="btn btn-success" href="truncate_user.php">Truncate Table</a>
        </div>
        <div class="card-footer small text-muted">Updated at 09:57 PM 27/03/2018</div>
      </div>
      
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Blog Post Table</div>
        <div class="card-body">
          <div class="table-responsive">
            <?php 
                include '../connection.php';
                $query="select * from blog_post;";
                $result=mysqli_query($con,$query);
            ?>
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <tbody>
              <tr>
                <th>Date</th>
                <th>Blog Title</th>
                <th>Blog Description</th>
                <th>Blog Author</th>
                <th>Delete</th>
              </tr>
              <?php     
              while($new=mysqli_fetch_array($result)){;
               ?>
              <tr>
                <td><?php echo date($new['date']); ?></td>
                <td><?php echo $new['post_title']; ?></td>
                <td><?php echo substr($new['post_description'], 0,50) ?><?php if(strlen($new['post_description'])>50){ echo "..."; } ?></td>
                <td><?php echo $new['post_author']; ?></td>
                <td><a href="admin_post_delete.php?id=<?php echo $new['id']; ?>" onclick="return confirm('This column will be removed, are you sure about this decision?');"><button class="btn btn-danger"><span class="fa fa-trash"></span></button></a></td>
              </tr>
              <?php }; ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated at 09:57 PM 27/03/2018</div>
       </div> 
      
    <div class="card mb-3" id="blog_approve">
        <div class="card-header">
          <i class="fa fa-check"></i> / <i class="fa fa-times"></i> Blog Post for Approval
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <?php 
                include '../connection.php';
                $query="select * from blog_post where admin_approval='' OR admin_approval='No'";
                $result=mysqli_query($con,$query);
            ?>
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <tbody>
              <tr>
                <th>Date</th>
                <th>Blog Title</th>
                <th>Blog Description</th>
                <th>Blog Author</th>
                <th>Approve</th>
                <th>Reject</th>
                <th>Status</th>
              </tr>
              <?php     
              while($new=mysqli_fetch_array($result)){;
               ?>
              <tr>
                <td><?php echo date($new['date']); ?></td>
                <td><?php echo $new['post_title']; ?></td>
                <td><?php echo substr($new['post_description'],0,100); if(strlen($new['post_description'])>100){echo "...";} ?> </td>
                <td><?php echo $new['post_author']; ?></td>
                <td><a href="admin_blog_appr.php?id=<?php echo $new['id']; ?>"><button class="btn btn-success"><span class="fa fa-check"></span></button></a></td>
                <td><a href="admin_blog_rej.php?id=<?php echo $new['id']; ?>" onclick="click()"><button class="btn btn-warning"><span class="fa fa-times"></span></button></a></td>
                <td><p id='post' class="text-warning">Not seen</p></td>
              </tr>
              <?php }; ?>
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
    <script type="text/javascript">
      
      function click() {
          var post=document.getElementById('post');
          if(true){
            post.innerHTML="Rejected";
            post.style.color="red";
          }
      }
    </script>
  </div>
</body>
</html>