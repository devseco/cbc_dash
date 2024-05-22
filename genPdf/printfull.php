<?php
date_default_timezone_set('Asia/Baghdad');
$datenow  = date('Y-m-d');
session_start();
require "Connect.php";
$ok = true;
if($conn){
     
       
    if(isset($_GET['code'])){
      $id = $_GET['code'];

    $r =  mysqli_query($conn,"SELECT * FROM `cart` where `code`= '$id' order by id");     
    
     $r2 =  mysqli_query($conn,"SELECT * FROM `bills` where `code`= '$id' order by id");     
    
    
   
    
    
    if(!$r) {
      die('error');
      
      
      
    }
    }
  
}

 while ($row5 = mysqli_fetch_array($r2)){
     $format_date = $row5['date'];
     $format_user = $row5['username'];
      $format_address = $row5['address'];
       $format_phone = $row5['phone'];
      $format_total += $row5['total'];
    
 }

// Include the main TCPDF library (search for installation path).
include('tcpdf/tcpdf.php');

class MYPDF extends TCPDF {

  //Page header
  public function Header() {
      // Logo
      $image_file = K_PATH_IMAGES.'photo.png';
      $this->Image($image_file, 10, 10, 15, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
      // Set font
      $this->SetFont('aealarabiya', 'B', 20);
      // Title
      $this->Cell(0, 15, 'سيمو شوب', 0, false, 'C', 0, '', 0, false, 'M', 'M');
      $this->writeHTML("<br><br>");
  }

  // Page footer
  public $page_counter = 1;

  public function Make() {
    

    // Create your own method for determining how many pages you got, excluding last pages
    $this->page_counter = NUMBER;

    
  }
  public function Footer() {
       if ($this->getPage() <= $this->page_counter) {
      // ... footer for the normal page ...
    } else {
       $this->SetY(-15);
      // Set font
      $this->SetFont('aealarabiya', 'I', 8);
      // Page number
    //  $user = $_SESSION['username'];
      $this->Cell(0, 10, 'الصفحة '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
     // $id = $_GET['id'];
      $this->writeHTML("<p style='text-align:right;' align='right'>اسم الموظف :".'d' // count array
      ."</p>");
    }
      
      
      
    
      // Position at 15 mm from bottom
      
    }
}

// create new PDF document
$pdf = new MYPDF("P", "mm", "A4", true, 'UTF-8', false);

$pdf ->SetMargins("8","21", "5" , "3");
$pdf->SetFont('aealarabiya', 'B', 13);
$pdf->AddPage();

$image_file = K_PATH_IMAGES.'photo.png';
$pdf ->Image($image_file, 10, 10, 15, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
$test = $_SESSION['count'];
date_default_timezone_set('Asia/Baghdad');
    
    $format = number_format($_SESSION['totalbaghdad']);
   
$html .= ' 

    



<style>
.special{
  padding: 7px 2px ;
  }
  table tbody td:nth-child(even) {
    background: red;
}
.div1{background:#ddd;height:500px}
table { height:50px; 
    
    
}
</style>
    <ul style="list-style-type:none; text-align:right" align="right">
     <li style="text-align:center;font-size:19px;">فاتورة زبون</li>
      <br/>
     <li style="text-align:center;font-size:12px;margin-top: 5;"> '.$datenow.'</li>
    <li>المبلغ الكلي: '.number_format($format_total).'</li>
    <li>اسم الزبون: '.$format_user.'</li>
    <li>رقم الزبون: '.$format_phone.'</li>
  <li>العنوان: '.$format_address.'</li>
  <li> رقم الفاتورة : '.$id.'</li>
  
</ul>
<table border ="1" cellspacing="0" style="text-align:center; width:100%;align:center;margin:auto;" dir="ltr" class="special">
<thead>
<tr bgcolor="#616160" style="padding:15;">
<th style="color:#ffffff ; width:12%">القياس</th>
<th style="color:#ffffff ; width:12%">اللون</th>
<th style="color:#ffffff;width:12% ">عدد القطع</th>
<th style="color:#ffffff; width:20%" >المبلغ</th>
<th style="color:#ffffff; width:35%" >اسم المنتج</th>
<th style="color:#ffffff ;width:8%;">#</th>
</tr>
</thead>
			';
      // Generate from database
      $index =1;
      while ($row = mysqli_fetch_array($r)){
     
        $html .= '
        <tbody style="margin-top:10px;margin-right:5px;height:200;">
        <tr>
        <td style="width:12% ;font-size:11px;font-weight: bold;">'.$row['size'].'</td>
        <td style="width:12% ;font-size:11px;font-weight: bold;">'.$row['color'].'</td>
        <td style="width:12% ;font-size:11px;font-weight: bold;">'.$row['count'].'</td>
        <td style="width:20% ;font-size:11px;font-weight: bold;">'.$row['price'].'</td>
        <td style="width:35%;font-size:11px; font-weight: bold;">'.$row['title'].'</td>
          <td style="width:8% ;font-size:12px; font-weight: bold;">'.$index.'</td>
        </tr>
        </tbody>
        ';
        $res = str_replace(',', '', $row['price']);
        $int = (int)$res;
        $pr += $int;
        $index++;
        $_SESSION['totalbaghdad'] = $pr; 
        $user = $row['username'];
      }
    
 
      // Generate from database


   
    
      
      $html .='

</table>
 
';
 

// Add some content page(s)
$pageNo = $pdf->getPage();
$pageNo2 = $pdf->getPage();

// Go to cover page and add more content...


// Go back to current page
$html1 = '

<!DOCTYPE html>
<html>
<style>
.Data
{
   display: inline;
   display: inline;
   line-height: 30px;
   height: 30px;
}
</style>
  <body>
      <div style="background-color:#ffffff;text-align: center;">

      <h5 style="background-color: #616160;color:white;margin-top:100px">احصائيات كشف الحساب</h5>
      <h5 style="background-color: #7d7d7a;color:white;margin-top:100px">اسم العميل: '.$user.'</h5>
      <h5 style="background-color: #7d7d7a;color:white;margin-top:100px">مجموع الصافي: '.$format.'</h5>
      <h5 style="background-color: #9c9c98;color:white;margin-top:100px">تاريخ الطبع : '.$datenow.'</h5>
      
    </div>
';

    
 
  
  
   



$pdf->setPage($pageNo);
$pdf->Ln(5);
$pdf->writeHTML($html);






$title = "My Generated PDF";
 $pdf->SetTitle($title);
ob_end_clean();
$pdf->Output($datenow."iraq.pdf"); //rename your file generated here

		?>
