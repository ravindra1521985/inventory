    
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
      <table class="meta" align="center" >
    
        <tr>
          <th><span contenteditable>Invoice #</span></th>
          <th><span contenteditable>:</span></th>
          <td><span contenteditable><?php echo $value['invoice_code']; ?></span></td>
        </tr>
        <tr>
          <th><span contenteditable>Date</span></th>
          <th><span contenteditable>:</span></th>
          <td><span contenteditable><?php echo date('M-d-Y',strtotime($value['created_date'])); ?></span></td>
        </tr>
       
          <th><span contenteditable>Total Amount</span></th>
          <th><span contenteditable>:</span></th>
          <td><span id="prefix" contenteditable>$</span><span><?php echo $value['total_amount']; ?></span></td>
        </tr>
        <!-- <tr>
          <th><span contenteditable>Dr Amount</span></th>
          <td><span id="prefix" contenteditable>$</span><span><?php echo $value['dr_amount']; ?></span></td>
        </tr>-->
      </table>
      <br>
      <table class="inventory" width="500" border="1" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th><span contenteditable>Item Code</span></th>
            <th><span contenteditable>Name</span></th>
            <th><span contenteditable>Rate</span></th>
            <th><span contenteditable>Quantity</span></th>
            <th><span contenteditable>Amount</span></th>
          </tr>
        </thead>
        <tbody>

          <?php  
          foreach($value['invoice_detail'] as $key1=>$value1){  ?>
          <tr>
            <td><span contenteditable><?php

                  

                $items=  $this->Common->getRecord('items','id',$value1['item_id']); 

             echo    $items->item_code;

          //  echo $this->Common->getfield('items','id',$value1['item_id'],'item_code'); ?></span></td>
            <td><span contenteditable><?php echo  $items->name; ?></span></td>
             <td><span data-prefix>$</span><span contenteditable><?php echo $value1['item_price']; ?></span></td>
            <td><span contenteditable><?php echo $value1['quantity']; ?></span></td>
            <td><span data-prefix>$</span><span><?php echo $value1['item_amount']; ?></span></td>
          </tr>
          <?php  } ?>
        </tbody>
      </table>
     
      <table class="balance" align="center">
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
    <aside >
      <h1><span contenteditable>Additional Notes</span></h1>
      <div contenteditable>
      
      </div>
    </aside>
  