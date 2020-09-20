<?php include("../includes/db.php"); ?>

<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>Products</title>
<meta name="keywords" content="Products" />
<meta name="description" content="Products" />
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
<p><i></i>Your position : <a href="../index.php">Home</a>&nbsp;>&nbsp;<a href="index.php?main">Products</a></p>
</div>
<div class="sub_main overflow">
<div class="sub_left left">
<?php include("../includes/p_sidebar.php"); ?>
</div>
<div class="sub_right right">

<?php
                
                if(isset($_GET['main'])){
                    
                    include("main.php");
  
                }if(isset($_GET['cat_id'])){

                  $cat_id=$_GET['cat_id'];

                  ?>

                  

<div class="sub_pro">
<div class="mainbox">

<?php  

$get_cat = "select * from product_cat where cat_id=$cat_id ";
                        
$run_cat = mysqli_query($con,$get_cat);

if($row_cat=mysqli_fetch_array($run_cat)){
    
    $cat_id = $row_cat['cat_id'];

    $cat_title = $row_cat['cat_title'];

  



?>
<div class="main">
<a href="index.php?cat_id=<?php echo $cat_id; ?>" title="<?php echo $cat_title ; ?>"><p class="main_title wow bounceInUp"  data-wow-delay=".3s"><span class="title"><i> > </i><?php echo $cat_title ; ?></span></p></a>
<ul>
<?php  

$get_pro = "select * from products where cat_id=$cat_id  ";
                        
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

                  <?php
                  

                    
                    

                }


?>
</div>
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
<script type="text/javascript" src="../js/returnTop.js"></script>

</html>