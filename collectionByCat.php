<?php
ob_start();
 $con=  mysqli_connect("localhost","root", "","db_jwells" ) or die("error");
?><!doctype html>
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<!-- Mirrored from demo.designshopify.com/html_jewelry/collection-left.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Feb 2018 17:02:36 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <link rel="canonical" href="http://demo.designshopify.com/" />
  <meta name="description" content="" />
  <title>Collection Left Sidebar Page</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      
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

<body itemscope="" itemtype="http://schema.org/WebPage" class="templateCollection notouch">
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
								<span class="page-title">Collection Left Sidebar</span>
							</div>
						</div>
					</div>
				</div>
                
				<section class="content">
					<div class="container">
						<div class="row"> 
							<div id="collection-content">
								<div id="page-header">
									<h1 id="page-title">Collection Left Sidebar</h1>
								</div>
								<div class="collection-warper col-sm-24 clearfix"> 
									<div class="collection-panner">
										<img src="assets/images/collection_banner.jpg" class="img-responsive" alt="">
									</div>
								</div>
								<div class="collection-main-content">
									<div id="prodcoll" class="col-sm-6 col-md-6 sidebar hidden-xs">
										<div class="group_sidebar">
											<div class="sb-wrapper">
												<!-- filter tags group -->
												<div class="filter-tag-group">
													<h6 class="sb-title">Filter</h6>
													 <div class="home-collection-wrapper sb-wrapper clearfix">
												<h6 class="sb-title">Product Search</h6>
                                                                                                <input type="text" name="pname" id="country" class="form-control" placeholder="Enter Product Name" />  
                                                                                                <div id="countryList"></div>  
                                                                                    </div>
                                                                                     <script>  
 $(document).ready(function(){  
      $('#country').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"livesearch.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#countryList').fadeIn();  
                          $('#countryList').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#country').val($(this).text());  
           $('#countryList').fadeOut();  
      });  
 });  
 </script> 
													
													
													<!-- tags groupd 3 -->
													
													<!-- tags groupd 3 -->
												</div>
											</div>  
											<div class="home-collection-wrapper sb-wrapper clearfix">
												<h6 class="sb-title">Product Categories</h6>
												<ul class="list-unstyled sb-content list-styled">
                                                                                                     <li>
                                                                                                        <a href="Collection.php"><span><i class="fa fa-circle"></i><?php echo "View All" ?></span><span class="collection-count"></span></a>
													</li>   
                                                                                                    <?php
                                                                                                       $q="select * from tbl_category_details;";
                                                                                                                    $q1=  mysqli_query($con, $q);
                                                                                                                    while($row=  mysqli_fetch_array($q1))
                                                                                                                    {
                                                                                                    ?>
													<li>
													<a href="collectionByCat.php?id=<?php echo $row['Category_id']; ?>"><span><i class="fa fa-circle"></i><?php echo $row['Category_name']; ?></span><span class="collection-count"></span></a>
													</li>
                                                                                                        <?php
                                                                                                                    }
                                                                                                        ?>
												</ul>
											</div>  
											
											
											<div class="sb-item slidebar-banner">
												<h6 class="sb-title">Promotion</h6>
												<div class="">
													<img src="assets/images/blog-slidebar-banner.jpg" alt="">
												</div>
											</div>
											<!--End sb-item-->
										</div><!--end group_sidebar-->
									</div>
									<div id="col-main" class="collection collection-page col-sm-18 col-md-18 no_full_width have-left-slidebar">
										<div class="container-nav clearfix">
											<div id="options" class="container-nav clearfix">
												<ul class="list-inline text-right">
													<li class="grid_list">
													<ul class="list-inline option-set hidden-xs" data-option-key="layoutMode">
														<li data-original-title="Grid" data-option-value="fitRows" id="goGrid" class="goAction btooltip active" data-toggle="tooltip" data-placement="top" title="">
														<span></span>
														</li>
														<li data-original-title="List" data-option-value="straightDown" id="goList" class="goAction btooltip" data-toggle="tooltip" data-placement="top" title="">
														<span></span>
														</li>
													</ul>
													</li>
													<li class="sortBy">
													<div id="sortButtonWarper" class="dropdown-toggle" data-toggle="dropdown">
														<strong class="title-6">View as</strong>
														<button id="sortButton">
														<span class="name">Featured</span><i class="fa fa-caret-down"></i>
														</button>
														<i class="sub-dropdown1"></i>
														<i class="sub-dropdown"></i>
													</div>
													<div id="sortBox" class="control-container dropdown-menu">
                                                                                                            
														<ul id="sortForm" class="list-unstyled option-set text-left list-styled" data-option-key="sortBy">
                                                                                                                    <a href="<?php if(isset($_GET['id'])&&!empty($_GET['id'])){echo "collectionByCat.php?view=manul&id=".$_GET['id']."";}else{ echo "collectionByCat.php?view=manul";} ?>"><li class="sort" data-option-value="manual">Featured</li></a>
															<a href="<?php if(isset($_GET['id'])&&!empty($_GET['id'])){echo "collectionByCat.php?view=aes&id=".$_GET['id']."";}else{ echo "collectionByCat.php?view=aes";} ?>"><li class="sort" data-option-value="price-ascending" data-order="asc">Price: Low to High</li></a>
															<a href="<?php if(isset($_GET['id'])&&!empty($_GET['id'])){echo "collectionByCat.php?view=des&id=".$_GET['id']."";}else{ echo "collectionByCat.php?view=des";} ?>"><li class="sort" data-option-value="price-descending" data-order="desc">Price: High to Low</li></a>
															
														</ul>
													</div>
													</li>
												</ul>
											</div>
										</div>
										<div id="sandBox-wrapper" class="group-product-item row collection-full">
											<ul id="sandBox" class="list-unstyled">
                                                                                           
                                                                                            <?php
                                                                                            if(isset($_GET['view']))
                                                                                            {
                                                                                                if(isset($_GET['view'])&&isset($_GET['id']))
                                                                                                {
                                                                                                    if($_GET['view']=="manul")
                                                                                                    {
                                                                                                     $q="select * from tbl_product_details where Category_id='".$_GET['id']."';";
                                                                                                    }
                                                                                                    else if($_GET['view']=="aes")
                                                                                                    {
                                                                                                       
                                                                                                        $q="select * from tbl_product_details where Category_id='".$_GET['id']."' ORDER BY Unitprice;";
                                                                                                    }
                                                                                                    else if($_GET['view']=="des")
                                                                                                    {
                                                                                                       
                                                                                                          $q="select * from tbl_product_details where Category_id='".$_GET['id']."' ORDER BY Unitprice DESC;";
                                                                                                        //des query
                                                                                                    }
                                                                                                    else
                                                                                                    {
                                                                                                        //other
                                                                                                    }
                                                                                                }
                                                                                            }
                                                                                            else
                                                                                            {
                                                                                               
                                                                                                     $q="select * from tbl_product_details where Category_id='".$_GET['id']."';";
                                                                                            }
                                                                                                                    $q1=  mysqli_query($con, $q)or die(print_r($con));
                                                                                                                    while($row=  mysqli_fetch_array($q1))
                                                                                                                    {
                                                                                                                       
                                                                                                    ?>
												<li class="element first no_full_width" data-alpha="Curabitur cursus dignis" data-price="25900">
													<ul class="row-container list-unstyled clearfix">
														<li class="row-left">
														<a href="productDetail.php?id=<?php echo $row['Product_id']; ?>" class="container_item">
														<img src="<?php echo $row['Imagepath']; ?>" class="img-responsive" alt="Curabitur cursus dignis">
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
															<span class="spr-badge" id="spr_badge_129323821155" data-rating="0.0">
															<span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span>
															<span class="spr-badge-caption">
															No reviews </span>
															</span>
														</div>
														<div class="product-content-right">
															<div class="product-price">
																<span class="price_sale"><?php echo $row['Unitprice']; ?></span>
																<del class="price_compare"><?php echo $row['Unitprice']+1200; ?></del>
															</div>
														</div>
														<div class="list-mode-description">
															<?php echo $row['Description']; ?>
                                                                                                                </div>
														<div class="hover-appear">
															
															<a class="wish-list" href="productDetail.php?id=<?php echo $row['Product_id']; ?>"><i class="fa fa-eye" title="Quick view"></i><span class="list-mode">Quick View</span></a>
																
															<a class="wish-list" href="cart.php?pid=<?php echo $row['Product_id']; ?>" title="wish list"><i class="fa fa-heart"></i><span class="list-mode">Add to Wishlist</span></a>
														</div>
														</li>
													</ul>
												</li>
											<?php
                                                                                                                    }
                                                                                                                    
                                                                                        ?>
											</ul>
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

	<div id="quick-shop-modal" class="modal in" role="dialog" aria-hidden="false" tabindex="-1" data-width="800">
		<div class="modal-backdrop in" style="height: 742px;">
		</div>
		<div class="modal-dialog rotateInDownLeft animated">
			<div class="modal-content">
				<div class="modal-header">
					<i class="close fa fa-times btooltip" data-toggle="tooltip" data-placement="top" title="" data-dismiss="modal" aria-hidden="true" data-original-title="Close"></i>
				</div>
				<div class="modal-body">
					<div class="quick-shop-modal-bg" style="display: none;">
					</div>
					<div class="row">
						<div class="col-md-12 product-image">
							<div id="quick-shop-image" class="product-image-wrapper">
								<a class="main-image"><img class="img-zoom img-responsive image-fly" src="assets/images/1_grande.jpg" data-zoom-image="./assets/images/1.jpg" alt=""/></a>
								<div id="gallery_main_qs" class="product-image-thumb">
									<a class="image-thumb active" href="assets/1images/.html" data-image="./assets/images/1_grande.jpg" data-zoom-image="assets/images/1.html"><img src="assets/images/1_compact.jpg" alt=""/></a>
									<a class="image-thumb" href="assets/images/2.html" data-image="./assets/images/2_grande.jpg" data-zoom-image="assets/images/2.html"><img src="assets/images/2_compact.jpg" alt=""/></a>
									<a class="image-thumb" href="assets/images/3.html" data-image="./assets/images/3_grande.jpg" data-zoom-image="assets/images/3.html"><img src="assets/images/3_compact.jpg" alt=""/></a>
									<a class="image-thumb" href="assets/images/4.html" data-image="./assets/images/4_grande.jpg" data-zoom-image="assets/images/4.html"><img src="assets/images/4_compact.jpg" alt=""/></a>
									<a class="image-thumb" href="assets/images/5.html" data-image="./assets/images/5_grande.jpg" data-zoom-image="assets/images/5.html"><img src="assets/images/5_compact.jpg" alt=""/></a>
									<a class="image-thumb" href="assets/images/6.html" data-image="./assets/images/6_grande.jpg" data-zoom-image="assets/images/6.html"><img src="assets/images/6_compact.jpg" alt=""/></a>
								</div>	
							</div>
						</div>
						<div class="col-md-12 product-information">
							<h1 id="quick-shop-title"><span><a href="http://demo.designshopify.com/products/curabitur-cursus-dignis">Curabitur cursus dignis</a></span></h1>
							<div id="quick-shop-infomation" class="description">
								<div id="quick-shop-description" class="text-left">
									<p>
										Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum.
									</p>
									<p>
										Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui dolorem ipsum quia dolor s...
									</p>
								</div>
							</div>
							<div id="quick-shop-container">
								<div id="quick-shop-relative" class="relative text-left">
									<ul class="list-unstyled">
										<li class="control-group vendor">
										<span class="control-label">Vendor :</span><a href="http://demo.designshopify.com/collections/vendors?q=Vendor+1"> Vendor 1</a>
										</li>
										<li class="control-group type">
										<span class="control-label">Type :</span><a href="http://demo.designshopify.com/collections/types?q=Sweaters+Wear"> Sweaters Wear</a>
										</li>
									</ul>
								</div>
								<form action="#" method="post" class="variants" id="quick-shop-product-actions" enctype="multipart/form-data">
									<div id="quick-shop-price-container" class="detail-price">
										<span class="price_sale">$259.00</span><span class="dash">/</span><del class="price_compare">$300.00</del>
									</div>
									<div class="quantity-wrapper clearfix">
										<label class="wrapper-title">Quantity</label>
										<div class="wrapper">
											<input type="text" id="qs-quantity" size="5" class="item-quantity" name="quantity" value="1">
											<span class="qty-group">
											<span class="qty-wrapper">
											<span class="qty-up" title="Increase" data-src="#qs-quantity">
											<i class="fa fa-plus"></i>
											</span>
											<span class="qty-down" title="Decrease" data-src="#qs-quantity">
											<i class="fa fa-minus"></i>
											</span>
											</span>
											</span>
										</div>
									</div>
									<div id="quick-shop-variants-container" class="variants-wrapper">
										<div class="selector-wrapper">
											<label for="#quick-shop-variants-1293238211-option-0">Color</label>
											<div class="wrapper">
												<select class="single-option-selector" data-option="option1" id="#quick-shop-variants-1293238211-option-0" style="z-index: 1000; position: absolute; opacity: 0; font-size: 15px;">
													<option value="black">black</option>
													<option value="red">red</option>
													<option value="blue">blue</option>
													<option value="purple">purple</option>
													<option value="green">green</option>
													<option value="white">white</option>
												</select>
												<button type="button" class="custom-style-select-box" style="display: block; overflow: hidden;"><span class="custom-style-select-box-inner" style="width: 264px; display: inline-block;">black</span></button><i class="fa fa-caret-down"></i>
											</div>
										</div>
										<div class="selector-wrapper">
											<label for="#quick-shop-variants-1293238211-option-1">Size</label>
											<div class="wrapper">
												<select class="single-option-selector" data-option="option2" id="#quick-shop-variants-1293238211-option-1" style="z-index: 1000; position: absolute; opacity: 0; font-size: 15px;">
													<option value="small">small</option>
													<option value="medium">medium</option>
													<option value="large">large</option>
												</select>
												<button type="button" class="custom-style-select-box" style="display: block; overflow: hidden;"><span class="custom-style-select-box-inner" style="width: 264px; display: inline-block;">small</span></button><i class="fa fa-caret-down"></i>
											</div>
										</div>
									</div>
									<div class="others-bottom">
										<input id="quick-shop-add" class="btn small add-to-cart" type="submit" name="add" value="Add to Cart" style="opacity: 1;">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
