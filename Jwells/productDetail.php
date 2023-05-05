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
  <?php
    $q="select * from tbl_product_details where Product_id='".$_GET['id']."';";
             $q1=  mysqli_query($con, $q);
             while($row=  mysqli_fetch_array($q1))
             {
                          
  ?>
	<div id="content-wrapper-parent">
		<div id="content-wrapper">  
			<!-- Content -->
			<div id="content" class="clearfix">        
				<div id="breadcrumb" class="breadcrumb">
					<div itemprop="breadcrumb" class="container">
						<div class="row">
							<div class="col-md-24">
								
								<span class="page-title"><?php echo $row['Product_name']; ?></span>
							</div>
						</div>
					</div>
				</div>         
				<section class="content">
					<div class="container">
						<div class="row">              
							<div id="col-main" class="product-page col-xs-24 col-sm-24 ">
								<div itemscope="" itemtype="http://schema.org/Product">
									<meta itemprop="url" content="/products/donec-condime-fermentum">
									<div id="product" class="content clearfix">      
										<h1 id="page-title" class="text-center">
											<span itemprop="name"><?php echo $row['Product_name']; ?></span>
										</h1>
										<div id="product-image" class="product-image row ">     
											<div id="detail-left-column" class="hidden-xs left-coloum col-sm-6 col-sm-6 fadeInRight not-animated" data-animate="fadeInRight">
												<div id="gallery_main" class="product-image-thumb thumbs full_width ">
													<ul class="slide-product-image">													
														<li class="image">
															<a href="<?php echo $row['Imagepath']; ?>" class="cloud-zoom-gallery active">
																<img src="<?php echo $row['Imagepath']; ?>" alt="Donec condime fermentum">
															</a>
                                                                                                                    <a href="<?php echo $row['Imagepath2']; ?>" class="cloud-zoom-gallery">
                                                                                                                        <img src="<?php echo $row['Imagepath2']; ?>" alt="Donec condime fermentum" class="img-responsive">
															</a>
                                                                                                                     <a href="<?php echo $row['Imagepath3']; ?>" class="cloud-zoom-gallery">
                                                                                                                        <img src="<?php echo $row['Imagepath3']; ?>" alt="Donec condime fermentum" class="img-responsive">
															</a>
                                                                                                                     <a href="<?php echo $row['Imagepath4']; ?>" class="cloud-zoom-gallery">
                                                                                                                        <img src="<?php echo $row['Imagepath4']; ?>" alt="Donec condime fermentum" class="img-responsive">
															</a>
														</li>
														
													</ul>
												</div>
											</div>      
											<div class="image featured col-smd-12 col-sm-12 fadeInUp not-animated" data-animate="fadeInUp"> 
												<img src="<?php echo $row['Imagepath']; ?>" alt="Donec condime fermentum">
											</div>
											      
											 
										</div>
										<div id="product-information" class="product-information row text-center ">        
											<div id="product-header" class="clearfix">
												<div id="product-info-left">
													<div class="description">
                                                                                                            <span><h5>Product Descriptions</h5></span>
														<p><?php echo $row['Description']; ?>
                                                                                                                </p>
                                                                                                                <span><h5>Product Weight</h5></span>
                                                                                                                <p><?php echo $row['Weight']; ?></p>
                                                                                                                <span><h5>Product Material</h5></span>
                                                                                                                <p><?php echo $row['Product_material']; ?></p>
													</div>
													
												</div>          
												<div id="product-info-right">     
													<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="col-sm-24 group-variants">
														<meta itemprop="priceCurrency" content="USD">              
														<link itemprop="availability" href="http://schema.org/InStock">
														<form action="http://demo.designshopify.com/html_jewelry/cart.html" method="post" class="variants" id="product-actions">
															<div id="product-actions-1293235843" class="options clearfix">
																<style scoped>
																  label[for="product-select-option-0"] { display: none; }
																  #product-select-option-0 { display: none; }
																  #product-select-option-0 + .custom-style-select-box { display: none !important; }
																</style>																
																<div class="swatch color clearfix" data-option-index="0">
																																
																</div>
																
                                                                                                                                <span><h5>Price</h5></span>
																<div id="purchase-1293235843">
																	<div class="detail-price" itemprop="price">
                                                                                                                                            <span class="price"><?php echo $row['Unitprice']; ?><div style="padding-left: 10px" class="fa fa-rupee"></div></span>
																	</div>
																</div>
																<div class="others-bottom clearfix">
                                                                                                                                    <a href="cart.php?pid=<?php echo $row['Product_id']; ?>" id="add-to-cart" class="btn btn-1 add-to-cart col-lg-12" value="Add to Cart" data-parent=".product-information" type="submit" name="add">Add to Cart</a>
																</div>
                                                                                                                             
															</div>
														</form>
														                                     
													</div>                        
													<ul id="tabs_detail" class="tabs-panel-detail hidden-xs hidden-sm">
														
														<li>
															<h5><a href="#pop-two" class="fancybox">Shipping &amp; Returns</a></h5>
														</li>
														
													</ul>             
													<div id="pop-one" style="display: none;">
														<img src="assets/images/mspecs_image.jpg" alt="">
													</div>
													<div id="pop-two" style="display: none;">
														<h5>Returns Policy</h5>
														<p>
															You may return most new, unopened items within 30 days of delivery for a full refund. We'll also pay the return shipping costs if the return is a result of our error (you received an incorrect or defective item, etc.).You should expect to receive your refund within four weeks of giving your package to the return shipper, however, in many cases you will receive a refund more quickly. This time period includes the transit time for us to receive your return from the shipper (5 to 10 business days), the time it takes us to process your return once we receive it (3 to 5 business days), and the time it takes your bank to process our refund request (5 to 10 business days).If you need to return an item, simply login to your account, view the order using the 'Complete Orders' link under the My Account menu and click the Return Item(s) button. We'll notify you via e-mail of your refund once we've received and processed the returned item.
														</p>
														<br>
														<h5>Shipping</h5>
														<p>
															We can ship to virtually any address in the world. Note that there are restrictions on some products, and some products cannot be shipped to international destinations.When you place an order, we will estimate shipping and delivery dates for you based on the availability of your items and the shipping options you choose. Depending on the shipping provider you choose, shipping date estimates may appear on the shipping quotes page.Please also note that the shipping rates for many items we sell are weight-based. The weight of any such item can be found on its detail page. To reflect the policies of the shipping companies we use, all weights will be rounded up to the next full pound.
														</p>
													</div>
													<div id="pop-three" style="display: none;">
														<img src="assets/images/size_chart_image.jpg" alt="">
													</div>                
												</div>
											</div>
										</div>
										<div id="shopify-product-reviews" data-id="1293236931">
													<style scoped="">
													  .spr-container {
														padding: 24px;
														border-color: #ECECEC;
													  }
													  .spr-review, .spr-form {
														border-color: #ECECEC;
													  }
													</style>
													
										</div>				
									</div>
								</div>         
								<!-- Related Products -->
								<!--<section class="rel-container clearfix">  
									<h6 class="general-title text-left">You may also like the related products</h6>
									<div id="prod-related-wrapper">
										<div class="prod-related clearfix">
									  
											<div class="element no_full_width not-animated" data-animate="bounceIn" data-delay="1000">
												<ul class="row-container list-unstyled clearfix">
													<li class="row-left">
													<a href="product.html" class="container_item">
													<img src="assets/images/11_68ab6d0f-109c-429b-a903-4cbf60257806_grande.jpg" class="img-responsive" alt="Product full width">
													<span class="sale_banner">
													<span class="sale_text">Sale</span>
													</span>
													</a>
													<div class="hbw">
														<span class="hoverBorderWrapper"></span>
													</div>
													</li>
													<li class="row-right parent-fly animMix">
													<div class="product-content-left">
														<a class="title-5" href="product.html">Product full width</a>
														<span class="spr-badge" id="spr_badge_1293240771" data-rating="0.0">
														<span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span>
														<span class="spr-badge-caption">
														No reviews </span>
														</span>
													</div>
													<div class="product-content-right">
														<div class="product-price">
															<span class="price_sale">$200.00</span>
															<del class="price_compare"> $300.00</del>
														</div>
													</div>
													<div class="list-mode-description">
														 Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum. Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed...
													</div>
													<div class="hover-appear">
														<form action="#" method="post">
															<div class="effect-ajax-cart">
																<input name="quantity" value="1" type="hidden">
																<button class="select-option" type="button" onclick="window.location.href='product.html'"><i class="fa fa-th-list" title="Select Options"></i><span class="list-mode">Select Option</span></button>
															</div>
														</form>
														<div class="product-ajax-qs hidden-xs hidden-sm">
															<div data-handle="curabitur-cursus-dignis" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																<i class="fa fa-eye" title="Quick view"></i><span class="list-mode">Quick View</span>																	
															</div>
														</div>
														<a class="wish-list" href="account.html" title="wish list"><i class="fa fa-heart"></i><span class="list-mode">Add to Wishlist</span></a>
													</div>
													</li>
												</ul>
											</div>
										</div>	
									</div>										
								</section> -->
							</div>
						</div>
					</div>
				</section>	
			</div>
	    </div>
	</div>  
        <?php
             }
             include 'footer.php';       
        ?>
	
</body>