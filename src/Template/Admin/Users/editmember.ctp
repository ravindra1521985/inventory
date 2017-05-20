<div class="main-container">
    <div class="content">
      <div class="row1">
	  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
    <?php  echo $this->element(Admin.'/session_flash_b'); ?>
          <?php 
         
       //   $substype= $this->Common->getfield('subscription_plan','id',$business['subscription_plan_id'],'subscription_type');
         
          ?>
      <div class="col-md-10 col-sm-9">
           
          <div class="block-1 block-2">
            <h1 class="GreyBox width100per">Edit Member </h1>
                     
            <?php  echo  $this->Form->create('',['controller'=>'users','action'=>'editmember','id'=>'editmember','class'=>'form-horizontal','type' => 'file']);  ?>
              <div class="row paddLeft10 paddright10 mt-10" style="border-top:2px solid #ccc;">
			  
			  
			  <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Memeber ID</label>
                    <div class="col-sm-9">                     
					<?php echo $this->Form->text('user_id', array('maxlength'=>100,'id'=>'user_id','class'=>'form-control', 'readonly','value'=>$users['user_id'],)); ?>
											<?php echo $this->Form->error('user_id'); ?>
                    </div>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                      
                      <?php echo $this->Form->text('first_name', array('class'=>'form-control','maxlength'=>100,'placeholder'=>'Enter First Name','id'=>'first_name','required','value'=>$users['first_name'])); ?>
					  
					    <?php echo $this->Form->hidden('id', array('class'=>'form-control','maxlength'=>100,'placeholder'=>'Enter Title','id'=>'id','required','value'=>$users['id'])); ?>
						  <?php echo $this->Form->hidden('type', array('class'=>'form-control','maxlength'=>100,'placeholder'=>'Enter Title','id'=>'type','required','value'=>$users['type'])); ?>
                       <?php echo $this->Form->error('title'); ?>
                    </div>
                  </div>
                </div>
				<div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Last  Name</label>
                    <div class="col-sm-9">
                      
                      <?php echo $this->Form->text('last_name', array('class'=>'form-control','maxlength'=>100,'placeholder'=>'Enter Last Name','id'=>'last_name','required','value'=>$users['last_name'])); ?>
					  
					   
                       <?php echo $this->Form->error('last_name'); ?>
                    </div>
                  </div>
                </div>
				
				
				
				<?php if($users['type']!="student"){ ?>
										
										
					<div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Age</label>
                    <div class="col-sm-9">
                     
					 <?php echo $this->Form->select('age',getage(),['id'=>'age','default'=>'16', 'value'=>$users['age'], 'empty'=>'','class'=>'form-control',]); ?> 			  
					 
                       <?php echo $this->Form->error('age'); ?>
                    </div>
                  </div>
                </div>
									
																			
										
										<?php } else {  ?>
				
				
				
				<?php
						//echo 'qq'.$users['dob'];
						?>
				 <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" style="width:145px" class="col-sm-3 control-label">Dob</label>
                      <div class="" style="width:70px;float:left">
                     
					
					<?php 
					
				$dob=date('Y-m-d',strtotime($users['dob']));
														$dobarray=	explode('-',$dob);
					
					echo $this->Form->select('Day',getday(),['id'=>'Day','default'=>'1','empty'=>'','value'=>$dobarray['2'], 'class'=>'form-control','style'=>'width:60px;']);?>
</div>
<div style="width:120px;float:left"><?php 
			echo $this->Form->select('month',getmonth(),['id'=>'month','default'=>'january','empty'=>'', 'value'=>$dobarray['1'],'class'=>'form-control','style'=>'width:100px;']); 	

//echo $this->Form->select('Day',getday(),['id'=>'Day','default'=>'1','empty'=>'', 'class'=>'form-control','style'=>'width:60px;']); ?>  			  
					 
                       
                    </div>
					
					<div>
			<?php echo $this->Form->select('year',getyear(),['id'=>'year','default'=>'1980','empty'=>'','value'=>$dobarray['0'],'required', 'class'=>'form-control','style'=>'width:100px;']);
 ?>  			  
					 
                    </div>
					 
                  </div>
                </div>
				
										<?php  } ?>
										
										
		<div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Father name</label>
                    <div class="col-sm-9">                     
						<?php echo $this->Form->text('father_name', array('maxlength'=>100,'class'=>'form-control','id'=>'father_name','value'=>$users['father_name'],'onblur'=>'checkdulcate_edit()')); ?>
						<?php echo $this->Form->error('father_name'); ?>
                    </div>
                  </div>
                </div>
				
				
				 <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Gender</label>
                    <div class="col-sm-9">
                      
                      <?php  $gender=array('male'=>'Male','female'=>'Female');
					 echo $this->Form->select('gender',$gender,['default'=>'','empty'=>'Select gender','class'=>'form-control required status','id'=>'gender','style'=>'padding:8px;','value'=>$users['gender']]); ?> 			  
					 
                       <?php echo $this->Form->error('gender'); ?>
                    </div>
                  </div>
                </div>
				
				 <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">T-shirts size</label>
                    <div class="col-sm-9">
                     
						 <?php echo $this->Form->select('tsize',getsertsize(),['id'=>'tsize','default'=>'26','class'=>'form-control', 'empty'=>'' ,'value'=>$users['tsize']]); ?>
						     <?php echo $this->Form->error('tsize'); ?>
                    </div>
                  </div>
                </div>
				
				<div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">                     
						 <?php echo $this->Form->text('email', array('maxlength'=>100,'id'=>'email','class'=>'form-control','value'=>$users['email'])); ?>
						  <?php echo $this->Form->error('email'); ?>
                    </div>
                  </div>
                </div>
					
			
					<div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Mobile</label>
                    <div class="col-sm-9">                     
					  <?php  

								//echo $users['mobile'];
					  echo $this->Form->text('mobile', array('maxlength'=>10,'id'=>'mobile','class'=>'form-control','value'=>$users['mobile'])); ?>
					  <?php echo $this->Form->error('mobile'); ?>
                    </div>
                  </div>
                </div>
				
				<div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">address</label>
                    <div class="col-sm-9">                     
					<?php echo $this->Form->text('address', array('maxlength'=>100,'id'=>'address','class'=>'form-control','value'=>$users['address'])); ?>
											<?php echo $this->Form->error('address'); ?>
                    </div>
                  </div>
                </div>
				
				
				
				
			
								
				 <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Photo </label>
                    <div class="col-sm-9">
                                          
					 
					  <?php 
					  
					  
					  
					  echo $this->Form->file('photo',['id'=>'photo','value'=>$users['photo']]); 
					   echo $this->Form->hidden('oldphoto', array('maxlength'=>100,'id'=>'oldphoto','value'=>$users['photo']));
					 
					 ?>
                       
					   <br> <?php 
									if($users['photo']!=""){
										   
										  $image_path='user_photo/'.$users['photo'];
							echo $this->Html->image($image_path,['style'=>'display: block; margin: 0;    width: 10%;']);
									}else{
										
											echo $this->Html->image('dummy-image.jpg',['style'=>'display: block; margin: 0;    width: 10%;']);
									}			?>
                    </div>
                  </div>
                </div>
				
				 <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Status </label>
                    <div class="col-sm-9">
                      
                     <?php 
								$dtatus=array(1=>'Active',0=>'deactive');
					 echo $this->Form->select('status',$dtatus,['default'=>'1','empty'=>'Select Status','class'=>'form-control required status','id'=>'status','style'=>'padding:8px;','value'=>$users['status']]); ?>
                        <?php echo $this->Form->error('status'); ?>
                       <?php //echo $this->Form->error('level_name'); ?>
                    </div>
                  </div>
                </div> 
				
				
				<div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Country </label>
                    <div class="col-sm-9">
                      
