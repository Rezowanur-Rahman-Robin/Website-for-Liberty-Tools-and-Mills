<?php include("../includes/db.php"); ?>


<?php 
  if(isset($_GET['p_id'])){
                    
    $p_id=$_GET['p_id'];


    
$get_pro = "select * from products where p_id=$p_id  ";
                        
$run_pro = mysqli_query($con,$get_pro);

if($row_pro=mysqli_fetch_array($run_pro)){
    
    $p_id = $row_pro['p_id'];

    $cat_id = $row_pro['cat_id'];

    $p_name = $row_pro['p_name'];

    $p_image1 = $row_pro['p_image'];

    $p_image2 = $row_pro['p_image1'];

    $p_image3 = $row_pro['p_image2'];

    $p_image4 = $row_pro['p_image3'];

    

    $p_weight = $row_pro['p_weight'];

    $p_model = $row_pro['p_model'];

    $p_features = $row_pro['p_features'];

    $p_desc = $row_pro['p_desc'];

    
$get_cat = "select * from product_cat where cat_id=$cat_id ";
                        
$run_cat = mysqli_query($con,$get_cat);

if($row_cat=mysqli_fetch_array($run_cat)){
    
    $cats_id = $row_cat['cat_id'];
    $cats_title = $row_cat['cat_title'];

  
}

    

}


}

?>
<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title><?php echo $p_name; ?></title>
<meta name="keywords" content="<?php echo $p_name; ?>" />
<meta name="description" content="<?php echo $p_name; ?>" />
<meta name="copyright" content="LIBERTY TOOLS & MILL STORE" />
<link rel="shortcut icon" href="../favicon.png" />
<link type="text/css" rel="stylesheet" href="../styles/style.css">
<link type="text/css" rel="stylesheet" href="../styles/animate.css">

