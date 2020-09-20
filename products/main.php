


<div class="sub_pro">
<div class="mainbox">

<?php  

$get_cat = "select * from product_cat ";
                        
$run_cat = mysqli_query($con,$get_cat);

while($row_cat=mysqli_fetch_array($run_cat)){
    
    $cat_id = $row_cat['cat_id'];

    $cat_title = $row_cat['cat_title'];

  



?>
<div class="main">
<a href="index.php?cat_id=<?php echo $cat_id; ?>" title="<?php echo $cat_title ; ?>"><p class="main_title wow bounceInUp"  data-wow-delay=".3s"><span class="title"><i> > </i><?php echo $cat_title ; ?></span><span class="more uppercase">MORE +</span></p></a>
<ul>
<?php  

$get_pro = "select * from products where cat_id=$cat_id LIMIT 3  ";
                        
$run_pro = mysqli_query($con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){
    
    $p_id = $row_pro['p_id'];

    $cat_id = $row_pro['cat_id'];

    $p_name = $row_pro['p_name'];

    $p_image = $row_pro['p_image'];

    


?>

<li class="wow bounceInUp" data-wow-delay=".1s">
<a href="product.php?p_id=<?php echo $p_id ; ?>"><p class="pic"><img src="../pic/<?php echo $p_image ; ?>" alt="<?php echo $p_name ; ?>"></p>
<dl>
<dt><?php echo $p_name ; ?></dt>
</dl></a>
</li>
<?php   }  ?>
</ul>
</div>
<?php   }  ?>

</div>
</div>