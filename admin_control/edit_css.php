<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>


<?php   
   
   $file="../styles/style.css";

   if(file_exists($file)){

       $data =file_get_contents($file);
   }

?>



<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / CSS Editor
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->




<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-pencil"></i>  Edit CSS
                
               </h3><!-- panel-title finish --> 

               <div class="alert alert-info">
                <strong>Don't make any change if you are not familiar with CSS!</strong> 
                </div>
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
               
                  <form action="" class="form-horizontal" method="post">
                      <div class="form-group">
                      
                         <div class="col-lg-12">
                             
                             <textarea name="newdata" id="" cols="20" rows="15" class="form-control">
                            
                            <?php echo $data; ?>
                            
                             </textarea>
                         
                         </div>
                      
                      </div>
                      <div class="form-group">
                      
                      <div class="col-lg-12">
                          
                          <label class="control-label col-md-3"></label>
                          <div class="col-md-6">
                             <input type="submit" name="update" value="Update CSS" class="form-control btn btn-primary">
                          </div>
                      
                      </div>
                   
                   </div>
                  </form>

            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->


<?php
   
   if(isset($_POST['update'])){

    $newdata = $_POST['newdata'];

    $handle=fopen($file,"w");
    
    fwrite($handle,$newdata);

    $yes=fclose($handle);
    if($yes){

    echo"<script>  alert('Your CSS Has Been Updated Successfully')   </script>";
    echo"<script>  window.open('index.php?edit_css','_self')   </script>";
   }
   else{
    echo"<script>  alert('CSS Editing Failed!')   </script>";
   }
}


?>


    <?php    }  ?>