<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require("Connect.php");
    $title = $_POST['title'];
    $cat = $_POST['cat'];
    $price = $_POST['price'];
    $buy = $_POST['buy'];
    $des = $_POST['des'];
    $discount = $_POST['discount'];
    $count = $_POST['count'];
    $index = 0;
    if ( $_FILES['file']['error'] > 0 ){
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    }
    else {
        if(move_uploaded_file($_FILES['file']['tmp_name'], 'items/' . $_FILES['file']['name']))
        {
            
            $url = 'https://ahmedmahde.com/system/dash/items/'  . $_FILES['file']['name'];
            $sql = "INSERT INTO `items` (`title`, `price`, `des`, `more`, `cat`, `image`, `discount`,`buy`,`count`)
                VALUES ('$title','$price','$des','','$cat','$url','$discount','$buy','$count')";
                
                if (mysqli_query($conn, $sql)) {
                  echo "تمت اضافة المنتج بنجاح";
                
          

                 
                } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            
        }
    }

?>