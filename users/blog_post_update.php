<?php 
    if(true){session_start(); 
    include '../connection.php';
    $user=$_SESSION['Username'];
    $query="select * from user where Username='$user' || Email='$user'";
    $res=mysqli_query($con,$query);
    $data=mysqli_fetch_assoc($res);}
    else{
      echo "Sorry, the session wasn't loaded, please, contact your webmaster.";
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
  <title>PACIFFIC | Blog Post | A Revolution in Social Networking</title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <?php include 'nav_user.php'; ?>
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
      <div class="card mb-3 bg-dark"><p class="text-white" >Here you will be able to update your blog.</p></div>      
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-user-o"></i> Blog Posts Update</div>
        <div class="card-body">
              
      <?php 
              include '../connection.php';
              $id=$_GET['id'];
              $query="select * from blog_post where id='$id'";
              $result=mysqli_query($con,$query);  
              if($new=mysqli_fetch_array($result)){;
               ?>
        <form method="post" action="blog_post_update_process.php">
         <input type="hidden" name="id" value="<?php echo $new['id']; ?>">
          <div class="form-group">
                <label>Title</label>
                <input class="form-control" type="text" aria-describedby="nameHelp" placeholder="Enter title" name="title" value="<?php echo $new['post_title']; ?>" required>
          </div>
          <div class="form-group">    
                <label>Description</label>
                <textarea id="mytextarea" name="description"><?php echo $new['post_description']; ?></textarea>
                <img src="../server/blog_upload/<?php echo $new['post_image_name'];?>" height="20%" width="20%">
          </div>
          
          


        <div class="btn-group" role="group" aria-label="Basic example">
          <input class="btn btn-success " type="submit" name="submit" value="Update">
          <input class="btn btn-success " type="reset" name="reset" value="Reset">
        </div>
        </form>
        <?php }; ?>

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
   

   <script type="text/javascript" src="../vendor/tinymce/tinymce.min.js"></script>
        <script type="text/javascript">
      tinymce.init({
    selector: '#mytextarea'
  });
    </script>    
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
