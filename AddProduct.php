<?php
ob_start();
session_start();
if(!isset($_SESSION['UserID']))
{
    header("Location:Login.php");
}

include 'AdminHeader.php'; ?>
<?php
        if(isset($_GET['msg'])&&!empty($_GET['msg']))
        {
        ?>
        <script>
            $.bootstrapGrowl('Product Added successfully',{
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
            $.bootstrapGrowl('There was a problem to add product',{
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
                              Add Product
                               
                            </h5>
                            <form method="POST" enctype="multipart/form-data" action="Query_AddProduct.php">
                                <fieldset>
                                    <div class="form-group">
                                        <label for="exampleInputEmail4">Product Name</label>
                                        <input type="text" required name="pname" class="form-control" id="exampleInputEmail4"
                                               placeholder="Enter Product Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">Weight</label>
                                        <input type="text" class="form-control" id="exampleInputPassword4"
                                              name="pweight" required placeholder="Enter Product Weight">
                                    </div>
                                      
                                     <div class="form-group">
                                        <label for="exampleInputPassword4">Product Price</label>
                                        <input type="text" class="form-control" id="exampleInputPassword4"
                                               name="pprice" required   placeholder="Enter Product Price">
                                    </div>
                                         <div class="form-group">   
                                        <label for="exampleInputPassword4">Product  Quantity </label>
                                        <input type="number" class="form-control" id="exampleInputPassword4"
                                               name="pqty"  required  placeholder="Enter Product Price">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">Product Material</label>
                                        <input type="text" class="form-control" id="exampleInputPassword4"
                                             name="pmaterial" required placeholder="Enter Product Material">
                                    </div>
                                    
                                   
                                     <div class="form-group">
                                        <label for="exampleInputPassword4">Category</label>
                                        <select class="form-control" name="pcategory">
                                            <?php 
                                             $con=  mysqli_connect("localhost","root", "","db_jwells" ) or die("error");
 
             $q="select Category_id,Category_name from tbl_category_details;";
             $q1=  mysqli_query($con, $q);
             while($row=  mysqli_fetch_array($q1))
             {
                                            ?>
                                            <option  value="<?php echo $row['Category_id'];  ?>"><?php echo $row['Category_name']; ?></option>
                                            
                                            <?php
             }
                                            ?>
                                        </select>
                                    </div>
                        <div class="form-group">
                                        <label for="exampleInputPassword4">Main Product Image</label>
                                        <input type="file" required name="fileToUpload" id="fileToUpload" enctype="multipart/form-data" class="form-control">
                        </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">Sub Product Image 1</label>
                                        <input type="file" required name="fileToUpload2" id="fileToUpload" enctype="multipart/form-data" class="form-control">
                        </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">Sub Product Image 2</label>
                                        <input type="file" required name="fileToUpload3" id="fileToUpload" enctype="multipart/form-data" class="form-control">
                        </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">Product Image of Certificate</label>
                                        <input type="file" required name="fileToUpload4" id="fileToUpload" enctype="multipart/form-data" class="form-control">
                        </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail4">Product Description</label>
                                        <textarea rows="3" required cols="10" name="pdesc" class="form-control" placeholder="Enter Product Description"></textarea>
                                    </div>
                                    <input type="submit" value="Submit" class="btn btn-purple m-r-5">
                                    <div style="color: red">
                                <?php  if(isset($_SESSION['error'])&&!empty($_SESSION['error']))
{
    echo $_SESSION['error'];
} ?>
                                    </div>  </fieldset>
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

    
    
    
    
    
    
    
    