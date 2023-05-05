<?php
ob_start();
$con=mysqli_connect("localhost","root", "","db_jwells" ) or die("error");
?><?php $itemNo            = $_REQUEST['item_number'];

$itemTransaction   = $_REQUEST['tx']; // Paypal transaction ID

$itemPrice         = $_REQUEST['amt']; // Paypal received amount

$itemCurrency      = $_REQUEST['cc']; // Paypal received currency type

 
session_start();
$price =$_SESSION['FinalAmount'];

$currency='INR';

 

if($itemPrice==$price && $itemCurrency==$currency)

{
    
    

    echo "Payment Successful";

}

else

{

    echo "Payment Failed";

}


echo "<br>";
 $q="select tbl_product_details.Product_id,tbl_product_details.Unitprice,tbl_product_details.Product_name,tbl_product_details.Description,tbl_product_details.Imagepath,tbl_wishlist.WishlistID from tbl_product_details,tbl_wishlist where tbl_wishlist.Product_id=tbl_product_details.Product_id and  tbl_wishlist.UserID='".$_SESSION['UserID']."'";
             $q1=  mysqli_query($con, $q)or die(print_r($con));
             $i=1;
              while($row=  mysqli_fetch_array($q1))
              {
                  echo $_SESSION['UserID']."<br>";
                  echo $row['Product_id']."<br>";
                  echo $_SESSION['total']."<br>";
                  echo $_SESSION['qtyf'.$i]."<br>";
                  $tot=$_SESSION['qtyf'.$i]*$row['Unitprice'];
                  echo "<br>";
                 $q="insert into tbl_order_details values(null,'".$_SESSION['UserID']."','".$tot."','".$_SESSION['qtyf'.$i]."','".$row['Product_id']."',CURDATE());";
                 $ex= mysqli_query($con,$q);
                 
               
             
           
                 $i++;
              }
              $q="delete from tbl_wishlist where Userid='".$_SESSION['UserID']."'";
             $q1=  mysqli_query($con, $q)or die(print_r($con));
                            header("Location:MyAccount.php");
                 ?>


                                                   