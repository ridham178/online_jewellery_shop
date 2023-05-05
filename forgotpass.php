<?php
ob_start();
$error = array();
 $con=  mysqli_connect("localhost","root", "","db_jwells" ) or die("error");
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!DOCTYPE html>
<html>
<head>
<title>Forgot Password</title>
<!-- For-Mobile-Apps -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Lucid Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->
<!-- Style --> <link rel="stylesheet" href="Logincss/css/style.css" type="text/css" media="all" />
</head>
<body>

  
<h1>Forgot Password</h1>
	<div class="signin">
            <?php
            
            if(isset($_POST)&& !empty($_POST))
            {
                     $a1=rand(1, 10);
                       $a2=rand(1, 10);
                       $a3=rand(1, 10);
                       $a4=rand(1, 10);
                       $pass=$a1.$a2.$a3.$a4;
                       
                       
                       $email=$_POST['eid'];
                       $q1="select EmailID from tbl_registration_details";
                       $qs1=  mysqli_query($con, $q1)or die(print_r($con));
                       while ($row = mysqli_fetch_array($qs1)) {
                           if($row['EmailID']==$email)
                           {
                               $q="update tbl_registration_details set Password='".$pass."' where EmailID='".$_POST['eid']."';";
                       $qs=  mysqli_query($con, $q)or die(print_r($con));
                       $pass1=$pass;
                       header("Location:sendpass.php?pass1=$pass1 & eid=$email");
                        
                           }
                          
                           
                       }
            }?>

            
            <form action="" method="post">
	      	<input type="email" required  class="user" placeholder="Enter email id" name="eid" />
	      			  		
                                <?php 
                                if(isset($error['uname']))
                                {
                                    ?><div style="color:red"><?php echo $error['uname']; ?><?php
                                }
                                ?>
		  	</label>
                <input type="submit" value="Ok" /><br>
              
        </form> </div>
</div>
</body>
</html>