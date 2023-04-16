<?php
ob_start();
session_start();
include 'AdminHeader.php';
if(!isset($_SESSION['UserID']))
{
    header("Location:Login.php");
}
$con=  mysqli_connect("localhost","root", "","db_jwells" ) or die("error");
          
if(isset($_POST)&&!empty($_POST))
{
    $error=array();
 if($_POST['npass']!=$_POST['rnpass'])
 {
     $error['pass']="New password and re-enter new password must be same";
 }
 else {
     
 
                             $qu="select Password from tbl_registration_details where Username='".$_SESSION['user']."';";
                             $e=  mysqli_query($con, $qu)or die (print_r($con));
                             while ($row = mysqli_fetch_array($e)) {
                                 $pass=$row['Password'];
                             }
                         if($pass==$_POST['opass'])
                         {
                            $q="update tbl_registration_details set Password='".$_POST['npass']."' where UserID='".$_SESSION['UserID']."'";
             $q1=  mysqli_query($con, $q)or die(print_r($con));
              header("Location:changepassword.php");
                         }
 }
                   
}

?>
        <!-- End Navbar --> <div class="center-block">
            <div class="content dashboard_v1">
            <!--Begin Content-->
           
        <div class="content">
            <div class="row">
                <div class="col-lg-6">
                    <div class="pvr-wrapper">
                        <div class="pvr-box">
                            <h5 class="pvr-header">
                              Change Password
                               
                            </h5>
                            <form method="POST"  action="">
                                <fieldset>
                                    <div class="form-group">
                                        <label for="exampleInputEmail4">Old Password</label>
                                        <input type="text" required name="opass" class="form-control" id="exampleInputEmail4"
                                               placeholder="Enter old password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">New Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword4"
                                              name="npass" required placeholder="Enter new password">
                                    </div>
                                      
                                   <div class="form-group">
                                        <label for="exampleInputPassword4">Re-enter new password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword4"
                                              name="rnpass" required placeholder="Re-enter new password ">
                                    </div>
                                    <?php
                                        
                                    if(isset($error['pass'])&&!empty($error['pass']))
                                    {
                                        ?> <div style="color: red"> <?php echo $error['pass']; ?> </div> <?php
                                    }
                                    
                                    ?>
                                    <input type="submit" value="Submit" class="btn btn-purple m-r-5">
                                  
                                </fieldset>
                            </form>
                              </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
       


    
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
<!--End wrapper-->

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

    
    
    
    
    
    
    
    