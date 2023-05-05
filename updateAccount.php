<?php
ob_start();
session_start();
?>
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
    <body>
        <?php
        // put your code here
        if(isset($_POST)&&!empty($_POST))
        {
             $con=  mysqli_connect("localhost","root", "","db_jwells" ) or die("error");
                               $q="update tbl_registration_details set Username='".$_POST['uname']."',Password='".$_POST['pass']."',FirstName='".$_POST['fname']."',LastName='".$_POST['lname']."',Address='".$_POST['address']."',City='".$_POST['city']."',State='".$_POST['state']."',MobileNo='".$_POST['mno']."',EmailID='".$_POST['eid']."' where UserID='".$_SESSION['UserID']."'";
                               $q1=  mysqli_query($con, $q)or die(print_r($con));
                               header("Location:AccountEdit.php");
        }
 else {
     echo $_POST;
 }
        ?>
    </body>
</html>
