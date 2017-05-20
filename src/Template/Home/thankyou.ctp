 <?php echo $this->element(FRONTEND.'/second_page_header'); ?>
<div class="page-content full flow">

                	<div class="container">
                    	<div class="cvr full flow">
                    		
                        	<div class="login-form" style="display:block;">
                            	<h5>Thank you <!--for join us--></h5>
                            	<div class="cvr-l">
								<Div style="color:green; text-align:center"><?php if($newuser['userid']!='' && isset($newuser['userid'])){  echo $this->element(Frontend.'/session_flash_b');  } ?>
								
								
								<?php	if(isset($mark)){
									
								if($mark <= 69.9){
					echo "<h2>You have not cleared  this level take test again  ";
					echo "<br>";
					 echo $this->Html->link('Click here',['controller'=>'home','action'=>'index'],[ 'escape'=>false, 'style'=>'text-decoration:none;color:red']); 	
echo "</h2>";					 
								}else{
						echo "<h2>You have scored :- ".$mark.'%<h2>';
						echo "<br><h2>You are Promoted  To Next Level</h2>";
								}
							}
								?>
								
								</DIV>
				<?php //print_r($newuser); 
							
						
				
				
				
					if($newuser['userid']!='' && isset($newuser['userid'])){
				?>
								<div style="color: #1a1a1a;
    font-family: robotolight;
    font-size: 16px;
    letter-spacing: 0.9px;
    line-height: 26px;
    text-align: justify;">
								
								Thank you for registration on Jain Sanskar Shivir.<br> 
								We have created your User Name and Password given blow.
								
								</div>
								
								<br>
                                	<ul>
                                        	<li>
                                            	<label>Your User Name :</label>
												
											 <?php echo $newuser['userid']; ?>											 
											
                                            </li>
											<li>
                                            	<label>Your Password :</label>
												
											  <?php echo $newuser['password']; ?>											 
											
                                            </li>

                                           
                                        </ul>
										<br>
										
										<div style="color: #1a1a1a;
    font-family: robotolight;
    font-size: 16px;
    letter-spacing: 0.9px;
    line-height: 26px;
    text-align: justify;">
										You can login to the website using there
details. You can also change your password from  the my account section.	<?php echo $this->Html->link('Click here',['controller'=>'home','action'=>'login-or-registration'],[ 'escape'=>false, 'style'=>'text-decoration:none;color:red']); 	
  ?>									
										</div>
					<?php  } ?>
                                        <div class="lg-in-btn">
										
<?php //echo $this->Form->submit('Save',array('title' =>'Custom Title','name'=>'save'));?>
										
										<!--<input type="submit" name="sbmt" value="Log In">--></div>
                                   
                                    
                                </div>
                            </div>
                        </div>
                    </div>
					<?php echo $this->Form->end();?>
                </div>
				