<style>
.nav ul li a.hoverpr{color:#ff5200;background:url(../images/nav_bg.jpg) no-repeat bottom center;}
</style>
</head>
<body>
<div class="header">
<div class="top">
<div class="wrapper">
<div class="logo">
<a href="../index.php"><img src="../images/logo4.png"></a>
</div>
<div class="topbox">
<a href="mailto:libertytools.bd@gmail.com"><p class="email left"><i></i>libertytools.bd@gmail.com</p>
</div>
</div>
</div>
<div class="navbox">
<div class="wrapper">
<div class="nav right">
<ul>
<li><a href="../index.php" class="hoverho">Home</a></li>
<li><a href="../about-us/index.php" class="hoverab">About us</a>
<div class="sub_nav">
<dl>
<dd><a href="../about-us/our-service.php" title="Our Service">Our Service</a></dd><dd><a href="../about-us/company-profile.php" title="Company Profile">Company Profile</a></dd><dd><a href="../about-us/quality-control.php" title="Quality Control">Quality Control</a></dd> <dd><a href="../quality-test/index.php">Quality Test</a></dd>
</dl>
 </div>
</li>
<li><a href="index.php?main" class="hoverpr">products</a>
<div class="sub_nav">
<dl>
<?php  

$get_cat = "select * from product_cat ";
                        
$run_cat = mysqli_query($con,$get_cat);

while($row_cat=mysqli_fetch_array($run_cat)){
    
    $cat_id = $row_cat['cat_id'];

    $cat_title = $row_cat['cat_title'];


?>
<dd><a href="index.php?cat_id=<?php echo $cat_id; ?>" title="<?php echo $cat_title ; ?>"><?php echo $cat_title ; ?></a></dd>
<?php   }  ?>
</dl>
</div>
</li>
<li><a href="../faq/index.php" class="hoverfa">FAQ</a></li>
<li><a href="../contact.php" class="hoverco">Contact us</a></li>
</ul>
</div>
</div>
</div>
</div>

<div class="sub_banner"><img src="../images/pro.jpg"></div>

<div class="content">
<div class="wrapper">
<div class="breadcrumbs wow bounceInRight">
<p><i></i>Your position : <a href="../index.php">Home</a>&nbsp;>&nbsp;<a href="../index.php?main">Products</a>&nbsp;>&nbsp;<a href="index.php?cat_id=<?php echo $cats_id; ?>"><?php echo $cats_title; ?></a></p>
</div>
<div class="sub_top">
<div class="prodetail_top wow fadeInUp">
<div id="preview">
<div class="jqzoom" id="spec-n1">
<img width="458" src="../pic/<?php echo $p_image1 ; ?>" jqimg="../pic/<?php echo $p_image1 ; ?>" /></div>
<div id="spec-n5">
<div class="control" id="spec-left"> </div>
<div id="spec-list">
<ul class="list-h">
<li><img src="../pic/<?php echo $p_image1 ; ?>" alt="<?php echo $p_name ; ?>"></li>
<li><img src="../pic/<?php echo $p_image2 ; ?>" alt="<?php echo $p_name ; ?>" /></li>
<li><img src="../pic/<?php echo $p_image3 ; ?>" alt="<?php echo $p_name ; ?>" /></li>
<li><img src="../pic/<?php echo $p_image4 ; ?>" alt="<?php echo $p_name ; ?>" /></li>
 </ul>
</div>
<div class="control" id="spec-right"> </div>
</div>
</div>
</div>
<div class="protop_right">
<h1><?php echo $p_name ; ?></h1>
<p class="text"><span>Features:</span>
<?php echo $p_features ; ?>
</p>

<p class="help"><span>Parameters:</span>
Weight: <?php echo $p_weight ; ?><br>
Model: <?php echo $p_model ; ?><br>
Weight: <?php echo $p_weight ; ?><br>
Model: <?php echo $p_model ; ?><br>

</p>
<p class="help"><?php echo $p_desc ; ?></p>

</div>
</div>
</div>

<div class="footer">
<div class="fbox01">
<div class="wrapper">
<div class="f_top overflow">
 <div class="main_L left overflow wow fadeInLeft">
<a href="../index.php"><p class="f_logo left"><img src="../images/f_logo4.png"></p>
<p class="main left">The company's philosophy is: "the pursuit of excellence in quality, improve goods and services" and to explore and pursue endless with the spirit of "people-oriented, technological innovation."</p></a>
</div>
<div class="main_R right wow fadeInRight">
<p class="icons">
<a href="https://www.facebook.com/hawsd/" class="f_icon01"></a>
<a href="https://twitter.com/HNWeiSiDun" class="f_icon02"></a>
<a href="https://plus.google.com/117075405991077229833" class="f_icon03"></a>
<a href="#" class="f_icon04"></a>
<a href="https://www.youtube.com/dashboard?o=U" class="f_icon05"></a></p>
</div>
</div>
<div class="f_bottom overflow">
<div class="main_L left wow fadeInUp" data-wow-delay=".1s">
<a href="../contact.php"><p class="title uppercase">CONTACT</p></a>
<div class="main">
<p class="tel"><i></i>Tel:2851328
              </p>
              <a href="mailto:libertytools.bd@gmail.com">
                <p class="fax"><i></i>libertytools.bd@gmail.com</p>
              </a>
              <p class="tel"><i></i>Mobile:01819-322186</p>
              <p class="email"><i></i>Fax:880-31610277</p>
              <p class="add"><i></i><span class="title01">Address:</span><span class="title02">35-36,Liberty Tower,183,Jubilee Road,Chattogram,Bangladesh</span></p>
</div>
</div>
<div class="main_C left wow fadeInUp" data-wow-delay=".2s">
<a href="index.php?main"><p class="title uppercase">product list</p></a>
<div class="main">
<?php  

$get_cat = "select * from product_cat ";
                        
$run_cat = mysqli_query($con,$get_cat);

while($row_cat=mysqli_fetch_array($run_cat)){
    
    $cat_id = $row_cat['cat_id'];

    $cat_title = $row_cat['cat_title'];


?>
<a href="index.php?cat_id=<?php echo $cat_id; ?>" title="<?php echo $cat_title ; ?>"><p><i></i><?php echo $cat_title ; ?></p></a>
<?php   }  ?>
</div>
</div>

</div>
</div>
</div>
<div class="fbox02">
<div class="wrapper">
<p>Copyright @LIBERTY TOOLS & MILL STORE.</p>
</div>
</div>
</div>

</body>
<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" language="javascript" src="../js/jcarousellite.min.js"></script>
<script src="../js/wow.min.js"></script>
<script>
if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
	new WOW().init();
};
</script>

<script type="text/javascript" src="../js/163css.js"></script>
<script type="text/javascript" src="../js/lib.js"></script>
<script type="text/javascript" src="../js/addthis_widget.js#pubid=ra-537d5eb9453bc4a7" async="async"></script>
<script type="text/javascript" src="../js/returnTop.js"></script>

</html>