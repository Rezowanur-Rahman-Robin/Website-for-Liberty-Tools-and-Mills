
<?php include("../includes/db.php"); ?>
<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>Faq</title>
<meta name="keywords" content="Faq" />
<meta name="description" content="Faq" />
<meta name="copyright" content="LIBERTY TOOLS & MILL STORE" />
<script id="allmobilize" charset="utf-8" src="../../a.yunshipei.com/18c34d7ff32c38395e7748c475678e79/allmobilize.min.js"></script><meta http-equiv="Cache-Control" content="no-siteapp" /><link rel="alternate" media="handheld" href="#" />
<link rel="shortcut icon" href="../favicon.png" />
<link type="text/css" rel="stylesheet" href="../styles/style.css">
<link type="text/css" rel="stylesheet" href="../styles/animate.css">

<style>
.nav ul li a.hoverfa{color:#ff5200;background:url(../images/nav_bg.jpg) no-repeat bottom center;}
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
</a>

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
<dd><a href="../about-us/our-service.php" title="Our Service">Our Service</a></dd>
<dd><a href="../about-us/company-profile.php" title="Company Profile">Company Profile</a></dd>
<dd><a href="../about-us/quality-control.php" title="Quality Control">Quality Control</a></dd> 

</dl>
</div>
</li>
<li><a href="../products/index.php?main" class="hoverpr">products</a>
<div class="sub_nav">
<dl>
<?php  

$get_cat = "select * from product_cat ";
                        
$run_cat = mysqli_query($con,$get_cat);

while($row_cat=mysqli_fetch_array($run_cat)){
    
    $cat_id = $row_cat['cat_id'];

    $cat_title = $row_cat['cat_title'];


?>
<dd><a href="../products/index.php?cat_id=<?php echo $cat_id; ?>" title="<?php echo $cat_title ; ?>"><?php echo $cat_title ; ?></a></dd>
<?php   }  ?>
</dl>
</div>
</li>
<li><a href="index.php" class="hoverfa">FAQ</a></li>
<li><a href="../contact.php" class="hoverco">Contact us</a></li>
</ul>
</div>
</div>
</div>
</div>

<div class="sub_banner"><img src="../images/faq.jpg"></div>

<div class="content">
<div class="wrapper">
<div class="breadcrumbs wow bounceInRight">
<p><i></i>Your position : <a href="../index.php">Home</a>&nbsp;>&nbsp;<a href="index.php">Faq</a></p>
</div>
<div class="sub_main overflow">
<div class="sub_left left">

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

<?php } ?>
              
            </div>
          </div>

</div>
<div class="sub_right right">
<div class="sub_faq">
<p class="titlebox01 wow fadeInUp">Faq</p>
<div class="mainbox">
<ul>
<?php  

$get_faq = "select * from faq ";
                        
$run_faq = mysqli_query($con,$get_faq);

while($row_faq=mysqli_fetch_array($run_faq)){
    
    $faq_id = $row_faq['faq_id'];

    $faq_question = $row_faq['faq_question'];

    $faq_ans = $row_faq['faq_ans'];

    


?>

<li class="wow fadeInUp">
<p class="pic"></p>
<dl>
<dt>Question : <?php echo $faq_question;  ?> </dt>
<dd>Answer   : <?php echo $faq_ans;  ?></dd>
</dl>
</li>
<?php   }  ?>
</ul>
</div>
<div class="page"></div>
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
<a href="../index.php"><p class="f_logo left"><img src="../images/f_logo4.png"></p>
<p class="main left">The company's philosophy is: "the pursuit of excellence in quality, improve goods and services" and to explore and pursue endless with the spirit of "people-oriented, technological innovation."</p></a>
</div>
<div class="main_R right wow fadeInRight">
<p class="icons">
<a href="https://www.facebook.com/haws" class="f_icon01"></a>
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
<a href="../products/index.php?main"><p class="title uppercase">product list</p></a>
<div class="main">
<?php  

$get_cat = "select * from product_cat ";
                        
$run_cat = mysqli_query($con,$get_cat);

while($row_cat=mysqli_fetch_array($run_cat)){
    
    $cat_id = $row_cat['cat_id'];

    $cat_title = $row_cat['cat_title'];


?>
<a href="../products/index.php?cat_id=<?php echo $cat_id; ?>" title="<?php echo $cat_title ; ?>"><p><i></i><?php echo $cat_title ; ?></p></a>
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