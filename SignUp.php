<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--><!DOCTYPE html>
<html>
<head>
<title>Registration Form </title>
<!-- metatags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Sports Camp Registration Form a Flat Responsive Widget,Login form widgets, Sign up Web 	forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/jquery-ui.css"/>
<link href="SignUpcss/css/style.css" rel="stylesheet" type="text/css" media="all"/><!--stylesheet-css-->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">

<!-- //css files -->
</head>
<body>
	<h1>Registration Form</h1>
        <?php
        $error=array();
        if(isset($_POST)&& !empty($_POST))
        {
            $count=0;
            if($_POST['pass']!=$_POST['cpass'])
            {
                $count=1;
                
                $error['pass']="Password not match";
            }
           
            if((strlen($_POST['phoneno']))!=10)
            {
                $count=1;
                $error['pno']="Phone Number must having 10 digits";
            }
            if( $count==0)
            {
            $con=  mysqli_connect("localhost","root", "","db_jwells" ) or die("error");
 
             $q="insert into tbl_registration_details values(null,'".$_POST['uname']."','".$_POST['pass']."','".$_POST['fname']."','".$_POST['lname']."','".$_POST['add']."','".$_POST['city']."','".$_POST['state']."','".$_POST['phoneno']."','".$_POST['eid']."',2)";
             $q1=  mysqli_query($con, $q);
            }
        }
        
        ?>
<div class="w3l-main">
	<div class="w3l-from">
		<form action="" method="post">	
			<div class="w3l-user">
				<label class="head">First Name<span class="w3l-star"> * </span></label>
                                <input type="text" name="fname" value="<?php if(isset($_POST['fname'])&&!empty($_POST['fname'])){echo $_POST['fname'];} ?>" placeholder="" required="">
			</div>
                    <div class="w3l-user">
				<label class="head">Last Name<span class="w3l-star"> * </span></label>
				<input type="text" name="lname" value="<?php if(isset($_POST['lname'])&&!empty($_POST['lname'])){echo $_POST['lname'];} ?>" placeholder="" required="">
			</div><div class="w3l-mail">
				<label class="head">Email<span class="w3l-star"> * </span></label>
				<input type="email" name="eid" value="<?php if(isset($_POST['eid'])&&!empty($_POST['eid'])){echo $_POST['eid'];} ?>" placeholder="" required="">
			</div>
                     <div class="w3l-details1">
			<div class="w3l-user">
				<label class="head">Username<span class="w3l-star"> * </span></label>
				<input type="text" name="uname" value="<?php if(isset($_POST['uname'])&&!empty($_POST['uname'])){echo $_POST['uname'];} ?>" placeholder="" required="">
			</div>
                     </div>
                    <div class="w3l-details1">
				<div class="w3l-num">
					<label class="head">Password<span class="w3l-star"> * </span></label>
                                        <input type="password" class="form-control" name="pass" value="<?php if(isset($_POST['pass'])&&!empty($_POST['pass'])){echo $_POST['pass'];} ?>" placeholder="" required="">
			</div>
				<div class="w3l-sym">
                            
			<label class="head">Conform Password<span class="w3l-star"> * </span></label>
                        <input type="password" class="form-control" name="cpass" placeholder="" value="<?php if(isset($_POST['cpass'])&&!empty($_POST['cpass'])){echo $_POST['cpass'];} ?>" required="">
			</div>
                    </div>
                    <?php
                    if(isset($error['pass']))
                    {
                        ?><div style="color: red"><?php echo $error['pass']; ?></div><?php
                    }
                    ?>
			<div class="w3l-details1">
				<div class="w3l-num">
					<label class="head">Phone Number<span class="w3l-star"> * </span></label>
                                        <input type="number"  name="phoneno" value="<?php if(isset($_POST['phoneno'])&&!empty($_POST['phoneno'])){echo $_POST['phoneno'];} ?>" placeholder="" required="">
				</div>
			 <?php
                    if(isset($error['pno']))
                    {
                        ?><div style="color: red"><?php echo $error['pno']; ?></div><?php
                    }
                    ?>
			
			
			<div class="clear"></div>
			</div>
			
                               <div class="w3l-rem">
				<div class="w3l-right">
					<label class="w3l-set2">Street Address<span class="w3l-star"> * </span></label>
                                        <textarea name="add"><?php if(isset($_POST['add'])&&!empty($_POST['add'])){echo $_POST['add'];} ?></textarea>
				</div>	
				
			</div>
			
			<div class="w3l-num">
					<label class="head">City<span class="w3l-star"> * </span></label>
					<input type="text" value="<?php if(isset($_POST['city'])&&!empty($_POST['city'])){echo $_POST['city'];} ?>"  name="city" placeholder="" required="">
				</div>
			<div class="w3l-sym">
					<label class="head">State<span class="w3l-star"> * </span></label>
					<input type="text" name="state" value="<?php if(isset($_POST['state'])&&!empty($_POST['state'])){echo $_POST['state'];} ?>" placeholder="" required="">
			</div>
			<div class="clear"></div>
			<div class="w3l-num">
					<label class="head">Postal / Zip Code<span class="w3l-star"> * </span></label>
					<input type="text" value="<?php if(isset($_POST['ZipCode'])&&!empty($_POST['ZipCode'])){echo $_POST['ZipCode'];} ?>"  name="ZipCode" placeholder="" required="">
				</div>
			<div class="w3l-options2">
			<label class="head">Country<span class="w3l-star"> * </span></label>	
				<select class="category2"  required="">
						<option value=""></option>
						<option value="">India</option>
						<option value="">America</option>
						<option value="">Japan</option>
						<option value="">Country-4</option>
						
					</select>
			</div>
			<div class="clear"></div>
			<div class="btn">
					<input type="submit" name="submit" value="Submit"/>
                                        <br>
                                        <a href="Login.php" style="text-decoration: none;color: white">Already Registred?clik here</a>
				</div>
			
			<div class="clear"></div>
		</form>
	</div>
</div>
	<footer>&copy; 2018  Registration Form. All Rights Reserved 
	</footer>
	<!-- Default-JavaScript --> <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

<!-- Calendar -->
<script src="js/jquery-ui.js"></script>
	<script>
		$(function() {
		$( "#datepicker,#datepicker1" ).datepicker();
		});
	</script>
<!-- //Calendar -->

</body>
</html>