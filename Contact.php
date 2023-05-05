<?php
ob_start();
 $con=  mysqli_connect("localhost","root", "","db_jwells" ) or die("error");
 
?><!doctype html>
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<!-- Mirrored from demo.designshopify.com/html_jewelry/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Feb 2018 17:02:23 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <link rel="canonical" href="http://demo.designshopify.com/" />
  <meta name="description" content="" />
  <title>Product Details</title>
  
    <link href="assets/stylesheets/font.css" rel='stylesheet' type='text/css'>
  
	<link href="assets/stylesheets/font-awesome.min.css" rel="stylesheet" type="text/css" media="all"> 
	<link href="assets/stylesheets/jquery.camera.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/jquery.fancybox-buttons.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.animate.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/application.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/swatch.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/jquery.owl.carousel.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/jquery.bxslider.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/bootstrap.min.3x.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.bootstrap.3x.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.global.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.style.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.media.3x.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/spr.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/addthis.css" rel="stylesheet" type="text/css" media="all">
	
	<script src="assets/javascripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="assets/javascripts/jquery.imagesloaded.min.js" type="text/javascript"></script>
	<script src="assets/javascripts/bootstrap.min.3x.js" type="text/javascript"></script>
	<script src="assets/javascripts/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="assets/javascripts/jquery.camera.min.js" type="text/javascript"></script>
	<script src="assets/javascripts/jquery.mobile.customized.min.js" type="text/javascript"></script>
	<script src="assets/javascripts/cookies.js" type="text/javascript"></script>
	<script src="assets/javascripts/modernizr.js" type="text/javascript"></script>  
	<script src="assets/javascripts/application.js" type="text/javascript"></script>
	<script src="assets/javascripts/jquery.owl.carousel.min.js" type="text/javascript"></script>
	<script src="assets/javascripts/jquery.bxslider.js" type="text/javascript"></script>
	<script src="assets/javascripts/skrollr.min.js" type="text/javascript"></script>
	<script src="assets/javascripts/jquery.fancybox-buttons.js" type="text/javascript"></script>
	<script src="assets/javascripts/jquery.zoom.js" type="text/javascript"></script>	
	<script src="assets/javascripts/cs.script.js" type="text/javascript"></script>
</head>

<body style="height: 2671px;" itemscope="" itemtype="http://schema.org/WebPage" class="templateProduct notouch">
  
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
								<a href="http://demo.designshopify.com/" class="homepage-link" title="Back to the frontpage">Home</a>
								<span>/</span>
								<span class="page-title">Contact</span>
							</div>
						</div>
					</div>
				</div>               
				<section class="content">    
					<div class="container">
						<div class="row">
							<div id="page-header">
								<h1 id="page-title">Contact Page</h1>
							</div>
						</div>
					</div>
					<div id="col-main" class="contact-page clearfix">
						<div class="group-contact clearfix">
							<div class="container">
								<div class="row">
									<div class="left-block col-md-12">
										<form method="post" action="http://demo.designshopify.com/contact" class="contact-form" accept-charset="UTF-8">
											<input type="hidden" value="contact" name="form_type"><input type="hidden" name="utf8" value="âœ“">
											<ul id="contact-form" class="row list-unstyled">
												<li class="">
												<h3>DROP US A LINE</h3>
												</li>
												<li class="">
												<label class="control-label" for="name">Your Name</label>
												<input type="text" id="name" value="" class="form-control" name="contact[name]">
												</li>
												<li class="clearfix"></li>
												<li class="">
												<label class="control-label" for="email">Your Email <span class="req">*</span></label>
												<input type="email" id="email" value="" class="form-control email" name="contact[email]">
												</li>
												<li class="clearfix"></li>
												<li class="">
												<label class="control-label" for="message">Your Message <span class="req">*</span></label>
												<textarea id="message" rows="5" class="form-control" name="contact[body]"></textarea>
												</li>
												<li class="clearfix"></li>
												<li class="unpadding-top">
												<button type="submit" class="btn">Submit Contact</button>
												</li>
											</ul>
										</form>
									</div>
                                                                    <div id="contact_map_wrapper" class="col-lg-6">
           
<iframe
  width="600"
  height="450"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key= AIzaSyAcvoSk6j3lQi-0Dusgq7yDbJ8F2PBTjAU
    &q=Space+Needle,Seattle+WA" allowfullscreen>
</iframe>
       </div>
								</div>
							</div>
							<div id="contact_map_wrapper">
								
							</div>
						</div>
					</div> 
				</section>        
			</div>
		</div>
	</div>
      
								
								
						

      
	
	<?php include 'footer.php'; ?>
</body>