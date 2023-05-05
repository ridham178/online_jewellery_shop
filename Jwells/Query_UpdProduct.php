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
        { $con=  mysqli_connect("localhost","root", "","db_jwells" ) or die("error");
           
           if(empty($_FILES["fileToUpload"]["name"]))
           {
             $q="update tbl_product_details set Product_name='".$_POST['pname']."' , Description='".$_POST['pdesc']."', Weight='".$_POST['pweight']."',Unitprice='".$_POST['pprice']."',Quentity='".$_POST['pqty']."',Product_material='".$_POST['pmaterial']."',Category_id='".$_POST['pcategory']."',Imagepath='".$_POST['oldimg']."' where Product_id='".$_POST['id']."'";
             $q1=  mysqli_query($con, $q)or die(print_r($con));
              header("Location:UpdateProduct.php?msg=1");
           }
            else if(!empty($_FILES["fileToUpload"]["name"]))
             {
             $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
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
     header("Location:UpdateProduct.php?error=1");
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
     //   echo "The file ". $_FILES["fileToUpload"]["name"]. " has been uploaded.";
        $filename= "uploads/".$_FILES["fileToUpload"]["name"];
        $con=  mysqli_connect("localhost","root", "","db_jwells" ) or die("error");
          $q="update tbl_product_details set Product_name='".$_POST['pname']."' , Description='".$_POST['pdesc']."', Weight='".$_POST['pweight']."',Unitprice='".$_POST['pprice']."',Quentity='".$_POST['pqty']."',Product_material='".$_POST['pmaterial']."',Category_id='".$_POST['pcategory']."',Imagepath='".$filename."' where Product_id='".$_POST['id']."'";
            $q1=  mysqli_query($con, $q)or die(print_r($con));
          header("Location:UpdateProduct.php?msg=1&id=10");
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
          
             }
            
        }
        ?>
    </body>
</html>
