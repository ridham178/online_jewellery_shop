<?php
ob_start();
session_start();
if(!isset($_SESSION['UserID']))
{
    header("Location:Login.php");
}
include './AdminHeader.php';
 
?>

        <?php
        if(isset($_GET['msg'])&&!empty($_GET['msg']))
        {
        ?>
        <script>
            $.bootstrapGrowl('Welcome to admin panel',{
            type: 'info',
            delay: 2000,
        });
        </script>
        <?php } ?>
        <!--Begin Content-->
        <div class="content dashboard_v1">
            <div class="row">
                <div class="col-lg-12 col-xl-9">
                    <div class="row">
                        
                        
                   
                        <div class="col-lg-12">
                            <div class="pvr-wrapper">
                                <div class="pvr-box">
                                    <h5 class="pvr-header">
                                        Sites Visits
                                        <div class="pvr-box-controls">
                                            <i class="material-icons" data-box="refresh" data-effect="win8_linear">refresh</i>
                                            <i class="material-icons" data-box="fullscreen">fullscreen</i>
                                            <i class="material-icons" data-box="close">close</i>
                                        </div>
                                    </h5>
                                    <div class="p-0 am_chart" id="world-map"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
               

                            <div class="pvr-wrapper">
                                <div class="pvr-box">
                                    <h5 class="pvr-header">
                                        Calendar
                                        <div class="pvr-box-controls">
                                            <i class="material-icons" data-box="refresh" data-effect="win8_linear">refresh</i>
                                            <i class="material-icons" data-box="fullscreen">fullscreen</i>
                                            <i class="material-icons" data-box="close">close</i>
                                        </div>
                                    </h5>
                                    <div id="datepicker-inline" class="datepicker-full-width">
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="col-md-12 p-0">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="icon-people text-primary f-s-40"></i>
                                            </div>
                                            <div class="col-9">
                                                <h6 class="m-0">New Users</h6>
                                                <p class="mb-0">114 New Users</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4">
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="icon-basket-loaded text-info f-s-40"></i>
                                            </div>
                                            <div class="col-9">
                                                <h6 class="m-0">Order Placed</h6>
                                                <p class="mb-0">574 New Order</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4">
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="icon-handbag text-danger f-s-40"></i>
                                            </div>
                                            <div class="col-9">
                                                <h6 class="m-0">Delivery </h6>
                                                <p class="mb-0">489 New Delivery</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4">
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-3">
                                                <i class="icon-trophy text-success f-s-40"></i>
                                            </div>
                                            <div class="col-9">
                                                <h6 class="m-0">Monthly Profits</h6>
                                                <p class="mb-0">$19,887 Profit
                                                    <span class="float-right text-success"> </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-xl-3 col-sm-12">
                    <div class="row">
                        <div class="col-lg-6 col-xl-12 col-sm-6">
                            <div class="pvr-wrapper">
                                <div class="pvr-box-gray clock_box">
                                    <div class="clock-wrapper">
                                        <div class="clock-base">
                                            <div class="click-indicator">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                            <div class="clock-hour"></div>
                                            <div class="clock-minute"></div>
                                            <div class="clock-second"></div>
                                            <div class="clock-center"></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--End Content-->

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
