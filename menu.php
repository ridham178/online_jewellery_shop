<?php
ob_start();
$con=mysqli_connect("localhost","root", "","db_jwells" ) or die("error");
session_start();?>
<header id="top" class="clearfix">
		<!--top-->
		<div class="container">
		  <div class="top row">
			<div class="col-md-6 phone-shopping">
			  <span>PHONE SHOPING (01) 123 456 UJ</span>
			</div>
			<div class="col-md-18">
			  <ul class="text-right">
				<li class="customer-links hidden-xs">
					<ul id="accounts" class="list-inline">
						<li class="my-account">
                                                    <a href="MyAccount.php">My Account</a>
						</li>  
						<li class="login">    
							
                                                            <a href="Login.php">Login</a>
								
                                                </li>
						<li>/</li>   
						<li class="register">
                                                    <a href="SignUp.php" id="customer_register_link">Create an account</a>
						</li> 
					</ul>
				</li>      
				<li id="widget-social">
				  <ul class="list-inline">            
					<li><a target="_blank" href="#" class="btooltip swing" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a target="_blank" href="#" class="btooltip swing" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>                        
					<li><a target="_blank" href="#" class="btooltip swing" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a></li>           
				  </ul>
				</li>        
			  </ul>
			</div>
		  </div>
		</div>
		<!--End top-->
		<div class="line"></div>
		<!-- Navigation -->
		<div class="container">
			<div class="top-navigation">
				<ul class="list-inline">
					<li class="top-logo">
                                            <a id="site-title" href="Index.php" title="Jewelry - HTML Template theme">          
						<img class="img-responsive" src="assetsss/images/slide-image-caption-1.png" alt="Jewelry - HTML Template theme">          
						</a>
					</li>
					<li class="navigation">			
						<nav class="navbar">
							<div class="clearfix">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle main navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									</button>
								</div>
								<div class="is-mobile visible-xs">
									<ul class="list-inline">
										<li class="is-mobile-menu">
										<div class="btn-navbar" data-toggle="collapse" data-target=".navbar-collapse">
											<span class="icon-bar-group">
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											</span>
										</div>
										</li>
										<li class="is-mobile-login">
										<div class="btn-group">
											<div class="dropdown-toggle" data-toggle="dropdown">
												<i class="fa fa-user"></i>
											</div>
											<ul class="customer dropdown-menu">
												<li class="logout">
												<a href="#">Login</a>
												</li>
												<li class="account last">
												<a href="register.html">Register</a>
												</li>
											</ul>
										</div>
										</li>
										<li class="is-mobile-wl">
										<a href="#"><i class="fa fa-heart"></i></a>
										</li>
										<li class="is-mobile-cart">
										<a href="#"><i class="fa fa-shopping-cart"></i></a>
										</li>
									</ul>
								</div>
								<div class="collapse navbar-collapse">
									<ul class="nav navbar-nav hoverMenuWrapper">
										<li class="nav-item active">
                                                                                    <a href="Index.php">
										<span>Home</span>
										</a>
										</li>
										<li class="nav-item">
                                                                                    <a href="Collection.php">
										<span>Products</span>
										</a>
										</li>
										<li class="nav-item">
										<a href="#">
										<span>Services</span>
										</a>
										</li>
									
										<li class="nav-item">
										<a href="Contact.php">
										<span>Contact</span>
										</a>
										</li>
									</ul>
								</div>
							</div>
						</nav>
					</li>		  
								
					<li class="umbrella hidden-xs">
						<div id="umbrella" class="list-inline unmargin">
							<div class="cart-link">
                                                            <a href="ViewCart.php" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
									
									<div class="num-items-in-cart">
										<span class="icon">
										  Cart
										 
										</span>
									</div>
								</a>
								<div id="cart-info" class="dropdown-menu" style="display: none;">
									<div id="cart-content">
                                                                            <?php
                                                                            
                                                                            if(isset($_SESSION['UserID'])&&!empty($_SESSION['UserID']))
                                                                            {
                                                                            $q="select tbl_product_details.Product_id,tbl_product_details.Unitprice,tbl_product_details.Product_name,tbl_product_details.Description,tbl_product_details.Imagepath,tbl_wishlist.WishlistID from tbl_product_details,tbl_wishlist where tbl_wishlist.Product_id=tbl_product_details.Product_id and  tbl_wishlist.UserID='".$_SESSION['UserID']."'";
             $q1=  mysqli_query($con, $q)or die($con);
             
              while($row=  mysqli_fetch_array($q1))
                                                                                            {
                                                                            ?>
										<div class="items control-container">
											<div class="row items-wrapper">
												<a class="cart-close" title="Remove"  href="deletecartiteam.php?id=<?php echo $row['WishlistID']; ?>"><i class="fa fa-times"></i></a>
												<div class="col-md-8 cart-left">
                                                                                                    <a class="cart-image" href="productDetail.php?id=<?php echo $row['Product_id'];  ?>"> <img src="<?php echo $row['Imagepath']  ?>" class="img-responsive" alt="Donec condime fermentum"></a>
												</div>
												<div class="col-md-16 cart-right">
													<div class="cart-title">
														<a href="productDetail.php?id=<?php echo $row['Product_id'];  ?>"><?php echo $row['Product_name']; ?></a>
													</div>
													<div class="cart-price">
														<?php echo $row['Unitprice']; ?>
													</div>
												</div>
											</div>
										</div>
                                                                            
                                                                            <?php
                                                                                            }?>
                                                                                            <div class="action">
                                                                                    <button class="btn" onclick="window.location='cart.html'">CHECKOUT</button><a class="btn btn-1" href="ViewCart.php">View Cart</a>
										</div><?php
                                                                            }
                                                                            else
                                                                            {
                                                                                ?><h3>Login for Your Cart Details</h3>  <?php
                                                                            }
                                                                            ?>
                                                                            
                                                                            	
										
										
									</div>
								</div>
							</div>
						</div>
					</li>		  		 
					<li class="mobile-search visible-xs">
						<form id="mobile-search" class="search-form" action="http://demo.designshopify.com/html_jewelry/search.html" method="get">
							<input type="hidden" name="type" value="product">
							<input type="text" class="" name="q" value="" accesskey="4" autocomplete="off" placeholder="Search something...">
							<button type="submit" class="search-submit" title="search"><i class="fa fa-search"></i></button>
						</form>
					</li>		  
				</ul>
			</div>
			<!--End Navigation-->
			<script>
			  function addaffix(scr){
				if($(window).innerWidth() >= 1024){
				  if(scr > $('#top').innerHeight()){
					if(!$('#top').hasClass('affix')){
					  $('#top').addClass('affix').addClass('animated');
					}
				  }
				  else{
					if($('#top').hasClass('affix')){
					  $('#top').prev().remove();
					  $('#top').removeClass('affix').removeClass('animated');
					}
				  }
				}
				else $('#top').removeClass('affix');
			  }
			  $(window).scroll(function() {
				var scrollTop = $(this).scrollTop();
				addaffix(scrollTop);
			  });
			  $( window ).resize(function() {
				var scrollTop = $(this).scrollTop();
				addaffix(scrollTop);
			  });
			</script>
		</div>
	 </header>
  