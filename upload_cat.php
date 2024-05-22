<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require("Connect.php");
    $name = $_POST['name'];
    $size = $_POST['size'];
    if ( $_FILES['file']['error'] > 0 ){
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    }
    else {
        if(move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $_FILES['file']['name']))
        {
            
            $url = 'https://ahmedmahde.com/system/dash/uploads/'  . $_FILES['file']['name'];
            $sql = "INSERT INTO `cats` (`title`, `image`,`size`)
                VALUES ('$name', '$url','$size')";
                
                if (mysqli_query($conn, $sql)) {
                  echo "تمت اضافة القسم بنجاح";
                } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            
        }
    }

?>