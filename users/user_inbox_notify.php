<?php 	
 $user=$_SESSION['Username'];
 $select="SELECT * from message where (Frm!='$user' OR cc='$user') && prime_mail='1'";
 $query=mysqli_query($con,$select);
 while($get=mysqli_fetch_assoc($query)){ 
  	if($query){
  		$frm=$get['Frm'];
  		$subj=$get['Subject'];
  		$msg=substr($get['Message'],0,50);
  		$date=$get['date'];
  		$select1="SELECT * FROM user where Username='$frm'";
  		$query1=mysqli_query($con,$select1);
  		$fetch=mysqli_fetch_assoc($query1);
  		$pic=$fetch['Profile_pic'];
  		$fname=$fetch['First_Name'];
  		$lname=$fetch['Last_Name'];
  		echo "<a class='dropdown-item' href='inbox'><img src='../server/upload/$pic' height='20' width='20' class='rounded-circle'><span class='text-success'><strong> $fname $lname ($frm)</strong></span><span class='small float-right text-muted'>$date</span><div class='dropdown-message small'><b>(Sub:- $subj)</b> $msg</div></a><div class='dropdown-divider'></div>";
  	}
	else{
		echo "Nothing to show.<div class='dropdown-divider'></div>";
	}
}
 ?>