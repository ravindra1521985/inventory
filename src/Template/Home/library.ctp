<?php echo $this->element(FRONTEND.'/second_page_header'); ?>
<div class="page-content full flow">
                	<div class="container">
                		
						
						<?php   ?>
                    	<div class="bg-container">	
                            	<div class="library_list full flow">

						<?php $year=""; ?>
					<?php  foreach($Library as $key=>$value){ 
					
						
					?>
					
					<?php  if($year != $value['year']){  ?>
					<div class="lib-title" style="color:black;"> Books for Jain Sanskar Shivir <?php  echo $value['year']; ?></div>
					<?php  
					$year=$value['year'];
					} ?>


								<div class="library-list">
                                    	<div class="lib-title"><?php echo $value['name']; ?></div>
                                        <div class="lib-cvr">
                                            <div class="lib-read"></div>
                                            <div class="lib-dwn-read"><p><!--<a href="<?php echo SITEURL;  ?>/img/library/<?php echo $value['library_file']; ?>">Download</a>-->
											
			<a href="<?php echo SITEURL;  ?>img/library/<?php echo $value['library_file']; ?>" download ="<?php echo $value['library_file']; ?>" >Download</a>
											
											
											
											
											</p>
</div>   


                                        </div>
                                    </div>	
									
					<?php  }  ?>
                                    </div>	
                                								</div>
                        </div>
						
						                        		
                        
        			</div>
				</div>