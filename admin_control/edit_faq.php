<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['edit_faq'])){
        
        $edit_faq_id = $_GET['edit_faq'];
        
        $edit_faq = "select * from faq where faq_id='$edit_faq_id'";
        
        $run_edit = mysqli_query($con,$edit_faq);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
        $faq_id = $row_edit['faq_id'];
        
        $faq_question = $row_edit['faq_question'];

        $faq_ans = $row_edit['faq_ans'];
        
        
    }

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / Edit FAQ
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-pencil fa-fw"></i> Edit FAQ
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <form action="" class="form-horizontal" method="post"><!-- form-horizontal begin -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                           Question
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value=" <?php echo $faq_question; ?> " name="faq_question" type="text" class="form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->


                    <div class="form-group"><!-- form-group begin -->
                    
                    <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                    
                       Answer
                    
                    </label><!-- control-label col-md-3 finish --> 
                    
                    <div class="col-md-6"><!-- col-md-6 begin -->
                    
                        <input value=" <?php echo $faq_ans; ?> " name="faq_ans" type="text" class="form-control">
                    
                    </div><!-- col-md-6 finish -->
                
                </div><!-- form-group finish -->
                   
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                             
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value="Update" name="update" type="submit" class="form-control btn btn-primary">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                </form><!-- form-horizontal finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php  

          if(isset($_POST['update'])){
              
              $faq_question = $_POST['faq_question'];

              $faq_question =str_replace("'","\'",$faq_question);

              $faq_ans = $_POST['faq_ans'];

              $faq_ans =str_replace("'","\'",$faq_ans);
              
           
              
              $update_faq = "update faq set faq_question='$faq_question',faq_ans='$faq_ans' where faq_id='$faq_id'";
              
              $run_faq = mysqli_query($con,$update_faq);
              
              if($run_faq){
                  
                  echo "<script>alert('Your FAQ Has Been Updated')</script>";
                  
                  echo "<script>window.open('index.php?view_faq','_self')</script>";
                  
              }
              else{
                echo "<script>alert('Your FAQ is failed to Update!')</script>";
              }
              
          }

?>



<?php } ?> 