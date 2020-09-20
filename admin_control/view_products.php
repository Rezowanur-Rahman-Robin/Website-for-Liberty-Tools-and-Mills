<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / View Products
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  View Products
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> Product NO: </th>
                                <th> Product Name: </th>
                                <th> Product Image: </th>
                                <th> Product Category: </th>
                                <th> Product Weight: </th>
                                <th> Product Model: </th>
                                <th> Product Features: </th>
                                <th> Product Describtion: </th>
                                <th> Insertion Time: </th>
                                <th> Product Edit: </th>
                                <th> Product Delete: </th>
                              
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                $i=0;
                            
                                $get_pro = "select * from products";
                                
                                $run_pro = mysqli_query($con,$get_pro);
          
                                while($row_pro=mysqli_fetch_array($run_pro)){
                                    
                                    $pro_id = $row_pro['p_id'];
                                    
                                    $pro_title = $row_pro['p_name'];
                                    
                                    $pro_img = $row_pro['p_image'];
                                    
                                    $cat_id = $row_pro['cat_id'];
                                    
                                    $p_weight = $row_pro['p_weight'];
                                    
                                    $p_model = $row_pro['p_model'];

                                    $p_features = $row_pro['p_features'];

                                    $p_features =strip_tags($p_features);
                                    
                                    $p_desc = $row_pro['p_desc'];

                                    $p_desc =strip_tags($p_desc);
                                    
                                    $pro_date = $row_pro['insertion_time'];


                                    $get_product_cat = "select * from product_cat where cat_id=$cat_id";
          
                                    $run_product_cat = mysqli_query($con,$get_product_cat);
              
                                    if($row_product_cat=mysqli_fetch_array($run_product_cat)){

                                        $cat_id = $row_product_cat['cat_id'];

                                        $cat_title = $row_product_cat['cat_title'];

                                        
                                    }
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?>. </td>
                                <td> <?php echo $pro_title; ?> </td>
                                <td> <img src="../pic/<?php echo $pro_img; ?>" width="80" height="80"></td>
                                <td> <?php echo $cat_title; ?> </td>
                                <td> <?php echo $p_weight; ?> KG</td>
                                <td> <?php echo $p_model; ?></td>
                                <td> <?php 
                                          
                                          if (strlen($p_features) >= 50) {
                                            echo substr($p_features, 0, 49). " ...... " . substr($p_features, -15);
                                        }
                                        else {
                                            echo $p_features;
                                        }
                                
                                     ?></td>
                                <td> <?php 
                              if (strlen($p_desc) >= 50) {
                                echo substr($p_desc, 0, 49). " ... " . substr($p_desc, -15);
                            }
                            else {
                                echo $p_desc;
                            }
                             
                                
                                
                                     ?> </td>
                                <td> <?php  echo date('h:i:s A d/m/Y', strtotime($pro_date));  ?></td>
                                <td> 
                                     
                                     <a href="index.php?edit_product=<?php echo $pro_id; ?>" class="btn btn-info">
                                     
                                        <i class="fa fa-pencil"></i> Edit
                                    
                                     </a> 
                                    
                                </td>

                                <td> 
                                     
                                     <a href="index.php?delete_product=<?php echo $pro_id; ?>" class="btn btn-danger">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
                                     
                                </td>
                              
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                            
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php } ?>