<div class="main-container">
    <div class="content">
      <div class="row1">
      
      <div class="col-md-10 col-sm-9">
           
          <div class="block-1 block-2">
            <h1 class="GreyBox width100per">Add Item </h1>
                     
            <?php  echo  $this->Form->create('',['controller'=>'items','action'=>'additem','id'=>'additem','class'=>'form-horizontal']);  ?>
              <div class="row paddLeft10 paddright10 mt-10" style="border-top:2px solid #ccc;">
                  
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Item Name</label>
                    <div class="col-sm-9">                      
                      <?php echo $this->Form->text('name', array('class'=>'form-control','maxlength'=>100,'placeholder'=>'Enter Item Name','id'=>'name','required')); ?>
                       <?php echo $this->Form->error('name'); ?>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Item Code</label>
                    <div class="col-sm-9">                      
                      <?php echo $this->Form->text('item_code', array('class'=>'form-control','maxlength'=>100,'placeholder'=>'Enter Item Name','id'=>'item_code','required')); ?>
                       <?php echo $this->Form->error('item_code'); ?>
                    </div>
                  </div>
                </div>
				   <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Item Price</label>
                    <div class="col-sm-9">                      
                      <?php echo $this->Form->text('item_price', array('class'=>'form-control number','maxlength'=>10,'placeholder'=>'Enter Item Price(like 100.9)','id'=>'item_price','required')); ?>
                       <?php echo $this->Form->error('item_price'); ?>
                    </div>
                  </div>
                </div>
				   <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Item Quantity</label>
                    <div class="col-sm-9">                      
                      <?php echo $this->Form->text('item_qty', array('class'=>'form-control number','maxlength'=>100,'placeholder'=>'Enter Item Quantity','id'=>'item_qty','required')); ?>
                       <?php echo $this->Form->error('item_qty'); ?>
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
               
                  <div class="text-center mt-20 mb-10 mb-51" style="margin-right:-10%;padding-top:100px;">
                
                <?php echo $this->Form->button('Save',array('type'=>'submit','class'=>'btn btn-default btn-c1','name'=>'form_type','value'=>'save_change','style'=>'text-align:center;margin-top:8px;')); ?>
            </div>
                  
              </div>
            <?php echo $this->Form->end();?>