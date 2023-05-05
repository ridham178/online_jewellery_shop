<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    
  
        
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/latest/css/bootstrap.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="assets/stylesheets/font-awesome.min.css" rel="stylesheet" type="text/css" media="all"> 	
	<link href="assets/stylesheets/bootstrap.min.3x.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.bootstrap.3x.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.animate.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.global.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.style.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/stylesheets/cs.media.3x.css" rel="stylesheet" type="text/css" media="all">
	
	<script src="assets/javascripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="assets/javascripts/bootstrap.min.3x.js" type="text/javascript"></script>
  <body>
        <?php
        // put your code here
        $nop=$_GET['no']-1;
        session_start();
        $totalAmount=$_GET['tot'];
     $_SESSION['FinalAmount']=$_GET['tot'];
        
        ?>
        
<?php

$paypalUrl='https://www.sandbox.paypal.com/cgi-bin/webscr';

$paypalId='f201506100110094-facilitator@gmail.com';

?>
  
      
<div class="container col-lg-8 col-lg-offset-7" style="margin-top: 100px">
    
<div class="panel panel-success">
    <div class="panel-heading">
        <h3><center><img src='assetsss/images/slide-image-caption-1.png' class="img-responsive"></center></h3>
    </div>
    <div class="panel-body panel-danger">

    <form action="<?php echo $paypalUrl; ?>" method="post" name="frmPayPal1">

<div class="panel price panel-red">

    <input type="hidden" name="business" value="<?php echo $paypalId; ?>">

    <input type="hidden" name="cmd" value="_xclick">

    <input type="hidden" name="item_name" value="World Jewellery">

   

    <input type="hidden" name="amount" value="<?php echo $totalAmount; ?>">

    <input type="hidden" name="no_shipping" value="1">

    <input type="hidden" name="currency_code" value="INR">

    <input type="hidden" name="cancel_return" value="cancel.php">

    <input type="hidden" name="return" value="success.php">  
    <h3>Total Amount is:</h3><?php echo $_SESSION['FinalAmount']; ?><span class=' fa fa-rupee'></span><br>
    <input type="submit" class="btn-link" value="Continue Pay with PayPal..">
 </form>
</div></div>
</div>

    </body>
</html>
