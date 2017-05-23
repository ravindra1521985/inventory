<div class="main-container">
    <div class="content">
      <div class="row1">
      
      <div class="col-md-11 col-sm-10">
           
          <div class="block-1 block-2">
            <h1 class="GreyBox width100per">Add Invoice</h1>
                     
            <?php  echo  $this->Form->create('',['controller'=>'customer','action'=>'addinvoice','id'=>'addcustomer','class'=>'form-horizontal']);  ?>
              <div class="row paddLeft10 paddright10 mt-10" style="border-top:2px solid #ccc;">
                  
                  <?php //print_r($custlist); ?>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Customer Name  <span style="color:red;">*</span></label>
                    <div class="col-sm-9">                      
                      <?php echo $this->Form->text('name', array('class'=>'form-control','maxlength'=>100,'placeholder'=>'Enter Name','id'=>'customer','list'=>'customer1','required','autocomplete'=>'off'));
                      ?>
                      <?php echo $this->Form->hidden('c_id', array('class'=>'form-control','maxlength'=>100,'placeholder'=>'Enter Name','id'=>'c_id','required'));
                      ?>

                    <datalist id="customer1">
                      <?php foreach($custlist as $key=>$value) {?>
                         <option data-xyz = "<?php echo $key;  ?>" value="<?php echo $value;  ?>" selected="true">
                        <?php  } ?>
                       </datalist>

                       <?php echo $this->Form->error('name'); ?>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Customer Phone <span style="color:red;">*</span></label>
                    <div class="col-sm-9">                      
                      <?php echo $this->Form->text('phone', array('class'=>'form-control numberp','maxlength'=>10,'placeholder'=>'Enter Phone','id'=>'phone','required')); ?>
                       <?php echo $this->Form->error('phone'); ?>
                    </div>
                  </div>
                </div>
				   <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Customer email  <span style="color:red;">*</span></label>
                    <div class="col-sm-9">                      
                      <?php echo $this->Form->text('email', array('class'=>'form-control ','maxlength'=>200,'placeholder'=>'Enter email','id'=>'email','required','type'=>'email', 'pattern'=>'[^ @]*@[^ @]*')); ?>
                       <?php echo $this->Form->error('email'); ?>
                    </div>
                  </div>
                </div>
				   <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Cr.Amount  <span style="color:red;">*</span></label>
                    <div class="col-sm-9">                      
                      <?php echo $this->Form->text('cr_amount', array('class'=>'form-control number','maxlength'=>100,'placeholder'=>'Enter amount','id'=>'cr_amount','required')); ?>
                       <?php echo $this->Form->error('cr_amount'); ?>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Dr.Amount  <span style="color:red;">*</span></label>
                    <div class="col-sm-9">                      
                      <?php echo $this->Form->text('dr_amount', array('class'=>'form-control number','maxlength'=>100,'placeholder'=>'Enter amount','id'=>'dr_amount','required')); ?>
                       <?php echo $this->Form->error('dr_amount'); ?>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Customer detail  <span style="color:red;">*</span></label>
                    <div class="col-sm-9">                      
                      <?php echo $this->Form->text('detail', array('class'=>'form-control','maxlength'=>100,'placeholder'=>'Enter detail','id'=>'detail','type'=>'textarea')); ?>
                       <?php echo $this->Form->error('detail'); ?>
                    </div>
                  </div>
                </div>
                
         <!--<div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Status </label>
                    <div class="col-sm-9">
                      
                     <?php 
             //   $dtatus=array(1=>'Active',0=>'Deactive');
        //   echo $this->Form->select('status',$dtatus,['default'=>'','empty'=>'Select status','class'=>'form-control required status','id'=>'status','style'=>'padding:8px;']); ?>
                        <?php //echo $this->Form->error('status'); ?>
                     
                    </div>
                  </div>
                </div>-->

                <br>

                <div class="col-md-12">

               <!-- <input type="button" id="myBtn" value="add item">-->
                </div>

                <div class="content">
      <input type="button"   onclick="deleteRowOrder('dataTable')" value="Delete" />
    <button type="button" id="myBtn" >Add Item</button>
    <div id="unseen1">
     <table id="dataTables1-example1">
                                    <thead>
                                        <tr>
                       <th width="4%">Select</th>
                       <th width="1"></th>
                                            <th>Item name</th>
                                            <th width="20%">Item Code </th>
                                            <th width="15%">Rate</th>                                        
                                            <th width="15%">QTY</th>
                                            <th width="10%">Stock</th>
                                            <th width="10%">Amount</th>                     
                    
                                        </tr>
                                    </thead>
                                  
