<?php 
	$selectn="SELECT * FROM blog_post where admin_approval='No'";
	$queryn=mysqli_query($con,$selectn);
	$getn=mysqli_fetch_assoc($queryn);
	while($get=mysqli_fetch_assoc($query)){ 
		if($queryn==true){
		echo "<a class='dropdown-item' href='user_notification.php'><span class='text-danger'><strong><i class='fa fa-times fa-fw'></i> Post Rejected</strong></span><span class='small float-right text-muted'>".$get['date_approv']."</span><div class='dropdown-message small'>Sorry, your post " ."<b>'".$getn['post_title']."'</b>". " has been rejected to be published by the admin.</div></a><div class='dropdown-divider'></div>";
		}
		else{
			echo "<a class='dropdown-item' href='user_notification.php'><span class='text-danger'><strong><i class='fa fa-times fa-fw'></i> Post Rejected</strong></span><span class='small float-right text-muted'>". $get['date_approv']. "</span><div class='dropdown-message small'>Nothing to show.</div></a><div class='dropdown-divider'></div>";
		}
	}
 ?> 	