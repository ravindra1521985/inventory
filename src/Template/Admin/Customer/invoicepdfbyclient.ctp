<?php

if (!isset($_REQUEST['html'])) { $_REQUEST['html'] = ''; }

//include("../mpdf.php");

require WWW_ROOT . DS . 'mpdf60' . DS . 'mpdf.php';

//$mpdf=new mPDF(''); 
$mpdf=new mPDF('',array(250,350)); 
$mpdf->SetCompression(true);
//$mpdf = new mPDF('','', 0, '', 15, 15, 16, 16, 9, 9, 'L');
$mpdf->SetWatermarkText('invoice');
$mpdf->showWatermarkText = true;
$mpdf->watermarkTextAlpha = 0.1;

/*$mpdf->SetWatermarkImage('img/Frontend/logo_home.png');
$mpdf->showWatermarkImage = true;
$mpdf->watermarkImageAlpha = 0.3;*/
//==============================================================
$path=WWW_ROOT;

$mpdf->SetHTMLHeader('<div style="text-align: center;"></div>');


foreach($invoice as $key=>$value) {
$html.='
<table style="border:1px solid black;" width="600" align="center">
<caption>INVOICE</caption>
<thead>
<tr>
<th colspan="3">Invoice #'.$value['invoice_code'].'</th>
<th>'.date('M-d-Y',strtotime($value['created_date'])).'<br>
  </th></tr>
<tr>
<td colspan="2">
      <br>ItCombine<br>
        D37 Noida<br>
        9818319425
   </td>
<td colspan="2">';
$customer=$this->Common->getRecord('Customer','id',$value['customer_id']);
    $html.='<strong>Customer:</strong><br>'
   .$customer->name.'<br>
   '.$customer->phone.'<br>
    '.$customer->detail.'
   </td>
</tr>
<tr>
<td colspan="4" align="right">';
    $html.='<strong>Invoice No :#'.$value['invoice_code'].'</strong><br>Date '
   .date('M-d-Y',strtotime($value['created_date'])).'<br> Total Amount
   '.$value['total_amount'].'
    
   </td>
</tr>
</thead>
<tbody border="1">
<tr style="background-color:grey;">
<th>Name </th>
<th>Qty.</th>
<th>Rate</th>
<th>Amount</th>
</tr>';
  foreach($value['invoice_detail'] as $key1=>$value1){ 
  		 $items= $this->Common->getRecord('items','id',$value1['item_id']); 

$html.='<tr style="border-bottom:1px solid black;">
<td style="border-bottom: 1px solid black;">'.$items->name.'</td>
<td style="border-bottom: 1px solid black;">'.$value1['quantity'].'</td>
<td align="right" style="border-bottom: 1px solid black;">$'.$value1['bill_rate'].'</td>
<td align="right" style="border-bottom: 1px solid black;">$'.$value1['item_amount'].'</td>
</tr>';
}
$html.='</tbody>
<tfoot>
<tr>
<th colspan="3" align="right" style="border-bottom: 1px solid black;border-right: 1px solid black;">Total</th>
<td align="right" style="border-bottom: 1px solid black;">$ '.$value['sub_total'].'</td>
</tr>
<tr>
<th colspan="3" align="right" style="border-bottom: 1px solid black; border-right:1px solid black;">Tax</th>

<td align="right" style="border-bottom: 1px solid black;">$'.$value['tax_amount'].'</td>
</tr>
<tr>
<th colspan="3" align="right" style="border-bottom: 1px solid black; border-right:1px solid black;">Grand Total</th>
<td align="right" style="border-bottom: 1px solid black;">$ '.$value['total_amount'].'</td>
</tr>
<tr>
<th colspan="3" align="right" style="border-bottom: 1px solid black; border-right:1px solid black;">Paid Amount</th>
<td align="right" style="border-bottom: 1px solid black;">$ '.$value['paid_amount'].'</td>
</tr>
<tr>
<th colspan="3" align="right" style="border-bottom: 1px solid black;border-right:1px solid black;">Cr. Amount</th>
<td align="right" style="border-bottom: 1px solid black;">$ '.$value['cr_amount'].'</td>
</tr>
<tr>
<th colspan="3" align="right" style="border-bottom: 0px solid black;border-right:1px solid black;">Due. Amount</th>
<td align="right">$ '.$value['dr_amount'].'</td>
</tr>
</tfoot>
</table>';




  }


if (isset($_REQUEST['html']) && $_REQUEST['html']) { echo $html; exit; }
//==============================================================
//echo $html; exit;
$mpdf->WriteHTML($html);


$filename= "Invoice"._.date('Y-m-d').".pdf";


//$filenamea=$path."/dietplanpdf/DietPlan.pdf";
//$mpdf->Output($filenamea,'F');

$mpdf->Output($filename,'D'); 

exit;