  <?php 
    require("Connect.php");

  //-------
  
$sql1 = "SELECT * FROM items ";
$result1 = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result1) > 0) {
  // output data of each row
  while($row1 = mysqli_fetch_assoc($result1)) {
     
    echo '<option id="'.$row1['id'].'" value="'.$row1['id'].'" data-size="'.$row1['size'].'">'.$row1['title'].'</option>';
  }
} 
?>