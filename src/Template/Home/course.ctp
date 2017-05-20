<?php echo $this->element(FRONTEND.'/second_page_header'); ?>
<div class="page-content full flow">
                	<div class="container">
                    	<div class="count">
                        	                           <div class="title-count">Showing total <g id="count"><?php echo count($lession);  ?></g> of <?php echo $totalcourse;  ?> Courses. <span>Select your Level &amp; Proceed.</span></div>
                           <div class="cat-filter">
                           		<p>Filter&nbsp;:</p>
                                <span class="r">
								
								<?php  echo $this->Form->select('level',$level,['id'=>'level','default'=>'','empty'=>'Level','class'=>'postform','value'=>$level_id ]); ?><?php echo $this->Form->error('level'); ?> 
							
                                <script type="text/javascript">
                                    <!--
                                    var dropdown = document.getElementById("level");
                                    function onCatChange() {
                                       // if ( dropdown.options[dropdown.selectedIndex].value > 0 )
											{
                                            location.href = "<?php echo SITEURL ?>home/course/"+dropdown.options[dropdown.selectedIndex].value;
                                        }
                                    }
                                    dropdown.onchange = onCatChange;
                                    -->
                                </script>
                           		</span>
							</div>
                        </div>
                    	<div class="">
							<div class="course-list full flow">	
                            	<div class="curse-list full flow">
                                	<ul>
						                
                            <!-- .page-header -->
                
                                                            	
                                    		<?php foreach($lession as $key=>$value){  ?>
                                        	<li class="Level3">
                                            	<div class="img-title full flow">
                                                	<div class="img-sec">
												<?php echo $this->Html->image('uploads/2017/01/funny-table.png', array('class'=>'attachment-full size-full wp-post-image','width'=>'212')); ?>	
													
													<!--<img width="212" height="212" src="http://demoitc.com/jains/wp-content/uploads/2017/01/funny-table.png" class="attachment-full size-full wp-post-image" alt="" srcset="http://demoitc.com/jains/wp-content/uploads/2017/01/funny-table.png 212w, http://demoitc.com/jains/wp-content/uploads/2017/01/funny-table-150x150.png 150w" sizes="(max-width: 212px) 100vw, 212px">--></div>
				<div class="title-sec">
					<h4>
						<?php echo $this->Html->link($value['lession_name'],['controller'=>'home','action'=>'lesson',$value['id']],['escape'=>false, 'style'=>'color:#009431']); ?>
					
					<?php //echo $value['lession_name'] ;?></h4>
					<div class="level">
						<ul>
							<li>
						<?php echo $this->Common->getlevel($value['level_id']); ?>                          </li>
						<li></li>
					</ul>
				</div>
			</div>
		</div>
                      <div class="shrt-desc"><p><?php 
													echo ($this->Common->getdetail($value['lession_description']));
													
							
					  
					 // echo substr($value['lession_description'],0,100) ;?></a></p>
</div>
                                      <div class="full-detail">
									  
									  <?php echo $this->Html->link('Details',['controller'=>'home','action'=>'lesson',$value['id']],[ 'escape'=>false]); ?>
									<!--  <a href="http://demoitc.com/jains/2017/02/13/navkaar-mantra-5/">Details</a>--></div>
                                                
                                            </li>
											<?php  } ?>
                                        
                                                                      
                                		
                                        
                                    
                                    
                                		
                                                            </ul>
                        	</div>
                        </div>
						
						    <div class="wug-gallery-pagination " style="display: block;"> <?php echo $this->element(FRONTEND.'paging'); ?></div>                    		
                        
        			</div>
        		</div>
			</div>