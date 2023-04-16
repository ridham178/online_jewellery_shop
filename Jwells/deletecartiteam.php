<?php
ob_start();
session_start();
$con=  mysqli_connect("localhost","root", "","db_jwells" ) or die("error");
 
?><!DOCTYPE html>
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
        $q="delete from tbl_wishlist where WishlistID='".$_GET['id']."'";
        $e=  mysqli_query($con, $q);
      header("Location:ViewCart.php");
        ?>
    </body>
</html>
