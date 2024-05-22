<!DOCTYPE html>
<?php
require("Connect.php");
$id = $_GET['id'];
$query = "SELECT * FROM cats where id='$id'";
$rd =  mysqli_query($conn,$query) or die(mysql_error());
while($row = mysqli_fetch_array($rd)){
    $old_title = $row['title'];
    $old_image = $row['image'];
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
    <script>
    var img = false;
    $(document).ready(function(){
        
    $('#myTable').DataTable({
    "language": {
        "info": "",
        "search":"بحث : ",
        "lengthMenu":     " عرض   _MENU_  عنصر ",
        "paginate": {
        "first":      "الاول",
        "last":       "الاخير",
        "next":       "التالي",
        "previous":   "السابق"
    },

      
    }
    });

    
    });
    </script>
    <title>لوحة التحكم</title>
  <style>
      .image-upload>input {
  display: none;
}
  </style>
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
              <a href="users.html" class="list-group-item list-group-item-action py-2 ripple" ><i
                class="fas fa-user fa-fw me-3"></i>&nbsp;<span>المستخدمين</span></a>
                  <a href="categories.html" class="list-group-item list-group-item-action py-2 ripple "><i
                    class="fas fa-clone fa-fw me-3"></i>&nbsp;<span>الاقسام</span></a>
              <a href="products.html" class="list-group-item list-group-item-action py-2 ripple active"><i
                  class="fas fa-list fa-fw me-3"></i>&nbsp;<span>المنتجات</span></a>
                  <a href="store.php" class="list-group-item list-group-item-action py-2 ripple"><i
                  class="fas fa-list fa-fw me-3"></i>&nbsp;<span>المخزن</span></a>
              <a href="sales.html" class="list-group-item list-group-item-action py-2 ripple"><i
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
                   <div class="h-100 d-flex align-items-center justify-content-center">
                       <div class="image-upload">
  <label for="file-input">
    <img src="<?php echo $old_image; ?>" id="image" class="img_edit"/>
  </label>

  <input id="file-input" type="file"  />
</div>
                   </div>
                  
                   <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">اسم القسم</span>
                    </div>
                    <input type="text" class="form-control" id="title" value="<?php echo $old_title; ?>" aria-label="اسم القسم" aria-describedby="inputGroup-sizing-default">
                  </div>
                 
                 
                  <input type="hidden" id="item" value="<?php echo $id; ?>">
                  
                  
                  <div class="col text-center">
                    <button type="button" id="save" class="btn btn-success">حفظ</button>
                  </div>
                  
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
          $(document).ready(function() {
    $("#save").click(function(){
        var file_data = $('#file-input').prop('files')[0];
        var title = document.getElementById("title").value;
        var id = document.getElementById("item").value;
        var form_data = new FormData();  // Create a FormData object
        if(img){
            form_data.append('file', file_data);  // Append all element in FormData  object
        }
        
        form_data.append('title', title); 
        form_data.append('id', id); 
     $.ajax({
                url         : 'api/upload_cat.php',     // point to server-side PHP script 
                dataType    : 'text',           // what to expect back from the PHP script, if anything
                cache       : false,
                contentType : false,
                processData : false,
                data        : form_data,                         
                type        : 'post',
                success     : function(output){
                    alert(output);              // display response from the PHP script, if any
                }
         });
         $('#pic').val('');
        
    }); 
});
$(function() {
    $(document).on("change", "#file-input", function() {
         var input = this;
    var url = $(this).val();
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) 
     {
        var reader = new FileReader();

        reader.onload = function (e) {
           $('#image').attr('src', e.target.result);
        }
       reader.readAsDataURL(input.files[0]);
    }
    else
    {
      $('#img').attr('src', '/assets/no_preview.png');
    }
    
        img = true;
    });
});
      </script>
</body>



</html>