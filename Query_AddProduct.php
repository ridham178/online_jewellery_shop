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
        if(isset($_POST)&& !empty($_POST))
            { $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$target_file2 = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
$target_file3 = $target_dir . basename($_FILES["fileToUpload3"]["name"]);
$target_file4 = $target_dir . basename($_FILES["fileToUpload4"]["name"]);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } 
    else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
} 
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    $_SESSION['error']="Check your image is already uploaded.";
    header("Location:AddProduct.php?error=1");
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2)) {
            if (move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_file3)) {
                if (move_uploaded_file($_FILES["fileToUpload4"]["tmp_name"], $target_file4)) {
                    
                      //   echo "The file ". $_FILES["fileToUpload"]["name"]. " has been uploaded.";
        $filename= "uploads/".$_FILES["fileToUpload"]["name"];
         $filename2= "uploads/".$_FILES["fileToUpload2"]["name"];
          $filename3= "uploads/".$_FILES["fileToUpload3"]["name"];
           $filename4= "uploads/".$_FILES["fileToUpload4"]["name"];
        $con=  mysqli_connect("localhost","root", "","db_jwells" ) or die("error");
          $q="insert into tbl_product_details values(null,'".$_POST['pname']."','".$_POST['pdesc']."','".$_POST['pweight']."','".$_POST['pprice']."','".$_POST['pqty']."','".$_POST['pmaterial']."','".$_POST['pcategory']."','".$filename."','".$filename2."','".$filename3."','".$filename4."')";
             $q1=  mysqli_query($con, $q)or die(print_r($con));
             header("Location:AddProduct.php?msg=1");
                    
                }
            }
        }
        }
   
     else {
        echo "Sorry, there was an error uploading your file.";
    }
}
            }
        
        ?>
    </body>
</html>
