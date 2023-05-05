<?php
ob_start();
?>
<!doctype html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <link rel="canonical" href="http://demo.designshopify.com/" />
  <meta name="description" content="" />
  <title>Address Page</title>
  
    <link href="assets/stylesheets/font.css" rel='stylesheet' type='text/css'>
  
	<link href="assets/stylesheets/font-awesome.min.css" rel="stylesheet" type="text/css" media="all"> 	
	<link href="assets/stylesheets/bootstrap.min.3x.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.bootstrap.3x.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.animate.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.global.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.style.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.media.3x.css" rel="stylesheet" type="text/css" media="all">
	
	<script src="assets/javascripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="assets/javascripts/bootstrap.min.3x.js" type="text/javascript"></script>
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
								<span class="page-title">Manage Details</span>
							</div>
						</div>
					</div>
				</div>     
                             <?php
                             if(isset($_SESSION['UserID']))
                             {
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
								<h1 id="page-title">MANAGE DETAILS</h1> 
							</div>
							<div id="col-main" class="address-page manage-address clearfix">								
								<div class="clearfix">
								  <div id="address_tables">
									
									<div class="clearfix">
									  <div class="col-md-12 first">
										<div id="parent_address_226447297" class="address_table">
										  <div id="edit_address_226447297" class="customer_address edit_address" style="display:none">
											<form method="post" action="updateAccount.php" id="address_form_226447297" accept-charset="UTF-8">
											  <input name="form_type" type="hidden" value="customer_address">
											  <input type="hidden" name="_method" value="put">
											  <input name="utf8" type="hidden" value="âœ“">
											  <ul class="row list-unstyled customer_address_table">
												<li class="col-md-24">
												  <label class="control-label" for="address_first_name_226447297">First Name</label>
												  <input type="text" id="address_first_name_226447297" class="form-control" name="fname" value="<?php echo $row['FirstName']; ?>">
												</li>
												<li class="clearfix"></li>
												<li class="col-md-24">
												  <label class="control-label" for="address_last_name_226447297">Last Name</label>
												  <input type="text" id="address_last_name_226447297" class="form-control" name="lname" value="<?php  echo $row['LastName']; ?>">
												</li>
												<li class="clearfix"></li>
												<li class="col-md-24">
												  <label class="control-label" for="address_company_226447297">Username</label>
												  <input type="text" id="address_company_226447297" class="form-control" name="uname" value="<?php  echo $row['Username']; ?>">
												</li>
												<li class="clearfix"></li>
												<li class="col-md-24">
												  <label class="control-label" for="address_address1_226447297">Password</label>
                                                                                                  <input type="password" id="address_address1_226447297" class="form-control" name="pass" value="<?php  echo $row['Password']; ?>">
												</li>
												<li class="clearfix"></li>
												<li class="col-md-24">
												  <label class="control-label" for="address_address2_226447297">Address</label>
												  <input type="text" id="address_address2_226447297" class="form-control" name="address" value="<?php  echo $row['Address']; ?>">
												</li>
												<li class="clearfix"></li>
												<li class="col-md-12">
												  <label class="control-label" for="address_city_226447297">City</label>
												  <input type="text" id="address_city_226447297" class="form-control" name="city" value="<?php echo $row['City']; ?>">
												</li>
												<li class="col-md-12">
												  <label class="control-label" for="address_city_226447297">State</label>
												  <input type="text" id="address_city_226447297" class="form-control" name="state" value="<?php  echo $row['State']; ?>">
                                                                                                </li>
												<li class="col-md-12">
												  <label class="control-label" for="address_city_226447297">Mobile Number</label>
												  <input type="text" id="address_city_226447297" class="form-control" name="mno" value="<?php  echo $row['MobileNo']; ?>">
                                                                                                </li>
												<li class="col-md-12">
												  <label class="control-label" for="address_city_226447297">Email ID</label>
												  <input type="text" id="address_city_226447297" class="form-control" name="eid" value="<?php  echo $row['EmailID']; ?>">
                                                                                                </li>
												
												<li class="clearfix"></li>
											  </ul>
											  <div class="last clearfix">
                                                                                              <input type="submit" class="btn btn-3 mright-7"  value="Update Address">
												<button class="btn btn-4" type="button" onclick="HTML.CustomerAddress.toggleForm(226447297);return false">Cancel</button>
											  </div>
											  <br>
											</form>
										  </div>
										  <div id="view_address_226447297" class="customer_address view_address clearfix">
											<div class="address_info col-md-14">
													<address class="clearfix">
													<div class="info">
														<i class="fa fa-user"></i>
														<span class="address-group">
														<span class="author"><?php echo $row['Username']; ?></span>
														
														</span>
													</div>
													<div class="address">
														<span class="address-group">
														<span class="address1"><?php echo $row['Address'].",".$row['City'].",".$row['State']; ?></span>
														</span>
													</div>
													</address>
											</div>
												<div id="tool_address_1940927491" class="address_actions col-md-10">
													<a href="#" onclick="HTML.CustomerAddress.toggleForm(226447297);return false"><i class="fa fa-edit"></i><span>Edit</span></a>
																									</div>
										  </div>
										</div>
									  </div>
									</div>
								
								  </div>
								</div>
								
								<script type="text/javascript">
								  var HTML = new Object();
								  HTML.CustomerAddress = {
									toggleForm: function(id) {
									  var editEl = document.getElementById('edit_address_'+id);
									  var toolEl = document.getElementById('tool_address_'+id);      
									  editEl.style.display = editEl.style.display == 'none' ? '' : 'none';
									  toolEl.style.visibility = toolEl.style.visibility == 'hidden' ? '' : 'hidden';
									  return false;    
									},
									
									toggleNewForm: function() {
									  var el = document.getElementById('add_address');
									  el.style.display = el.style.display == 'none' ? '' : 'none';
									  return false;
									},
									
									destroy: function(id, confirm_msg) {
									  if (confirm(confirm_msg || "Are you sure you wish to delete this address?")) {
									  }      
									}
								  }
								</script>
							  </div>						
						</div>
					</div>
				</section>        
                            <?php
             }
                             }
                            ?>
			</div>
		</div>
	</div>

	<footer id="footer">      
		<div id="footer-content">
			
			<div class="footer-content footer-content-top clearfix">
				<div class="container">
					<div class="footer-link-list col-md-6">
					  <div class="group">
						<h5 class="general-title">About Us</h5>						
						<ul class="list-unstyled list-styled">						  
						  <li class="list-unstyled">
							<a href="account.html">Store Locations</a>
						  </li>						  
						  <li class="list-unstyled">
							<a href="account.html">Whosesalers</a>
						  </li>						  
						  <li class="list-unstyled">
							<a href="account.html">Map Site</a>
						  </li>						  
						  <li class="list-unstyled">
							<a href="account.html">Contact Us</a>
						  </li>						  
						</ul>
					  </div>
					</div>   
					<div class="footer-link-list col-md-6">
					  <div class="group">
						<h5 class="general-title">Information</h5>						
						<ul class="list-unstyled list-styled">						  
						  <li class="list-unstyled">
							<a href="account.html">Help &amp; FAQs</a>
						  </li>						  
						  <li class="list-unstyled">
							<a href="account.html">Advance Search</a>
						  </li>						  
						  <li class="list-unstyled">
							<a href="account.html">Gift Cards</a>
						  </li>						  
						  <li class="list-unstyled">
							<a href="account.html">Shop By Brands</a>
						  </li>						  
						</ul>
					  </div>
					</div>
					<div class="footer-link-list col-md-6">
					  <div class="group">
						<h5 class="general-title">Account</h5>						
						<ul class="list-unstyled list-styled">						  
						  <li class="list-unstyled">
							<a href="account.html">Preferences</a>
						  </li>						  
						  <li class="list-unstyled">
							<a href="account.html">Order History</a>
						  </li>						  
						  <li class="list-unstyled">
							<a href="account.html">Cart Page</a>
						  </li>						  
						  <li class="list-unstyled">
							<a href="account.html">Sign In</a>
						  </li>						  
						</ul>
					  </div>
					</div>
					<div class="footer-link-list col-md-6">
					  <div class="group">
						<h5 class="general-title">Customer</h5>						
						<ul class="list-unstyled list-styled">						  
							<li class="list-unstyled">
								<a href="search.html">Search Advanced</a>
							</li>						  
							<li class="list-unstyled">
								<a href="#">Return Policy</a>
							</li>						  
							<li class="list-unstyled">
								<a href="#">Privacy Policy</a>
							</li>						  
							<li class="list-unstyled">
								<a href="#">Help &amp; Contact</a>
							</li>						  
						</ul>
					  </div>
					</div>   
				</div>
			</div>
			<div class="footer-content footer-content-bottom clearfix">
				<div class="container">
					<div class="copyright col-md-12">
						Â© 2015 <a href="about-us.html">Jewelry - HTML template</a>. All Rights Reserved.
					</div>
					<div id="widget-payment" class="col-md-12">
						<ul id="payments" class="list-inline animated">
							<li class="btooltip tada" data-toggle="tooltip" data-placement="top" title="" data-original-title="Visa"><a href="#" class="icons visa"></a></li>
							<li class="btooltip tada" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mastercard"><a href="#" class="icons mastercard"></a></li>
							<li class="btooltip tada" data-toggle="tooltip" data-placement="top" title="" data-original-title="American Express"><a href="#" class="icons amex"></a></li>
							<li class="btooltip tada" data-toggle="tooltip" data-placement="top" title="" data-original-title="Paypal"><a href="#" class="icons paypal"></a></li>
							<li class="btooltip tada" data-toggle="tooltip" data-placement="top" title="" data-original-title="Moneybookers"><a href="#;" class="icons moneybookers"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>   
	</footer>
</body>
