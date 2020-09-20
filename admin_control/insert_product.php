<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Insert Products </title>
</head>
<body>
    
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <ol class="breadcrumb"><!-- breadcrumb Begin -->
            
            <li class="active"><!-- active Begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / Insert Products
                
            </li><!-- active Finish -->
            
        </ol><!-- breadcrumb Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
       
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <div class="panel panel-default"><!-- panel panel-default Begin -->
            
           <div class="panel-heading"><!-- panel-heading Begin -->
               
               <h3 class="panel-title"><!-- panel-title Begin -->
                   
                   <i class="fa fa-money fa-fw"></i> Insert Product 
                   
               </h3><!-- panel-title Finish --><br>
               <div class="alert alert-info">
                <strong>Warning!</strong> Product Image Size should be 800 X 600 px.
                </div>
               
           </div> <!-- panel-heading Finish -->
           
           <div class="panel-body"><!-- panel-body Begin -->
               
               <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Product Title </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_title" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Product Category </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <select name="product_cat" class="form-control"><!-- form-control Begin -->
                              
                              <option> Select a Category </option>
                              
                              <?php 
                              
                              $get_p_cats = "select * from product_cat";
                              $run_p_cats = mysqli_query($con,$get_p_cats);
                              
                              while ($row_p_cats=mysqli_fetch_array($run_p_cats)){
                                  
                                  $p_cat_id = $row_p_cats['cat_id'];
                                  $p_cat_title = $row_p_cats['cat_title'];
                                  
                                  echo "
                                  
                                  <option value='$p_cat_id'> $p_cat_title </option>
                                  
                                  ";
                                  
                              }
                              
                              ?>
                              
                          </select><!-- form-control Finish -->
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Product Main Image </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_img1" type="file" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Product Optional Image 1 </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_img2" type="file" class="form-control">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Product Optional Image 2 </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_img3" type="file" class="form-control form-height-custom">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   

                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Product Optional Image 3 </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_img4" type="file" class="form-control form-height-custom">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->

                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Product Weight (<i  style="font-weight: 100;">In KG</i>) </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_weight" type="text" class="form-control" >
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->

                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Product Model </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_model" type="text" class="form-control" >
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                  
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                       <label class="col-md-3 control-label"> Product Features </label> 
                       
                       <div class="col-md-6"><!-- col-md-6 Begin -->
                           
                           <textarea name="product_features" id="mytextarea" cols="19" rows="6" class="form-control"></textarea>
                           
                       </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->

                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Product Description <br> (<i style="font-weight: 100;">Display in the Superslider of index page</i>) </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <textarea name="product_desc" id="mytextarea" cols="19" rows="6" class="form-control"></textarea>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"></label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="submit" value="Insert Product" type="submit" class="btn btn-primary form-control">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
               </form><!-- form-horizontal Finish -->
               
           </div><!-- panel-body Finish -->
            
        </div><!-- canel panel-default Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
   
<script src="https://cdn.tiny.cloud/1/bwg0q0j9lxtive63e9uvn074bpdjtnbkd49jxu09mpp7tnb2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
      tinymce.init({
        selector: 'textarea'
      });
    </script>
</body>
</html>


<?php 

if(isset($_POST['submit'])){
    
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $product_weight = $_POST['product_weight'];
    $product_model = $_POST['product_model'];
    $product_features = $_POST['product_features'];
    $product_features =str_replace("'","\'",$product_features);
    $product_desc = $_POST['product_desc'];
    $product_desc =str_replace("'","\'",$product_desc);
    
    $product_img1 = $_FILES['product_img1']['name'];
    $product_img2 = $_FILES['product_img2']['name'];
    $product_img3 = $_FILES['product_img3']['name'];
    $product_img4 = $_FILES['product_img4']['name'];
    
    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    $temp_name2 = $_FILES['product_img2']['tmp_name'];
    $temp_name3 = $_FILES['product_img3']['tmp_name'];
    $temp_name4 = $_FILES['product_img4']['tmp_name'];
    
    move_uploaded_file($temp_name1,"../pic/$product_img1");
    move_uploaded_file($temp_name2,"../pic/$product_img2");
    move_uploaded_file($temp_name3,"../pic/$product_img3");
    move_uploaded_file($temp_name4,"../pic/$product_img4");
    
    $insert_product = "insert into products (cat_id,insertion_time,p_name,p_image,p_image1,p_image2,p_image3,p_weight,p_model,p_features,p_desc) values
     ('$product_cat',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_img4','$product_weight','$product_model','$product_features','$product_desc')";
    
    $run_product = mysqli_query($con,$insert_product);
    
    if($run_product){
        
        echo "<script>alert('Product has been inserted sucessfully')</script>";
        echo "<script>window.open('index.php?view_products','_self')</script>";
        
    }
    else
    {
        echo "<script>alert('Product insertion failed.')</script>";
    }
    
}

?>


<?php } ?>
