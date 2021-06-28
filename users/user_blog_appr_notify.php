<?php 	
 $user=$_SESSION['Username'];
 $select="SELECT * FROM blog_post where post_author='$user' AND admin_approval='Yes'";
 $query=mysqli_query($con,$select);
 while($get=mysqli_fetch_assoc($query)){ 
  	if($query==true){
  		echo "<a class='dropdown-item' href='user_notification.php'><span class='text-success'><strong><i class='fa fa-check fa-fw'></i> Post Accepted</strong></span><span class='small float-right text-muted'>".$get['date_approv']."</span><div class='dropdown-message small'>Congratulations! Your post " ."<b>'".$get['post_title']."'</b>". " has been approved by the admin.</div></a><div class='dropdown-divider'></div>";

  	}

	else{
		echo "<a class='dropdown-item' href='user_notification.php'><span class='text-success'><strong><i class='fa fa-check fa-fw'></i> Post Accepted</strong></span><span class='small float-right text-muted'>".$get['date_approv']."</span><div class='dropdown-message small'>Nothing to show.</div></a><div class='dropdown-divider'></div>";
	}
}

 ?>