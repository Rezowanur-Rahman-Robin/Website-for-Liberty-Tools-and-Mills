<?php include("../includes/db.php"); ?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Our Service</title>
  <meta name="keywords" content="Our Service" />
  <meta name="description" content="Our Service" />
  <meta name="copyright" content="LIBERTY TOOLS & MILL STORE" />
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="alternate" media="handheld" href="#" />
  <link rel="shortcut icon" href="../favicon.png" />
  <link type="text/css" rel="stylesheet" href="../styles/style.css">
  <link type="text/css" rel="stylesheet" href="../styles/animate.css">

  <style>
    .nav ul li a.hoverab {
      color: #ff5200;
      background: url(..//images/nav_bg.jpg) no-repeat bottom center;
    }
  </style>
</head>

<body>
  <div class="header">
    <div class="top">
      <div class="wrapper">
        <div class="logo">
          <a href="../index.php"><img src="..//images/logo4.png"></a>
        </div>
        <div class="topbox">

        <p class="email left"><i></i>libertytools.bd@gmail.com</p>


        </div>
      </div>
    </div>
    <div class="navbox">
       <div class="wrapper">
          <div class="nav right">
           <ul>
             <li><a href="../index.php" class="hoverho">Home</a></li>
             <li><a href="index.php" class="hoverab">About us</a>
          <div class="sub_nav">
          <dl>
          <dd><a href="our-service.php" title="Our Service">Our Service</a></dd>
          <dd><a href="company-profile.php" title="Company Profile">Company Profile</a></dd>
          <dd><a href="quality-control.php" title="Quality Control">Quality Control</a></dd> 
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
            <li><a href="../faq/index.php" class="hoverfa">FAQ</a></li>
            <li><a href="../contact.php" class="hoverco">Contact us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="sub_banner"><img src="../images/r.jpg"></div>

  <div class="content">
    <div class="wrapper">
      <div class="breadcrumbs wow bounceInRight">
        <p><i></i>Your position : <a href="../index.php">Home</a></a>&nbsp;>&nbsp;<a href="index.php">About us</a>&nbsp;>&nbsp;<a href="our-service.php">Our Service</a></p>
      </div>
      <div class="sub_main overflow">
        <div class="sub_left left">

          <?php include("../includes/sidebar.php"); ?>

        </div>
        <div class="sub_right right">
          <div class="sub_about sub_ser">
            <p class="titlebox01 wow fadeInUp">Our Service</p>
            <div class="mainbox">
              <p class="wow fadeInUp" data-wow-delay=".2s">WESDOM Group are proud to be supplying different type of high
                quality valves and service in the fields below.</p>
              <ul>
                <li class="wow fadeInUp" data-wow-delay=".1s">
                  <p><img src="../pic/about-us/service01.jpg" alt="" /></p>
                  <dl>
                    <dt>Automotive</dt>
                    <dd>WESDOM Group have repeatedly bid for and won supply orders for fire safe and anti static
                      stainless steel ball valves used by Cosign Equipment LLC. From Iraq.</dd>
                  </dl>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".2s">
                  <p><img src="../pic/about-us/service02.jpg" alt="" /></p>
                  <dl>
                    <dt>Chemical</dt>
                    <dd>WESDOM Group supply many blue chip chemical manufacturers with a large variety of valves,
                      examples include valves and spares supply to Zhejiang Chemicals since 1998 and bellow sealed globe
                      valves prepared for chlorine duty supplied to Zhejiang Chemicals,Hangzhou Branch.</dd>
                  </dl>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".3s">
                  <p><img src="../pic/about-us/service03.jpg" alt="" /></p>
                  <dl>
                    <dt>Fire Fighting</dt>
                    <dd>WESDOM Group have supplied valves, sprinklers and hydrants to various building companies and
                      have repeatedly supplied products such as quick release fire valves to several of Prisons
                      throughout the country.</dd>
                  </dl>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".1s">
                  <p><img src="../pic/about-us/service04.jpg" alt="" /></p>
                  <dl>
                    <dt>Gas</dt>
                    <dd>WESDOM Group successfully completed a project for CNPC to replace forty atex compliant, manual
                      and actuated butterfly valves on top of&nbsp; RNG storage tanks suitable for use within explosive
                      environments.</dd>
                  </dl>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".2s">
                  <p><img src="../pic/about-us/service05.jpg" alt="" /></p>
                  <dl>
                    <dt>Marine</dt>
                    <dd>WESDOM Group currently supply valves into the marine industry and our valves are even used on
                      the QE2. We recently supplied a 1200mm butterfly valve for use on board a ship which we had ABS
                      certified and supplied successfully and on time.</dd>
                  </dl>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".3s">
                  <p><img src="../pic/about-us/service06.jpg" alt="" /></p>
                  <dl>
                    <dt>Oil</dt>
                    <dd>WESDOM Group currently supply to many off shore oil producers and examples of our supply vary
                      from valves as simple as standard cast iron butterfly valves through to a recent order to supply a
                      250mm modulating high pressure control type ball valves with duplex trim. The valve had to be atex
                      compliant, comply with strict specifications and also customer witness tested.</dd>
                  </dl>
                </li>
            
              </ul>
            </div>
            <div id="gtx-trans" style="position: absolute; left: -13px; top: 49.1076px;">
              <div class="gtx-trans-icon">&nbsp;</div>
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
            <a href="../index.php">
            <p class="f_logo left"><img src="../images/f_logo4.png"></p>
              <p class="main left">The company's philosophy is: "the pursuit of excellence in quality, improve goods and
                services" and to explore and pursue endless with the spirit of "people-oriented, technological
                innovation."</p>
            </a>
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
            <a href="../contact.php">
              <p class="title uppercase">CONTACT</p>
            </a>
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
            <a href="../products/index.php?main">
              <p class="title uppercase">product list</p>
            </a>
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
        <p>Copyright ©FORSBIN Company LTD.</p>
      </div>
    </div>
  </div>

</body>
<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" language="javascript" src="../js/jcarousellite.min.js"></script>
<script src="../js/wow.min.js"></script>
<script>
  if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))) {
    new WOW().init();
  };
</script>
<script type="text/javascript" src="../js/returnTop.js"></script>

</html>