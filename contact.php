
<?php include("includes/db.php"); ?>

<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>Contact Us</title>
<meta name="keywords" content="Contact Us" />
<meta name="description" content="Contact Us" />
<meta name="copyright" content="LIBERTY TOOLS & MILL STORE" />
<meta http-equiv="Cache-Control" content="no-siteapp" /><link rel="alternate" media="handheld" href="#" />
<link rel="shortcut icon" href="favicon.png" />
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css' />

<link type="text/css" rel="stylesheet" href="styles/style.css">
<link type="text/css" rel="stylesheet" href="styles/animate.css">

<style>
.nav ul li a.hoverco{color:#ff5200;background:url(images/nav_bg.jpg) no-repeat bottom center;}

a{
  font-weight:500;

}
a:hover{
  text-decoration:none;
}
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

$get_cat = "select * from product_cat ";
                        
$run_cat = mysqli_query($con,$get_cat);

while($row_cat=mysqli_fetch_array($run_cat)){
    
    $cat_id = $row_cat['cat_id'];

    $cat_title = $row_cat['cat_title'];


?>
<dd><a href="products/index.php?cat_id=<?php echo $cat_id; ?>" title="<?php echo $cat_title ; ?>"><?php echo $cat_title ; ?></a></dd>
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

<div class="sub_banner"><img src="images/contact.png"></div>

<div class="content">
<div class="wrapper">
<div class="breadcrumbs wow bounceInRight">
<p><i></i>Your position : <a href="index.php">Home</a>&nbsp;>&nbsp;<a href="contact.php">Contact US</a></p>
</div>
<div class="sub_main overflow">
<div class="sub_left left">

          <div class="Lbox01 wow fadeInLeft" data-wow-delay=".2s">
            <p class="left_title uppercase"><a href="products/index.php">PRODUCTS LIST</a></p>
            <div class="left_nav">

            <?php  

$get_cat = "select * from product_cat ";
                        
$run_cat = mysqli_query($con,$get_cat);

while($row_cat=mysqli_fetch_array($run_cat)){
    
    $cat_id = $row_cat['cat_id'];

    $cat_title = $row_cat['cat_title'];


?>
              <dl>
                <dt><a href="products/index.php?cat_id=<?php echo $cat_id; ?>" title="<?php echo $cat_title ; ?>"><?php echo $cat_title ; ?><i></i></a></dt>

              </dl>

<?php } ?>
              
            </div>
          </div>

</div>
<div class="sub_right right">
<div class="sub_con">
<p class="titlebox wow fadeInUp">LIBERTY TOOLS & MILL STORE</p>
<div class="mainbox">
<p class="name wow fadeInUp"><span style="font-size: 14px;">&nbsp;<span class="title01">Contact:</span>&nbsp;</span>01819-322186</p>
<p class="tel wow fadeInUp"><span style="font-size: 14px;"><i>&nbsp;</i><span class="title01">Tel:</span>+ 880&nbsp;</span>2851328</p>
<p class="email wow fadeInUp"><a href="#"><span style="font-size: 14px;"><i>&nbsp;</i><span class="title01">E-mail:</span></span></a><a href="mailto:libertytools.bd@gmail.com"><span style="font-size: 14px;">&nbsp;libertytools.bd@gmail.com<br />
</span></a></p>
<p class="email wow fadeInUp"><span style="font-size: 14px;"><i>&nbsp;</i><span class="title01" style="width:120px;">Whatsapp:</span> + 880&nbsp;</span>1819-322186</p>
<p class="email wow fadeInUp"><span style="font-size: 14px;"> </span></p>
<div class="map wow fadeInUp">
<p><img src="images/map2.png"></p>
</div>
</div>
</div>
<div class="sub_inquiry">
<p class="title wow fadeInUp">If you have any questions, please contact us immediately, we will reply in the shortest </p>
<div class="inquirymain wow fadeInUp">
<div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12 mt-3">
        <div class="card border-danger shadow" style=" border-color: #ff5200!important;">
          <div class="card-header bg-danger text-light" style="background-color: #ff5200!important;" >
            <h3 class="card-title">Contact Us</h3>
          </div>
          <div class="card-body px-4">
            <form action="contact.php" method="post">
             
			 
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required>
              </div><br>
              <div class="form-group">
                <label for="email">E-Mail:</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter E-Mail" required>
              </div><br>
              <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter Subject"
                  required>
              </div><br>
              <div class="form-group">
                <label for="message">Message:</label>
                <textarea name="message" id="message" rows="5" class="form-control" placeholder="Write Your Message"
                  required></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="submit" value="Send" style="margin-top: 20px;background-color: #ff5200;" class="btn btn-danger" id="sendBtn">
              </div>
            </form>
			
			<?php
			
			if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
	 $message =str_replace("'","\'",$message);
	
	$body=  "<h2>Mail From:   $email</h2><h2>Customer Name:   $name</h2><h2 align='center'>Message</h2><hr>
   
   
   <h3 align='center'> $message</h3>";
    

    require 'mail/PHPMailerAutoload.php';
        
        

       

   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 587; // or 465
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'tls';
 
   $mail ->Username = "robin5002234@gmail.com";
   $mail ->Password = "udemy2020";

   $mail ->setFrom($email);
   $mail ->addAddress('robincuetcse@gmail.com');
   $mail ->addReplyTo($email);


   $mail ->IsHTML(true);
   $mail ->Subject = $subject;
   $mail ->Body = $body;
   
  

   if(!$mail->send())
   {
       echo "<script>alert('Mail sending failed.')</script>";
       
   
   }
   else
   {
     echo "<script>alert('Mail has been sent.')</script>";
       
    
   }

   
    
}
			?>
          </div>
        </div>
      </div>
    </div>
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
<a href="https://www.facebook.com/haws" class="f_icon01"></a>
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
<script type="text/javascript" language="javascript" src="js/jcarousellite.min.js"></script>
<script src="js/wow.min.js"></script>
<script>
if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
	new WOW().init();
};
</script>
<script type="text/javascript" src="js/returnTop.js"></script>

</html>