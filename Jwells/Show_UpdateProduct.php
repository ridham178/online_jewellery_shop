<?php 
ob_start();
session_start();
if(!isset($_SESSION['UserID']))
{
    header("Location:Login.php");
}
include 'AdminHeader.php';
$count=0;
 $con=  mysqli_connect("localhost","root", "","db_jwells" ) or die("error");
 if(isset($_GET['table'])&&!empty($_GET['table']))
 {
      $que="select * from tbl_product_details where Product_id='".$_GET['id']."';";
 }
 else {
     $que="select * from tbl_product_details where Product_name='".$_GET['pname']."';";
 
}
             $qe=  mysqli_query($con, $que) or die("MySQL error: " . mysqli_error($con) . "<hr>\nQuery: $que");
             while($r= mysqli_fetch_array($qe)) 
             {
                 $count=1;
?>
   
        <div class="content dashboard_v1">
              <div class="content">
            <div class="row">
                <div class="col-lg-6">
                    <div class="pvr-wrapper">
                        <div class="pvr-box">
                            <h5 class="pvr-header">
                              Update Product
                               
                            </h5>
                           
                            <form method="post" enctype="multipart/form-data" action="Query_UpdProduct.php">
                                <fieldset>
                                    <div class="form-group">
                                        <label for="exampleInputEmail4">Product Name</label>
                                        <input type="text" name="pname" class="form-control" id="exampleInputEmail4" value="<?php echo $r['Product_name']; ?>"  placeholder="Enter Product Name" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">Weight</label>
                                        <input type="text" class="form-control" id="exampleInputPassword4" value="<?php echo $r['Weight']; ?>"  name="pweight" placeholder="Enter Product Weight" />
                                    </div>
                                      
                                     <div class="form-group">
                                        <label for="exampleInputPassword4">Product Price</label>
                                        <input type="text" class="form-control" id="exampleInputPassword4" value="<?php echo $r['Unitprice']; ?>"
                                               name="pprice"    placeholder="Enter Product Price">
                                    </div>
                                         <div class="form-group">   
                                        <label for="exampleInputPassword4">Product  Quantity </label>
                                        <input type="number" class="form-control" id="exampleInputPassword4" value="<?php echo $r['Quentity']; ?>"
                                               name="pqty"    placeholder="Enter Product Price">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">Product Material</label>
                                        <input type="text" class="form-control" id="exampleInputPassword4" value="<?php echo $r['Product_material']; ?>"
                                             name="pmaterial"  placeholder="Enter Product Material">
                                    </div>
                                    
                                   
                                     <div class="form-group">
                                        <label for="exampleInputPassword4">Category</label>
                                        <select class="form-control" name="pcategory">
                                            <?php 
                                           
 
             $q="select Category_id,Category_name from tbl_category_details;";
             $q1=  mysqli_query($con, $q) or die("MySQL error: " . mysqli_error($con) . "<hr>\nQuery: $q");
             while($row=  mysqli_fetch_array($q1))
             {
                                            ?>
                                            
                                            <option value="<?php echo $row['Category_id'];  ?>"><?php echo $row['Category_name']; ?></option>
                                            
                                            <?php
             }
                                            ?>
                                        </select>
                                    </div>
                        <div class="form-group">
                                        <label for="exampleInputPassword4">Product Image</label>
                                        <img src="<?php echo $r['Imagepath']; ?>" class="form-control img-responsive"/>
                                        <input type="hidden" value="<?php echo $r['Imagepath']; ?>" name="oldimg">
                                        <h6>Select other image if you want to change</h6>
                                        <input type="file" name="fileToUpload" id="fileToUpload"  enctype="multipart/form-data" class="form-control">
                        </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail4">Product Description</label>
                                        <textarea rows="3" cols="10" name="pdesc" class="form-control" placeholder="Enter Product Description"><?php echo $r['Description']; ?></textarea>
                                    </div>
                                    <input type="submit" value="Update Product" class="btn btn-purple m-r-5">
                                    <input type="hidden" value="<?php echo $r['Product_id']; ?>" name="id">
                                </fieldset>
                            </form>
                            
                        </div>
                    </div>
                </div>
                            <?php
             }
             if($count==0)
             {
                 ?>
                    <h3 style="color: red">Search Product is not found..</h3>
                    <?php
             }
?>
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

    
    
    
    
    
    
    
    