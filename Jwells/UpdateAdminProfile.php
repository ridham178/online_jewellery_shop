<?php 
ob_start();
session_start();
$con=  mysqli_connect("localhost","root", "","db_jwells" ) or die("error");
$q="update tbl_registration_details set Username='".$_POST['uname']."',Password='".$_POST['pass']."',FirstName='".$_POST['fname']."',LastName='".$_POST['lname']."',Address='".$_POST['address']."',City='".$_POST['city']."',State='".$_POST['state']."',MobileNo='".$_POST['mno']."',EmailID='".$_POST['eid']."' where UserID='".$_SESSION['UserID']."'";
$q1=  mysqli_query($con, $q)or die(print_r($con));
header("Location:MyProfile.php");
?>