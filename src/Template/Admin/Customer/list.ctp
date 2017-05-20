<section id="mainCantt">
  <div class="container">
    <div class="row">

     <?php  echo $this->element(Admin.'/session_flash_b'); ?>
      
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

                <div  class="newbuttton">
              <a href="<?php echo SITEURL; ?>admin/customer/downloadexcel">Download</a>
              </div>
              <div  class="newbuttton">
              <a href="<?php echo SITEURL; ?>admin/customer/uploadcustomercsv">Upload</a>
              </div>
						  <div  class="newbuttton">
						  <a href="<?php echo SITEURL; ?>admin/customer/addcustomer">Add New </a>
						  </div>
              
						   <div id="filter11">
						  
                  <?php  echo  $this->Form->create('',['controller'=>'customer','action'=>'list','id'=>'searchf','class'=>'form-horizontal']);  ?>
								Search Item &nbsp;&nbsp;&nbsp;: 
                   <?php echo $this->Form->text('search', array('class'=>'input_filter','maxlength'=>100,'placeholder'=>'Enter search Name, phone, email, dramount,cr.amount, in same order comma separated','id'=>'search','style'=>'border: 1px solid gainsboro;border-radius: 4px;height: 27px;text-align: center;width:500px;')); ?>

             <input type="submit" value="Search">
                 <?php echo $this->Form->end();?>
                <br>
                Search By comma separated
                <br>
							  <br>
               
                              <table class="col-md-12 table-bordered table-striped table-condensed cf paddLeftZero " id="filter">
                              <thead class="cf">
                                <tr class="myHead">
                                  <th>Sr.no. <span><i class="fa fa-sort"></i></span> </th>
                                  <th>Customer Name<span><i class="fa fa-sort"></i></span> </th>
                                  <th>Phone<span><i class="fa fa-sort"></i></span> </th>
                								  <th>Email<span><i class="fa fa-sort"></i></span></th>
                								  <th>Cr.Amount<span><i class="fa fa-sort"></i></span></th>
                                  <th>Dr.Amount<span><i class="fa fa-sort"></i></span></th>
                                  <!--<th>Status<span><i class="fa fa-sort"></i></span></th>-->
                                  <th>Actions</th>
                                </tr>
                              </thead>
                              <tbody>
					<?php 
              $i=1;
          foreach($Customer as $key=>$value) { ?>
					<div class="formrow22011">
				   <tr>
                   <td><?php echo $i;  ?></td>
                   <td><?php echo ucfirst($value['name']);  ?></td>
                   <td><?php echo $value['phone'];  ?></td>
				   <td><?php echo $value['email'];  ?></td> 
            <td><?php echo $value['cr_amount'];  ?></td>
				   <td><?php echo $value['dr_amount'];  ?></td> 
           
                  <!-- <td><?php  if($value['status']=='1'){
						echo "active";
				  }else {
							echo "deactive";
				  }				  ?></td>   -->                
                                          
             <td ><?php 
                          $edit_img = $this->Html->image('edit.png',array('alt'=>'edit','class'=>'','style'=>'width:16px;'));
                      $delete_img = $this->Html->image('delete.png',array('alt'=>'delete','class'=>'','style'=>'width:16px;'));

             echo $this->Html->link($edit_img, ['controller' => 'customer', 'action' => 'editcustomer',base64_encode($value['id']) , '_full' => true],array('escape'=>false)); ?> &nbsp; &nbsp;  
             <?php echo $this->Html->link( $delete_img, ['controller' => 'customer', 'action' => 'delete',base64_encode($value['id']) , '_full' => true],array('escape'=>false)); ?>
			 
			</td>
                  

                </tr>
				</div>
					<?php $i++; } ?>
                          
                                                              
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


