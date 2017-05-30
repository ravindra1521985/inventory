<div class="main-container">
    <div class="content">
      <div class="row1">
      
      <div class="col-md-10 col-sm-9">
           
          <div class="block-1 block-2">
            <h1 class="GreyBox width100per">Add Petty</h1>
                     
            <?php  echo  $this->Form->create('',['controller'=>'invoice','action'=>'addpetty','id'=>'addpetty','class'=>'form-horizontal']);  ?>
              <div class="row paddLeft10 paddright10 mt-10" style="border-top:2px solid #ccc;">
                  
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-9">                      
                      <?php echo $this->Form->text('name', array('class'=>'form-control','maxlength'=>100,'placeholder'=>'Enter Name','id'=>'name','required')); ?>
                       <?php echo $this->Form->error('name'); ?>
                    </div>
                  </div>
                </div>

               
				   <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Reason</label>
                    <div class="col-sm-9">                      
                      <?php echo $this->Form->text('reason', array('class'=>'form-control ','maxlength'=>200,'placeholder'=>'Enter reason','id'=>'reason','required','type'=>'text')); ?>
                       <?php echo $this->Form->error('reason'); ?>
                    </div>
                  </div>
                </div>
				   <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Amount</label>
                    <div class="col-sm-9">                      
                      <?php echo $this->Form->text('amount', array('class'=>'form-control number','maxlength'=>100,'placeholder'=>'Enter amount','id'=>'amount','required', 'value'=>0)); ?>
                       <?php echo $this->Form->error('amount'); ?>
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