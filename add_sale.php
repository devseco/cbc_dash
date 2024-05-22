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
    
    <title>لوحة التحكم</title>
  <style>

label {
  font-weight: 800;
}
input[type="number"] {
  width: 70px;
}
.linne {
     display: flex;
  justify-content: center;
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
        <div class="container pt-3  justify-content-center text-right" >
            <section id="boxes" class="py-5">
                <div class="container">
                    <h1 class="details">اضافة مبيعات</h1>
                 <form id="form" name="new-user" action="update.php" method="post">
		<div class="linne">
 	<input type="number" class="form-control" id="num_fatora" size="25" value="1" />
		<br />
		<i id="new" class="fa fa-plus-circle fa-fw me-5" style="color:green;font-size:35px"></i>
      </div>
      <br />
	
		
		
		<div id="attributes">
		
		</div>

		<input id="count-field" class="hidden-field" type="hidden" name="total" value="">
		
		<input class="hidden-field" type="hidden" name="device-name" value="<?php echo $_POST['device-name']; ?>">
		<input id="count-field" type="hidden" name="count">
		
		<input id="option-count-field" type="hidden" name="optionCount">
		 <div class="col text-center">
		<button type="button" onClick="confSubmit(this.form);"  class="btn btn-success"> رفع <i class="fa fa-upload fa-fw me-5" style="color:white;font-size:25px"></i></button>
		</div>
	
		
    </form>
                  
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
      var count=0;
var listCount=0;
var opCount=0;
var num=1;
//Convert Php post to an int
num=parseInt(num, 10);
//This method inserts the number of attributes present in the param
function addAttribute (input) {
    count++;

    for(var i=0; i<input; i++) {

        var template="<div class=\"new-attribute\">"
                 + "<h3>فاتورة جديدة -  "+count+"</h3>"
                 + '<div class="form-row"><div class="form-group col-md-3"><label for="username" style="display:block; width:x; height:y; text-align:right;">اسم المستخدم</label><input type="text" class="form-control" id="username" placeholder="اسم المستخدم"></div><div class="form-group col-md-3"><label for="title" style="display:block; width:x; height:y; text-align:right;">رقم الوصل</label><input type="text" class="form-control" id="number" placeholder="رقم الوصل"></div><div class="form-group col-md-3"><label for="title" style="display:block; width:x; height:y; text-align:right;">الهاتف</label><input type="text" class="form-control" id="phone" placeholder="الهاتف"></div><div class="form-group col-md-3"><label for="title" style="display:block; width:x; height:y; text-align:right;">المنطقة</label><input type="text" class="form-control" id="address" placeholder="المنطقة"></div></div>'
                 + '<div class="form-row"><div class="form-group col-md-3"><label for="count" style="display:block; width:x; height:y; text-align:right;">المادة</label> <select class="form-control" id="item" name="A'+count+'" ></select></div><div class="form-group col-md-3"><label for="title" style="display:block; width:x; height:y; text-align:right;">العدد</label><input type="text" class="form-control" id="count" placeholder="العدد" value="1"></div><div class="form-group col-md-3"><label for="title" style="display:block; width:x; height:y; text-align:right;">الخصم</label><input type="text" class="form-control" id="discount" placeholder="الخصم" value="0"></div><div class="form-group col-md-3"><label for="title" style="display:block; width:x; height:y; text-align:right;">ملاحظات</label><input type="text" class="form-control" id="note" placeholder="ملاحظات" ></div></div>'
                
                
                 + "<div class=\"option\"></div>"
                 + '<i class="remove fa fa-remove fa-fw me-5" style="color:red;font-size:35px"></i>'
                 + "<hr/>"
                 + "</div>"
                 ;
                 function saveItemOrder(order)
{
        $.ajax({
            url : "get_items.php",
            type:'GET',
            success: function(response) {
                $("select[name='A"+order +"']").append('<option value="" disabled selected>اختر المادة</option>' + response);
                //$("input[name='A"+order+"']").html('<option value="" disabled selected>اختر المادة</option>' + response);
              
              
             }
        });
}
            $(saveItemOrder(this.count)).appendTo('#attributes');
            $(template).appendTo('#attributes');
            
            
            $("input[id=count-field]").val(count);
           

    }           

}
//JQuery does its stuff
$(document).ready(function () {
    //Add the required number of attributes
  

    //Add one attribute on click
    $("#new").on('click', function () {
        var num = document.getElementById('num_fatora').value;
        for (let i = 0; i < num; i++) {
            addAttribute(1);
        }
       
        
    });

    //Remove action
    $("#attributes").on('click', '.remove', function () {
        $(this).closest('.new-attribute').remove();
    });

    //select temp
    
    var add="";

    //Select change action
    $('#attributes').on('change', '.tattribute', function () {
        //Add extra fields for select
        if (this.value == "select-list") {
			var select = "<div id=\"new-option\">" + "<button type=\"button\" class=\"btn\">add option</button>" 
				+"<input class=\"op-name\" type=\"hidden\" name=\"op"+listCount+"\" value=\"op"+listCount+"\"></div>";
            $(this).next('.option').append(select);
			listCount++;
        }
        //Remove extra fields if not a select
        else {
            $(this).next('.option').empty();
        }
    });
	

    //Add action
    $("#attributes").on('click', '.btn', function () {
		add = "<div class=\"op\"><label for=\"attributeOption[]" +"\">Name:</label>" 
		+ "<input class=\"option-input\" type=\"text\" name=\"attributeOption[]" + "\">"
		+"<button type=\"button\" class=\"remove-option\">remove</button></div>";
        $(this).after(add); 
        //COUNT NUMBER OF OPTIONS
		$opt = $(this).closest('.option')
	    $opt.siblings('.attribute_count').val($opt.find('.op').length)
		alert($opt.siblings('.attribute_count').val());
    });
	
    //Remove input
    $("#attributes").on('click', '.remove-option', function () {
			$(this).closest('.op').remove();
            $opt = $(this).closest('.option')
	        $opt.siblings('attribute_count').val($opt.find('.op').length)
	});
});

//Confirm Form Submission
function confSubmit(form) {
	if (confirm("هل انت متاكد من الرفع ؟")) {
		var username = [];
       var number = [];
       var phone = [];
       var address = [];
       var item = [];
       var count = [];
       var discount = [];
       var note = [];
       
       
        document.querySelectorAll("#username").forEach(v => {
        username.push(v.value);
        });
        document.querySelectorAll("#number").forEach(v => {
        number.push(v.value);
        });
         document.querySelectorAll("#phone").forEach(v => {
        phone.push(v.value);
        });
         document.querySelectorAll("#address").forEach(v => {
        address.push(v.value);
        });
        //----
         document.querySelectorAll("#item").forEach(v => {
        item.push(v.value);
        });
         document.querySelectorAll("#count").forEach(v => {
        count.push(v.value);
        });
         document.querySelectorAll("#discount").forEach(v => {
        discount.push(v.value);
        });
         document.querySelectorAll("#note").forEach(v => {
        note.push(v.value);
        });
        //---
       
       
        var form_data = new FormData();  // Create a FormData object
        form_data.append('item', item); 
        form_data.append('count', count); 
        form_data.append('note', note); 
        form_data.append('discount', discount); 
        form_data.append('username', username); 
        form_data.append('phone', phone); 
        form_data.append('number', number);
        form_data.append('count', count);
        form_data.append('address', address);
  
     $.ajax({
                url         : 'add_new_sale.php',     // point to server-side PHP script 
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
         
		
	}

	else {
		alert("قمت بالغاء الرفع .");
	}
}	

      </script>
</body>



</html>