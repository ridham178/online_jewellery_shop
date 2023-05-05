 <?php  
 $connect =mysqli_connect("localhost","root", "","db_jwells" ) or die("error");
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM tbl_product_details WHERE Product_name LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($connect, $query);  
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
      {  
          $output.="<b><u>Search Results:</u></b>";
           while($row = mysqli_fetch_array($result))  
           {  
             //   $output .= '<a href="SearchFullDetails.php"><li>'.$row["Product_name"].'</li></a>';  
                $output.='<a href="productDetail.php?id='.$row['Product_id'].'"><li>'.$row["Product_name"].'</li></a>';
                }  
      }  
      else  
      {  
           $output .= '<li>Product Not Found</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
 ?>  