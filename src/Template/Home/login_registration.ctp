 <?php echo $this->element(FRONTEND.'/second_page_header'); ?>
<div class="page-content full flow">
                	<div class="container">
                    	<div class="cvr full flow">
						<?php if($user_type==''){
								$user_type='student';
							}						?>
                    		<div class="registration-form">
                        	<h2>Register As: <?php echo ucfirst($user_type);  ?></h2>
                            <div class="form-start">
                            	<h5>Create a new account here :</h5>
                                <?php echo  $this->Form->create(null, ['url' => ['controller' => 'Home', 'action' => 'loginRegistration'],'type' => 'file','id'=>'registration']);  ?>
                               
							    <?php echo $this->Form->hidden('user_type', array('maxlength'=>100,'id'=>'user_type','value'=>$user_type)); ?>
        <?php echo $this->Form->error('first_name'); ?>
							   
                                    <ul>
                                    	<li>
                                        	<ul class="name-sec">
                                            	<li>
                                                	<label>First Name</label>
													  <?php echo $this->Form->text('first_name', array('maxlength'=>100,'id'=>'first_name')); ?>
        <?php echo $this->Form->error('first_name'); ?>
                                                   <!-- <input type="text" name="first" id="first-name">-->
                                                </li>
                                                <li>
                                                	<label>Last Name</label>
                                                     <?php echo $this->Form->text('last_name', array('maxlength'=>100,'id'=>'last_name')); ?>
									<?php echo $this->Form->error('last_name'); ?>
                                                </li>
                                            </ul>
                                        </li>
								 
										
										<?php if($user_type!="student"){ ?>
										
										
											<li class="class">                                        	
                                        	<label>Age</label>
                                            <?php echo $this->Form->select('age',getage(),['id'=>'age','default'=>'16', 'empty'=>'']); ?>
											<?php echo $this->Form->error('age'); ?>
                                        </li>							
										
										
										
										<?php } else {  ?>
										
                                      	<li class="date-of-birth">
                                        	<label>Date of Birth</label>
                                        	<ul>
                                            	<li>
												<?php //print_r(getday()); ?>
												  <?php echo $this->Form->select('Day',getday(),['id'=>'Day','default'=>'1','empty'=>'']); ?>
																
												
												
                                                </li>
                                                <li>
												
												  <?php echo $this->Form->select('month',getmonth(),['id'=>'month','default'=>'january','empty'=>'']); ?>
												
                                               
                                                </li>
                                                <li>
												
													  <?php echo $this->Form->select('year',getyear(),['id'=>'year','default'=>'1980','empty'=>'','required']); ?>
													  </li>
											
                                            </ul>
                                        </li>
										<?php  } ?>
										
										
							<li class="fname">
                                        	<label>Father Name</label>
											<?php echo $this->Form->text('father_name', array('maxlength'=>100,'id'=>'father_name','onblur'=>'checkdulcate()')); ?>
											<?php echo $this->Form->error('father_name'); ?>
                                            <!--<input type="text" name="fname" value="">-->
                                        </li>
										
									<li class="gender">
                                        	<label>Gender</label>
                                        	<ul>
                                                <li>
																										
                                              <input type="radio" value="male" name="gender" id="r1" Checked="checked" >
                                                <label for="r1"><span></span>Male</label>
                                                </li><li>   
                                                <input type="radio" value="female" name="gender" id="r2">
                                                <label for="r2"><span></span>Female</label>
                                                </li>
                                            </ul>
                                        </li>
										
										
										
										
										<li class="class">                                        	
                                        	<label>T-Shirts Size</label>
                                            <?php echo $this->Form->select('tsize',getsertsize(),['id'=>'tsize','default'=>'january', 'empty'=>'']); ?>
											<?php echo $this->Form->error('tsize'); ?>
                                        </li>
                                        <li class="emails">
                                        	<label>Email Address</label>
                                           <?php echo $this->Form->text('email', array('maxlength'=>100,'id'=>'email')); ?>
											<?php echo $this->Form->error('email'); ?>
                                        </li>
                                       
                                         <li class="phone">
                                        	<label>Mobile No.</label>
                                           <?php echo $this->Form->text('mobile', array('maxlength'=>10,'id'=>'mobile')); ?>
											<?php echo $this->Form->error('mobile'); ?>
                                        </li>
                                        
                                        <li class="address">
                                        	<label>Address</label>
											
                                           <?php echo $this->Form->text('address', array('maxlength'=>100,'id'=>'address')); ?>
											<?php echo $this->Form->error('address'); ?>
                                        </li>
								<li class="class">
                                        	<label>Country</label>
											
                                          <?php echo $this->Form->select('country',$country,['id'=>'country_id','default'=>'101','empty'=>'Select Country','class'=>'listBox','child_id'=>'state',]); ?>							
                                        </li>	
										
					<li class="class">
                                     <label>State</label>
											
                                            <?php echo $this->Form->select('state',$state,['id'=>'state','default'=>'','empty'=>'Select','class'=>'listBox','child_id'=>'city',]); ?>														
                                        </li>

 <li class="class">
  <label>City</label>
											
                                           <?php echo $this->Form->select('city',$city,['id'=>'city','default'=>'','empty'=>'Select','class'=>'secondlist']); ?>									
                                        </li>										
										
										
                                        
                                      <!--  <li class="state-city">
                                        	<label>State</label>
                                            <ul>
                                            	<li>												
												  <?php //echo $this->Form->select('state',$state,['id'=>'state','default'=>'','empty'=>'State','class'=>'listBox','child_id'=>'city',]); ?>										  
												 <?php //echo $this->Form->error('state');?>
														<div id="se"style="display:none; color: #ef5f31; font-size:11px;margin:8px 10px 1px 50px;">State is required</div>
												
                                                </li>
                                                <li>
                                                	<label>City</label>
													<?php //echo $this->Form->select('city',$city,['id'=>'city','default'=>'','empty'=>'City','class'=>'secondlist']); ?><?php //echo $this->Form->error('city',array('style'=>'margin:8px 10px 1px 100px !important;')); ?>
						<div id="ci"style="display:none; color: #ef5f31; font-size:11px;margin:8px 10px 1px 100px;">City is required</div>
													
                                                </li>
                                                
                                            </ul>
                                        </li>-->
										
										<?php if($user_type!="student"){ ?>
										  <li class="class">
                                        	<label>Education</label>
										<?php 
										//$class=array('5'=>'5th','6'=>'6th','7'=>'7th','8'=>'8th','9'=>'9th','10'=>'10th','11'=>'11th','12'=>'12th');
										echo $this->Form->select('education',geteducation(),['id'=>'education','default'=>'','empty'=>'Select', 'onchange'=>'openanyother(this.value)']); ?><?php echo $this->Form->error('education'); ?>
										
<span id='eao' style="display:none; margin-left:120px;" class="phone"><br><?php echo $this->Form->text('anyother', array('maxlength'=>100,'id'=>'anyother','placeholder'=>'Any other ')); ?>
        <?php echo $this->Form->error('anyother'); ?></span>
										
											
                                          
                                        </li>
										
										<?php } else {  ?>
                                        <li class="class">
                                        	<label>Class</label>
											
										<?php 
										$class=array('5'=>'5th','6'=>'6th','7'=>'7th','8'=>'8th','9'=>'9th','10'=>'10th','11'=>'11th','12'=>'12th');
										echo $this->Form->select('class',$class,['id'=>'class','default'=>'','empty'=>'Class']); ?><?php echo $this->Form->error('Class'); ?>
											
											
                                    
                                        </li>
										<?php  } ?>
                                          <li class="shivir-attend">
										<?php  if($user_type =="teacher"){ ?>
										<label>Previous Shivir Tought </label>
										<?php } ?>
										<?php  if($user_type =="volunteer"){ ?>
										<label>Previous Shivir Volunteer </label>
										<?php } ?>

										<?php  if($user_type =="student"){ ?>
										<label>Previous Shivir Attend </label>
										<?php } ?>
				<ul>
				<?php for($i=2012; $i<= date('Y');$i++){ ?>
				
					<li><input type="checkbox" value="<?php echo $i;  ?>" name="c[]"><?php echo $i;  ?></li>
					<!--<li><input type="checkbox" value="2013" name="c[]">2013</li>
					<li><input type="checkbox" value="2014" name="c[]">2014</li>
					<li><input type="checkbox" value="2015" name="c[]">2015</li>
					<li><input type="checkbox" value="2016" name="c[]">2016</li>-->
				<?php  } ?>
				</ul>
                                        </li>
										<?php  if($user_type =="teacher"){ ?>
										  <li class="shivir-attend">
										<?php  if($user_type =="teacher"){ ?>
										<label>Are you ready to teach out side your city</label>
										<?php } ?>
										
                                            <ul>
                                            	<li><input type="radio" value="Y" name="outcity_teach">Yes</li>
												<li><input type="radio" value="N" name="outcity_teach">No</li>
                                               
                                            </ul>
                                        </li>
										<?php  }?>
										
										
                                      <!--  <li class="check-bx">
                                            <input type="checkbox" value="1" name="terms">
                                            <p>I agree with all terms &amp; conditions.</p>
                                        </li>-->
                                        <li class="crte-accnt">
																			
                                           		<?php  if($user_type !="student"){ ?>
													
																
                                            <input type="image" src="<?php echo $this->Url->build('/webroot/img/create-acc.png'); ?>" value="" name="rsumbit" onclick ='return ragistration_validation_teacher();'>
													
												<?php } else{  ?>
													
                                            <input type="image" src="<?php echo $this->Url->build('/webroot/img/create-acc.png'); ?>" value="" name="rsumbit" onclick ='return ragistration_validation();'>
												<?php  } ?>
                                        </li>
                                    </ul>
                             <?php echo $this->Form->end();?>
                                <div class="have-accnt">
								<Div style="color:red; text-align:center"><?php  echo $this->element(Frontend.'/session_flash'); ?></DIV>
                                	<h5>Already have an Account?</h5>
                                    <button>	<?php echo $this->Html->image('login-tn.png',[]); ?></button>
                                </div>
							</div>
                        </div>
						
                        	<div class="login-form">
                            	<h5>Log In</h5>
                            	<div class="cvr-l">
								
				<?php echo  $this->Form->create('LoginUsers', ['url' => ['controller' => 'Users', 'action' => 'login'],'type' => 'file','id'=>'login']);  ?>
								
                                	<!--<form method="post" action="../submit/">-->
                                   <!-- <input type="hidden" value="login" name="login" =="">-->
                                    	<ul>
                                        	<li>
                                            	<label>User ID</label>
												
											 <?php echo $this->Form->text('user_id', array('maxlength'=>100,'id'=>'user_id')); ?>
											<?php echo $this->Form->error('user_id'); ?>	
												
                                               <!-- <input type="text" id="user_id" name="user_id" required>-->
                                            </li>
                                            <li>
                                            	<label>Password</label>
												<?php echo $this->Form->password('password', array('maxlength'=>100,'id'=>'password')); ?>
												<?php echo $this->Form->error('password'); ?>	
												
                                              <!--  <input type="password"  id="password" name="pasword">-->
                                            </li>
                                        </ul>
                                        <div class="lg-in-btn">
										
<?php echo $this->Form->submit('Log In',array('title' =>'Custom Title','onclick'=>'return login_validation();'));?>
										
										<!--<input type="submit" name="sbmt" value="Log In">--></div>
                                   <?php echo $this->Form->end();?>
                                    <div class="new-acc">
                                    	<h4>Create a new account</h4>
                                    	<button>Sign Up</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<?php //echo $this->Form->end();?>