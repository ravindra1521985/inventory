<?php echo $this->element(FRONTEND.'/second_page_header'); ?>
<div class="page-content full flow">
                	<div class="container">
                    	<div class="bg-container">
							<div class="white-bg full flow">
					           <?php 
							   
							 //  print_r($pages);
							  // foreach($pages as $key=>$value)
							   { ?>            
                       	<h3><span style="color: #f26f29;">
					
						<?php  echo Ucfirst($pages['heading']); ?></span></h3>
<!--<p>Jain Sanskar Shivirs are organized in associations with local jain shabhas by Jain Sanskar Shivir Samiti which is an institution dedicated to the preservation and promotion of religious principles propounded by 24th Jain Tirthankar Bhagwan Mahavir Swami. Our aim is to translate</p>-->
<p>
<?php  echo $this->Html->image('uploads/2017/02/'. $pages['image'],['class'=>'alignnone wp-image-215 size-full', 'style'=>'
    float: right;
    height: 332px;
    margin: 13px 0 0 20px;
    width: 600px;','alt'=>"banner2"]); ?>

</p>
<?php echo $pages['page_description']; ?>
<!-- <p>ancient Jain rituals into modern lifestyle practices and help the modern generation understand the scientific perspective of Jain tenets.</p>
<h3><span style="color: #f26f29;">Our Mission</span></h3>
<p>We believe that the survival of a society hinges on the spiritual alignment of its young generation. We want each child of our society to live a life as suggested by Jain Aagams. We want to spread the awareness about spiritual aspects of Jain Religion so that more and more students align their choices and priorities to the teachings of Lord Mahavir.</p>
<h3><span style="color: #f26f29;">Our Goal</span></h3>
<p>We want to spread the messages of Lord Mahavir to each and every Jain child irrespective of the community affiliations.</p>-->
                                                                  		</div>
                    	</div>
					<?php } ?>
                   </div>
				</div>