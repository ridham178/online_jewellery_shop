<?php
ob_start();

?>
<?php

if(isset($_POST['Submit'])){
	// code for check server side validation
	if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
		$msg="<span style='color:red'>The Validation Code Does Not Match.Please try Again!</span>";// Captcha verification is incorrect.		
	}else{// Captcha verification is Correct. Final Code Execute here!
             $con=  mysqli_connect("localhost","root", "","db_jwells" ) or die("error");
                $q="insert into tbl_feedback values(null,'".$_SESSION['UserID']."','".$_POST['feedback']."')";
                               $q1=  mysqli_query($con, $q);
            
            
		$msg="<span style='color:green'>Thanks For Your Suggestions.</span>";		
	}
}	
?><!doctype html>
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<!-- Mirrored from demo.designshopify.com/html_jewelry/account.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Feb 2018 17:02:03 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <link rel="canonical" href="http://demo.designshopify.com/" />
  <meta name="description" content="" />
  <title>Account Page</title>

<script type='text/javascript'>
function refreshCaptcha(){
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
  
    <link href="assetsss/stylesheets/font.css" rel='stylesheet' type='text/css'>
  
	<link href="assetsss/stylesheets/font-awesome.min.css" rel="stylesheet" type="text/css" media="all"> 
	<link href="assetsss/stylesheets/jquery.camera.css" rel="stylesheet" type="text/css" media="all">
	<link href="assetsss/stylesheets/jquery.fancybox-buttons.css" rel="stylesheet" type="text/css" media="all">
	<link href="assetsss/stylesheets/cs.animate.css" rel="stylesheet" type="text/css" media="all">
	<link href="assetsss/stylesheets/application.css" rel="stylesheet" type="text/css" media="all">
	<link href="assetsss/stylesheets/swatch.css" rel="stylesheet" type="text/css" media="all">
	<link href="assetsss/stylesheets/jquery.owl.carousel.css" rel="stylesheet" type="text/css" media="all">
	<link href="assetsss/stylesheets/jquery.bxslider.css" rel="stylesheet" type="text/css" media="all">
	<link href="assetsss/stylesheets/bootstrap.min.3x.css" rel="stylesheet" type="text/css" media="all">
	<link href="assetsss/stylesheets/cs.bootstrap.3x.css" rel="stylesheet" type="text/css" media="all">
	<link href="assetsss/stylesheets/cs.global.css" rel="stylesheet" type="text/css" media="all">
	<link href="assetsss/stylesheets/cs.style.css" rel="stylesheet" type="text/css" media="all">
	<link href="assetsss/stylesheets/cs.media.3x.css" rel="stylesheet" type="text/css" media="all">
	
	<script src="assetsss/javascripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="assetsss/javascripts/jquery.imagesloaded.min.js" type="text/javascript"></script>
	<script src="assetsss/javascripts/bootstrap.min.3x.js" type="text/javascript"></script>
	<script src="assetsss/javascripts/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="assetsss/javascripts/jquery.camera.min.js" type="text/javascript"></script>	
	<script src="assetsss/javascripts/cookies.js" type="text/javascript"></script>
	<script src="assetsss/javascripts/modernizr.js" type="text/javascript"></script>  
	<script src="assetsss/javascripts/application.js" type="text/javascript"></script>
	<script src="assetsss/javascripts/jquery.owl.carousel.min.js" type="text/javascript"></script>
	<script src="assetsss/javascripts/jquery.bxslider.js" type="text/javascript"></script>
	<script src="assetsss/javascripts/skrollr.min.js" type="text/javascript"></script>
	<script src="assetsss/javascripts/jquery.fancybox-buttons.js" type="text/javascript"></script>
	<script src="assetsss/javascripts/jquery.zoom.js" type="text/javascript"></script>	
	<script src="assetsss/javascripts/cs.script.js" type="text/javascript"></script>
</head>

<body itemscope="" itemtype="http://schema.org/WebPage" class="templateCustomersRegister notouch">
  
	<?php
        include 'menu.php';
        ?>
  
	<div id="content-wrapper-parent">
		<div id="content-wrapper">  
			<!-- Content -->
			<div id="content" class="clearfix">        
				<div id="breadcrumb" class="breadcrumb">
					<div itemprop="breadcrumb" class="container">
						<div class="row">
							<div class="col-md-24">
								<a href="index-2.html" class="homepage-link" title="Back to the frontpage">Home</a>
								<span>/</span>
								<span class="page-title">My Account</span>
							</div>
						</div>
					</div>
				</div>      
                            <?php
                              if(!isset($_SESSION['UserID']))
                             {
                                  ?><h2 style="margin-left: 200px;padding-bottom: 250px">Please Login For Account Details.<a style="margin-left: 10px" href="Login.php">Login</a></h2><?php
                             }
                             else {
                               $con=  mysqli_connect("localhost","root", "","db_jwells" ) or die("error");
                               $q="select * from tbl_registration_details where UserID='".$_SESSION['UserID']."'";
                               $q1=  mysqli_query($con, $q);
             while($row=  mysqli_fetch_array($q1))
             {
                            
                            ?>
				<section class="content">
					<div class="container">
						<div class="row">
							<div id="page-header" class="col-md-24">
								<h1 id="page-title">My Account</h1> 
							</div>
							<div class="col-sm-6 col-md-6 sidebar">
								<div class="group_sidebar">
									<div class="row sb-wrapper unpadding-top">
										<h6 class="sb-title">Account Details</h6>
										<span class="mini-line"></span>
										<ul id="customer_detail" class="list-unstyled sb-content">
											<li>
											<address class="clearfix">
											<div class="info">
												<i class="fa fa-user"></i>
												<span class="address-group">
												<span class="author"><?php echo $row['Username']; ?></span>
												<span class="email"><?php echo $row['EmailID']; ?></span>
												</span>
											</div>
											<div class="address">
												<span class="address-group">
												<span class="address1"><?php echo $row['Address'].",".$row['City'].",".$row['State']; ?><span class="phone-number"></span></span>
												</span>
											</div>
											</address>
											</li>
											<li>
											<button class="btn btn-1" id="view_address" onclick="window.location='AccountEdit.php'">Manage Details</button>
                                                                                        <button class="btn btn-1 col-lg-12" id="view_address" onclick="window.location='Logout.php'">Logout</button>
											</li>
										</ul>
									</div>
								</div>
							</div>
                                                    
                                                    
							<div id="col-main" class="account-page col-sm-18 col-md-18 clearfix">
								<div id="customer_orders">
									<h6 class="sb-title">Order history</h6>
									<span class="mini-line"></span>
									<div class="row wrap-table">
										<table class="table-hover">
										<thead>
										<tr>
											<th class="order_number">
												Product Image
											</th>
											<th class="date">
												Product Name
											</th>
											<th class="payment_status">
												Quantity
											</th>
											<th class="fulfillment_status">
												Date
											</th>
											<th class="total">
												Total
											</th>
										</tr>
										</thead>
										<tbody>
                                                                                   <?php
                                                    $query="select tbl_order_details.*,tbl_product_details.* from tbl_order_details,tbl_product_details where tbl_order_details.Product_id=tbl_product_details.Product_id and tbl_order_details.UserID='".$_SESSION['UserID']."'";
                                                               $exe=  mysqli_query($con, $query);
                                                        while($r=  mysqli_fetch_array($exe))
                                                        {
                                                          
                                                        
                                                    ?> 
										<tr class="odd ">
											<td>
                                                                                            <img src='<?php echo  $r['Imagepath']; ?>' class="img-responsive col-lg-6">
											</td>
											<td>
												<?php echo  $r['Product_name']; ?>
											</td>
											<td>
												<?php echo  $r['Quantity']; ?>
											</td>
											<td>
												<?php echo  $r['Date']; ?>
											</td>
											<td>
												<?php echo  $r['Total']; ?>
											</td>
										</tr>
                                                                                
                                                                                <?php
             }
                                                                                ?>
									</tbody>
										</table>
									</div>
								</div>
							</div>  
						</div>
					</div>
                                    <?php
             }
             ?>
                                  
                                  <div class="container">
                                      <div class="row">
                                          <h2>Your Opinion Is Precious For Us</h2>
                                      </div>
                                      <div class="row">
                                          
<form action="" method="post" name="form1" id="form1" >
                                              <div class="form-group">
                                                  <textarea rows="5" cols="15" name="feedback" class="form-control" placeholder="Please Enter Your Opininion"></textarea>
                                              </div>
                                              <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
     
      <td><img src="captcha.php?rand=<?php echo rand();?>" id='captchaimg'><br>
        <label for='message'>Enter the code above here :</label>
        <br>
        <input id="captcha_code" name="captcha_code" type="text">
        <br>
        Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh.</td>
    </tr>
    <tr>
     
     
    </tr>
  </table>
                                           <input name="Submit" type="submit" onclick="return validate();" value="Submit" class="btn btn-1">
                                                                                        
                                          </form>
                                      </div>
                                  </div>
                                  <?php
                             }
                             
                            ?>
				</section>    
                            
			</div>
		</div>
	</div>

	<?php include 'footer.php';  ?>
</body>