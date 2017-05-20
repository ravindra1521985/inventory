<ul class="menu-items">
                    <li <?php if($action=='myaccount') { ?>class="active" <?php  } ?>>
					
					<?php echo $this->Html->link('My Profile',['controller'=>'home','action'=>'myaccount']); ?>
					
					
                        <!--<a href="my-account.html">My Profile</a>-->
                    </li>
					<?php// echo $action; ?>
                    <li <?php if($action=='editprofile') { ?>class="active" <?php  }?> >					
					<?php echo $this->Html->link('Edit Profile',['controller'=>'home','action'=>'editProfile', base64_encode($user['id'])]); ?>
					
					
                       <!-- <a href="edit-profile.html">Edit Profile</a>-->
                    </li>
                    <li <?php if($action=='viewmark' || $action=='viewresult' ) { ?>class="active" <?php  }?> >	
					
					<?php echo $this->Html->link('View Mark',['controller'=>'home','action'=>'viewmark']); ?>
                       <!-- <a href="view-mark.html">View Mark</a>-->
                    </li>
                    <li>
                        <a href="#d"  id="myBtn">Change Password</a>
                    </li>
                </ul>
				
				
				
				<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content1">
    <span class="close"></span>
  <div class="container1">
  
  
  
  	<div class="register-form-area active" style="width:550px;height:400px">
				
	<h6 style="font-size:18px;">Change Password</h6>
	  
	 <div class="proceed" style="text-align: center;">
   			<div class="cvr-l">
			
			<?php echo  $this->Form->create(null, ['type' => 'file','id'=>'changepassword']);  ?>
			
				<ul>
									
									
											<li>
                                            	<label>Old Password</label>
												
											 <?php echo $this->Form->password('old_password', array('maxlength'=>100,'id'=>'oldpassword')); ?>
										 <?php echo $this->Form->error('oldpassword'); ?>	
											 </li>
											 
											 <li>
                                            	<label>Password</label>
												
											 <?php echo $this->Form->password('password', array('maxlength'=>100,'id'=>'password')); ?>
											 
											 
											<?php echo $this->Form->error('password'); ?>	
												
                                               
                                            </li>
												 <li>
                                            	<label>Conf.Password</label>
												
											 <?php echo $this->Form->password('c_password', array('maxlength'=>100,'id'=>'c_password')); ?>
											 
											 
											<?php echo $this->Form->error('c_password'); ?>	
												
                                               
                                            </li>
											 
											 
											 
											 </ul>
			
			
			
			
			<?php echo $this->Form->button('Submit',array('title' =>'Custom Title','name'=>'save','onclick'=>'return change_password();'));?>
			
			
			<!--<button>
			<?php //echo $this->Html->image('uploads/2017/01/btn-arr.png', array('class'=>'alignnone size-full wp-image-213 button','width'=>'114')); ?>
</button>-->
<?php echo $this->Form->end();?>
</div>
			<!--<img width="114" alt="" class="alignnone size-full wp-image-213" src="/jain/img/uploads/2017/01/btn-arr.png">    -->           <!-- <img class="alignnone size-full wp-image-43" src="img/uploads/2017/01/btn-arr.png" alt="" width="114" height="17" />-->
           
        </div>
  
</div>
  
                                   
                                    
                                </div>
                            </div>
                        </div>
                  					<?php // echo $this->Form->end();?>