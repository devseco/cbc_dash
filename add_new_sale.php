<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require("Connect.php");
    $username = explode(",",$_POST['username']);
    $number = explode(",",$_POST['number']);
    $phone = explode(",",$_POST['phone']);
    $address = explode(",",$_POST['address']);
    $item = explode(",",$_POST['item']);
    $count = explode(",",$_POST['count']);
    $discount = explode(",",$_POST['discount']);
    $note = explode(",",$_POST['note']);
    $count = explode(",",$_POST['count']);
    $index = 0;
    $date = date("Y-m-d");
    $price;
    $title;
          
                    if (is_array($item)) {
                            foreach($item as $co){
                                
                                $select = "SELECT * FROM items where id ='$item[$index]' limit 1";
                                $result = mysqli_query($conn, $select);
                                  // output data of each row
                                  while($row = mysqli_fetch_assoc($result)) {
                                     $title = $row['title'];
                                     $price = $row['price'];
                                     $buy = $row['buy'];
                                     
                                  }
                                
                                $total = (int)$count[$index] * (int)$price - (int)$discount[$index];
                                $total_buy = (int)$buy * (int)$count[$index];
                                
                                
                                
                                
                    $sql = "INSERT INTO `sales` (
                    `username`,
                    `number`,
                    `phone`, 
                    `address`,
                    `title`,
                    `count`,
                    `discount`,
                    `note`,
                    `price`,
                    `date`,
                    `stat`,
                    `buy`
                    
                    )
                     VALUES (
                         '$username[$index]',
                         '$number[$index]',
                         '$phone[$index]',
                         '$address[$index]',
                         '$title',
                         '$count[$index]',
                         '$discount[$index]',
                         '$note[$index]',
                         '$total',
                         '$date',
                         '',
                         '$total_buy'
                         
                         
                         )";
                
                    if (mysqli_query($conn, $sql)) {
                        
                        
                        $sql_up = "UPDATE items SET count=count - '$count[$index]' WHERE id='$item[$index]' ";

                        if ($conn->query($sql_up) === TRUE) {
                          echo "تمت اضافة المبيعات بنجاح";
                        } else {
                          echo "Error updating record: " . $conn->error;
                        }
                        
                    } else {
                      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                 
                 $index++;       
                        
                    }
                    
                    
                    
                    
                    }else{
                        echo $title;
                    }
                
          

            
      
?>