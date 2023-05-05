<?php
ob_start();
 $con=  mysqli_connect("localhost","root", "","db_jwells" ) or die("error");
?>
<!doctype html>
<html lang="en" class="no-js"> <!--<![endif]-->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <link rel="canonical" href="http://demo.designshopify.com/" />
  <meta name="description" content="" />
  <title>Jewelry HTML Template</title>
  
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

<body class="templateIndex notouch">
    
	<?php
        include 'menu.php';
        ?>
    <div id="content-wrapper-parent">
        <div id="content-wrapper">  
			<!-- Main Slideshow -->
			<div class="home-slider-wrapper clearfix">
				<div class="camera_wrap" id="home-slider">
					<div data-src="assetsss/images/slide-image-1.jpg">
						<div class="camera_caption camera_title_1 fadeIn">
                                                    <a href="Collection.php" style="color:#010101;">Live the moment with</a>
						</div>
						<div class="camera_caption camera_caption_1 fadeIn" style="color: rgb(1, 1, 1);">
							Design for you... 
						</div>
						<div class="camera_caption camera_image-caption_1 moveFromLeft">
							<img src="assetsss/images/slide-image-caption-1.png" alt="image_caption">
						</div>
						<div class="camera_cta_1">
							<a href="collection.php" class="btn">See Collection</a>
						</div>
					</div>
					<div data-src="assetsss/images/slide-image-2.jpg">
						<div class="camera_caption camera_title_2 moveFromLeft">
                                                    <a href="Collection.php" style="color:#666666;">Gold Love Gold Jewelry</a>
						</div>
						<div class="camera_caption camera_image-caption_2 moveFromLeft" style="visibility: hidden;">
							<img src="assetsss/images/slide-image-caption-2.png" alt="image_caption">
						</div>
					</div>
					<div data-src="assetsss/images/slide-image-3.jpg">
						<div class="camera_caption camera_image-caption_3 moveFromLeft">
							<img src="assetsss/images/slide-image-caption-3.png" alt="image_caption">
						</div>
					</div>
				</div>
			</div> 
			<!-- Content -->
			<div id="content" class="clearfix">                       
				<section class="content">  
					<div id="col-main" class="clearfix">
						<div class="home-popular-collections">
							<div class="container">
								<div class="group_home_collections row">
									<div class="col-md-24">
										<div class="home_collections">
											<h6 class="general-title">Collections</h6>
											<div class="home_collections_wrapper">												
												<div id="home_collections">
                                                                                                    <?php
                                                                                                                    $q="select * from tbl_category_details;";
                                                                                                                    $q1=  mysqli_query($con, $q);
                                                                                                                    while($row=  mysqli_fetch_array($q1))
                                                                                                                    {
                                                                                                                                        

                                                                                                    ?>
																<div class="home_collections_item">
																	<div class="home_collections_item_inner">
																		<div class="collection-details">
																			<a href="collectionByCat.php?id=<?php echo $row['Category_id']?>" title="Browse our Bracelets">
																				<img src="<?php echo $row['Image']; ?>" alt="image not available">
																			</a>
																		</div>
																		<div class="hover-overlay">
																			<span class="col-name"><a href="collectionByCat.php?id=<?php echo $row['Category_id']?>"><?php echo $row['Category_name'] ?></a></span>
																			<div class="collection-action">
																				<a href="collection.php">See the Collection</a>
																			</div>
																		</div>
																	</div>
																</div>
                                                                                                    <?php
                                                                                                                    }
                                                                                                    ?>
																
													</div>													
												</div>
											</div>
										</div>
										<script>
										  $(document).ready(function() {
											$('.collection-details').hover(
											  function() {
												$(this).parent().addClass("collection-hovered");
											  },
											  function() {
											  $(this).parent().removeClass("collection-hovered");
											  });
										  });
										</script>
									</div>
								</div>
						</div>
						<div class="home-newproduct">
							<div class="container">
								<div class="group_home_products row">
									<div class="col-md-24">
										<div class="home_products">
											<h6 class="general-title">New Products</h6>
											<div class="home_products_wrapper">
												<div id="home_products">
                                                                                                    <?php
                                                                                                     $q="select * from tbl_product_details ORDER BY RAND() LIMIT 3;";
                                                                                                                    $q1=  mysqli_query($con, $q);
                                                                                                                    while($row=  mysqli_fetch_array($q1))
                                                                                                                    {
                                                                                                    ?>
													<div class="element no_full_width col-md-8 col-sm-8 not-animated" data-animate="fadeInUp" data-delay="0">
														<ul class="row-container list-unstyled clearfix">
															<li class="row-left">
															<a href="productDetail.php?id=<?php echo $row['Product_id']; ?>" class="container_item">
															<img src="<?php echo $row['Imagepath'];  ?>" class="img-responsive" alt="Curabitur cursus dignis">
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
																<a class="title-5" href="product.html"><?php echo $row['Product_name']; ?></a>
																<span class="spr-badge" id="spr_badge_12932382113" data-rating="0.0">
																<span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span>
																<span class="spr-badge-caption">
																No reviews </span>
																</span>
															</div>
															<div class="product-content-right">
																<div class="product-price">
																	<span class="price_sale"><?php echo $row['Unitprice']; ?></span>
																	<del class="price_compare"><?php echo $row['Unitprice']+1500; ?></del>
																</div>
															</div>
															
															<div class="hover-appear">
																<div class="product-ajax-qs hidden-xs hidden-sm">
																	
                                                                                                                                    <a href="productDetail.php?id=<?php echo $row['Product_id']; ?>"><i class="fa fa-eye" title="Quick view"></i><span class="list-mode">Quick View</span></a>																	
																	
																</div>
																<a class="wish-list" href="cart.php?pid=<?php echo $row['Product_id']; ?>" title="wish list"><i class="fa fa-heart"></i><span class="list-mode">Add to Wishlist</span></a>
															</div>
															</li>
														</ul>
													</div> 
                                                                                                    <?php
                                                                                                    }
                                                                                                    ?>
							               
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="home-banner-wrapper">
							<div class="container">
								<div id="home-banner" class="text-center clearfix">
									<img class="pulse img-banner-caption" src="assetsss/images/home_banner_image_text.png" alt="">
									<div class="home-banner-caption">
										<p>
											Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
											 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										</p>
									</div>
									<div class="home-banner-action">
										<a href="collection.php">Shop Now</a>
									</div>
								</div>
							</div>
						</div>
						<div class="home-blog">
							<div class="container">
								<div class="home-promotion-blog row">
									<h6 class="general-title">Latest News</h6>
									<div class="home-bottom_banner_wrapper col-md-12">
										<div id="home-bottom_banner" class="home-bottom_banner">
											<a href="collection.html"><img src="assetsss/images/home_bottom_banner.jpg" alt=""></a>
										</div>
									</div>
									<div class="home-blog-wrapper col-md-12">
										<div id="home_blog" class="home-blog">
											<div class="home-blog-item row">
												<div class="date col-md-4">
													<div class="date_inner">
														<p>
															<small>July</small><span>08</span>
														</p>
													</div>
												</div>
												<div class="home-blog-content col-md-20">
													<h4><a href="article-left.html">sample blog post with left slidebar</a></h4>
													<ul class="list-inline">
														<li class="author"><i class="fa fa-user"></i> Jin Alkaid</li>
														<li>/</li>
														<li class="comment">
														<a href="article-left-2.html">
														<span><i class="fa fa-pencil-square-o"></i> 0</span> Comments </a>
														</li>
													</ul>
													<div class="intro">
														Shoe street style leather tote oversized sweatshirt A.P.C. Prada Saffiano crop slipper denim shorts spearmint....
													</div>
												</div>
											</div>
											<div class="home-blog-item row">
												<div class="date col-md-4">
													<div class="date_inner">
														<p>
															<small>June</small><span>30</span>
														</p>
													</div>
												</div>
												<div class="home-blog-content col-md-20">
													<h4><a href="article.html">vel illum qui dolorem eum fugiat</a></h4>
													<ul class="list-inline">
														<li class="author"><i class="fa fa-user"></i> Jin Alkaid</li>
														<li>/</li>
														<li class="comment">
														<a href="article.html">
														<span><i class="fa fa-pencil-square-o"></i> 1</span> Comment </a>
														</li>
													</ul>
													<div class="intro">
														Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem...
													</div>
												</div>
											</div>
											<div class="home-blog-item row">
												<div class="date col-md-4">
													<div class="date_inner">
														<p>
															<small>June</small><span>30</span>
														</p>
													</div>
												</div>
												<div class="home-blog-content col-md-20">
													<h4><a href="article-right.html">sample blog post full width</a></h4>
													<ul class="list-inline">
														<li class="author"><i class="fa fa-user"></i> Jin Alkaid</li>
														<li>/</li>
														<li class="comment">
														<a href="article-right.html">
														<span><i class="fa fa-pencil-square-o"></i> 0</span> Comments </a>
														</li>
													</ul>
													<div class="intro">
														Shoe street style leather tote oversized sweatshirt A.P.C. Prada Saffiano crop slipper denim shorts spearmint....
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="home-feature">
							<div class="container">
								<div class="group_featured_products row">
									<div class="col-md-24">
										<div class="home_fp">
											<h6 class="general-title">Featured Products</h6>
											<div class="home_fp_wrapper">
												<div id="home_fp">   																						
																										  			  			
													<?php
                                                                                                     $q="select * from tbl_product_details LIMIT 6;";
                                                                                                                    $q1=  mysqli_query($con, $q);
                                                                                                                    while($row=  mysqli_fetch_array($q1))
                                                                                                                    {
                                                                                                    ?>												  
															  
													<div class="element no_full_width not-animated" data-animate="fadeInUp" data-delay="100">
														<ul class="row-container list-unstyled clearfix">
															<li class="row-left">
															<a href="productDetail.php?id=<?php echo $row['Product_id']; ?>" class="container_item">
															<img src="<?php echo $row['Imagepath']; ?>" class="img-responsive" alt="Maximus quam posuere">
															<span class="sale_banner">
															
															</span>
															</a>
															<div class="hbw">
																<span class="hoverBorderWrapper"></span>
															</div>
															</li>
															<li class="row-right parent-fly animMix">
															<div class="product-content-left">
																<a class="title-5" href="productDetail.php?id=<?php echo $row['Product_id']; ?>"><?php echo $row['Product_name']; ?></a>
																<span class="spr-badge" id="spr_badge_12932279073" data-rating="3.0">
																<span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span>
																<span class="spr-badge-caption">
																1 review </span>
																</span>
															</div>
															<div class="product-content-right">
																<div class="product-price">
																	<span class="price_sale"><?php echo $row['Unitprice']; ?></span>
																	<del class="price_compare"><?php echo $row['Unitprice']+1500; ?></del>
																</div>
															</div>
															<div class="list-mode-description">
																 Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum. Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed...
															</div>
															<div class="hover-appear">
																<div class="product-ajax-qs hidden-xs hidden-sm">
																	
                                                                                                                                    <a href="productDetail.php?id=<?php echo $row['Product_id']; ?>"><i class="fa fa-eye" title="Quick view"></i><span class="list-mode">Quick View</span></a>																	
																	
																</div>
																<a class="wish-list" href="cart.php?pid=<?php echo $row['Product_id']; ?>" title="wish list"><i class="fa fa-heart"></i><span class="list-mode">Add to Wishlist</span></a>
															</div>
															</li>
														</ul>
													</div>  
                                                                                                    <?php
                                                                                                    }
                                                                                                    ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
										            
					</div>
				</section>        
			</div>
		</div>
	</div>
	
	<?php include 'footer.php'; ?>
	
	
	<script src="assetsss/javascripts/cs.global.js" type="text/javascript"></script>
 
	
	<!--Androll-->
	<script type="text/javascript">
	adroll_adv_id = "HTF7KIWJRBHHXL46WLUDBC";
	adroll_pix_id = "IE5CHDRTR5ABXH2P6QXAVM";
	(function () {
	var oldonload = window.onload;
	window.onload = function(){
	   __adroll_loaded=true;
	   var scr = document.createElement("script");
	   var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
	   scr.setAttribute('async', 'true');
	   scr.type = "text/javascript";
	   scr.src = host + "/j/roundtrip.js";
	   ((document.getElementsByTagName('head') || [null])[0] ||
		document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
	   if(oldonload){oldonload()}};
	}());
	</script>

	<!-- Google Code -->
	<script>

	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

	  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');



	  ga('create', 'UA-55571446-8', 'auto');

	  ga('require', 'displayfeatures');
	  
	  ga('set', 'dimension1', 'html_jewelry');
		 
	  ga('set', 'dimension2', 'html_jewelry');

	  ga('send', 'pageview');

	</script>
</body>