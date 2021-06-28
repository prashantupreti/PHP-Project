                <?php 
                  include '../connection.php';
                  $query="SELECT Profile_pic FROM user where Username='$user' ";
                  $res=mysqli_query($con,$query);
                  
                  $check=mysqli_num_rows($res);
                  $fetch=mysqli_fetch_assoc($res);
                  $img=$fetch['Profile_pic'];
                  if($check>0 && $img!=''){
                    ?>
                    <img src="../server/upload/<?php echo $img;?>" alt="error" height='160' width='160' class='image'>
                        <hr><button type='button' class='btn btn-default' data-toggle='modal' data-target='#myModal1'>
                        <i class='fa fa-edit'></i></button>
                  <?php
                  }
                  else
                  {
                    ?>
                        <img src='../img/portfolio/fullsize/no-img.png' height='160' width='160' class='image'><hr>
                  <hr>  <button type='button' class='btn btn-default' data-toggle='modal' data-target='#myModal'>
                    <i class='fa fa-camera' ></i>
                    </button>
                    <?php
                    
                  
                  }
                
              ?>


              