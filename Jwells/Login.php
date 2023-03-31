<?php
session_start();
$error = array();

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
<title>Login Form</title>
<!-- For-Mobile-Apps -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Lucid Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->
<!-- Style --> <link rel="stylesheet" href="Logincss/css/style.css" type="text/css" media="all" />
</head>
<body>

<h1>LOGIN FORM</h1>
	<div class="signin">
            <?php
            
            if(isset($_POST)&& !empty($_POST))
            {
                if(isset($_POST['uname']) && strlen($_POST['uname'])==0)
                {
                    $error['uname'][]="UserName is Required...!!";
                }
                if(isset($_POST['pass']) && strlen($_POST['pass'])==0)
                {
                    $error['pass'][]="Password is required..!!!";
                }
                else if(strlen($_POST['pass']) < 8)
                {
                    $error['pass8'][]="Password must be grater or equal to 8 character";
                }
                if($_POST['uname'] && $_POST['pass'])
                {
                    
        // put your code here
        $con=  mysqli_connect("localhost","root", "","db_jwells" ) or die("error");
 
             $q="select Username,Password,UserTypeID,UserID from tbl_registration_details where Username='".$_POST['uname']."' and Password='".$_POST['pass']."';";
             $q1=  mysqli_query($con, $q);
             while($row=  mysqli_fetch_array($q1))
             {
                 if($row['Username']==$_POST['uname']&&$row['Password']==$_POST['pass']&&$row['UserTypeID']==1)
                 {
                     $_SESSION['user']=$row['Username'];
                     $_SESSION['UserID']=$row['UserID'];
                   header("Location:Admin.php?msg=1");
                 }
                 
                 else if($row['Username']==$_POST['uname']&&$row['Password']==$_POST['pass']&&$row['UserTypeID']==2)
                 {
                     $_SESSION['UserID']=$row['UserID'];
                    header("Location:Index.php");
                 }
                 else{
           
                   header("Location:Login.php");
                 }
             }
             }
            }
            ?>
            <form action="" method="post">
	      	<input type="text" class="user" value="username" name="uname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'username';}" />
	      	<input type="password" class="pass" value="Password" name="pass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" />
	      	<label>
		  		
                                <?php
                                if(isset($error['uname']))
                                {
                                    ?><div style="color:red"><?php echo $error['uname']; ?><?php
                                }
                                ?>
		  	</label>
                <input type="submit" value="LOGIN" /><br>
              
        </form> <br> <a href="forgotpass.php" style="color:  #980d2f"><b>Forgot Password?</b></a><br> <a href="SignUp.php" style="color:  #980d2f">Want to Sign up?</a>
	</div>
</div>
<div class="footer">
     <p>Copyright &copy; 2018 All Rights Reserved </p>
</div>
</body>
</html>