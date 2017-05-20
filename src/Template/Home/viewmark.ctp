 <?php echo $this->element(FRONTEND.'/second_page_header'); ?>
<div class="wrapper">
	<div class="container">
    	<div class="my-account">
        	<div id="tabs">
                <?php echo $this->element(FRONTEND.'/menu'); ?>
                <div id="c"  class="right-cntent">
                    <div class="mark-profile">
                    	<div class="heading"><h3>View Marks</h3></div>
                    	<table width="100%;" border="1px solid #f7f7f7;" style="border-collapse:collapse;">
                        	<tbody>
                            	<tr>
                                	<th>Level</th>
                                    <th>Mark Obtained</th>
                                    <th>Result</th>
									<th>View Result Detail</th>
                                </tr>
								<?php foreach($mark as $key =>$value) { ?>
                                <tr>
                                	<td><?php  echo $level[$value['level_id']];?></td>
                                    <td><?php  echo $value['mark'];?>%</td>
                                    <td><?php if($value['mark'] >=70){ echo "Cleared"; } else{ echo "Not Cleared";}  ?></td>
								<td> 
								<?php echo $this->Html->link('View Result',['controller'=>'home','action'=>'viewResult', base64_encode($value['test_id'])]); ?>
																
								 </td>
                                </tr>
								<?php  } ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
				