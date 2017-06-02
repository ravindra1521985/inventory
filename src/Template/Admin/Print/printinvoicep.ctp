<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inventory</title>
 
<style>body{font-family:'Helvetica Neue','Helvetica',Helvetica,Arial,sans-serif;text-align:center;color:#777;}
body h1{font-weight:300;margin-bottom:0px;padding-bottom:0px;color:#000;}
body h3{font-weight:300;margin-top:10px;margin-bottom:20px;font-style:italic;color:#555;}
body a{color:#06F;}
.invoice-box{max-width:345px;margin:auto;padding:5px;border:1px solid #eee;box-shadow:0 0 10px rgba(0,0,0,.15);font-size:12px;line-height:24px;font-family:'Helvetica Neue','Helvetica',Helvetica,Arial,sans-serif;color:#555;}
.invoice-box table{width:100%;line-height:inherit;text-align:left;}
.invoice-box table td{padding:5px;vertical-align:top;}
.invoice-box table tr td:nth-child(4){text-align:right;}
.invoice-box table tr.top table td{padding-bottom:20px;}
.invoice-box table tr.top table td.title{font-size:45px;line-height:45px;color:#333;}
.invoice-box table tr.information table td{padding-bottom:0px;}
.invoice-box table tr.heading td{background:#eee;border-bottom:1px solid #ddd;font-weight:bold;}
.invoice-box table tr.details td{padding-bottom:20px;}
.invoice-box table tr.item td{border-bottom:1px solid #eee;}
.invoice-box table tr.item.last td{border-bottom:none;}
.invoice-box table tr.total td:nth-child(2,3){border-top:2px solid #eee;font-weight:bold;}


@media only screen and (max-width: 600px) {.invoice-box table tr.top table td{width:100%;display:block;text-align:center;}
.invoice-box table tr.information table td{width:100%;display:block;text-align:center;}
}

@media print {
  * { -webkit-print-color-adjust: exact; }
  html { background: none; padding: 0; }
  body { box-shadow: none; margin: 0; }
  span:empty { display: none; }
  .add, .cut { display: none; }
}

@page { margin: 0; }

</style>
</head>
<body>

<div class="invoice-box">
<table cellpadding="0" cellspacing="0">
<tr class="top">

<td colspan="2">

<!--<table>
<tr>
<td class="title">
<img src="/images/logo.png" style="width:100%; max-width:300px;">
</td>
<td>
Invoice #: 123<br>
Created: January 1, 2015<br>
Due: February 1, 2015
</td>
</tr>
</table>-->
</td>
</tr>
 <?php foreach($invoice as $key=>$value) { ?>
<tr class="information">

<td colspan="4">
<table>
<tr>
<td>

 <?php $customer=$this->Common->getRecord('Customer','id',$value['customer_id']);
        ?>

ItCombine, Inc.<br>
D37<br>
Noida,
</td>
<td></td>
<td></td>
<td style="text-align:right !important;">
<?php echo $customer->name; ?><br>
<?php echo $customer->phone; ?><br>

Invoice #<?php echo $value['invoice_code']; ?>
<br>Invoice Date <?php echo date('d-m-Y',strtotime($value['created_date'])); ?>
<br>

</td>
</tr>
</table>
</td>
</tr>
<tr class="heading">
<td>
Item
</td>
<td>
Qty
</td>
<td>
Rate
</td>
<td>
Total
</td>
</tr>
<?php  
        $i=0;
  foreach($value['invoice_detail'] as $key1=>$value1){ 
    $items=  $this->Common->getRecord('items','id',$value1['item_id']);
   ?>
<tr class="item">
<td><?php echo $items->name; ?>
</td>
<td>
<?php echo $value1['quantity']; ?>
</td>
<td>$
<?php echo $value1['bill_rate']; ?>
</td>
<td>
$<?php echo $value1['item_amount']; ?>
</td>
</tr>
<?php $i++; } ?>

<tr class="total" style="text-align:right;">
<td style="text-align:right;">Total Item :</td>
<td style="text-align:left;"><?php echo $i; ?></td>

<td colspan="2">
 Total: $<?php echo $value['sub_total']; ?>
</td>
</tr>
<tr class="total" style="text-align:right;">
<td colspan="4">
Tax: $<?php echo $value['tax_amount']; ?>
</td>
</tr>
</tr>
<tr class="total" style="text-align:right;">

<td colspan="4" style="text-align:right;">
Total Amount: $<?php echo $value['total_amount']; ?>
</td>
</tr>
<tr class="total" style="text-align:right;">


<td colspan="4">
Paid Amount : $<?php echo $value['paid_amount']; ?>
</td>
</tr>
<tr class="total" style="text-align:right;">

<td colspan="4" >
 Creadit Amount: $<?php echo $value['cr_amount']; ?>
</td>
</tr>
<tr class="total" style="text-align:right;">


<td colspan="4">
 Balance Due: $<?php echo $value['dr_amount']; ?>
</td>
</tr>
<?php } ?>
</table>
</div>
</body>
</html>
