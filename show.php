<!DOCTYPE html>
<?php
require("Connect.php");
$code = $_GET['code'];
$sql1 = "SELECT * FROM bills where code='$code'";
$result1 = mysqli_query($conn, $sql1);
if (mysqli_num_rows($result1) > 0) {
  // output data of each row
  while($row1 = mysqli_fetch_assoc($result1)) {
      $total = $row1['total'];
       $username = $row1['username'];
        $phone = $row1['phone'];
         $address = $row1['address'];
          $stat = $row1['stat'];
           $date = $row1['date'];
  }
}



?>
<html lang="ar" dir="rtl">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/style.css" />
    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/bbfd9c6b3d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
  
    <title>لوحة التحكم</title>

</head>


<body>
    <!--Main Navigation-->
 
    <header>
        <!-- Sidebar -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        
        <nav id="sidebarMenu"  data-toggle="collapse" class="collapse d-lg-block sidebar collapse bg-white">
        
            <div class="position-sticky" data-toggle="collapse">
            <div class="list-group list-group-flush mx-3 mt-4" data-toggle="collapse">
              <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
    <span class="navbar-toggler-icon"></span>
</button>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                <i class="fas fa-tachometer-alt fa-fw me-3"></i>&nbsp;<span>لوحة تحكم التطبيق</span>
              </a>
              <a href="index.html" class="list-group-item list-group-item-action py-2 ripple">
                <i class="fas fa-home fa-fw me-3"></i>&nbsp;<span>الصفحة الرئيسية</span>
              </a>
              <a href="users.html" class="list-group-item list-group-item-action py-2 ripple " ><i
                class="fas fa-user fa-fw me-3"></i>&nbsp;<span>المستخدمين</span></a>
                  <a href="categories.html" class="list-group-item list-group-item-action py-2 ripple"><i
                    class="fas fa-clone fa-fw me-3"></i>&nbsp;<span>الاقسام</span></a>
              <a href="products.html" class="list-group-item list-group-item-action py-2 ripple"><i
                  class="fas fa-list fa-fw me-3"></i>&nbsp;<span>المنتجات</span></a>
              <a href="#" class="list-group-item list-group-item-action py-2 ripple active"><i
                class="fas fa-money-bill fa-fw me-3"></i>&nbsp;<span>المبيعات</span></a>
                  <a href="offers.html" class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-chart-pie fa-fw me-3"></i>&nbsp;<span>العروض</span></a>
              <a href="notifications.html" class="list-group-item list-group-item-action py-2 ripple"><i
                  class="fas fa-building fa-fw me-3"></i>&nbsp;<span>التبليغات</span></a>
              <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                  class="fas fa-power-off fa-fw me-3"></i>&nbsp;<span>تسجيل خروج</span></a>
           
            </div>
          </div>
        </nav>
        <!-- Sidebar -->

        <!-- Navbar -->
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
          <!-- Container wrapper -->
          <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler"type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
            </button>
           

            <!-- Brand -->

            <a class="navbar-brand" href="#">
              <img  src="https://logos-world.net/wp-content/uploads/2021/02/App-Store-Logo.png" height="50" alt="MDB Logo"
                loading="lazy" />
            </a>

          
            
           
          </div>
          <!-- Container wrapper -->
        </nav>

        <!-- Navbar -->
      </header>
      <!--Main Navigation-->

      <!--Main layout-->
      <main style="margin-top: 10px;">
        <div class="container pt-3  justify-content-center" >
            <section id="boxes" class="py-5">
                <div class="container">
                  
                      <h1 class="details">المبيعات</h1>
                  <?php
                  echo '<ul style="list-style-type:none; text-align:right" align="right">
    <li style="font-size:18px;font-weight: bold;">المستخدم :  '.$username.'</li>
    <li style="font-size:18px;font-weight: bold;">الهاتف :  '.$phone.'</li>
    <li style="font-size:18px;font-weight: bold;"> العنوان : '.$address.'</li>
    <li style="font-size:18px;font-weight: bold;">المبلغ الكلي: '.number_format($total).'</li>
   <li style="font-size:18px;font-weight: bold;"> التاريخ : '.$date.'</li>
   <li style="font-size:18px;font-weight: bold;">رقم الفاتورة :  '.$code.'</li>
   <li style="font-size:18px;font-weight: bold;">الحالة :  '.$stat.'</li>
  
</ul>';
                  
                  ?>
                  <button type="button" id="<?php echo $code?>" class="btn btn-success" onclick="doneitem(this);">اتمام الفاتورة</button>
                  <button type="button" id="<?php echo $code?>" class="btn btn-dark" onclick="loadingitem(this);">تجهيز الفاتورة</button>
                  <a target="_blank" href="genPdf/printfull.php?code=<?php echo $code?>"><button type="button" class="btn btn-primary">طباعة الفاتورة</button></a>
                   <br>
                   <br/>
                   <table id="myTable" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th class="th-sm">الصورة</th>
                        <th class="th-sm">اسم المنتج</th>
                        <th class="th-sm">عدد القطع</th>
                         <th class="th-sm">المبلغ</th>
                         <th class="th-sm">الحدث</th>
                      </tr>
                    </thead>
                    <tbody class="tBody">
                      <?php
                      $sql = "SELECT * FROM cart where code='$code'";
                      $result = mysqli_query($conn, $sql);
                      if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
      echo '<tr>
      <td><img class="prod_img" src="'.$row['image'].'"/></td>
      <td>'.$row['title'].'</td>
      <td>'.$row['count'].'</td>
      <td>'.$row['price'].'</td>
      <td><button type="button" class="btn btn-danger">ارجاع قطع</button></td>
      </tr>';
  }
} else {
  echo "0 results";
}
                      
                      ?>
                    </tbody>
                  
                   
                  </table>
                  
                
                  <hr>

                <p><a href="#">
                     برمجة وتصميم نجمة للبرمجيات
                    </a>  </p>
                </div>
                
              </section>


        </div>
      </main>
      <!--Main layout-->
      <script>
      function loadingitem(elmt) {
           
            if (confirm('هل انت متآكد من تجهيز الفاتورة')) {
   var id = (elmt.id);
   
     $.ajax({
  url:"loading_item.php",
  methid:"GET",
  data:{id:id},
  success:function(data){
      alert(data);
    location.reload();
  }
  });
   
} else {
  // Do nothing!

}
            }
   function doneitem(elmt) {
           
            if (confirm('هل انت متآكد من اتمام الفاتورة')) {
   var id = (elmt.id);
   
     $.ajax({
  url:"done_bill.php",
  methid:"GET",
  data:{id:id},
  success:function(data){
      alert(data);
    location.reload();
  }
  

   

  });
   
} else {
  // Do nothing!

}
            }
</script>
</body>



</html>