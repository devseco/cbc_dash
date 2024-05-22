<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require '../vendor/autoload.php';

// This will output the barcode as HTML output to display in the browser

session_start();
require "Connect.php";
$id = $_GET['number'];
if(isset($_GET['number'])){
    $sql = "SELECT * FROM `data` where `number` in (".join(',',$_GET['number']).")";  
      $rup = mysqli_query($conn,"UPDATE `data` SET `print_user` = 'yes' WHERE `number` in (".join(',', $_GET['number']).") "); 
}else{
   $number = "erorr";
}
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
       $items[] = array(
      "req_name" => $row['username'],
      "req_phone" => $row['phone_sender'],
      "req_address" => $row['address_sender'],
      "number" => $row['number'],
      "date" => $row['date'],
      "city" => $row['city'],
      "requsett" => $row['requester'],
      "address" => $row['address'],
      "note" => $row['note'],
      "incloud" => $row['includ'],
      "phone" => $row['phone'],
      "total" => $row['total'],
      "count" => $row['count'],
       );
      
   
      
      
  }
}else{
    echo $number = $sql;
}




// Include the main TCPDF library (search for installation path).
include('tcpdf/tcpdf.php');
$style = array(
   'border' => true,
            'hpadding' => 'auto',
            'vpadding' => 'auto',
            'fgcolor' => array(0,0,0),
            'bgcolor' => false, //array(255,255,255),
            'text' => true,
            'font' => 'helvetica',
            'fontsize' => 8,
            'stretchtext' => 4
);
class MYPDF extends TCPDF {

  //Page header
  public function Header() {
      
      // Logo
       
        
     
      $image_file = K_PATH_IMAGES.'photofull.jpeg';
      $this->Image($image_file, 10, 10, 15, '', 'JPEG', '', 'T', false, 100, 'R', false, false, 0, false, false, false);
      // Set font
      $this->SetFont('aealarabiya', 'B', 20);
      // Title
     
     
    
  }

  // Page footer
  public function Footer() {
      // Position at 15 mm from bottom
      $this->SetY(-15);
      // Set font
      $this->SetFont('aealarabiya', 'I', 8);
      // Page number
      $this->Cell(0, 10, 'الصفحة '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
      $this->writeHTML("<p style='text-align:right;' align='right'>برمجة وتنفيذ نجمة  - Telegram :@Devseco" // count array
      ."</p>");
      
    }
}

// create new PDF document
$pdf = new MYPDF("P", "mm", "A5", true, 'UTF-8', false);
$pdf ->SetMargins("2","21", "5" , "3");
$pdf->SetFont('aealarabiya', 'B', 13);
$pdf->AddPage();

$image_file = K_PATH_IMAGES.'photofull.jpeg';
$pdf ->Image($image_file, 10, 10, 15, '', 'JPEG', '', 'T', false, 300, 'R', false, false, 0, false, false, false);
date_default_timezone_set('Asia/Baghdad');
    $datenow  = date('Y-m-d');
     foreach($items as $item){
         $params = $pdf->serializeTCPDFtagParameters(array($item['number'], 'C128B', '', '', 55, 15, 0.2, array('position'=>'S',  'padding'=>1, 'fgcolor'=>array(0,0,0), 'bgcolor'=>array(255,255,255), 'text'=>true, 'font'=>'helvetica', 'fontsize'=>8, 'stretchtext'=>4), 'N')); 
       $html .= ' 
<style>
div{
  width: 800px;
  background: red;
  display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: center;
  float: center;
}

</style>
<center>
<div>
<tcpdf method="write1DBarcode" params="'.$params.'" />
<h1 style="font-size: 15,font-weight: bold;">رقم الوصل : '.$item['number'].'<h1>
<h1 style="font-size: 15,font-weight: bold;">اسم المستلم : '.$item['requsett'].'<h1>
<h2  style="font-size: 15,font-weight: bold;">هاتف المستلم : '.$item['phone'].'<h2>
<h2  style="font-size: 15,font-weight: bold;">المبلغ الكلي : '.number_format($item['total']).'<h2>
<h2  style="font-size: 15,font-weight: bold;">المحافظة : '.$item['city'].'<h2>
<h2  style="font-size: 15,font-weight: bold;">المنطقة : '.$item['address'].'<h2>
<
</center>

</div>

<ul style="list-style-type:none; text-align:right;" align="right">
  <li style="font-size:12px;position: relative;
  left: -10px;">اسم المرسل : '.$item['req_name'].'</li>
  <li style="font-size:12px;position: relative;
  left: -10px;">رقم المرسل : '.$item['req_phone'].'</li>
  <li style="font-size:12px;position: relative;
  left: -10px;">عنوان المرسل : '.$item['req_address'].'</li>
  <li style="font-size:12px;position: relative;
  left: -10px;">عدد القطع : '.$item['count'].'</li>
  <li style="font-size:12px;position: relative;
  left: -10px;">الملاحظات : '.$item['note'].'</li>
  <li style="font-size:12px;position: relative;
  left: -10px;">محتويات الشحنه : '.$item['incloud'].'</li>
</ul>


           
            <span style="font-size: 50%"> المتابعة : 07803361380 - 07700080137 </span>
			';
		
		
    }

      // Generate from database
    
 
      // Generate from database

$pdf->Ln(12);

$pdf->writeHTML($html);
$title = "ok";
 $pdf->SetTitle($title);
ob_end_clean();
$pdf->Output($datenow."iraq.pdf"); //rename your file generated here

		?>
