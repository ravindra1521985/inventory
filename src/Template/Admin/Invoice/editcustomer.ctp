<div class="main-container">
    <div class="content">
      <div class="row1">
      
      <div class="col-md-10 col-sm-9">
           
          <div class="block-1 block-2">
            <h1 class="GreyBox width100per">Edit Customer</h1>
                     
            <?php  echo  $this->Form->create('',['controller'=>'customer','action'=>'editcustomer','id'=>'addcustomer','class'=>'form-horizontal']);  ?>
              <div class="row paddLeft10 paddright10 mt-10" style="border-top:2px solid #ccc;">
                  
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Customer Name</label>
                    <div class="col-sm-9">                      
                      <?php echo $this->Form->text('name', array('class'=>'form-control','maxlength'=>100,'placeholder'=>'Enter Name','id'=>'name','required','value'=>$customer_record['name'])); ?>
                      <?php echo $this->Form->hidden('id', array('class'=>'form-control','maxlength'=>100,'placeholder'=>'Enter id','id'=>'id','required','value'=>$customer_record['id'])); ?>
                       <?php echo $this->Form->error('name'); ?>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Customer Phone</label>
                    <div class="col-sm-9">                      
                      <?php echo $this->Form->text('phone', array('class'=>'form-control numberp','maxlength'=>10,'placeholder'=>'Enter Phone','id'=>'phone','required', 'value'=>$customer_record['phone'])); ?>
                       <?php echo $this->Form->error('phone'); ?>
                    </div>
                  </div>
                </div>
				   <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Customer email</label>
                    <div class="col-sm-9">                      
                      <?php echo $this->Form->text('email', array('class'=>'form-control ','maxlength'=>200,'placeholder'=>'Enter email','id'=>'email','required','type'=>'email', 'pattern'=>'[^ @]*@[^ @]*','value'=>$customer_record['email'])); ?>
                       <?php echo $this->Form->error('email'); ?>
                    </div>
                  </div>
                </div>
				   <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Cr.Amount</label>
                    <div class="col-sm-9">                      
                      <?php echo $this->Form->text('cr_amount', array('class'=>'form-control number','maxlength'=>100,'placeholder'=>'Enter amount','id'=>'cr_amount','required','value'=>$customer_record['cr_amount'])); ?>
                       <?php echo $this->Form->error('cr_amount'); ?>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Dr.Amount</label>
                    <div class="col-sm-9">                      
                      <?php echo $this->Form->text('dr_amount', array('class'=>'form-control number','maxlength'=>100,'placeholder'=>'Enter amount','id'=>'dr_amount','required','value'=>$customer_record['dr_amount'])); ?>
                       <?php echo $this->Form->error('dr_amount'); ?>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Customer detail</label>
                    <div class="col-sm-9">                      
                      <?php echo $this->Form->text('detail', array('class'=>'form-control','maxlength'=>100,'placeholder'=>'Enter detail','id'=>'detail','type'=>'textarea','value'=>$customer_record['detail'])); ?>
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
                <br>
                <br>
               
                  <div class="text-center mt-20 mb-10 mb-51" style="margin-right:-10%;padding-top:100px;">
                
                <?php echo $this->Form->button('Save',array('type'=>'submit','class'=>'btn btn-default btn-c1','name'=>'form_type','value'=>'save_change','style'=>'text-align:center;margin-top:8px;')); ?>
            </div>
                  
              </div>
            <?php echo $this->Form->end();?>