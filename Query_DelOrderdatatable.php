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
         if(isset($_GET)&&!empty($_GET))
        { 
              $con=  mysqli_connect("localhost","root", "","db_jwells" ) or die("error");
              $q="delete from tbl_order_details where OrderID='".$_GET['id']."'";
             $q1=  mysqli_query($con, $q)or die(print_r($con));
              header("Location:ShowOrderList.php?msg=1");
         }
        ?>
    </body>
</html>
