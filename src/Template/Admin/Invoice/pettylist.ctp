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

                <!--<div  class="newbuttton">
              <a href="<?php echo SITEURL; ?>admin/customer/downloadexcel">Download</a>
              </div>
              <div  class="newbuttton">
              <a href="<?php echo SITEURL; ?>admin/customer/uploadcustomercsv">Upload</a>
              </div>-->
               <div style="width:1250px;overflow:auto">
						  <div  class="newbuttton">
						  <a href="<?php echo SITEURL; ?>admin/invoice/addpetty">Add New </a>
						  </div>
              
               

						   <div id="filter11">
						  
                  <?php  echo  $this->Form->create('',['controller'=>'invoice','action'=>'pettylist','id'=>'searchf','class'=>'form-horizontal']);  ?>
								Search &nbsp;&nbsp;&nbsp;: 
                    
                        <?php echo $this->Form->text('search', array('class'=>'input_filter','maxlength'=>100,'placeholder'=>'name, Reason,Amount, in same order comma separated','id'=>'search','style'=>'border: 1px solid gainsboro;border-radius: 4px;height: 27px;text-align: center;width:360px;')); ?>
                   
             <input type="submit" value="Search">
                 <?php echo $this->Form->end();?>
                <br>
                Search By comma separated
                <br>

                <?php //print_r($custlist);?>
               
                              <table class="col-md-12 table-bordered table-striped table-condensed cf paddLeftZero " id="filter" width="800">
                              <thead class="cf">
                                <tr class="myHead">
                                  <th>Sr.no. <span><i class="fa fa-sort"></i></span> </th>
                                  <th>Name<span><i class="fa fa-sort"></i></span> </th>
                                  <th>Reason<span><i class="fa fa-sort"></i></span> </th>
                								  <th>Amount<span><i class="fa fa-sort"></i></span></th>
                                  <th>Created Date<span><i class="fa fa-sort"></i></span></th>
                                   <th>Action<span><i class="fa fa-sort"></i></span></th>
                                 
                                </tr>
                              </thead>
                              <tbody>
					<?php 
              $i=1;
          foreach($pettylist as $key=>$value) { ?>
					<div class="formrow22011">
				   <tr>
                   <td><?php echo $i;  ?></td>
                   <td><?php echo ucfirst($value['name']);  ?></td>
                   <td><?php echo ucfirst($value['reason']);  ?></td>
           <td><?php echo $value['amount'];  ?></td> 
           <td><?php echo date('d-m-Y h:i:s',strtotime($value['created_date']));  ?></td> 
                     
             <td ><?php 
                        
                      $delete_img = $this->Html->image('delete.png',array('alt'=>'delete','class'=>'','style'=>'width:16px;'));
            if($this->request->session()->read('Auth.User.group')==1 ){

              echo $this->Html->link( $delete_img, ['controller' => 'invoice', 'action' => 'deletepetty',base64_encode($value['id']) , '_full' => true],array('escape'=>false,'title'=>'delete')); 
			       }else { 
            echo $delete_img;
             } ?>
			</td>
                  

                </tr>
				</div>
					<?php $i++; } ?>
                                                                                        
                            </tbody>
                            <tr>
                            
                            </tr>


                            </table>

                  <br>
             <div style="color:black; float:right;color:green;">Today Petty spent amount-:<?php echo $todaypettyamount; ?> &nbsp; Total Petty spent amount-:<?php echo $totalspentamount; ?></div>
                <br>
                <h4> </h5>

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
  </div>
</section>
  