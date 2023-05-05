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
  <title>Account Page</title>
  
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

<body itemscope="" itemtype="http://schema.org/WebPage" class="templateCart notouch">
  
	<?php include 'menu.php';
        if(!isset($_SESSION['UserID']))
                             {
                                  ?><h2 style="margin-left: 200px;padding-bottom: 250px">Please Login For Cart Details.<a style="margin-left: 10px" href="Login.php">Login</a></h2><?php
                             }
                             else {
        $q="select tbl_wishlist.WishlistID,tbl_product_details.Unitprice,tbl_product_details.Product_name,tbl_product_details.Description,tbl_product_details.Imagepath,tbl_wishlist.WishlistID from tbl_product_details,tbl_wishlist where tbl_wishlist.Product_id=tbl_product_details.Product_id and  tbl_wishlist.UserID='".$_SESSION['UserID']."'";
             $q1=  mysqli_query($con, $q);
            
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
								<span class="page-title">Your Shopping Cart</span>
							</div>
						</div>
					</div>
				</div>        
                
				<section class="content">
					<div class="container">
						<div class="row">
							<div id="page-header" class="col-md-24">
								<h1 id="page-title">Shopping Cart</h1>
							</div>
							<div id="col-main" class="col-md-24 cart-page content">
								
									<div class="row table-cart">
										<div class="wrap-table">
											<table class="cart-items haft-border stripe ">
											<colgroup>
											<col class="checkout-image">
											<col class="checkout-info">
											<col class="checkout-price">
											<col class="checkout-quantity">
											<col class="checkout-totals">
											</colgroup>
											<thead>
											<tr class="top-labels">
												<th>
													Items
												</th>
												<th>
													Price
												</th>
												<th>
													Qty
												</th>
												
												<th>
													&nbsp;
												</th>
											</tr>
											</thead>
                                                                                         <form action="" method="get">
											<tbody>
                                                                                       
                                                                                            <?php
                                                                                            $i=1;
                                                                                             while($row=  mysqli_fetch_array($q1))
                                                                                            {
                                                                                            ?>
											<tr class="item donec-condime-fermentum">
												<td class="title text-left">
													<ul class="list-inline">
														<li class="image">
														<a href="product.html">
                                                                                                                    <img src="<?php echo $row['Imagepath']  ?>"  class="img-responsive col-lg-6" alt="Donec condime fermentum">
														</a>
                                                                                                                    <h3 style="color: black"><?php echo $row['Product_name']; ?></h3>
                                                                                                                   <?php echo $row['Description']; ?>
														</li>
														
													</ul>
												</td>
												<td class="title-1">
													<?php echo $row['Unitprice']; ?>
                                                                                                    <input type="hidden" name="price<?php echo $i ?>" value="<?php echo $row['Unitprice']; ?>">
												</td>
												<td>
                                                                                                    <?php if(empty($_GET['qty'.$i]))
                                                                                                    {
                                                                                                        
                                                                                                        ?>
                                                                                                    <select id="updates_3947646083" name="qty<?php echo $i ?>" value="<?php if(isset($_GET['qty1'])){echo $_GET["qty".$i];}else{echo "1"; }?>">
                                                                                                        <option>1</option>
                                                                                                        <option>2</option>
                                                                                                    </select>
                                                                                                    <?php } ?>
                                                                                                    
                                                                                                    <?php
                                                                                                    if(isset($_GET['qty'.$i]))
                                                                                                    {
                                                                                                    ?>
                                                                                                    <?php if($_GET['qty'.$i]==1)
                                                                                                    {
                                                                                                        
                                                                                                        ?>
                                                                                                    <select id="updates_3947646083" name="qty<?php echo $i ?>" value="<?php if(isset($_GET['qty1'])){echo $_GET["qty".$i];}else{echo "1"; }?>">
                                                                                                        <option selected>1</option>
                                                                                                        <option>2</option>
                                                                                                        <option >3</option>
                                                                                                    </select>
                                                                                                    <?php } ?>
                                                                                                    <?php if($_GET['qty'.$i]==2)
                                                                                                    {
                                                                                                        
                                                                                                        ?>
                                                                                                    <select id="updates_3947646083" name="qty<?php echo $i ?>" value="<?php if(isset($_GET['qty1'])){echo $_GET["qty".$i];}else{echo "1"; }?>">
                                                                                                        <option >1</option>
                                                                                                        <option selected>2</option>
                                                                                                        <option >3</option>
                                                                                                    </select>
                                                                                                    <?php } ?>
                                                                                                    <?php if($_GET['qty'.$i]==3)
                                                                                                    {
                                                                                                        
                                                                                                        ?>
                                                                                                    <select id="updates_3947646083" name="qty<?php echo $i ?>" >
                                                                                                        <option >1</option>
                                                                                                        <option>2</option>
                                                                                                        <option selected>3</option>
                                                                                                    </select>
                                                                                                    <?php } ?>
                                                                                                    
                                                                                                    <?php
                                                                                                    }
                                                                                                    ?>
												</td>
												
												<td class="action">
                                                                                                    <a href="deletecartiteam.php?id=<?php echo $row['WishlistID']; ?>"><button type="button" onclick="window.location='http://demo.designshopify.com/cart/change?line=1&amp;quantity=0'"><i class="fa fa-times"></i>Remove</button></a>
												</td>
											</tr>
											<?php
                                                                                       
                                                                                        $i++;
                                                                                            }
                                                                                        ?>
                                                                                      
											</tbody>
											<tfoot>
											<tr class="bottom-summary">
												<td>
													&nbsp;
												</td>
												<td>
													&nbsp;
												</td>
												
												<td class="subtotal title-1">
													<?php
                                                                                                        if(isset($_GET['qty1']))
                                                                                                        {
                                                                                                        $totalProduct= $i-1;
                                                                                                        $tot=0;
                                                                                                        for ($i=1;$i<=$totalProduct;$i++)
                                                                                                        {
                                                                                                            $temp=$_GET['qty'.$i]*$_GET['price'.$i];
                                                                                                            $tot=$tot+$temp;
                                                                                                            $temp=0;
                                                                                                        }
                                                                                                        
                                                                                                        $_SESSION['total']=$tot;
                                                                                                        echo $tot;
                                                                                                        ?> <input type="hidden" name="tot" value="<?php echo $tot; ?>">
                                                                                                    <?php    }
                                                                                                        else
                                                                                                        {
                                                                                                             $tot=0;
                                                                                                            $query="select tbl_product_details.Unitprice from tbl_product_details,tbl_wishlist where tbl_wishlist.Product_id=tbl_product_details.Product_id and  tbl_wishlist.UserID='".$_SESSION['UserID']."'";
                                                                                                             $ex=  mysqli_query($con, $query);
                                                                                                               while($data=  mysqli_fetch_array($ex))
                                                                                                                 {
                                                                                                                   $tot=$tot+$data['Unitprice'];
                                                                                                                 }
                                                                                                                 $_SESSION['total']=$tot;
                                                                                                                 echo $tot;
                                                                                                            ?>
                                                                                                         <input type="hidden" name="tot" value="<?php echo $tot; ?>">
                                                                                                            <?php }
                                                                                                            
                                                                                                       
                                                                                                        ?>
                                                                                                   
                                                                                                </td>
                                                                                                <td class="update-quantities">
													<input type="submit" id="update-cart" class="btn btn-2" name="update" value="Update Qty">
												</td>
												<td>
													&nbsp;
												</td>
											</tr>
											</tfoot>
                                                                                          </form>
											</table>
										</div>
									</div>
									<div class="clearfix">
										<div id="checkout-proceed" class="last1 text-right">
                                                                                    <form action="" method="get">
                                                                                        <input type="hidden" name="tot" value="<?php echo $_SESSION['total']; ?>">
                                                                                        <?php
                                                                                         $tp=$i-1;
                                                                                     for($j=1;$j<=$tp;$j++)
                                                                                     {
                                                                                         ?> <input type="hidden" name="qtyf<?php echo $j ?>" value="<?php echo $_GET['qty'.$j]; ?>">
                                                                                         
                                                                                   <?php  }
                                                                                        ?>
                                                                                        <input name="paymentclick" type="submit" class="btn" value="Proceed to Checkout">
                                                                                    </form>
                                                                                    <?php
                                                                                    if(isset($_GET['paymentclick']))
                                                                                    {
                                                                                   
                                                                                    
                                                                                     $tp=$i-1;
                                                                                     for($j=1;$j<=$tp;$j++)
                                                                                     {
                                                                                         $_SESSION['qtyf'.$j]=$_GET['qtyf'.$j];
                                                                                         echo $_SESSION['qtyf'.$j];
                                                                                     }
                                                                                     header("Location:PaymentDetails.php?no=".$j."&tot=".$_GET['tot']);
                                                                                    }
                                                                                    ?>
										</div>
									</div>
									
								</form>
								
							</div>
						</div>
					</div>
				</section>        
			</div>
		</div>
	</div>
                             <?php } include 'footer.php'; ?>
  </body>