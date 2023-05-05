<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.pvrtechstudio.com/demo/pvrlite/pvrlite/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Feb 2018 14:35:27 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8"/>
        <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>

    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-growl/1.0.0/jquery.bootstrap-growl.min.js"></script>


    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Admin Panel</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900" rel="stylesheet">
    <!-- CSS Files -->
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet"/>
    <link href="assets/plugins/bootstrap/css/bootstrap-grid.css" rel="stylesheet"/>
    <link href="assets/plugins/bootstrap/css/bootstrap-reboot.css" rel="stylesheet"/>
    <link href="assets/css/colors.css" rel="stylesheet" id="themecolor"/>
    <link href="assets/css/style.css" rel="stylesheet"/>
    <!-- BEGIN PAGE LEVEL STYLE -->
    <link rel="stylesheet" href="assets/plugins/amcharts/export.css" type="text/css" media="all"/>
    <link href="assets/plugins/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet"/>
    <link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css" rel="stylesheet"/>
    <!-- END PAGE LEVEL STYLE -->
    <style id="clock-animations"></style>
</head>
<!--Body Begins-->
<body>
<!--Begin Loading-->
<div class="preloader">
    <div class="loading">
        <h2>
            Loading...
        </h2>
        <span class="progress"></span>
    </div>
</div>
<!--End Loading-->
<!--Begin wrapper-->
<div class="wrapper">
    <!--Begin Sidebar-->
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-bg.jpg">
        <div class="sidebar-wrapper">
            <!--Begins Logo start-->
            <div class="logo">
           
						<a id="site-title" href="index-2.html" >          
						<img class="img-responsive col-lg-12" src="assetsss/images/slide-image-caption-1.png" alt="Jewelry - HTML Template theme">          
						</a>
					
            </div>
            <!--End Logo start-->

            <!--Begins User Section-->
            <div class="user">
                <div class="photo">
                    <img src="assets/img/default-avatar.jpg"/>
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#pvr_user_nav" class="collapsed">
                            <span>Administrator
                                <b class="caret"></b>
                            </span>
                    </a>
                    <div class="collapse m-t-10" id="pvr_user_nav">
                        <ul class="nav">
                           
                            <li>
                                <a class="profile-dropdown" href="MyProfile.php">
                                    <span class="sidebar-mini"><i class="icon-user"></i></span>
                                    <span class="sidebar-normal">My Profile</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <ul class="nav">
                
                   
                       
                            <li class="nav-item">
                                <a class="nav-link sub_link" href="Admin.php">
                                    <i class="material-icons">insert_chart</i>
                                    <span class="sidebar-normal">Dashboard</span>
                                </a>
                            </li>
                         
                      
                
                <li class="nav-item has-sub-menu">
                    <a class="nav-link" data-toggle="collapse" href="#pvr_applications">
                         <i class="material-icons">assignment</i>
                        <p>
                            Manage Product
                          <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse sub-menu" id="pvr_applications">
                        <ul class="nav">
                              <li class="nav-item ">
                                <a class="nav-link sub_link" href="AddProduct.php">
                                    <i class="icons icon-plus"></i>
                                    <span class="sidebar-normal">Add Product</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link sub_link" href="UpdateProduct.php">
                                    <i class="icons icon-exclamation"></i>
                                    <span class="sidebar-normal">Update Product</span>
                                </a>
                            </li>
                             <li class="nav-item ">
                                <a class="nav-link sub_link" href="DeleteProduct.php">
                                    <i class="icons icon-close"></i>
                                    <span class="sidebar-normal">Delete Product</span>
                                </a>
                            </li> 
                        </ul>
                    </div>
                </li>


    <li class="nav-item">
                                <a class="nav-link sub_link" href="UpdatePrice.php">
                                    <i class="fa fa-rupee"></i>
                                    <span class="sidebar-normal">Update Gold Price</span>
                                </a>
                            </li>
                            
                                <li class="nav-item">
                                <a class="nav-link sub_link" href="ShowOrderList.php">
                                    <i class="fa fa-cart-plus"></i>
                                    <span class="sidebar-normal">Manage Order Details</span>
                                </a>
                            </li>
                            
                            
                                <li class="nav-item">
                                <a class="nav-link sub_link" href="#">
                                    <i class="icon-book-open"></i>
                                    <span class="sidebar-normal">Genrate Reports</span>
                                </a>
                            </li>
                            
                                <li class="nav-item">
                                <a class="nav-link sub_link" href="ShowProductList.php">
                                    <i class="icon-bag"></i>
                                    <span class="sidebar-normal">Show Product Details</span>
                                </a>
                            </li>
                            
                             <li class="nav-item">
                                 <a class="nav-link sub_link" href="ViewFeedback.php">
                                    <i class="icon-star"></i>
                                    <span class="sidebar-normal">Feedback</span>
                                </a>
                            </li>
                            
                            
                            
               

                         
            

               

                
            </ul>
        </div>
    </div>
    <!--End Sidebar-->
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" data-color="purple"
                                class="btn btn-fill btn-round btn-icon d-none d-lg-block">
                            <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                            <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                        </button>
                    </div>
                 
                </div>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar burger-lines"></span>
                    <span class="navbar-toggler-bar burger-lines"></span>
                    <span class="navbar-toggler-bar burger-lines"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    
                    <ul class="navbar-nav">
            
                        <li class="nav-item dropdown dropdown-slide">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">account_box</i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                               
                                <a class="dropdown-item" href="changepassword.php">
                                    <i class="material-icons align-middle">settings</i> Change Password
                                </a>
                                <div class="divider"></div>
                                
                                <a href="Logout.php" class="dropdown-item">
                                    <i class="material-icons align-middle">power_settings_new</i> Log out
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        