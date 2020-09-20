<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>
   
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
        
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            
            <span class="sr-only">Toggle Navigation</span>
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            
        </button>
        
        <a href="index.php?dashboard" class="navbar-brand">Admin Panel</a>
        
    </div>
    
    <ul class="nav navbar-right top-nav">
        
        <li class="dropdown">
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                
                <i class="fa fa-user"></i> <?php echo $admin_name;  ?> <b class="caret"></b>
                
            </a>
            
            <ul class="dropdown-menu">
                <li>
                    <a href="index.php?view_profile=<?php echo $admin_id; ?>">
                        
                        <i class="fa fa-fw fa-user"></i> Profile
                        
                    </a>
                </li>
                
                <li>
                    <a href="index.php?view_products">
                        
                        <i class="fa fa-fw fa-envelope"></i> Products
                        
                        <span class="badge"><?php echo $count_products; ?></span>
                        
                    </a>
                </li>
                
                <li>
                    <a href="index.php?view_p_cats">
                        
                        <i class="fa fa-fw fa-gear"></i> Product Categories
                        
                        <span class="badge"><?php echo $count_product_cat; ?></span>
                        
                    </a>
                </li>

                <li>
                    <a href="index.php?view_faq">
                        
                        <i class="fa fa-fw fa-users"></i> FAQ
                        
                        <span class="badge"><?php echo $count_faq; ?></span>
                        
                    </a>
                </li>



                <li>
                    <a href="index.php?view_users">
                        
                        <i class="fa fa-fw fa-user"></i> Admins
                        
                        <span class="badge"><?php echo $count_admins; ?></span>
                        
                    </a>
                </li>
                
                
                <li class="divider"></li>
                
                <li>
                    <a href="logout.php">
                        
                        <i class="fa fa-fw fa-power-off"></i> Log Out
                        
                    </a>
                </li>
                
            </ul>
            
        </li>
        
    </ul>
    
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index.php?dashboard">
                        
                        <i class="fa fa-fw fa-dashboard"></i> Admin Dashboard
                        
                </a>
                
            </li>
            
            <li>
                <a href="#" data-toggle="collapse" data-target="#products">
                        
                        <i class="fa fa-fw fa-tag"></i> Products
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a>
                
                <ul id="products" class="collapse">
                    <li>
                        <a href="index.php?insert_product"> Insert Product </a>
                    </li>
                    <li>
                        <a href="index.php?view_products"> View Products </a>
                    </li>
                </ul>
                
            </li>
            
            <li>
                <a href="#" data-toggle="collapse" data-target="#p_cat">
                        
                        <i class="fa fa-fw fa-edit"></i> Products Categories
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a>
                
                <ul id="p_cat" class="collapse">
                    <li>
                        <a href="index.php?insert_p_cat"> Insert Product Category </a>
                    </li>
                    <li>
                        <a href="index.php?view_p_cats"> View Products Categories </a>
                    </li>
                </ul>
                
            </li>
            
        
            
           <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#slides"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-gear"></i> Slides
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="slides" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_slide"> Insert Slide </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_slides"> View Slides </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish --> 

           
                       
            
            
           
           
           
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#admins"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-users"></i> Admins
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="admins" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_user"> Insert Admin </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_users"> View Admins </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->

            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#profile"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-user"></i> Profile
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="profile" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?view_profile"> View Profile </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?user_profile=<?php echo $admin_id; ?>"> Edit My Profile </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->

            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#faq"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-question"></i> FAQ
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="faq" class="collapse"><!-- collapse begin -->

                    <li><!-- li begin -->
                        <a href="index.php?insert_faq"> Insert FAQ</a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_faq"> View FAQ </a>
                    </li><!-- li finish -->
                   
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="index.php?edit_css"><!-- a href begin -->
                    <i class="fa fa-fw fa-pencil"></i> CSS Editor
                </a><!-- a href finish -->
            </li><!-- li finish -->

            <li><!-- li begin -->
                <a href="logout.php"><!-- a href begin -->
                    <i class="fa fa-fw fa-power-off"></i> Log Out
                </a><!-- a href finish -->
            </li><!-- li finish -->
            
        </ul><!-- nav navbar-nav side-nav finish -->
    </div><!-- collapse navbar-collapse navbar-ex1-collapse finish -->
    
</nav><!-- navbar navbar-inverse navbar-fixed-top finish -->


<?php } ?>