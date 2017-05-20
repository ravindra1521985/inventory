 <?php echo $this->element(FRONTEND.'/second_page_header'); ?>
<div class="page-content full flow">
                	<div class="container">
                    	<div class="cvr full flow">
                    		<div class="registration-form">
                        	<h2>Register As: student</h2>
                            <div class="form-start">
                            	<h5>Create a new account here :</h5>
                                <?php echo  $this->Form->create(null, ['url' => ['controller' => 'users', 'action' => 'changepassword'],'type' => 'file','id'=>'registration']);  ?>
                               
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
                                        <li class="gender">
                                        	<label>Gender</label>
                                        	<ul>
                                                <li>
																										
                                              <input type="radio" value="male" name="gender" id="r1">
                                                <label for="r1"><span></span>Male</label>
                                                </li><li>   
                                                <input type="radio" value="female" name="gender" id="r2">
                                                <label for="r2"><span></span>Female</label>
                                                </li>
                                            </ul>
                                        </li>
                                        
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
											
                                            </ul>
                                        </li>
                                        <li class="emails">
                                        	<label>Email Address</label>
                                           <?php echo $this->Form->text('email', array('maxlength'=>100,'id'=>'email')); ?>
											<?php echo $this->Form->error('email'); ?>
                                        </li>
                                        <li class="fname">
                                        	<label>F. Name</label>
											<?php echo $this->Form->text('father_name', array('maxlength'=>100,'id'=>'father_name')); ?>
											<?php echo $this->Form->error('father_name'); ?>
                                            <!--<input type="text" name="fname" value="">-->
                                        </li>
                                         <li class="phone">
                                        	<label>Mobile No.</label>
                                           <?php echo $this->Form->text('mobile', array('maxlength'=>100,'id'=>'mobile')); ?>
											<?php echo $this->Form->error('mobile'); ?>
                                        </li>
                                        
                                        <li class="address">
                                        	<label>Address</label>
											
                                           <?php echo $this->Form->text('address', array('maxlength'=>100,'id'=>'address')); ?>
											<?php echo $this->Form->error('address'); ?>
                                        </li>
                                        
                                        <li class="state-city">
                                        	<label>State</label>
                                            <ul>
                                            	<li>
												
												  <?php echo $this->Form->select('state',$state,['id'=>'state','default'=>'','empty'=>'State','class'=>'listBox','child_id'=>'city',]); ?><?php echo $this->Form->error('state'); ?>
												<!--	<select onchange="selct_district(this.value)" id="listBox" name="state"></select>-->
                                                </li>
                                                <li>
                                                	<label>City</label>
													<?php echo $this->Form->select('city',$city,['id'=>'city','default'=>'','empty'=>'City','class'=>'secondlist']); ?><?php echo $this->Form->error('city'); ?>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                        <li class="class">
                                        	<label>Class</label>
											
										<?php 
										$class=array('5'=>'5th','6'=>'6th','7'=>'7th','8'=>'8th','9'=>'9th','10'=>'10th','11'=>'11th','12'=>'12th');
										echo $this->Form->select('class',$class,['id'=>'class','default'=>'','empty'=>'Class']); ?><?php echo $this->Form->error('Class'); ?>
											
											
                                          <!--  <select name="class">
                                                <option value="">Select Class</option>
                                                <option value="fifth">5th</option>
                                                <option value="sixth">6th</option>
                                                <option value="seventh">7th</option>
                                                <option value="eight">8th</option>
                                                <option value="ninth">9th</option>
                                                <option value="tenth">10th</option>
                                                <option value="eleventh">11th</option>
                                                <option value="twelth">12th</option>
                                            </select>-->
                                        </li>
                                                                                <li class="shivir-attend">
                                        	<label>Privious Shivir Attended</label>
                                            <ul>
                                            	<li><input type="checkbox" value="1" name="c[]">2012</li>
                                                <li><input type="checkbox" value="2" name="c[]">2013</li>
                                                <li><input type="checkbox" value="3" name="c[]">2014</li>
                                                <li><input type="checkbox" value="4" name="c[]">2015</li>
                                                <li><input type="checkbox" value="5" name="c[]">2016</li>
                                            </ul>
                                        </li>
                                        <li class="check-bx">
                                            <input type="checkbox" value="1" name="terms">
                                            <p>I agree with all terms &amp; conditions.</p>
                                        </li>
                                        <li class="crte-accnt">
                                            <input type="image" src="http://demoitc.com/jains/wp-content/themes/twentyfifteen/img/create-acc.png" value="" name="rsumbit">
                                        </li>
                                    </ul>
                             <?php echo $this->Form->end();?>
                                <div class="have-accnt">
                                	<h5>Already have an Account?</h5>
                                    <button><img src="http://demoitc.com/jains/wp-content/themes/twentyfifteen/img/login-tn.png"></button>
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
                                            	<label>User Id</label>
												
											 <?php echo $this->Form->text('user_id', array('maxlength'=>100,'id'=>'user_id','required')); ?>
											<?php echo $this->Form->error('username'); ?>	
												
                                               <!-- <input type="text" id="user_id" name="user_id" required>-->
                                            </li>
                                            <li>
                                            	<label>Password</label>
												<?php echo $this->Form->password('password', array('maxlength'=>100,'id'=>'password','required')); ?>
												
												
                                              <!--  <input type="password"  id="password" name="pasword">-->
                                            </li>
                                        </ul>
                                        <div class="lg-in-btn">
										
<?php echo $this->Form->submit('Log In',array('title' =>'Custom Title'));?>
										
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