<tbody id="dataTable">
<tr class="row1">
<td style="white-space:nowrap;"><input name="delitem[]"  type="checkbox" value="" /></td> 
<td><input type="hidden" name="product_id[]" id="product_0" class="pid"/></td>
<td><input type="text" name="product_name[]" id="productname_0" class="form-control"  readonly /></td>
<td><input type="text" name="product_code[]" id="productcode_0" style="width:100%;" class="form-control" readonly/></td>
<td style="white-space:nowrap"><input type="text" name="product_rate[]" value="" id="productrate_0" style="width:100%;" class="form-control" readonly/></td>
<td><input type="text" name="stock_qty[]" autocomplete="off"   id="stockqty_0" style="width:100%;" class="form-control"  onkeyup="amoutcal(this.id);" onkeypress="return isNumberKey(event)"/></td>
<td><input type="text" name="qty[]" autocomplete="off" id="qty_0" style="width:100%;" class="form-control"  onkeyup="amoutcal(this.id);" onkeypress="return isNumberKey(event)" readonly/></td>
<td style="white-space:nowrap"><input type="text" name="amount[]" value=""  class="txt" id="amount_0" style="width:100%;" class="form-control" readonly/></td>
</tr>
<input type="hidden" name="hiditemcount" id="hiditemcount" value="" />
<input type="hidden" name="" value="0" id="edit_cnt" />
<input type="hidden" name="" value="0" id="rowcount1" />
</tbody>
<tr>
  <td></td>
   <td></td>
    <td></td>
  <td></td><td>Sub Amount :<?php echo $this->Form->input('totalamount',array('label'=>false,'escape' =>false,'id'=>"totalamount",'type'=>'text','readonly' => 'readonly','class'=>'form-control')); ?></td>
  <td>Paid Amount :<?php echo $this->Form->input('paid_amount',array('label'=>false,'escape' =>false,'id'=>"paid_amount",'type'=>'text','class'=>'form-control number','onkeyup'=>'calculateSum1();','value'=>0)); ?>
    </td>
  <td>Cr.Amout :<?php echo $this->Form->input('cr_blance1',array('label'=>false,'escape' =>false,'id'=>"cr_blance1",'type'=>'text','class'=>'form-control number','onkeyup'=>'calculateSum1();','value'=>0)); ?>
      </td>
  <td>Blance Due:<?php echo $this->Form->input('blance_due',array('label'=>false,'escape' =>false,'id'=>"blance_due",'type'=>'text','class'=>'form-control','readonly'=>'readonly')); ?></td>
                 
                    </tr>
                    </table>
                    </div>
               
                 <br>
                <br>
                <div class="text-center mt-20 mb-10 mb-51" style="margin-right:-10%;padding-top:0px;">
                
                <?php echo $this->Form->button('Save',array('type'=>'submit','class'=>'btn btn-default btn-c1','name'=>'form_type','value'=>'save_change','style'=>'text-align:center;margin-top:8px;')); ?>
            </div>
                  
              </div>
            <?php echo $this->Form->end();?>

            <div id ='itembox'>


<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Item List</h2>
    </div>
    <div class="modal-body">
  <table class="col-md-12 table-bordered table-striped table-condensed cf paddLeftZero " id="filter" style="height:300px;display:inline-block;overflow:auto;">
                              <thead class="cf">
                                <tr class="myHead">
                                  <th>Select <span><i class="fa fa-sort"></i></span></th>
                                  <th>Item Name<span><i class="fa fa-sort"></i></span></th>
                                  <th>Item Code<span><i class="fa fa-sort"></i></span></th>
                                  <th>Item Price<span><i class="fa fa-sort"></i></span></th>
                                  <th>Item Qunatity<span><i class="fa fa-sort"></i></span></th>
                                </tr>
                              </thead>
       
                              <?php   $i=1;
              foreach($itemlist as $key=>$value) { ?>
                <div class="formrow22011">
                    <tr>
                   <td><input type="checkbox" id="row_id_<?php echo $i;?>" value="<?php echo $value['id']; ?>" onclick="getItemsList('<?php echo $value['id']; ?>','<?php echo $value['name']; ?>','<?php echo $value['item_code']; ?>','<?php echo $value['item_price']; ?>','<?php echo $value['item_quantity']; ?>','<?php echo $i;?>');" class="pchk"></td>
                   <td><?php echo ucfirst($value['name']);  ?></td>
                   <td><?php echo $value['item_code'];  ?></td>
                   <td><?php echo $value['item_price'];  ?></td> 
                   <td><?php echo $value['item_quantity'];  ?></td> 
                   </tr>
                 <?php  $i++;} ?>
                       
      </table>
    
    </div>
    <div class="modal-footer">
      <!--<h3>Modal Footer</h3>-->
    </div>

  </div>

</div>
</div>
 </div>


<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 52%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}
</style>


<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";

    checkuncheck();
   


}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}





//iterate through each textboxes and add the values
   

document


</script>
<script>

function checkuncheck(){

      productid=[];
    $(".pid").each(function () {

         //add only if the value is number
         if (this.value !='NaN' && this.value.length != 0) {
             productid.push(this.value);
         }

     });



            //  $('.pchk').attr('checked', true);

 $(".pchk").each(function () {

         //add only if the value is number
         if (this.value !='NaN' && this.value.length != 0) {

          //  alert(this.id);
            var cv=this.value;
           // alert(cv);

          //  alert(productid.length);
           // break;
            if (productid !='NaN' && productid.length != 0) {
           /* if($.inArray(cv, productid)){
                       //  alert("bb");

             // $('#'+this.id).attr('checked', true);

            }*/

              if(jQuery.inArray(cv, productid) != -1) {
                         $('#'+this.id).attr('checked', true);
                      } else {
                        $('#'+this.id).attr('checked', false);
                      }

         }
       }


     });






//alert(productid);

}
</script>