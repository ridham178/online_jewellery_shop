<?php
ob_start();
include 'AdminHeader.php'; 
$con=  mysqli_connect("localhost","root", "","db_jwells" ) or die("error");
 ?>
<?php
 if(isset($_GET['msg'])&&!empty($_GET['msg']))
        {
        ?>
        <script>
            $.bootstrapGrowl('Gold price updated successfully',{
            type: 'success',
            delay: 2000,
        });
        </script>
        <?php } ?>
        
        <?php
 if(isset($_GET['error'])&&!empty($_GET['error']))
        {
        ?>
        <script>
            $.bootstrapGrowl('Problem for updating Gold price.',{
            type: 'danger',
            delay: 2000,
        });
        </script>
        <?php } ?>
        
        <!-- End Navbar --> <div class="center-block">
            <div class="content dashboard_v1">
            <!--Begin Content-->
           
          <div class="content">
            <div class="row">
                <div class="col-lg-6">
                    <div class="pvr-wrapper">
                        <div class="pvr-box">
                            <h5 class="pvr-header">
                              Update Gold Rate
                               
                            </h5>
                            
                            <?php
                            $q="select * from tbl_PriceDetails order by PriceID DESC LIMIT 1;";
                             $q1=  mysqli_query($con, $q);
                             while($row=  mysqli_fetch_array($q1))
                             {
                                 echo "Last Gold Price Is:".$row['Price'];?><span class="fa fa-rupee"></span><?php
                                 echo "<br>Last Price Updated Date:".$row['Date'];
                             }
                            ?>
                            <?php
                            if(isset($_POST['gprice'])&&!empty($_POST))
                            { $newprice=$_POST['gprice'];
                                $qi="insert into tbl_PriceDetails values(null,'".$newprice."','".  date('d/m/y')."');";
                                $qins=  mysqli_query($con, $qi);   
                               
                                 $q="select * from tbl_product_details;";
                                $q1=  mysqli_query($con, $q);
                                while($row=  mysqli_fetch_array($q1))
                                {
                                
                                    
                                   
                                 $p=$row['Weight']*$newprice;
                                 $queryup="update tbl_product_details set Unitprice='".$p."' where Product_id='".$row['Product_id']."';";
                                 mysqli_query($con, $queryup)or die(print_r($con));
                                }
                            header("Location:UpdatePrice.php?msg=1");
                            }
                            ?>
                            <form method="POST"  action="">
                                <fieldset>
                                    <div class="form-group">
                                        <label for="exampleInputEmail4">Today's Gold Rate[per gram]</label>
                                        <input type="text" name="gprice" required class="form-control" id="exampleInputEmail4"
                                               placeholder="Enter Today's Gold Price[Per Gram]">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Update Price" class="btn btn-purple m-r-5">
                                    </div>
                                </fieldset>
                            </form>
                        
            
                                      
                        </div>
                    </div></div>
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