<?php echo $this->Form->select('country',$country,['id'=>'country_id','default'=>'101','empty'=>'select','class'=>'listBox form-control','child_id'=>'state','value'=>$users['country']]); ?>	
                        <?php echo $this->Form->error('status'); ?>
                       <?php //echo $this->Form->error('level_name'); ?>
                    </div>
                  </div>
                </div>
				<div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">State </label>
                    <div class="col-sm-9">
                      
<?php echo $this->Form->select('state',$state,['id'=>'state','default'=>'1','empty'=>'State','class'=>'listBox form-control','child_id'=>'city','value'=>$users['state']]); ?>	
                        <?php echo $this->Form->error('status'); ?>
                       <?php //echo $this->Form->error('level_name'); ?>
                    </div>
                  </div>
                </div>
					<div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">City </label>
                    <div class="col-sm-9">
                      
<?php echo $this->Form->select('city',$city,['id'=>'city','default'=>'','empty'=>'City','class'=>'secondlist form-control','value'=>$users['city']]); ?><?php echo $this->Form->error('city'); ?>
                    </div>
                  </div>
                </div>
				
				
			<!-- for teacher  -->	
			
			
			<?php if($users['type']!="student"){ ?>
			
			
			
			<div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Education </label>
                    <div class="col-sm-9">
                      
<?php 
									
										echo $this->Form->select('education',geteducation(),['id'=>'education','default'=>'','empty'=>'Education','value'=>$users['education'],'class'=>'secondlist form-control']); ?><?php echo $this->Form->error('education'); ?>
											
                    </div>
                  </div>
                </div>
				<?php if($users['education']=='anyother'){ ?>
				<div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label"> 					</label>
                    <div class="col-sm-9">

									
		<?php echo $this->Form->text('anyother', array('maxlength'=>100,'id'=>'anyother','class'=>'form-control','value'=>$users['anyother'])); ?>
											<?php echo $this->Form->error('anyother'); ?>
											
                    </div>
                  </div>
                </div>
				<?php } ?>
					
										<?php } else {  ?>
				
						
				<div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Class </label>
                    <div class="col-sm-9">
                      
<?php 
										$class=array('5'=>'5th','6'=>'6th','7'=>'7th','8'=>'8th','9'=>'9th','10'=>'10th','11'=>'11th','12'=>'12th');
										echo $this->Form->select('class',$class,['id'=>'class','default'=>'','empty'=>'Class','value'=>$users['user_class'],'class'=>'secondlist form-control',]); ?><?php echo $this->Form->error('Class'); ?>
											
                    </div>
                  </div>
                </div>
										<?php  } ?>
				
				<div class="col-md-6">
                  <div class="form-group">
                    <?php  if($users['type'] =="teacher"){ ?>
										<label for="inputEmail3" class="col-sm-3 control-label">Previous Shivir Tought </label>
										<?php } ?>
										<?php  if($users['type'] =="volunteer"){ ?>
										<label for="inputEmail3" class="col-sm-3 control-label">Previous Shivir Volunteer </label>
										<?php } ?>

										<?php  if($users['type'] =="student"){ ?>
										<label for="inputEmail3" class="col-sm-3 control-label">Previous Shivir Attended </label>
										<?php } ?>
                    <div class="col-sm-9">
                      <?php $psa = explode(',',$users['shiver_attend']); ?>
					  
					  	<?php for($i=2012; $i<= date('Y');$i++){ ?>
					  
						<input type="checkbox" class="check" value="<?php echo $i; ?>" <?php if (in_array($i, $psa))
						{ ?> checked="checked"  <?php } ?> name="c[]"><?php echo $i; ?>
					
						<?php } ?>
						<!--<input type="checkbox" class="check"  value="2013" <?php if (in_array("2013", $psa))
						{ ?> checked="checked"  <?php } ?> name="c[]">2013
					<input type="checkbox" class="check"  value="2014" <?php if (in_array("2013", $psa))
						{ ?> checked="checked"  <?php } ?> name="c[]">2014
					<input type="checkbox" class="check"  value="2015" <?php if (in_array("2013", $psa))
						{ ?> checked="checked"  <?php } ?> name="c[]">2015
					<input type="checkbox" class="check"  value="2016" <?php if (in_array("2013", $psa))
						{ ?> checked="checked"  <?php } ?> name="c[]">2016-->
											
                    </div>
                  </div>
                </div>
				
				<?php  if($users['type'] =="teacher"){ ?>
				<div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Are you ready to teach out side your city</label>
                    <div class="col-sm-9"> 

					<input type="radio" value="Y" name="outcity_teach" <?php if($users['outcity_teach']=='Y'){?> checked="checked" <?php  } ?>  >Yes

                    <input type="radio" value="N" name="outcity_teach" <?php if($users['outcity_teach']=='N'){?> checked="checked" <?php  } ?>   >No
					
					<!--<input type="checkbox" value="Y" <?php if($users['outcity_teach']=='Y'){?> checked="checked" <?php  } ?>  name="outcity_teach">Y/N-->
                    </div>
                  </div>
                </div>
				<?php } ?>
				
				
				<div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">                     
					<?php echo $this->Form->password('password', array('maxlength'=>100,'id'=>'password','class'=>'form-control')); ?>
											<?php echo $this->Form->error('password'); ?>
                    </div>
                  </div>
                </div>
				
				
				
				<!--<div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Confirm Password</label>
                    <div class="col-sm-9">                     
					<?php //echo $this->Form->text('address', array('maxlength'=>100,'id'=>'address','class'=>'form-control','value'=>$users['address'])); ?>
											<?php echo $this->Form->error('address'); ?>
                    </div>
                  </div>
                </div>-->
					
				
               
                  <div class="text-center mt-20 mb-10 mb-51" style="margin-right:35%;padding-top:100px;">
                
                <?php echo $this->Form->button('Save Change',array('type'=>'submit','class'=>'btn btn-default btn-c1','name'=>'form_type','value'=>'save_change','style'=>'text-align:center;margin-top:80px;')); ?>
            </div>
                  
              </div>
            <?php echo $this->Form->end();?>
			
			
			 <script>
 
  </script>