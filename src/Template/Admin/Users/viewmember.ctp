<?php $this->Html->addCrumb('Business', ['controller' => 'business', 'action' => 'index'], ['admin'=>true,'escape'=>false,'class'=>'active']); ?>

<section id="mainCantt" style="position:relative;">
  <div class="container">
    <div class="row">
      <?php //echo $this->element(ADMIN.'left_navigation'); ?>  
      
      <div class="col-xs-12 col-sm-9 col-md-10 wholebody" style="margin-left:50px;margin-right:50px;">       
        
        <div class="row1">
                      <div class="col-sm-12 col-md-12">
                        <div>
                          <!-- Modal -->
                         
                          <div id="no-more-tables" class="mmp">
						  <div style="padding-bottom:20px;">
						
							  
                              <table class="col-md-12 table-bordered table-striped table-condensed cf paddLeftZero " id="filter">
                              <thead class="cf">
                                <tr class="myHead">
								 <th width="10%"  style="text-align:left;" >Member ID  </th> <td><?php echo ucfirst($users['user_id']);  ?></td>
                                  <th width="10%"  style="text-align:left;">Member Name  </th><td><?php echo ucfirst($users['first_name']." ".$users['last_name']);  ?></td>
								   <th width="10%"  style="text-align:left;">Member Type  </th> <td><?php echo ucfirst($users['type']);  ?></td>
								   <th width="10%"  style="text-align:left;">Father Name </th><td><?php echo ucfirst($users['father_name']);  ?></td>
								   </tr>
								   <tr>
                                  <th  style="text-align:left;">Email Id </th> <td><?php echo ucfirst($users['email']);  ?></td>
                                  <th  style="text-align:left;">Mobile</th> <td><?php echo ucfirst($users['mobile']);  ?></td>
								  <th  style="text-align:left;">Gender</th>	<td><?php echo ucfirst($users['gender']);  ?></td>
							
							<?php 	if($users['type']!="student"){  ?>

								<th  style="text-align:left;">Age</th><td><?php echo $users['age'];  ?></td>
							<?php } else { ?>
							
							<th  style="text-align:left;">Dob</th><td><?php echo date('d-m-Y', strtotime($users['dob']));  ?></td>
							<?php  } ?>
								    </tr>
								   <tr>
								   <th  style="text-align:left;">Address</th><td><?php echo ucfirst($users['address']);  ?>   </td>
								     <th  style="text-align:left;">Photo</th><td><?php if($users['photo']!=""){
											 $image_path='user_photo/'.$users['photo'];
								   echo $this->Html->image($image_path,['style'=>'display: block; margin: 0;    width: 20%;']);} ?></td>
								    <th  style="text-align:left;">State</th><td><?php echo $state[$users['state']]; ?>  </td>
								     <th  style="text-align:left;">City</th><td><?php echo $city[$users['city']]; ?></td>
								   						  
                                </tr>
								
								  <tr>
								  <?php if($users['type']!="student"){  ?>
								  
								   <th  style="text-align:left;">Education </th>
                                  <td><?php 
											if($users['education']=='any other'){
												 echo $users['anyother'];
											}else{
								  echo $users['education'];
											}								  ?> </td>
								  <?php  }else { ?>
								  
								  
								   <th  style="text-align:left;">Class</th><td><?php echo $users['user_class']."th"; ?>   </td>
								  <?php  } ?>
								      <th  style="text-align:left;">Previous Shivir  <?php if($users['type']=="teacher"){ echo "Tought"; } else if($users['type']=="volunteer"){ echo "Volunteer";} else{ echo "Attend";}  ?>  </th>
                                  <td><?php echo $users['shiver_attend']; ?> </td>
								    <th></th><td><?php //echo $state[$users['state']]; ?>  </td>
								     <th></th><td><?php// echo $city[$users['city']]; ?></td>
								   						  
                                </tr>
								<?php if($users['type']=="teacher"){  ?>
								
								<tr>
								 <th  style="text-align:left;">  Are you to teach out side your city   </th>
                                  <td><?php echo $users['outcity_teach']; ?> </td>
								  <th>   </th>
                                  <td> </td>
								  <th>   </th>
                                  <td></td>
								  <th>   </th>
                                  <td> </td>
                                </tr>
								<?php  } ?>
								
								
                              </thead>
                              <tbody>
					
                                                        
                                
                              </tbody>
                            </table>
							
						
						
						
						
							   
    </div>
		
	<!--<span onclick="openreplybox();"><b>REPLY</b></span>-->
	<button id="myBtn" class="btn btn-default btn-c1" style="margin-top:20px;">Send</button>
								
                          </div>
                        </div>
                      </div>
                    </div>
 
    </div>
	
			     		
<div id="myModal" class="modal" style="position:absolute;">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
  <div class="container1">
  
	<?php echo  $this->Form->create(null, ['type' => 'file','id'=>'reply']);  ?>
               <div class="row paddLeft10 paddright10 mt-10" style="border-top:0px solid #ccc;">
                
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label" style="text-align:center;">Reply</label>
                    <div class="col-sm-9">
					
                      
                   <?php echo  $this->Form->input('comment', array('type' => 'textarea','rows' => '10', 'cols' => '80','label'=>false,'id'=>'comment')); ?>
					  
					    <?php echo $this->Form->hidden('user_id', array('class'=>'form-control','maxlength'=>100,'placeholder'=>'Enter Title','id'=>'user_id','required','value'=>$users['id'])); ?>
						  
                       <?php echo $this->Form->error('comment'); ?>
					   <div style="color:red;display:none;" id="cerror">Comment is required</div>
					   				   
                    </div>
                  </div>
                </div>
					 <div class="text-center mt-20 mb-10 mb-51" style="margin-right:10%;padding-top:100px;">
                <?php echo $this->Form->button('Save',array('title' =>'Custom Title','name'=>'save','class'=>'btn btn-default btn-c1','onclick'=>'return reply();'));?>
              
            </div>
				
                    </div>
				
					
					
					<?php echo $this->Form->end();?>

</div>	
</div>
	
	
  </div> 
 
   
</section>
					
	