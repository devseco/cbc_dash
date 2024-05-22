<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require("Connect.php");
    if ( $_FILES['file']['error'] > 0 ){
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    }
    else {
        if(move_uploaded_file($_FILES['file']['tmp_name'], 'offers/' . $_FILES['file']['name']))
        {
            
            $url = 'https://ahmedmahde.com/system/dash/offers/'  . $_FILES['file']['name'];
            $sql = "INSERT INTO `sliders` (`image`)
                VALUES ('$url')";
                
                if (mysqli_query($conn, $sql)) {
                  echo "تمت اضافة العرض بنجاح";
                } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            
        }
    }

?>