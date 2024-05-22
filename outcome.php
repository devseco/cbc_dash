<!DOCTYPE html>
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
     
        $(document).ready(function () {
             $.ajax({
            url : "get_cats.php",
            type:'GET',
            success: function(response) {
                $("#cat").append(response);
             }
        });
            $.ajax({
                url: 'api/outcome.php',
                type: 'get',
                success: function (result) {
                     $('#loading').hide();
                        $('#myTable').DataTable({
                            "data": JSON.parse(result),
        "columns": [
           	{ "data": "note"},
			{ "data": "price" , 
                   render: $.fn.dataTable.render.number(',')},
		   { "data": "date"},
		
		{
    "data": "id",
    "render": function(data, type, row) {
        return '<a href="#"><i class="fas fa-trash" onclick="deleteitem(this);" id='+data+' aria-hidden="true" style="color: rgb(183, 39, 39);"></i><a/>';
    }
},
		
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
      #loading {
           display: table;
  margin: 0 auto;
  position: fixed;
  display: block;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  text-align: center;
  opacity: 0.7;
  background-color: #fff;
  z-index: 99;
}

#loading-image {
  position: absolute;
  top: 100px;
  left: 240px;
  z-index: 100;
}
input[type=checkbox] {
    transform: scale(1.5);
     padding:100px;
}
  </style>
</head>


<body>
       <div id="loading">
  <img id="loading-image" src="https://upload.wikimedia.org/wikipedia/commons/b/b1/Loading_icon.gif?20151024034921" alt="Loading..." />
</div>
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
              <a href="products.html" class="list-group-item list-group-item-action py-2 ripple"><i
                  class="fas fa-list fa-fw me-3"></i>&nbsp;<span>المنتجات</span></a>
                  <a href="store.php" class="list-group-item list-group-item-action py-2 ripple"><i
                  class="fas fa-list fa-fw me-3"></i>&nbsp;<span>المخزن</span></a>
              <a href="sales.html" class="list-group-item list-group-item-action py-2 ripple"><i
                class="fas fa-money-bill fa-fw me-3"></i>&nbsp;<span>المبيعات</span></a>
                <a href="outcome.php" class="list-group-item list-group-item-action py-2 ripple active"><i
                class="fas fa-money-bill fa-fw me-3"></i>&nbsp;<span>المصروفات</span></a>
                  <a href="offers.html" class="list-group-item list-group-item-action py-2 ripple ">
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
                      <h1 class="details">المصروفات</h1>
                      
                   <br/>
                   <div class="text-right pb-3 pr-5">
                    <button type="button" class="btn btn-primary float-rigth pull-right" data-toggle="modal" data-target="#exampleModal">
                     اضافة مصروف
                   </button>
                   </div>
                   
                   <table id="myTable" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th class="th-sm">الملاحظة</th>
                        <th class="th-sm">المبلغ</th>
                        <th class="th-sm">التاريخ</th>
                        <th class="th-sm"></th>
                      </tr>
                    </thead>
                    <tbody class="tBody">
                      
                     
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
        <h5 class="modal-title" id="exampleModalLabel">اضافة صرف جديد</h5>
        
      </div>
      <div class="modal-body">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">الملاحظة</span>
          </div>
          <input type="text" class="form-control" id="note" aria-label="الملاحظة" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">المبلغ</span>
          </div>
          <input type="text" class="form-control" id="price" aria-label="المبلغ" aria-describedby="inputGroup-sizing-default">
        </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary " data-dismiss="modal">الغاء</button>
        &nbsp;
        <button type="button" class="btn btn-success" id="save">حفظ</button>
      </div>
    </div>
  </div>
</div>

<script>


$('#save').on('click', function() {
        var price = document.getElementById("price").value;
         var note = document.getElementById("note").value;
            
        var form_data = new FormData(); 
        form_data.append('price', price); 
        form_data.append('note', note); 

        $.ajax({
                url         : 'api/add_outcome.php',     // point to server-side PHP script 
                dataType    : 'text',           // what to expect back from the PHP script, if anything
                cache       : false,
                contentType : false,
                processData : false,
                data        : form_data,                         
                type        : 'post',
                success     : function(output){
                    alert(output);              // display response from the PHP script, if any
                     location.reload();
                }
         });
         $('#pic').val('');                     /* Clear the input type file */
    });
  
     function deleteitem(elmt) {
           
            if (confirm('هل انت متآكد من الحذف')) {
   var id = (elmt.id);
   
     $.ajax({
  url:"api/delete_outcome.php",
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
     
</script>

</html>