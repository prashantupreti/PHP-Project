<?php 
    session_start(); 
    include '../connection.php';
    $user=$_SESSION['Username'];
    $query="select * from user where Username='$user' || Email='$user'";
    $res=mysqli_query($con,$query);
    $data=mysqli_fetch_assoc($res);
    $email=$data['Email'];
    if(!$user||!$res){
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
  <title>PACIFFIC | Dashboard | A Revolution in Social Networking</title>
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
          <a href="#">Dashboard</a>
        </li>
      </ol>

     
     
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> My Blog Posts</div>
        <div class="card-body">
          <div class="table-responsive">
 
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <tbody>
              <tr>
                <th>Date</th>
                <th>Blog Title</th>
                <th>Blog Description</th>
                <th>Edit</th>
                <th>Remove</th>
              </tr>
              <?php 
              include '../connection.php';
                  $author=$_SESSION['Username'];
                   $query="select * from blog_post where post_author='$author'";
                $result=mysqli_query($con,$query);
                $num=mysqli_num_rows($result);
                                
              while($new=mysqli_fetch_array($result)){;
                

               ?>

              <tr>
                <td><?php echo date($new['date']); ?></td>
                <td><?php echo $new['post_title']; ?></td>
                <td><?php echo substr($new['post_description'], 0,100) ?><?php if(strlen($new['post_description'])>100){ echo "..."; } ?></td>
                
                
                <td><a href="blog_post_update.php?id=<?php echo $new['id']; ?>"><button class="btn btn-success"><i class="fa fa-pencil"></i></button></a></td>
                <td><a href="blog_post_delete.php?id=<?php echo $new['id']; ?>" onclick="return confirm('This column will be removed, are you sure about this decision?');"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
              </tr>
              <?php }
               ?>
              </tbody>
            </table>
          </div>

          <?php 
            if (!$result) {
              echo "<small>Need help making your first post? Just to guide you, you can click on <a href='user_blog_post.php'>Blog Posts</a> in your sidebar to start making your posts. Enjoy!</small>";
            }
            else{
              echo "";
            }
           ?>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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
