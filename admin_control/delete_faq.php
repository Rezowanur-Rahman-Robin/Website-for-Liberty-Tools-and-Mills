<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_faq'])){
        
        $delete_faq_id = $_GET['delete_faq'];
        
        $delete_faq= "delete from faq where faq_id='$delete_faq_id'";
        
        $run_delete = mysqli_query($con,$delete_faq);
        
        if($run_delete){
            
            echo "<script>alert('One of Your FAQ Has Been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_faq','_self')</script>";
            

        }

        else{
            echo "<script>alert('FAQ Delation Failed!')</script>";
        }
        
    }

?>




<?php } ?>