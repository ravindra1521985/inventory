 <?php echo $this->element(FRONTEND.'/second_page_header'); ?>
<div class="wrapper">
	<div class="container">
    	<div class="my-account">
        	<div id="tabs">
                <?php echo $this->element(FRONTEND.'/menu'); ?>
                <div id="c"  class="right-cntent">
                    <div class="mark-profile">
                    	<div class="heading" style="float:left;"><h3>Test Detail</h3>
						
							<span style="color;black;float:right;margin-right:20px;"><?php echo $this->Html->link('Back',['controller'=>'home','action'=>'viewmark'],['style'=>'color:black;']); ?></span>
						</div>
						
						
						
						
						
						
						
						
                    	<table width="100%;" border="1px solid #f7f7f7;" style="border-collapse:collapse;">
                        	<tbody>
							
							<tr>
							<th>Test Taken on &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp; <?php echo date('d-m-Y',strtotime($mark['date'])); ?><span style="text-align:right;right;float:right;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Test Result &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<?php echo $mark['mark'].'%';  ?>&nbsp;&nbsp;&nbsp; <?php if($mark['mark'] >=70){ echo "Cleared"; } else{ echo "Not Cleared";}  ?> </span></th>
							
							</tr>
                            
								<?php 
								$i=1;
								
							foreach($testresult as $key =>$value) {
			$question=$this->Common->getquestiondetail($value['question_id']);

			//print_r($question[0]['question_options']);
			
			$lession_id=$value['lession_id'];
?>
               <tr>
              <td><div><div style="float:left;"><?php echo 'Question '.$i.'-&nbsp;'; ?></div> <div><?php  echo $question[0]['question'];?></div><br>
			  Answer Options	</div>
			  
			  <br>
			  <?php
					$option=getoption();
			  foreach( $question[0]['question_options'] as $key1=>$value1){
				if($value1['id']==$value['question_option_id']){
					$youranswer= $option[$key1+1].'&nbsp;-&nbsp;'.$value1['option_text'];					
				}
				
				if($value1['is_correct']=='1'){
					$systemans=$option[$key1+1].'&nbsp;-&nbsp;'.$value1['option_text'];					
				}
				
				
			  ?>
			  <div><?php  echo $option[$key1+1]; ?>&nbsp;-&nbsp;
			<?php echo $value1['option_text']; ?>
			  
			  </div>
			  <br>
			<?php  }
			
			if ($value['iscorrect']=='1'){
				$ans='Correct!';
				$color="green";
			}else{
				$ans='Wrong!';
				$color="red";
			}

			?>
			 <br>
			<div> Your answer : <?php echo $youranswer ; ?>&nbsp; (<span style="color:<?php echo $color; ?>"> <?php echo $ans; ?></span>)</div>
			<br>
			<div> Right answer : <?php echo $systemans ; ?></div>
			
			  </td>                                   
               </tr>
								
								<?php  $i++;} ?>
							 <?php if($mark['mark'] < 70){ ?>
								<tr>
								<th>
								Take Test Again
								
								<?php echo $this->Html->link('Click here',['controller'=>'question','action'=>'test',$lession_id],[ 'escape'=>false, 'style'=>'text-decoration:none;color:red']); 	 ?>
								</th>
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
				