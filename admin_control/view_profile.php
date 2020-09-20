<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{
            $admin_email=$_SESSION['admin_email'];
    
            $select_admin="select * from admins where admin_email='$admin_email'";
    
            $run_admin=mysqli_query($con,$select_admin);
    
           if($row_admin=mysqli_fetch_array($run_admin))
           {
               $admin_id=$row_admin['admin_id'];
               $admin_name=$row_admin['admin_name'];
               $admin_image=$row_admin['admin_image'];
               $admin_phn=$row_admin['admin_phn'];
               $admin_email=$row_admin['admin_email'];
               $admin_about=$row_admin['admin_about'];
              
               
               
           }


?> 

<div class="profile-page">
   
                       
	        
	                            <img src="admin_images/<?php echo $admin_image; ?>" alt="Profile Image" class="pro-img img-responsive">
	                        
	          <div class="name">
	                            <h3 class="title"><?php echo $admin_name; ?></h3>
								<h4 class="student">   Admin  </h4>



                    <div class="description text-center" style="background: url(../images/back2.jpg) no-repeat;background-size: cover;">
                   <p class="mg" style="font-size: 20px;">Email:</p>
                   <p style="color:#fffa64;font-weight: 500; font-size: 17px;">  <?php echo $admin_email; ?> </p><br>
                   <p style="font-size: 20px;">Contact:</p>
                   <p style="color:#fffa64;font-weight: 500;font-size: 17px;">   <?php echo $admin_phn; ?> </p><br>
                   <hr><hr><p  style="font-size: 20px;">About Me</p><hr style="border: 2px dashed #fff;">
                  <br> <h4 class="about">  <?php echo $admin_about; ?> </h4><br>
                   
                   </div>
								
	          </div>
	                   
               
			
        
       
  
</div>


<?php   }  ?>
