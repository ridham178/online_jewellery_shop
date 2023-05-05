 <?php  
ob_start();
session_start();
if(!isset($_SESSION['UserID']))
{
    header("Location:Login.php");
}
 $connect =mysqli_connect("localhost","root", "","db_jwells" ) or die("error");  
 $query ="SELECT * FROM tbl_Product_details ORDER BY Product_id DESC";  
 $result = mysqli_query($connect, $query);  
 ?>  
<h3>
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Admin Panel</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
            <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet"/>
    <link href="assets/plugins/bootstrap/css/bootstrap-grid.css" rel="stylesheet"/>
    <link href="assets/plugins/bootstrap/css/bootstrap-reboot.css" rel="stylesheet"/>
    <link href="assets/css/colors.css" rel="stylesheet" id="themecolor"/>
    <link href="assets/css/style.css" rel="stylesheet"/>
    
      </head>
      
      <body>
        
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
       
           <div class="container col-lg-12">  
                <h1 align="center">Product Details</h1>  
                <br />  
                <div class="table-responsive col-lg-12">  
                     <table id="employee_data" class="table table-hover table-responsive table-bordered">  
                         <thead style="background:lightslategray">  
                               <tr>  
                                   <td>Product Image</td>
                                    <td>Name</td>  
                                    <td>Descripition</td>  
                                    <td>Weight</td>  
                                    <td>Price</td>  
                                    <td>Quentity</td>
                                    <td>Product Material</td>
                                    <td>Category</td>
                                    <td colspan="2">Links</td>
                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                              ?> 
                               <tr>  
                                   <td><img src="<?php echo $row['Imagepath']; ?>" class="img-responsive col-lg-6" alt="No image set"></td>
                                    <td><?php echo $row["Product_name"];?></td>  
                                    <td><?php echo $row["Description"];?></td>  
                                    <td><?php echo $row["Weight"];?></td>  
                                    <td><?php echo $row["Unitprice"];?></td>  
                                    <td><?php echo $row["Quentity"];?></td>
                                    <td><?php echo $row["Product_material"];?></td>
                                        <?php
                                        $q="select * from tbl_category_details where Category_id='".$row['Category_id']."';";
                                        $res = mysqli_query($connect, $q);
                                         while($r= mysqli_fetch_array($res))  
                                         {
                                           ?> <td><?php echo $r["Category_name"];?></td>
                                           
                                           <?php
                                         }
                                           ?>
                                           <td><a href="Query_DelProductdatatable.php?id=<?php echo $row['Product_id']; ?>"><span class="fa fa-remove"</a></td> 
                                           <td><a href="Show_UpdateProduct.php?id=<?php echo $row['Product_id']; ?>&table=1"><span class="fa fa-arrow-circle-left"</a></td> </tr>  
                                 
                        <?php  }  
                          ?>  
                               </h3><h4>
                     </table> 
              
           

                
    
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>
         <!--Begin Footer-->
        
        <!--End Footer-->
    </div>
    <!--EndMain Panel-->
</div>
<!--End wrapper-->

<!-- begin scroll to top btn -->
<a href="javascript:void(0)" class="btn btn-icon btn-circle btn-scroll-to-top btn-sm animated invisible text-light"
   data-color="purple" data-click="scroll-top"><i
        class="fa fa-angle-up"></i></a>
<!-- end scroll to top btn -->
</body>
<!--End Body-->
<!--   Core JS Files   -->

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js"></script>
<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/plugins/waitMe/waitMe.min.js"></script>
<script src="assets/js/pvr_lite_app.js" id="appjs"></script>

<!-- PVR Lite DEMO, don't include it in your project! -->
<script src="assets/js/pvr_lite_demo.js" type="text/javascript"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-66289183-8"></script>
<!-- BEGIN PAGE LEVEL JS -->
<script src="assets/plugins/sparkline/jquery.sparkline.js" type="text/javascript"></script>
<script src="assets/plugins/chartjs/Chart.min.js"></script>
<script src="assets/plugins/countup/countUp.min.js"></script>
<script src="assets/plugins/amcharts/amcharts.js"></script>
<script src="assets/plugins/amcharts/serial.js"></script>
<script src="assets/plugins/amcharts/export.min.js"></script>
<script src="assets/plugins/amcharts/none.js"></script>
<script src="assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
<script src="assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="assets/plugins/real-shadow/realShadow.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/plugins/typeit/typeit.js"></script>
<script src="assets/js/pvr_lite_dashboard_v1.js"></script>
<!-- END PAGE LEVEL JS -->

<!-- Mirrored from preview.pvrtechstudio.com/demo/pvrlite/pvrlite/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Feb 2018 14:38:52 GMT -->
</html>
</h4>