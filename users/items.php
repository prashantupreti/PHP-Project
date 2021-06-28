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
   <?php 
   $id=$_GET['id'];
   $query="SELECT * from message where id='$id'";
   $result=mysqli_query($con,$query);
   $fetch=mysqli_fetch_assoc($result);
   $num=mysqli_num_rows($result);
   if($num>0){
    ?>
    <div class="card-body">
    <div class="row">
    <p class="col-lg-10 col-md-10 col-sm-10 col-xs-10">From: <?php echo $fetch['Frm']; ?></p>
    <p class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><small><b><?php echo $fetch['date']; ?></b></small></p>
    </div>
    <p>To: <?php echo $fetch['To']; ?></p>
    <p>CC: <?php echo $fetch['cc']; ?></p>
    <p>Subject: <?php echo $fetch['Subject']; ?></p>  
    <p>Message:</p>
    <p><?php echo $fetch['Message']; ?></p>
<?php }
else{
  header('location:inbox.php');
} ?>
<hr/>


<?php 
  $reply=$fetch['reply'];
  $query1="SELECT * from message where reply='$reply' && prime_mail='0'";
  $result1=mysqli_query($con,$query1);
  $num1=mysqli_num_rows($result1);
  if($num1>0){
    while ($fetch1=mysqli_fetch_array($result1)){
 ?>
    <h5>Replies:</h5>
    <div class="row">
    <p class="col-lg-10 col-md-10 col-sm-10 col-xs-10">From: <?php echo $fetch1['Frm']; ?></p>
    <p class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><small><b><?php echo $fetch1['date']; ?></b></small></p>
    </div>
    <p>CC: <?php echo $fetch1['cc']; ?></p>  
    <p>Reply:</p>
    <p><?php echo $fetch1['Message']; ?></p>
<hr/>

<?php } }
else{
 echo "No Replies<hr/>";
}
 ?>


<h5>Reply:-</h5>
  <form method="POST" class='form-control' action="reply.php">
     <input type="hidden" name="id" value="<?php echo $id; ?>"> 
     <input type="hidden" name="to" value="<?php echo $fetch['Frm']; ?>">
     <input type="hidden" name="cc" value="<?php echo $fetch['cc']; ?>">
    <input type="hidden" name="subject" value="<?php echo $fetch['Subject']; ?>">
    <textarea id="mytextarea" name="message"></textarea><br/>
    <button class="btn btn-secondary" type="button" data-dismiss="modal">Discard</button>
    <input type="submit" class="btn btn-success" name="submit" value="Reply">
  </form>
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
