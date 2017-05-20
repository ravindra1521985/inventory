<?php $this->Html->addCrumb('Business', ['controller' => 'business', 'action' => 'index'], ['admin'=>true,'escape'=>false,'class'=>'active']); ?>

<section id="mainCantt">
  <div class="container">
    <div class="row">
      <?php //echo $this->element(ADMIN.'left_navigation'); ?>  
      
      <div class="col-xs-12 col-sm-9 col-md-10 wholebody" style="margin-left:50px;margin-right:50px;">       
        
        <div class="row1">
                      <div class="col-sm-12 col-md-12">
                        <div>
                          <!-- Modal -->
                          <div class="modal fade mymodal" id="modal-2" role="dialog">
                            <div class="modal-dialog">
                              <!-- Modal content-->
                              <div class="modal-content">                                
                                
                              </div>
                            </div>
                          </div>
                          <div id="no-more-tables">
						  <div style="padding-bottom:20px;">
						 <!-- <a href="/jain/admin/course/index">List</a> &nbsp; &nbsp;<a href="/jain/admin/course/addcourse">Add Course</a>-->
						   <div id="filter11">
						  <br>
								Search Memebr  &nbsp;&nbsp;&nbsp;: <input  id="search" class="input_filter" placeholder="Enter search character" style="border: 1px solid gainsboro;border-radius: 4px;height: 27px;text-align: center;"> 
                              <br>
							  <br>
							  
                              <table class="col-md-12 table-bordered table-striped table-condensed cf paddLeftZero " id="filter">
                              <thead class="cf">
                                <tr class="myHead">
								 <th>Member ID <span><i class="fa fa-sort"></i></span> </th>
                                  <th>Member Name <span><i class="fa fa-sort"></i></span> </th>
								   <th>Member Type <span><i class="fa fa-sort"></i></span> </th>
								   <th>Father Name <span><i class="fa fa-sort"></i></span> </th>
                                  <th>Email Id <span><i class="fa fa-sort"></i></span></th>
                                  <th>Mobile</th>
								  <th>Gender</th>
								   <th>Age</th>
								   <th>Address</th>
								     <th>Edit</th>
									  <th>View</th>
								   
								  
                                </tr>
                              </thead>
                              <tbody>
					<?php foreach($users as $key=>$value) { ?>
					<div class="formrow22011">
				   <tr>
                  <td><?php echo ucfirst($value['user_id']);  ?></td>
				  <td><?php echo ucfirst($value['first_name']." ".$value['last_name']);  ?></td>
				  <td><?php echo ucfirst($value['type']);  ?></td>
				  <td><?php echo ucfirst($value['father_name']);  ?></td>
				   <td><?php echo ucfirst($value['email']);  ?></td>
				    <td><?php echo ucfirst($value['mobile']);  ?></td>
					<td><?php echo ucfirst($value['gender']);  ?></td>
					<td><?php echo ucfirst($value['age']);  ?></td>
					<td><?php echo ucfirst($value['address']);  ?></td>
					                  
                                          
             <td><?php echo $this->Html->link('Edit', ['controller' => 'users', 'action' => 'editmember', base64_encode($value['id']) , '_full' => true]); ?>
			 
			</td>
			 <td><?php echo $this->Html->link('View', ['controller' => 'users', 'action' => 'viewmember', base64_encode($value['id']) , '_full' => true]); ?>
			 
			</td>
				                   
            

                </tr>
				</div>
					<?php  } ?>
                                                        
                                
                              </tbody>
                            </table>
							     <div class="clearfix"></div>
              <div id="pagingDiv"style="margin-left: 20px;">
        <?php echo $this->element(ADMIN.'paging'); ?>
    </div>
							
                          </div>
                        </div>
                      </div>
                    </div>
        
    </div>
  </div>
</section>
<script>




</script>