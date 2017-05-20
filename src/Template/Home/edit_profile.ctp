 <?php echo $this->element(FRONTEND.'/second_page_header'); ?>
<div class="wrapper">
	<div class="container">
    	<div class="my-account">
        	<div id="tabs">
              <?php echo $this->element(FRONTEND.'/menu'); ?>
                
                <div id="b"   class="right-cntent">
                    <div class="edit-profile">
                    	<div class="heading"><h3>Edit Profile</h3></div>
                    
<?php //print_r($users);


echo  $this->Form->create(null, ['url' => ['controller' => 'Home', 'action' => 'editProfile'],'type' => 'file','id'=>'editprofile','type' => 'file']);  ?>
   
							    <?php echo $this->Form->hidden('user_type', array('maxlength'=>100,'id'=>'user_type','value'=>$users['type'])); ?>
								<?php echo $this->Form->hidden('id', array('maxlength'=>100,'id'=>'id','value'=>$users['id'])); ?>

					<table width="100%;" border="1px solid #f7f7f7;" style="border-collapse:collapse;">
                        	<tbody>
                            	<tr class="photo-sec">
                                	
								<th>Photo</th>
                                    <td>                           <?php 
										  // echo $user['photo'];
										   echo $this->Form->file('photo',['id'=>'image','value'=>$users['photo']]); ?>
										   <?php echo $this->Form->hidden('oldphoto', array('maxlength'=>100,'id'=>'oldphoto','value'=>$users['photo'])); ?><?php echo $this->Form->error('photo'); ?>
										   
										   </td>
									<td>
									<?php 
										   if($users['photo']!=''){
										  $image_path='user_photo/'.$users['photo'];
										   echo $this->Html->image($image_path,['style'=>'display: block; margin: 0;    width: 100%;']);} else {
					 echo $this->Html->image('dummy-image.jpg',['style'=>'display: block; margin: 0;  width: 100%;']) ;						   
										   }
							?>
														
									</td>
                                </tr>
                              <tr>
                                	<th>User Name</th>
                                    <td colspan="2">
									<?php echo $this->Form->text('user_id', array('maxlength'=>100,'id'=>'user_id', 'readonly'=>'readonly','value'=>$users['user_id'])); ?></td>
                                </tr>
                                <tr>
                                	<th>First Name</th>
                                    <td colspan="2">
								<?php echo $this->Form->text('first_name', array('maxlength'=>100,'id'=>'first_name', 'value'=>$users['first_name'])); ?>
        <?php echo $this->Form->error('first_name'); ?></td>
                                </tr>
                                <tr>
                                	<th>Last Name</th>
                                    <td colspan="2"><?php echo $this->Form->text('last_name', array('maxlength'=>100,'id'=>'last_name', 'value'=>$users['last_name'])); ?>
									<?php echo $this->Form->error('last_name'); ?></td>
                                </tr>
								
							 <?php if($users['type']!="student"){ ?>
                                <tr>
                                	<th>Age</th>
                                    <td colspan="2"><?php echo $this->Form->select('age',getage(),['id'=>'age','default'=>'25', 'empty'=>'','value'=>$users['age']]); ?>
											<?php echo $this->Form->error('age'); ?></td>
                                </tr>

								 <?php }else{ ?>							   <tr class="checkboxs" >
                                	<th>DOB</th>
                                    <td colspan="2"><ul>
                                            	<li>
												<?php 
																	 $dob=date('Y-m-d',strtotime($users['dob']));
														$dobarray=	explode('-',$dob);
												//print_r($dobarray); ?>
												  <?php echo $this->Form->select('Day',getday(),['id'=>'Day','default'=>'','empty'=>'','value'=>$dobarray['2']]); ?>
																
												
												
                                                </li>
                                                <li>
												
												  <?php echo $this->Form->select('month',getmonth(),['id'=>'month','default'=>'','empty'=>'','value'=>$dobarray['1']]); ?>
												
                                               
                                                </li>
                                                <li>
												
													  <?php
																			
													  
													  echo $this->Form->select('year',getyear(),['id'=>'year','default'=>'','empty'=>'','value'=>$dobarray['0'],'required']); ?>
											
                                            </ul>
                                        </td>
                                </tr>
								 <?php  } ?>	
								
								
								
								
								
								
                                <tr>
                                	<th>Father Name</th>
                                    <td colspan="2"><?php echo $this->Form->text('father_name', array('maxlength'=>100,'id'=>'father_name','value'=>$users['father_name'],'onblur'=>'checkdulcate_edit()')); ?>
											<?php echo $this->Form->error('father_name'); ?></td>
                                </tr>
                                <tr class="checkboxs" >
                                	<th>Gender</th>
                                    <td colspan="2"> <ul>
                                                <li>
																										
                                              <input type="radio" value="male" name="gender" id="r1" <?php if($users['gender']=='male') { ?> Checked="checked" <?php } ?> >
                                                <label for="r1"><span></span>Male</label>
                                                </li><li>   
                                                <input type="radio" value="female" name="gender" id="r2" <?php if($users['gender']=='female') { ?> Checked="checked" <?php } ?>>
                                                <label for="r2"><span></span>Female</label>
                                                </li>
                                            </ul></td>
                                </tr>
								
								
                                <tr>
                                	<th>T-shirts Size</th>
                                    <td colspan="2">
									
									<?php echo $this->Form->select('tsize',getsertsize(),['id'=>'tsize','default'=>$users['tsize'], 'empty'=>'']); ?>
									<!--<input type="text" name="gender" placeholder="ex: 32" />--></td>
                                </tr>
                                <tr>
                                	<th>Email</th>
                                    <td colspan="2"><?php echo $this->Form->text('email', array('maxlength'=>100,'id'=>'email','value'=>$users['email'])); ?></td>
                                </tr>
                                <tr>
                                	<th>Mobile</th>
                                    <td colspan="2"> <?php echo $this->Form->text('mobile', array('maxlength'=>10,'id'=>'mobile','value'=>$users['mobile'])); ?>
											<?php echo $this->Form->error('mobile'); ?></td>
                                </tr>
                                <tr>
                                	<th>Address</th>
                                    <td colspan="2"><?php echo $this->Form->text('address', array('maxlength'=>100,'id'=>'address','value'=>$users['address'])); ?>
											<?php echo $this->Form->error('address'); ?></td>
                                </tr>
                                <tr>
                                	<th>State</th>
                                    <td colspan="2">  <?php echo $this->Form->select('state',$state,['id'=>'state','default'=>'1','empty'=>'State','class'=>'listBox','child_id'=>'city','value'=>$users['state']]); ?>										  
												 <?php //echo $this->Form->error('state');?>
														<div id="se"style="display:none; color: #ef5f31; font-size:11px;margin:8px 10px 1px 50px;">State is required</div></td>
                                </tr>
                                <tr>
                                	<th>City</th>
                                    <td colspan="2"><?php echo $this->Form->select('city',$city,['id'=>'city','default'=>'','empty'=>'City','class'=>'secondlist','value'=>$users['city']]); ?><?php echo $this->Form->error('city'); ?></td>
                                </tr>
								
								
								
								
								
                                <tr>
								
								<?php if($users['type']!="student" ){ ?>
								
								
								<th>Education <?php  echo $user_type; ?></th>
                                    <td colspan="2">	
								<?php echo $this->Form->select('education',geteducation(),['id'=>'education','default'=>'','empty'=>'Education','value'=>$users['education'],'onchange'=>'openanyother_edit(this.value)']); ?><?php echo $this->Form->error('education'); ?>
								
</td>
							
								<?php  } else { ?>
								
                                	<th>Class</th>
                                    <td colspan="2"><?php $class=array('5'=>'5th','6'=>'6th','7'=>'7th','8'=>'8th','9'=>'9th','10'=>'10th','11'=>'11th','12'=>'12th');
	echo $this->Form->select('class',$class,['id'=>'class','default'=>'','empty'=>'Class','value'=>$users['user_class']]); ?>
	<?php echo $this->Form->error('Class'); ?></td>
								
								<?php } ?>							
							
                                </tr>
							
							<?php if($users['type']!="student" && $users['education']=='anyother'){ ?>
							<tr>	
					
						
						<!--<div >-->
					  
					  	<th>Any Other</th>
						<td colspan="2"> <span id="eao"><?php if($users['type']!="student" && $users['education']=='any other'){  echo $this->Form->text('anyother', array('maxlength'=>100,'id'=>'anyother','value'=>$users['anyother'])); } ?></span> </td>
								  
						
						
						
								  </tr>
							<?php  } ?>
								
                                <tr class="checkboxs">
                                	<th>
									<?php  if($users['type'] =="teacher"){echo "Previous Shivir Tought"; } else if($users['type'] =="volunteer") { echo  "Previous Shivir Volunteer";} else{ echo "Previous Shivir Attend ";}?>
									
									</th>
                                    <td colspan="2">
                                    	<?php $psa = explode(',',$users['shiver_attend']); ?>
												
                                            <ul>
											<?php for($k=2012;$k<=date('Y');$k++){ ?>
											
                                            	<li><input type="checkbox" value="2012" <?php if (in_array($k, $psa))
  { ?> checked="checked"  <?php } ?> name="c[]"><?php echo $k ;?></li>
											<?php  } ?>
                                               <!-- <li><input type="checkbox" value="2013" <?php if (in_array("2013", $psa))
  { ?> checked="checked"  <?php } ?> name="c[]">2013</li>
                                                <li><input type="checkbox"  <?php if (in_array("2014", $psa))
  { ?> checked="checked"  <?php } ?>value="2014" name="c[]">2014</li>
                                                <li><input type="checkbox" <?php if (in_array("2015", $psa))
  { ?> checked="checked"  <?php } ?>value="2015" name="c[]">2015</li>
                                                <li><input type="checkbox" <?php if (in_array("2016", $psa))
  { ?> checked="checked"  <?php } ?> value="2016" name="c[]">2016</li>-->
                                            </ul>
                                    </td>
                                </tr>
					 <?php  if($users['type'] =="teacher"){ ?> 	
					 <tr class="checkboxs">
                                	<!--<th></th>-->
                                    <td colspan="3"><ul>
    <li>Are you ready to teach out side your city (Y/N)<li><input type="radio" value="Y" name="outcity_teach" <?php if($users['outcity_teach']=='Y'){?> checked="checked" <?php  } ?>>Yes</li>
												<li><input type="radio" value="N" name="outcity_teach" <?php if($users['outcity_teach']=='Y'){?> checked="checked" <?php  } ?>>No</li></li>
</ul>


</td>
                                </tr>

					 <?php  } ?>					 
                            </tbody>
                        </table>
						
						<div class="editsub">  <input type="submit"  style="text-align:center;" value="Submit" name="rsumbit" onclick ='return ragistration_validation();'>			</div>
						
						<?php echo $this->Form->end();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
				