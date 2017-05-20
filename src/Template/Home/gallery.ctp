<?php echo $this->element(FRONTEND.'/second_page_header'); ?>
<div class="page-content full flow">
                <div class="container">
				
                    	<div class="bg-container">
						
							<div class="white-bg full flow">
                    			<div class="wug-wrapper" id="wug-wrapper-110">
       <?php 
			$year='';
	   foreach($galleries as $key=>$value){ ?>
	   
	   <?php if($year!=$value['year']) { ?>
		<div style="clear:both"></div>
		<div>
		
		<h3 style="color: #f26f29;padding:20px;"> Student attending session <?php echo $value['year'];
		
		?>  </h3></div>
		<div style="clear:both"></div>
		<?php  } ?>
	   
        <div class="wug-inner wug-per-row-img-3   carousel-nav-deactivated">
		
		
		
		<div id="wug-inner-110">
		
		<div class="single-ug-image-item" style="float:left;">
                        <a class="single-image-item-trigger " href="img/gallery/<?php echo $value['photo']; ?>" data-lightbox="example-set" title="banner14" data-title="Click the right half of the image to move forward.">
						
						<?php $photo ='gallery/'.$value['photo'];
							echo $this->Html->image($photo,['style'=>'display: block; margin: 0;    width: 100%;']);
							?>
						
						<!--<img alt="banner14" src="img/uploads/2017/02/<?php echo $value['photo']; ?>" style="display: block;
    margin: 0;
    width: 100%;">--></a>
                    </div>
					
				</div></div>
	   <?php  $year=$value['year']; } ?>
				<div style="clear:both"></div>
				
				

</div>
<div class="wug-gallery-pagination " style="display: block;"> <?php echo $this->element(FRONTEND.'paging'); ?></div>
                            </div>
						
                            </div>
                     		
                        
        			</div>
        		</div>