<?php
 require "Connect.php";
 ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 if(isset($_GET['id'])){
     $id = $_GET['id'];
    $r =  mysqli_query($conn,"Delete from `sliders` where `id` = '$id'");    
    if($r) {
       echo "ok"; 
    }else{
         echo("Error description: " . mysqli_error($conn));
    }
    }else{
        echo("Error description: ");
    }



?>