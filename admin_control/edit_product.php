<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['edit_product'])){

        $p_id=$_GET['edit_product'];

        
        $get_pro = "select * from products where p_id=$p_id";
                                
        $run_pro = mysqli_query($con,$get_pro);

        if($row_pro=mysqli_fetch_array($run_pro)){
        
        $pro_id = $row_pro['p_id'];
                                    
        $pro_title = $row_pro['p_name'];
        
        $pro_img1 = $row_pro['p_image'];

        $pro_img2 = $row_pro['p_image1'];

        $pro_img3 = $row_pro['p_image2'];

        $pro_img4 = $row_pro['p_image3'];
        
        $cat_id = $row_pro['cat_id'];
        
        $p_weight = $row_pro['p_weight'];
        
        $p_model = $row_pro['p_model'];

        $p_features = $row_pro['p_features'];
        
        $p_desc = $row_pro['p_desc'];
        
        $pro_date = $row_pro['insertion_time'];


        $get_product_cat = "select * from product_cat where cat_id=$cat_id";

        $run_product_cat = mysqli_query($con,$get_product_cat);

        if($row_product_cat=mysqli_fetch_array($run_product_cat)){

            $cat_id = $row_product_cat['cat_id'];

            $cat_title = $row_product_cat['cat_title'];

            
        }
        
    }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Edit Product </title>
</head>
<body>
    
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <ol class="breadcrumb"><!-- breadcrumb Begin -->
            
            <li class="active"><!-- active Begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / Edit Product
                
            </li><!-- active Finish -->
            
        </ol><!-- breadcrumb Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
       
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <div class="panel panel-default"><!-- panel panel-default Begin -->
            
           <div class="panel-heading"><!-- panel-heading Begin -->
               
               <h3 class="panel-title"><!-- panel-title Begin -->
                   
                   <i class="fa fa-money fa-fw"></i> Edit Product 
                   
               </h3><!-- panel-title Finish --><br>
               <div class="alert alert-info">
                <strong>Warning!</strong> Product Image Size should be 800 X 600 px.
                </div>
               
           </div> <!-- panel-heading Finish -->
           
           <div class="panel-body"><!-- panel-body Begin -->
               
               <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Product Name </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_title" type="text" class="form-control" required value="<?php echo $pro_title; ?>">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Product Category </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <select name="product_cat" class="form-control"><!-- form-control Begin -->
                              
                              <option value="<?php echo $cat_id; ?>"> <?php echo $cat_title; ?> </option>
                              
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
                          
                          <input name="product_img1" type="file" class="form-control" >
                          
                          <br>
                          
                          <img width="70" height="70" src="../pic/<?php echo $pro_img1; ?>" alt="<?php echo $pro_img1; ?>">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Product Optional Image 1  </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_img2" type="file" class="form-control">
                          
                          <br>
                          
                          <img width="70" height="70" src="../pic/<?php echo $pro_img2; ?>" alt="<?php echo $pro_img2; ?>">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Product Optional Image 2  </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_img3" type="file" class="form-control form-height-custom">
                          
                          <br>
                          
                          <img width="70" height="70" src="../pic/<?php echo $pro_img3; ?>" alt="<?php echo $pro_img3; ?>">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->

                   <div class="form-group"><!-- form-group Begin -->
                       
                       <label class="col-md-3 control-label"> Product Optional Image 3  </label> 
                       
                       <div class="col-md-6"><!-- col-md-6 Begin -->
                           
                           <input name="product_img4" type="file" class="form-control form-height-custom">
                           
                           <br>
                           
                           <img width="70" height="70" src="../pic/<?php echo $pro_img4; ?>" alt="<?php echo $pro_img4; ?>">
                           
                       </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->
                   

                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Product Weight (<i  style="font-weight: 100;">In KG</i>) </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_weight" type="text" class="form-control" value="<?php echo $p_weight; ?>">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                       <label class="col-md-3 control-label"> Product Model </label> 
                       
                       <div class="col-md-6"><!-- col-md-6 Begin -->
                           
                           <input name="product_model" type="text" class="form-control" value="<?php echo $p_model; ?>">
                           
                       </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->

                    <div class="form-group"><!-- form-group Begin -->
                       
                       <label class="col-md-3 control-label"> Product Features </label> 
                       
                       <div class="col-md-6"><!-- col-md-6 Begin -->
                           
                           <textarea name="product_features" cols="19" rows="10" class="form-control"><?php echo $p_features; ?></textarea>
                           
                       </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->
                   
                    <div class="form-group"><!-- form-group Begin -->
                       
                       <label class="col-md-3 control-label"> Product Description </label> 
                       
                       <div class="col-md-6"><textarea name="product_desc" cols="19" rows="10" class="form-control"><?php echo $p_desc; ?></textarea>
                           
                       </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"></label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="update" value="Update Product" type="submit" class="btn btn-primary form-control">
                          
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

if(isset($_POST['update'])){
    
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
    
    
    
    if(empty($product_img1)){
       
        $get_pro = "select * from products where p_id=$p_id";
                                
        $run_pro = mysqli_query($con,$get_pro);

        if($row_pro=mysqli_fetch_array($run_pro)){
        
        $product_img1 = $row_pro['p_image'];
        }
    }
  

    if(empty($product_img2)){
       
        $get_pro = "select * from products where p_id=$p_id";
                                
        $run_pro = mysqli_query($con,$get_pro);

        if($row_pro=mysqli_fetch_array($run_pro)){
        
        $product_img2 = $row_pro['p_image1'];
        }
    }


    if(empty($product_img3)){
       
        $get_pro = "select * from products where p_id=$p_id";
                                
        $run_pro = mysqli_query($con,$get_pro);

        if($row_pro=mysqli_fetch_array($run_pro)){
        
        $product_img3 = $row_pro['p_image2'];
        }
    }

    if(empty($product_img4)){
       
        $get_pro = "select * from products where p_id=$p_id";
                                
        $run_pro = mysqli_query($con,$get_pro);

        if($row_pro=mysqli_fetch_array($run_pro)){
        
        $product_img4 = $row_pro['p_image3'];
        }
    }


    
    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    $temp_name2 = $_FILES['product_img2']['tmp_name'];
    $temp_name3 = $_FILES['product_img3']['tmp_name'];
    $temp_name4 = $_FILES['product_img4']['tmp_name'];
    
    move_uploaded_file($temp_name1,"../pic/$product_img1");
    move_uploaded_file($temp_name2,"../pic/$product_img2");
    move_uploaded_file($temp_name3,"../pic/$product_img3");
    move_uploaded_file($temp_name4,"../pic/$product_img4");
    
    $update_product = "update products set cat_id='$product_cat',insertion_time=NOW(),
    p_name='$product_title',p_image='$product_img1',
    p_image1='$product_img2',p_image2='$product_img3',p_image3='$product_img4',
    p_weight='$product_weight',p_model='$product_model',p_features='$product_features',p_desc='$product_desc' where p_id='$pro_id'";
    
    $run_product = mysqli_query($con,$update_product);
    
    if($run_product){
        
       echo "<script>alert('Your product has been updated Successfully')</script>"; 
        
       echo "<script>window.open('index.php?view_products','_self')</script>"; 
        
    }

    else{
        echo "<script>alert('Failed to Update Product.')</script>"; 
        
    }
    
}

?>


<?php } ?>