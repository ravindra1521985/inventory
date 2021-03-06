
<html>
  <head>
    <meta charset="utf-8">
    <title>Invoice</title>
    
    <style>

      * reset */

*
{
  border: 0;
  box-sizing: content-box;
  color: inherit;
  font-family: inherit;
  font-size: inherit;
  font-style: inherit;
  font-weight: inherit;
  line-height: inherit;
  list-style: none;
  margin: 0;
  padding: 0;
  text-decoration: none;
  vertical-align: top;
}

/* content editable */

*[contenteditable] { border-radius: 0.25em; min-width: 1em; outline: 0; }

*[contenteditable] { cursor: pointer; }

*[contenteditable]:hover, *[contenteditable]:focus, td:hover *[contenteditable], td:focus *[contenteditable], img.hover { background: #DEF; box-shadow: 0 0 1em 0.5em #DEF; }

span[contenteditable] { display: inline-block; }

/* heading */

h1 { font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }

/* table */

table { font-size: 75%; table-layout: fixed; width: 100%; }
table { border-collapse: separate; border-spacing: 2px; }
th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
th, td { border-radius: 0.25em; border-style: solid; }
th { background: #EEE; border-color: #BBB; }
td { border-color: #DDD; }

/* page */

html { font: 16px/1 'Open Sans', sans-serif; overflow: auto; padding: 0.5in; }
html { background: #999; cursor: default; }

body { box-sizing: border-box; height: 11in; margin: 0 auto; overflow: hidden; padding: 0.5in; width: 8.5in; }
body { background: #FFF; border-radius: 1px; box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); }

/* header */

header { margin: 0 0 3em; }
header:after { clear: both; content: ""; display: table; }

header h1 { background: #000; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 0.5em 0; }
header address { float: left; font-size: 75%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }
header address p { margin: 0 0 0.25em; }
header span, header img { display: block; float: right; }
header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; }
header img { max-height: 100%; max-width: 100%; }
header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }

/* article */

article, article address, table.meta, table.inventory { margin: 0 0 3em; }
article:after { clear: both; content: ""; display: table; }
article h1 { clip: rect(0 0 0 0); position: relative;text-align:left; }

article address { float: left; font-size: 125%; font-weight: normal; }

/* table meta & balance */

table.meta, table.balance { float: right; width: 36%; }
table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

/* table meta */

table.meta th { width: 40%; }
table.meta td { width: 60%; }

/* table items */

table.inventory { clear: both; width: 100%; }
table.inventory th { font-weight: bold; text-align: center; }

table.inventory td:nth-child(1) { width: 26%; }
table.inventory td:nth-child(2) { width: 38%; }
table.inventory td:nth-child(3) { text-align: right; width: 12%; }
table.inventory td:nth-child(4) { text-align: right; width: 12%; }
table.inventory td:nth-child(5) { text-align: right; width: 12%; }

/* table balance */

table.balance th, table.balance td { width: 50%; }
table.balance td { text-align: right; }

/* aside */

aside h1 { border: none; border-width: 0 0 1px; margin: 0 0 1em; }
aside h1 { border-color: #999; border-bottom-style: solid; }

/* javascript */

.add, .cut
{
  border-width: 1px;
  display: block;
  font-size: .8rem;
  padding: 0.25em 0.5em;  
  float: left;
  text-align: center;
  width: 0.6em;
}

.add, .cut
{
  background: #9AF;
  box-shadow: 0 1px 2px rgba(0,0,0,0.2);
  background-image: -moz-linear-gradient(#00ADEE 5%, #0078A5 100%);
  background-image: -webkit-linear-gradient(#00ADEE 5%, #0078A5 100%);
  border-radius: 0.5em;
  border-color: #0076A3;
  color: #FFF;
  cursor: pointer;
  font-weight: bold;
  text-shadow: 0 -1px 2px rgba(0,0,0,0.333);
}

.add { margin: -2.5em 0 0; }

.add:hover { background: #00ADEE; }

.cut { opacity: 0; position: absolute; top: 0; left: -1.5em; }
.cut { -webkit-transition: opacity 100ms ease-in; }

tr:hover .cut { opacity: 1; }

@media print {
  * { -webkit-print-color-adjust: exact; }
  html { background: none; padding: 0; }
  body { box-shadow: none; margin: 0; }
  span:empty { display: none; }
  .add, .cut { display: none; }
}

@page { margin: 0; }

    </style>
<?=$this->Html->script(FRONTEND.'jquery.min.js'.ASSET_VERSION);?>
<script>

     window.onload = function () {
    window.print();
     window.history.back();
}

   /* $(function(){



   // $("#print").click(function(){
     //   $("#pb").hide();
     //  $("#pb").toggle();
      window.print();
      window.close();
      // url: siteUrl+"admin/invoice/addinvoice",


    });


    $(document).ready(function(){
       window.print();
      window.close();
   // $("#print").trigger('click'); 
});*/
</script>

  </head>
  <body>


        <?php   //echo "<pre>";
           // print_r($itemlist);
           //  echo "</pre>";onClick="window.print()"
            ?>
            <div id ="pb" style="float:right;">
           <!-- <input type="button" value="Print" id="print">-->
            </div>
            <br>
            <br>
    <header>
      <h1>Invoice</h1>
      <address contenteditable>
        <p>ItCombine</p>
        <p>D37<br>Noida</p>
        <p>9818319425</p>
      </address>
      <span><!--<img alt="" src="http://www.jonathantneal.com/examples/invoice/logo.png"><input type="file" accept="image/*">--></span>
    </header>

     <?php foreach($invoice as $key=>$value) { ?>
    <article>
      <h1 >Recipient</h1>
      <address contenteditable>

      <?php $customer=$this->Common->getRecord('Customer','id',$value['customer_id']);
        ?>
        <p><?php echo $customer->name; ?><br><?php echo $customer->phone; ?>
        <br><?php echo $customer->email; ?>
        <br><?php echo $customer->detail; ?></p>
      </address>
      <table class="meta">

     
        <tr>
          <th><span contenteditable>Invoice #</span></th>
          <td><span contenteditable><?php echo $value['invoice_code']; ?></span></td>
        </tr>
        <tr>
          <th><span contenteditable>Date</span></th>
          <td><span contenteditable><?php echo date('M-d-Y',strtotime($value['created_date'])); ?></span></td>
        </tr>
       
          <th><span contenteditable>Total Amount</span></th>
          <td><span id="prefix" contenteditable>$</span><span><?php echo $value['total_amount']; ?></span></td>
        </tr>
        <!-- <tr>
          <th><span contenteditable>Dr Amount</span></th>
          <td><span id="prefix" contenteditable>$</span><span><?php echo $value['dr_amount']; ?></span></td>
        </tr>-->
      </table>
      <table class="inventory">
        <thead>
          <tr>
            <th><span contenteditable>Item Code</span></th>
            <th><span contenteditable>Name</span></th>
            <!--<th><span contenteditable>Rate</span></th>-->
            <th><span contenteditable>Rate</span></th>
            <th><span contenteditable>Quantity</span></th>
            <th><span contenteditable>Amount</span></th>
          </tr>
        </thead>
        <tbody>

          <?php  

              $i=1;
          foreach($value['invoice_detail'] as $key1=>$value1){  ?>
          <tr>
            <td><span contenteditable><?php

                  

                $items=  $this->Common->getRecord('items','id',$value1['item_id']); 

             echo    $items->item_code;

          //  echo $this->Common->getfield('items','id',$value1['item_id'],'item_code'); ?></span></td>
            <td><span contenteditable><?php echo  $items->name; ?></span></td>
            <!-- <td><span data-prefix>$</span><span contenteditable><?php echo $value1['item_price']; ?></span></td>-->
              <td><span data-prefix>$</span><span contenteditable><?php echo $value1['bill_rate']; ?></span></td>
            <td><span contenteditable><?php echo $value1['quantity']; ?></span></td>
            <td><span data-prefix>$</span><span><?php echo $value1['item_amount']; ?></span></td>
          </tr>
          <?php  } ?>
        </tbody>
      </table>
     
      <table class="balance">
      <tr>
          <th><span contenteditable>Amount</span></th>
          <td><span data-prefix>$</span><span><?php echo $value['sub_total']; ?></span></td>
        </tr>
        <tr>
          <th><span contenteditable>Tax Amount</span></th>
          <td><span data-prefix>$</span><span><?php echo $value['tax_amount']; ?></span></td>
        </tr>
         <tr>
          <th><span contenteditable>Total Amount</span></th>
          <td><span data-prefix>$</span><span><?php echo $value['total_amount']; ?></span></td>
        </tr>
         <tr>
          <th><span contenteditable>Paid Amount</span></th>
          <td><span data-prefix>$</span><span><?php echo $value['paid_amount']; ?></span></td>
        </tr>
        <tr>
          <th><span contenteditable>Creadit Amount</span></th>
          <td><span data-prefix>$</span><span><?php echo $value['cr_amount']; ?></span></td>
        </tr>
        <tr>
          <th><span contenteditable>Balance Due</span></th>
          <td><span data-prefix>$</span><span><?php echo $value['dr_amount']; ?></span></td>
        </tr>

          
      </table>
      <?php  } ?>
    </article>
    <aside>
      <h1><span contenteditable>Additional Notes</span></h1>
      <div contenteditable>
      
      </div>
    </aside>
  </body>
</html>