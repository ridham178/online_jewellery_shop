<?php 
ob_start();
session_start();
if(!isset($_SESSION['UserID']))
{
    header("Location:Login.php");
}
$con=  mysqli_connect("localhost","root", "","db_jwells" ) or die("error");
include './AdminHeader.php'; 


$q="select * from tbl_registration_details where UserID='".$_SESSION['UserID']."'";
$q1=  mysqli_query($con, $q);
   while($row=  mysqli_fetch_array($q1))
  {                                                                                                             

?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      <div class="center-block">
            <div class="content dashboard_v1">
            <!--Begin Content-->
           
        <div class="content">
            <div class="row">
                <div class="col-lg-6">
                    <div class="pvr-wrapper">
                        <div class="pvr-box">
                            <h5 class="pvr-header">
                             Manage Profile
                               
                            </h5>
                            <form method="POST" enctype="multipart/form-data" action="UpdateAdminProfile.php">
                                <fieldset>
                                    <div class="form-group">
                                        <label for="exampleInputEmail4">User Name</label>
                                        <input type="text" name="uname" class="form-control" id="exampleInputEmail4"
                                               placeholder="Enter Product Name" value="<?php echo $row['Username']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword4"
                                              name="pass" placeholder="Enter Product Weight" value="<?php echo $row['Password']; ?>">
                                    </div>
                                      
                                     <div class="form-group">
                                        <label for="exampleInputPassword4">First Name</label>
                                        <input type="text" class="form-control" id="exampleInputPassword4"
                                               name="fname"    placeholder="Enter Product Price" value="<?php echo $row['FirstName']; ?>">
                                    </div>
                                         <div class="form-group">   
                                        <label for="exampleInputPassword4">Last Name</label>
                                        <input type="text" class="form-control" id="exampleInputPassword4"
                                               name="lname"    placeholder="Enter Product Price" value="<?php echo $row['LastName']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">Address</label>
                                        <input type="text" class="form-control" id="exampleInputPassword4"
                                             name="address"  placeholder="Enter Product Material" value="<?php echo $row['Address']; ?>">
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputPassword4">City</label>
                                        <input type="text" class="form-control" id="exampleInputPassword4"
                                             name="city"  placeholder="Enter Product Material" value="<?php echo $row['City']; ?>">
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputPassword4">State</label>
                                        <input type="text" class="form-control" id="exampleInputPassword4"
                                             name="state"  placeholder="Enter Product Material" value="<?php echo $row['State']; ?>">
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputPassword4">Mobile Number</label>
                                        <input type="text" class="form-control" id="exampleInputPassword4"
                                             name="mno"  placeholder="Enter Product Material" value="<?php echo $row['MobileNo']; ?>">
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputPassword4">Email ID</label>
                                        <input type="text" class="form-control" id="exampleInputPassword4"
                                             name="eid"  placeholder="Enter Product Material" value="<?php echo $row['EmailID']; ?>">
                                    </div>
                                    <input type="submit" value="Update Profile" class="btn btn-purple m-r-5">
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
         
            </div>
      </div>
    <?php
  }
    ?>
        <!--Begin Footer-->
        <footer class="footer">
            <div class="container">
                <nav>
                    <ul class="footer-menu d-none d-sm-block">
                        <li>
                            <a href="javascript:void(0)">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                T&C
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                Privacy policy
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                Website
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-center">
                            © <span id="writeCopyrights"></span>
                        <a href="http://www.pvrtechstudio.com/" target="_blank">Dimonds</a>, All rights recived
                    </p>
                </nav>
            </div>
        </footer>
        <!--End Footer-->
    </div>
    <!--EndMain Panel-->
</div>
    </div>
<!-- begin scroll to top btn -->
<a href="javascript:void(0)" class="btn btn-icon btn-circle btn-scroll-to-top btn-sm animated invisible text-light"
   data-color="purple" data-click="scroll-top"><i
        class="fa fa-angle-up"></i></a>
<!-- end scroll to top btn -->
</body>
<!--End Body-->
<!--   Core JS Files   -->
<script src="assets/plugins/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
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