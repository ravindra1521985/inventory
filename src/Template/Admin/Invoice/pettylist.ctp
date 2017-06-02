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
                    
                   
                   <?php echo $this->Form->text('fromdate', array('class'=>'input_filter datepicker','maxlength'=>100,'placeholder'=>'From date','id'=>'fdate','style'=>'border: 1px solid gainsboro;border-radius: 4px;height: 27px;text-align: left;width:120px;')); ?>
                   <?php echo $this->Form->text('todate', array('class'=>'input_filter datepicker','maxlength'=>100,'placeholder'=>'To date','id'=>'tdate','style'=>'border: 1px solid gainsboro;border-radius: 4px;height: 27px;text-align: left;width:120px;')); ?>

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
                   
           <td><?php echo $this->Common->datewisetotalamount(date('Y-m-d',strtotime($value['created_date'])),'pettylist','amount');  ?></td> 
           <td><?php echo date('d-m-Y h:i:s',strtotime($value['created_date']));  ?></td> 
                     
             <td ><?php 
                        
                      $delete_img = $this->Html->image('delete.png',array('alt'=>'delete','class'=>'','style'=>'width:16px;'));

   
                  echo $this->Html->image('view.png',array('alt'=>'view','class'=>'','style'=>'width:20px; cursor: pointer;','onclick'=>'showDiv('.$i.');')); 
                  echo "&nbsp;&nbsp;&nbsp;";
                         if($this->request->session()->read('Auth.User.grouptype')==1 ){

              //echo $this->Html->link( $delete_img, ['controller' => 'invoice', 'action' => 'deletepetty',base64_encode($value['id']) , '_full' => true],array('escape'=>false,'title'=>'delete')); 
			       }else { 
            echo $delete_img;
             } ?>
			     </td>
                  

                </tr>
               
                 <?php  $detail= $this->Common->getdatewiserecord(date('Y-m-d',strtotime($value['created_date'])),'pettylist'); ?>
                <tr id="ss_<?php echo $i;?>" style="display:none;">
                                 <td colspan="6" ><table align="center">
                                   <tr>
                                    <th style="text-align: center !important; width:30%;"> Name
                                 </th>
                                 <th style="text-align: center !important; width:50%;">
                                 Reason
                                 </th>
                                  <th style="text-align: center !important;">
                                 Amount
                                 </th>
                                   </tr>
                                  <?php foreach($detail as $key2=>$value2){ ?>
                               <tr>
                                 <td>
                               <?php echo $value2['name']; ?>
                                 </td>
                                 <td>
                                  <?php echo $value2['reason']; ?>
                                 </td>
                                  <td>
                                   <?php echo $value2['amount']; ?>
                                 </td>


                              </tr>
                <?php  } ?>
                                 </table></td>

                </tr>
                      
                



				</div>
					<?php $i++; } ?>
                                                                                        
                            </tbody>
                            <tr>

                            
                            </tr>


                            </table>

                  <br>
            <!-- <div style="color:black; float:right;color:green;">Today Petty spent amount-:<?php echo $todaypettyamount; ?> &nbsp; Total Petty spent amount-:<?php echo $totalspentamount; ?></div>-->
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

  <div id="result"></div>
</section>
  <script>


  function showDiv(id) {


   // alert("#ss_"+id);

      $(function() {
    // Jquery("#ss_"+id).toggle();
    $("#ss_"+id).toggle("slide");
    $(".aa_"+id).toggle("slide");
  });

     // $("#ss_"+id).toggle();
  //  div = document.getElementById('ss_'+id);
    //div.style.display = "block";
}
  </script>