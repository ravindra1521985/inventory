 <?php echo $this->element(FRONTEND.'/second_page_header'); ?>
<div class="page-content full flow">
<?php echo  $this->Form->create(null, ['url' => ['controller' => 'home', 'action' => 'change'],'type' => 'file','id'=>'changepassword']);  ?>
                	<div class="container">
                    	<div class="cvr full flow">
                    		
                        	<div class="login-form" style="display:block;">
                            	<h5>Change Password</h5>
                            	<div class="cvr-l">
								
				
								
                                	
                                        	<li>
                                            	<label>Password</label>
												
											 <?php echo $this->Form->text('password', array('maxlength'=>100,'id'=>'password','required')); ?>
											<?php echo $this->Form->error('password'); ?>	
												
                                               <!-- <input type="text" id="user_id" name="user_id" required>-->
                                            </li>
                                           
                                        </ul>
                                        <div class="lg-in-btn">
										
<?php echo $this->Form->submit('Save',array('title' =>'Custom Title','name'=>'save'));?>
										
										<!--<input type="submit" name="sbmt" value="Log In">--></div>
                                   
                                    
                                </div>
                            </div>
                        </div>
                    </div>
					<?php echo $this->Form->end();?>
                </div>
				