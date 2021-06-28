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
  <?php include 'nav_user.php'; ?>

<div class="content-wrapper">


  <div class="card-body">
    <a data-target="#compose" data-toggle="modal" class="btn btn-success btn-sm">Compose</a>
             <?php 
                $select_inbox="SELECT * FROM message WHERE (Frm!='$user' OR cc='$user') && prime_mail='1'";
                $query_inbox=mysqli_query($con,$select_inbox);
                $num=mysqli_num_rows($query_inbox);            
               ?>
               <p>You have <?php echo $num; ?> new message(s) in your inbox.</p>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <tbody>
              <tr>
                <th>From</th>
                <th>Subject</th>
                <th>Date</th>
                <th>View</th>
                <th>Delete</th>
              </tr>
              <?php while($new=mysqli_fetch_array($query_inbox)){; ?>
              <tr>
                <td><?php echo $new['Frm']; ?> (CC:<?php echo $new['cc']; ?>)</td>
                <td><?php echo $new['Subject']; ?></td>
                <td><?php echo $new['date']; ?></td>
                <td><?php $id=$new['id']; ?><a href="read_st?id=<?php echo $id; ?>" class="btn btn-success"><span class="fa fa-eye"></span></a></td>
                <td><a href="delete_item?id=<?php echo $id; ?>" class="btn btn-danger" onclick="confirm('Do you really want to delete your message?')"><span class="fa fa-trash"></span></a></td>
              </tr>
              <?php }
               ?>
              </tbody>
            </table>
    </div>     
</div>

<?php include 'compose_email_mod.php' ?>

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
