<?php include("db.php"); ?>
<div class="Lbox04 wow fadeInLeft" data-wow-delay=".0s">
            <p class="left_title uppercase"><a href="index.php">about us</a></p>
            <div class="left_nav">
              <dl>
                <dt><a href="our-service.php">Our Service</a></dt>
              </dl>
              <dl>
                <dt><a href="company-profile.php">Company Profile</a></dt>
              </dl>
              <dl>
                <dt><a href="quality-control.php">Quality Control</a></dt>
              </dl>
            </div>
          </div>
          <div class="Lbox01 wow fadeInLeft" data-wow-delay=".2s">
            <p class="left_title uppercase"><a href="../products/index.php">PRODUCTS LIST</a></p>
            <div class="left_nav">

            <?php  

$get_cat = "select * from product_cat ";
                        
$run_cat = mysqli_query($con,$get_cat);

while($row_cat=mysqli_fetch_array($run_cat)){
    
    $cat_id = $row_cat['cat_id'];

    $cat_title = $row_cat['cat_title'];

  



?>
              <dl>
                <dt><a href="../products/index.php?cat_id=<?php echo $cat_id; ?>" title="<?php echo $cat_title ; ?>"><?php echo $cat_title ; ?><i></i></a></dt>

              </dl>

<?php  } ?>
            
            </div>
          </div>