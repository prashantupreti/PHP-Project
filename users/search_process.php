<?php 
	 	include '../connection.php';
if(!isset($_SESSION['Username'])){

echo "Access denied!";

}
else{
	if (isset($_REQUEST['submit'])) {
	 	$search=$_GET['search'];
	 	$select="SELECT * FROM blog_post where post_description like '%$search%' UNION SELECT * FROM blog_post where post_author like '%$search%';";
	 	$query=mysqli_query($con,$select);
	 	$num=mysqli_num_rows($query);
	 	
	 	if($num==0 && $search==""){
	 		echo "No results found";
	 		
	 	}
	 	else{
	 		
	 		echo "$num result(s) found for <b>$search</b>";

	 		while ($row=mysqli_fetch_assoc($query)) {
	 			$id=$row['id'];
	 			$title=$row['post_title'];
	 			$author=$row['post_author'];
	 			$description=$row['post_description'];
	 			$date=$row['date'];
	 			$image=$row['post_image_name'];

	 			

	 			echo "<br />
	 			<div class='card  mt-3  p-2'>
	 				<div class='card-header bg-success text-white'>
	 					<h3 class='float-left'>$title</h3>
	 					<h6 class='float-right mt-2'>$author (Username)</h6>
	 				</div>
	 			<br/>
	 				<div class='card-body row'><p class='col-lg-9 col-md-9 col-sm-9 col-xs-12'>$description</p><div class='col-lg-3 col-md-3 col-sm-3 col-xs-12'><img class='img-fluid img-thumbnail ' src='../server/blog_upload/$image' height='80%' width='80%'></div></div>




	 				</div>";
	 		}
	 	}

	 	
	 }	
	 

}
 ?>