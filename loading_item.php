<?php
require("Connect.php");
$id = $_GET['id'];

$sql = "UPDATE bills SET stat='تم التجهيز' WHERE code='$id'";

if (mysqli_query($conn, $sql)) {
  echo "تم التجهيز بنجاح";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>