<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script>
     
        $(document).ready(function () {
            $.ajax({
            url : "get_cats.php",
            type:'GET',
            success: function(response) {
                $("#cat").append(response);
             }
        });
        
            
            $.ajax({
                url: 'api/store.php',
                type: 'get',
                success: function (result) {
                    var arr = JSON.parse(result);
        
              var options = "";
            for(let i = 0; i < arr.length; i++) {
    let obj = arr[i];
    options += `<option value=${obj.id}>${obj.title}</option>`;
}
document.getElementById("items_all").innerHTML = options;
      
                     $('#loading').hide();
                        $('#myTable').DataTable({
                            "data": JSON.parse(result),
        "columns": [
            	{
    "data": "image",
    "render": function(data, type, row) {
        return '<img src="'+data+'" class="prod_img"/>';
    }
},
			{ "data": "title"},
			{ "data": "count"},
				{ "data": "price", 
				
                   render: $.fn.dataTable.render.number(',') },
			
				{ "data": "buy", 
                   render: $.fn.dataTable.render.number(',')},
				{ "data": "total", 
                   render: $.fn.dataTable.render.number(',')},
			
		
        ],
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

                 
                console.log(result);
        
                }
                
            });
        })


    </script>
    <title>لوحة التحكم</title>
  <style>
      .add{
  cursor: pointer;
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
                  <a href="categories.html" class="list-group-item list-group-item-action py-2 ripple"><i
                    class="fas fa-clone fa-fw me-3"></i>&nbsp;<span>الاقسام</span></a>
              <a href="products.html" class="list-group-item list-group-item-action py-2 ripple "><i
                  class="fas fa-list fa-fw me-3"></i>&nbsp;<span>المنتجات</span></a>
                   <a href="#" class="list-group-item list-group-item-action py-2 ripple active"><i
                  class="fas fa-list fa-fw me-3"></i>&nbsp;<span>المخزن</span></a>
              <a href="sales.html" class="list-group-item list-group-item-action py-2 ripple"><i
                class="fas fa-money-bill fa-fw me-3"></i>&nbsp;<span>المبيعات</span></a>
                <a href="outcome.php" class="list-group-item list-group-item-action py-2 ripple "><i
                class="fas fa-money-bill fa-fw me-3"></i>&nbsp;<span>المصروفات</span></a>
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
                  
                      <h1 class="details">المخزن</h1>
                   

                   <br/>
                
                   
                   <table id="myTable" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th class="th-sm">الصورة</th>
                        <th class="th-sm">اسم المنتج</th>
                        <th class="th-sm">العدد</th>
                        <th class="th-sm">سعر البيع الكلي</th>
                        <th class="th-sm">سعر الشراء الكلي</th>
                        <th class="th-sm">الربح الكلي</th>

                      </tr>
                    </thead>
                    <tbody>
                      
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
</body>
<div class="modal fade text-right" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">اضافة منتج جديد</h5>
        
      </div>
      <div class="modal-body">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">عنوان المنتج</span>
          </div>
          <input type="text" class="form-control" aria-label="عنوان المنتج" aria-describedby="title" id = 'title'>
        </div>
        
             <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">القسم</span>
          </div>
          <select class="custom-select form-control" id="cat" onchange="getval(this);">         
                <option disabled selected value> -- اختر القسم -- </option>
            </select>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">سعر البيع الحالي</span>
          </div>
          <input type="text" class="form-control" id="price" aria-label="سعر البيع الحالي" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">سعر البيع السابق</span>
          </div>
          <input type="text" class="form-control" id="discount" aria-label="سعر البيع السابق" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">سعر الشراء</span>
          </div>
          <input type="text" class="form-control" id="buy" aria-label="سعر الشراء" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">العدد</span>
          </div>
          <input type="text" class="form-control" id="count" aria-label="العدد" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">وصف المنتج</span>
          </div>
          <input type="text" class="form-control" id="des" aria-label="وصف المنتج" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label">ارفق صورة المنتج</label>
          <input class="form-control" type="file" id="pic">
        </div>
      </div>
      <div class="modal-footer">
           &nbsp;
        <button type="button" class="btn btn-secondary " data-dismiss="modal">الغاء</button>
        &nbsp;
        <button type="button" id="upload" class="btn btn-success">حفظ</button>
      </div>
    </div>
  </div>
</div>
//----
<div class="modal fade text-right" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">اضافة منتج جديد</h5>
        
      </div>
      <div class="modal-body">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">عنوان المنتج</span>
          </div>
         <select id="items_all" style = "width:50%;"  name="items_all" class="form-control  mb-3 " required>
           
      
        
      </select>
        </div>
        
        
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">العدد</span>
          </div>
          <input type="text" class="form-control" id="count_new" aria-label="العدد" aria-describedby="inputGroup-sizing-default">
        </div>
       
        
      </div>
      <div class="modal-footer">
           &nbsp;
        <button type="button" class="btn btn-secondary " data-dismiss="modal">الغاء</button>
        &nbsp;
        <button type="button" id="upload_new" class="btn btn-success">حفظ</button>
      </div>
    </div>
  </div>
</div>
<script>


    $('#upload').on('click', function() {
     
  
        var file_data = $('#pic').prop('files')[0];
        var title = document.getElementById("title").value;
        var price = document.getElementById("price").value;
        var discount = document.getElementById("discount").value;
        var buy = document.getElementById("buy").value;
        var des = document.getElementById("des").value;
        var cat = document.getElementById("cat").value;
        var count = document.getElementById("count").value;
        
        //var cat = document.getElementById("cat").getAttribute( 'name' );
      
        var form_data = new FormData();  // Create a FormData object
        form_data.append('file', file_data);  // Append all element in FormData  object
        form_data.append('title', title); 
        form_data.append('price', price); 
        form_data.append('buy', buy); 
        form_data.append('discount', discount); 
        form_data.append('des', des); 
        form_data.append('cat', cat); 
        form_data.append('count', count); 

        $.ajax({
                url         : 'upload_item.php',     // point to server-side PHP script 
                dataType    : 'text',           // what to expect back from the PHP script, if anything
                cache       : false,
                contentType : false,
                processData : false,
                data        : form_data,                         
                type        : 'post',
                success     : function(output){
                 location.reload();
                }
         });
         $('#pic').val('');                     /* Clear the input type file */
    });
     function deleteitem(elmt) {
           
            if (confirm('هل انت متآكد من الحذف')) {
   var id = (elmt.id);
   
     $.ajax({
  url:"delete_item.php",
  methid:"GET",
  data:{id:id},
  success:function(data){
    location.reload();
  }
  

   

  });
   
} else {
  // Do nothing!

}
            }
            function edititem(elmt) {
                 var id = (elmt.id);
                 var url = 'edit_item.php?id=' + id;
  window.open(url, '_blank').focus();
}
</script>


</html>