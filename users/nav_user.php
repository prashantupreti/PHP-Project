  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="../index.php">PACIFFIC</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="dashboard.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Account Information">
          <a class="nav-link" href="user_information.php">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Account Information</span>
          </a>
        </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Blog Posts">
          <a class="nav-link" href="user_blog_post.php">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Blog Posts</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="See if your blog has been posted.">
          <a class="nav-link" href="../blogs.php">
            <i class="fa fa-fw fa-pied-piper"></i>
            <span class="nav-link-text">Blogs</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Messenger">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="nav-link-text">Messenger</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="inbox">Inbox(<?php 
                $user=$_SESSION['Username'];
                $query="select * from message where (Frm!='$user' or cc='$user') && prime_mail='1'";
                $result=mysqli_query($con,$query);
                $num=mysqli_num_rows($result); 
                echo $num;?>)</a>
            </li>
            <li>
              <a href="sent">Sent(<?php 
                $query1="select * from message where Frm='$user' && prime_mail='1'";
                $result1=mysqli_query($con,$query1);
                $num1=mysqli_num_rows($result1);
                echo $num1; ?>)</a>
            </li>
            
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item btn-group" role='group' >
          <?php 
                  
                  $query="SELECT Profile_pic FROM user where Username='$user'";
                  $res=mysqli_query($con,$query);
                  $num=mysqli_num_rows($res);
                  $fetch=mysqli_fetch_assoc($res);
                  $image=$fetch['Profile_pic'];
                            if($num>0 && $image!=''){echo  "<a class='btn btn-success btn-sm' href='user_information.php'><img src='../server/upload/$image'  class='rounded-circle float-right' height='30px' width='30px'></a>";}
                            else{echo ""; }
                 ?>
          <a class="btn btn-success btn-sm" href='user_information.php'> 
          <h5 class="text-white float-right"><?php echo $data['First_Name']; ?> <?php echo $data['Last_Name']; ?></h5></a>
            
          
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary"><?php $user=$_SESSION['Username'];
              $select2="SELECT * from message where (Frm!='$user' OR cc='$user') && prime_mail='1'";
              $query2=mysqli_query($con,$select2); $num2=mysqli_num_rows($query2); echo $num2; ?> New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="inbox">
              <?php include 'user_inbox_notify.php'; ?>
            </a>
            
            <a class="dropdown-item small" href="inbox">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning"><?php 
              $select3="SELECT * FROM blog_post where post_author='$user' && (admin_approval='Yes' OR admin_approval='No')";
              $query3=mysqli_query($con,$select3);
              $num3=mysqli_num_rows($query3);
              echo $num3; ?> New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
              <?php include 'user_blog_appr_notify.php'; ?>
              <?php include 'user_blog_rej_notify.php'; ?>
            <a class="dropdown-item small" href="user_notification.php">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2" method="GET" action="search.php">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for..." name="search">
              <span class="input-group-append">
                <button type="submit" class="btn btn-success" name="submit">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        

        
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>



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
            <form action="logout_process.php">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

            <button class="btn btn-success" name="logout">Logout</button>
            </form>
          </div>
        </div>
      </div>
    </div>