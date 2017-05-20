<?php echo $this->element(FRONTEND.'/second_page_header'); ?>
<div class="page-content full flow">
                <div class="container">
				<?php  foreach($newsevent as $key=>$value){ ?>
                    	<div class="bg-container">
						
							<div class="white-bg full flow">
                    			<div class="news-&amp;-events full flow">
							         <div class="news-list full flow">
                                        	<div class="news-thumb">
											<?php 	$photo ='uploads/2017/02/'.$value['photo'];
							echo $this->Html->image($photo,['class'=>'attachment-full size-full wp-post-image']); ?>
                                   </div>
                                            <div class="news-details">
                                            	<div class="headline">
												<?php echo $this->Html->link($value['title'],['controller'=>'home','action'=>'newsdetail',$value['id']],[ 'escape'=>false,'style'=>'color:#f26f29;']); ?>
												
												<?php //echo $value['title']; ?></div>
                                                <div class="news-date"><?php echo date('M-d-Y', strtotime($value['date'])); ?></div>
                                                <div class="news-shrt-desc"><?php echo $this->Common->getdetail($value['news_description']); ?> <span>											  
									  <?php echo $this->Html->link('Read More',['controller'=>'home','action'=>'newsdetail',$value['id']],[ 'escape'=>false]); ?>
												
												</span></div>
                                            </div>
                                        </div>
                                									
                                                            
                            
                            </div>
                            </div>
						
                            </div>
							<?php  } ?>
	<!--<nav role="navigation" class="navigation pagination">
		<h2 class="screen-reader-text">Posts navigation</h2>
		<div class="nav-links"><span class="page-numbers current"><span class="meta-nav screen-reader-text">Page </span>1</span>
<a href="http://demoitc.com/jains/category/news-events/page/2/" class="page-numbers"><span class="meta-nav screen-reader-text">Page </span>2</a>
<a href="http://demoitc.com/jains/category/news-events/page/2/" class="next page-numbers">Next page</a></div>
	</nav>  -->                      		
                        
        			</div>
        		</div>