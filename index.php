
<?php include("includes/db.php"); ?>
<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title> LIBERTY TOOLS & MILL STORE</title>
<meta name="keywords" content="Tools & Stream Valve,Gas Valve,Pipe Fitting,Boiler,Spares,Regulator,Filter,S.S.Flexible Pipe,Pressure Gauge,Thermometer" />
<meta name="description" content="LIBERTY TOOLS & MILL STORE is a store where you get any kinds of Hardware like Tools & Stream Valve,Gas Valve,Pipe Fitting,Boiler,Spares,Regulator,Filter,S.S.Flexible Pipe,Pressure Gauge,Thermometer ,etc." />
<meta name="copyright" content="LIBERTY TOOLS & MILL STORE" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="alternate" media="handheld" href="#" />
<link rel="shortcut icon" href="favicon.png" />
<link type="text/css" rel="stylesheet" href="styles/style.css">
<link type="text/css" rel="stylesheet" href="styles/animate.css">

<style>
.nav ul li a.hoverho{color:#ff5200;;background:url(images/nav_bg.png) no-repeat bottom center;}


</style>
</head>
<body>

<div class="header">
<div class="top">
<div class="wrapper">
<div class="logo">
<a href="index.php"><img src="images/logo4.png"></a>
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
<li><a href="index.php" class="hoverho">Home</a></li>
<li><a href="about-us/index.php" class="hoverab">About us</a>
<div class="sub_nav">
<dl>
<dd><a href="about-us/our-service.php" title="Our Service">Our Service</a></dd>
<dd><a href="about-us/company-profile.php" title="Company Profile">Company Profile</a></dd>
<dd><a href="about-us/quality-control.php" title="Quality Control">Quality Control</a></dd> 
</dl>
</div>
</li>
<li><a href="products/index.php?main" class="hoverpr">products</a>
<div class="sub_nav">
<dl>
<?php  

$get_cat_m = "select * from product_cat ";
                        
$run_cat_m = mysqli_query($con,$get_cat_m);

while($row_cat_m=mysqli_fetch_array($run_cat_m)){
    
    $cat_id_m = $row_cat_m['cat_id'];

    $cat_title_m = $row_cat_m['cat_title'];


?>
<dd><a href="products/index.php?cat_id=<?php echo $cat_id_m; ?>" title="<?php echo $cat_title_m ; ?>"><?php echo $cat_title_m ; ?></a></dd>
<?php   }  ?>
</dl>
</div>
</li>

<li><a href="faq/index.php" class="hoverfa">FAQ</a></li>
<li><a href="contact.php" class="hoverco">Contact us</a></li>
</ul>
</div>
</div>
</div>
</div>

<div class="banner">
<ul class="slide">
<?php 
                
                $get_slides = "select * from slide";
    
                $run_slides = mysqli_query($con,$get_slides);
    
                while($row_slides=mysqli_fetch_array($run_slides)){
                    
                    $slide_id = $row_slides['slide_id'];
                    
                    $slide_name = $row_slides['slide_name'];
                    
                    $slide_image = $row_slides['slide_image'];
            
            ?>
<li><a href="#" title=""><img src="pic/<?php echo $slide_image?>" alt="<?php echo $slide_name?>" /></a></li>
               
                <?php  }?>

</ul>
<a class="prev" href="javascript:void(0)"> < </a> 
<a class="next" href="javascript:void(0)"> > </a>
</div>

<div class="center">
<div class="cbox01">
<div class="wrapper">
<a href="products/index.php?main"><p class="title uppercase wow fadeInRight" data-wow-delay=".1s">MAIN PRODUCTS</p></a>
<div class="mainbox">
<div class="slideGroup">
<div class="parHd wow fadeInUp" data-wow-delay=".1s">
<ul>

<?php  

$get_cat = "select * from product_cat LIMIT 9 ";
                        
$run_cat = mysqli_query($con,$get_cat);

while($row_cat=mysqli_fetch_array($run_cat)){
    
    $cat_id = $row_cat['cat_id'];

    $cat_title = $row_cat['cat_title'];


?>
<li><?php echo $cat_title; ?></li>

<?php }  ?>
</ul>
</div>
<div class="parBd wow fadeInUp" data-wow-delay=".2s">
<?php  

$get_cat = "select * from product_cat LIMIT 9";
                        
$run_cat = mysqli_query($con,$get_cat);

while($row_cat=mysqli_fetch_array($run_cat)){
    
    $cat_id = $row_cat['cat_id'];

    $cat_title = $row_cat['cat_title'];


?>
<div class="slideBox"> <a class="sPrev" href="javascript:void(0)"> < </a>
<ul>
<?php
$get_pro = "select * from products where cat_id=$cat_id  ";
                        
$run_pro = mysqli_query($con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){
    
    $p_id = $row_pro['p_id'];

    $cat_id = $row_pro['cat_id'];

    $p_name = $row_pro['p_name'];

    $p_image = $row_pro['p_image'];

    $p_desc = $row_pro['p_desc'];



?>
<li>
<a href="products/product.php?p_id=<?php echo $p_id; ?>"><p class="pic"><img src="pic/<?php echo $p_image; ?>" alt="<?php echo $p_name; ?> "></p>
<dl>
<dt><?php echo $p_name; ?> </dt>
<dd><?php echo $p_desc; ?> </dd>
</dl></a>
</li>
<?php  } ?>
</ul>
<a class="sNext" href="javascript:void(0)"> > </a> 
</div>

<?php } ?>




</div>

</div>
</div>
</div>
</div>
<div class="cbox02">
<div class="wrapper">
<div class="mainbox">
<div class="main_L wow fadeInLeft">
<a href="about-us/index.php"><p>LIBERTY TOOLS & MILL STORE. Headquartered in ZhengZhou.Group consists of six companies, in addition to HeNan WeiSiDun Import and Export Trading Co., Ltd. which is specialized in the import and export of foreign trade, the other five companies all producing
factories, mainly located in Tianjin, Hebei, Liaoning and Zhejiang. The major products for a variety of valves of cast iron, steel, stainless steel, copper materials; malleable iron and stainless steel pipe fittings; ductile iron, stainless steel fittings; flanges and
other products, mainly used in construction, petroleum, chemical, power, water supply and drainage, municipal, medical people's livelihood and other industries.</p></a>
</div>
<div class="main_R wow fadeInRight">
<a href="about-us/index.php"><p class="title uppercase"><i></i>ABOUT LIBERTY</p></a>
<div class="rollbox">
<div class="btn wow bounceInRight"><a id="prev" class="btn01"></a><a id="next" class="btn02"></a></div>
<div id="cpzsm01">
<ul>
<li>
<a href="about-us/index.php"><p class="pic"><img src="images/A.jpg"></p></a>
</li>
<li>
<a href="about-us/index.php"><p class="pic"><img src="images/B.jpg"></p></a>
</li>
<li>
<a href="about-us/index.php"><p class="pic"><img src="images/C.jpg"></p></a>
</li>
<li>
<a href="about-us/index.php"><p class="pic"><img src="images/dd.jpg"></p></a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="footer">
<div class="fbox01">
<div class="wrapper">
<div class="f_top overflow">
<div class="main_L left overflow wow fadeInLeft">
<a href="index.php"><p class="f_logo left"><img src="images/f_logo4.png"></p>
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
<a href="contact.php"><p class="title uppercase">CONTACT</p></a>
<div class="main">
<p class="tel"><i></i>Tel:2851328
</p>
<p class="fax"><i></i>libertytools.bd@gmail.com</p>
<p class="email"><i></i>Fax:880-31610277</p>
<p class="tel"><i></i>Mobile:01819-322186</p>
<p class="add"><i></i><span class="title01">Address:</span><span class="title02">35-36,Liberty Tower,183,Jubilee Road,Chattogram,Bangladesh</span></p>
</div>
</div>
<div class="main_C left wow fadeInUp" data-wow-delay=".2s">
<a href="products/index.php?main"><p class="title uppercase">product list</p></a>
<div class="main">
<?php  

$get_cat = "select * from product_cat ";
                        
$run_cat = mysqli_query($con,$get_cat);

while($row_cat=mysqli_fetch_array($run_cat)){
    
    $cat_id = $row_cat['cat_id'];

    $cat_title = $row_cat['cat_title'];


?>
<a href="products/index.php?cat_id=<?php echo $cat_id; ?>" title="<?php echo $cat_title ; ?>"><p><i></i><?php echo $cat_title ; ?></p></a>
<?php   }  ?>
</div>
</div>

</div>
</div>
</div>
<div class="fbox02">
<div class="wrapper">
<p>Copyright ©LIBERTY TOOLS & MILL STORE.</p>
</div>
</div>
</div>

</body>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script src="js/jquery.superslide.2.1.1.js" type="text/javascript"></script>

<script type="text/javascript">
    jQuery(".slideGroup .slideBox").slide({
		mainCell:"ul",
		vis:4,
		prevCell:".sPrev",
		nextCell:".sNext",
		effect:"leftLoop",
		autoPlay:true
		});
    jQuery(".slideGroup").slide({
		titCell:".parHd li",
		mainCell:".parBd",
		trigger:"click"
		});
</script>
<script type="text/javascript" language="javascript" src="js/jcarousellite.min.js"></script>
<script src="js/jquery.tabs.js"></script>
<script src="js/wow.min.js"></script>
<script>
if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
	new WOW().init();
};
</script>

<script type="text/javascript" src="js/returnTop.js"></script>

</html>