<div class="main-container">
    <div class="content">
      <div class="row1">
      
      <div class="col-md-10 col-sm-9">
           
          <div class="block-1 block-2">
            <h1 class="GreyBox width100per">Add User</h1>
                     
            <?php  echo  $this->Form->create('',['controller'=>'customer','action'=>'adduser','id'=>'addcustomer','class'=>'form-horizontal']);  ?>
              <div class="row paddLeft10 paddright10 mt-10" style="border-top:2px solid #ccc;">
                  
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">User Name</label>
                    <div class="col-sm-9">                      
                      <?php echo $this->Form->text('user_id', array('class'=>'form-control','maxlength'=>100,'placeholder'=>'Enter Name','id'=>'user_id','required','onkeyup'=>'checkuserid();','autocomplete'=>'off','value'=>$customer_record['user_id'])); ?>
                      <span id="user_id_error" style="color:red;"></span>
                       <?php //echo $this->Form->error('user_id'); ?>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">   
                    <?php echo $this->Form->hidden('id', array('class'=>'form-control','maxlength'=>100,'placeholder'=>'Enter Name','id'=>'id','required','autocomplete'=>'off','value'=>$customer_record['id'])); ?>                   
                      <?php echo $this->Form->text('first_name', array('class'=>'form-control','maxlength'=>100,'placeholder'=>'Enter Name','id'=>'first_name', 'required','value'=>$customer_record['first_name'])); ?>
                    
                    </div>
                  </div>
                </div>

                 <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">                      
                      <?php echo $this->Form->text('last_name', array('class'=>'form-control','maxlength'=>100,'placeholder'=>'Enter Name','id'=>'last_name', 'required','value'=>$customer_record['last_name'])); ?>
                      
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Mobile</label>
                    <div class="col-sm-9">                      
                      <?php echo $this->Form->text('mobile', array('class'=>'form-control numberp','maxlength'=>10,'placeholder'=>'Enter Phone','id'=>'mobile','required','value'=>$customer_record['mobile'])); ?>
                     
                    </div>
                  </div>
                </div>
				   <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Email </label>
                    <div class="col-sm-9">                      
                      <?php echo $this->Form->text('email', array('class'=>'form-control ','maxlength'=>200,'placeholder'=>'Enter email','id'=>'email','required','type'=>'email', 'pattern'=>'[^ @]*@[^ @]*','value'=>$customer_record['email'])); ?>
                       
                    </div>
                  </div>
                </div>
				   

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Group</label>
                    <div class="col-sm-9">   

                             <?php 
                             $group=array(1=>'admin',2=>"Sales man");
                      echo $this->Form->select('group',$group,['id'=>'group','default'=>'2','empty'=>'Select Group','class'=>'form-control', 'required','value'=>$customer_record['grouptype']]); ?>                   
                      
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Password </label>
                    <div class="col-sm-9">                      
                      <?php echo $this->Form->password('password', array('class'=>'form-control ','maxlength'=>200,'placeholder'=>'Enter password','id'=>'password','required' ,'autocomplete'=>'off')); ?>
                       <?php echo $this->Form->error('password'); ?>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Confirm Password </label>
                    <div class="col-sm-9">                      
                      <?php echo $this->Form->password('c_password', array('class'=>'form-control ','maxlength'=>200,'placeholder'=>'Enter password','id'=>'c_password','required' ,'autocomplete'=>'off')); ?>
                      
                           <span id="pass_error" style="color:red;"></span>
                       <?php //echo $this->Form->error('c_password'); ?>
                    </div>
                  </div>
                </div>
              

                 <br>
                <br>
                <br>
                 <br>
                                              
                               
              <div class="text-center mt-20 mb-10 mb-51" style="margin-right:40%;padding-top:100px;float:right">
                
                <?php echo $this->Form->button('Save',array('type'=>'submit','class'=>'btn btn-default btn-c1','name'=>'form_type','value'=>'save_change', 'style'=>'text-align:center;margin-top:12px;','onclick'=>'return validation();')); ?>
            </div>
                  
              </div>
            <?php echo $this->Form->end();?>