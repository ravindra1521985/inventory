<div class="popup-bg"></div>
	<div class="wrapper full flow">
   <?php echo $this->element(FRONTEND.'/slider_home'); ?>
<section>
	<div class="courses-vs-program full flow">
    	<div class="container">
        	<aside class="courses">
            	<h2>Latest Courses</h2>
				
				<?php 
				
				foreach($lession as $key=>$value){  ?>
               	<div class="courses-list">
                	 <div class="c-list Level1">
                        	<div class="c-img"><?php echo $this->Html->image('uploads/2017/01/funny-table.png', array('class'=>'attachment-full size-full wp-post-image','width'=>'212')); ?>	</div>
                            <div class="c-title">
                            	<div class="coursetitle"><?php echo $value['lession_name'] ;?></div>
                                <div class="cat-name">
                                	<ul>
                                    	<li>
                                        	<a href="#/">
												 <?php echo $this->Common->getlevel($value['level_id']); ?>                                           </a>
                                        </li>
                                       <li><a href="#/">5 weeks</a></li>
                                    </ul>
                                </div>
                                <div class="detail"><?php echo $this->Html->link('Details',['controller'=>'home','action'=>'lesson',$value['id']],[ 'escape'=>false]); ?></div>
                            </div>
                        </div>
					                </div>
									
				<?php  } ?>
              
            </aside>
			
			
            <aside class="program">
			
            	<aside id="black-studio-tinymce-3" class="widget-1 widget-first widget-last widget-odd program-section widget widget_black_studio_tinymce"><h2 class="widget-title"><!--Bal Shravak &#8211; Shravika Program--></h2><div class="textwidget"><h2><?php echo $page['heading'];  ?></h2>
<p> <?php echo $page['short_desc']; ?></p>
<ul>
<?php if($page['menu_text1']!='') {?>
<li><?php echo $page['menu_text1']; ?></li>

<?php  } ?>
<?php if($page['menu_text2']!='') {?>
<li><?php echo $page['menu_text2']; ?></li>

<?php  } ?>
<?php if($page['menu_text3']!='') {?>
<li><?php echo $page['menu_text3']; ?></li>
<?php  } ?>
<?php if($page['menu_text4']!='') {?>
<li><?php echo $page['menu_text4']; ?></li>
<?php  } ?>
<?php if($page['menu_text5']!='') {?>
<li><?php echo $page['menu_text5']; ?></li>
<?php  } ?>
</ul>
<p>
<?php 
$photo1 ='uploads/2017/01/learn-more.png';
//Bal Shravak Program

echo $this->Html->link(
    $this->Html->image($photo1), '/bal-shravak-program', array('escape' => false,'class'=>'alignnone size-full wp-image-59', 'width'=>'146','height'=>'16')
);
//echo $this->Html->image($photo1,['class'=>'alignnone size-full wp-image-59', 'width'=>'146','height'=>'16']); ?></p>
 

<!--<p><a href="#/"><img class="alignnone size-full wp-image-59" src="img/uploads/2017/01/learn-more.png" alt="" width="146" height="16" /></a></p>-->
 <div style="float:right;margin-top:-142px;"> <?php $photo ='uploads/2017/02/'.$page['image'];
echo $this->Html->image($photo,['class'=>'attachment-post-thumbnail size-post-thumbnail wp-post-image']); ?></div>

			</div></aside></aside>		
		
			
			<div></div>
			
        </div>
    </div>
</section>
<section>
	<div class="news-vs-gallery full flow">
    	<div class="container">
        	<aside class="news-events">
                <aside id="black-studio-tinymce-4" class="widget-1 widget-first widget-odd home-gallery widget widget_black_studio_tinymce"><h2 class="widget-title">Gallery</h2><div class="textwidget"><h2>Gallery</h2>
<p>Student attending session 2015<br />
<div id="wug-wrapper-78" class="wug-wrapper">
        
       
					
					
					<div style="clear:both"></div><div class="wug-gallery-pagination "></div></div><br />
<!--<a href="http://demoitc.com/jains/gallery/">View all</a>--></p>
</div></aside>
<?php foreach($newsevent as $key1=>$value1){ ?>

<aside id="black-studio-tinymce-5" class="widget-2 widget-last widget-even news-7-events widget widget_black_studio_tinymce"><h2 class="widget-title">News &#038; Events</h2><div class="textwidget"><h2>News &amp; Events</h2>
<p><?php echo $value1['title'];  ?></p>
<p>
<?php echo $this->Html->link('View All','/news-events'); ?>

</p>
</div></aside>                <div class="news-section">
                	                                        	 <div class="news">
                        	<div class="n-thumb"><a href="#">
							
							
							<?php $photo ='uploads/2017/02/'.$value1['photo'];
							echo $this->Html->image($photo,['class'=>'attachment-post-thumbnail size-post-thumbnail wp-post-image']); ?>
							
							
							<!--<img width="192" height="134" src="img/uploads/2017/02/<?php echo $value1['photo'];  ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />--></a></div>
                            <div class="n-s-desc"><?php echo $value1['news_description'];  ?></div>
                        </div>
															
                                    </div>
                	<?php } ?>
            </aside>
            <aside class="gallery">
                <aside id="black-studio-tinymce-4" class="widget-3 widget-odd home-gallery widget widget_black_studio_tinymce"><h2 class="widget-title">Gallery</h2><div class="textwidget"><h2>Gallery</h2>
<p>Student attending session <?php echo $year; ?><br />
<div id="wug-wrapper-78" class="wug-wrapper">
        
        <div class="wug-inner wug-flexible   carousel-nav-deactivated"><div id="wug-inner-78">
				
					
					
					
						
					<?php 
					//print_r($gallery);
					
					
					
					
					
					
					
					foreach($gallery as $key2=>$value2){ 

							//$gphoto ='uploads/2017/02/'.$value2['photo'];
					?>
				
				
				<?php $gphoto ='gallery/'.$value2['photo'];
							//echo $this->Html->image($gphoto,['style'=>'display: block; margin: 0;    width: 100%;']);
							?>
				
				<div class="single-ug-image-item ">
                    <a title="banner2" href="img/<?php echo $gphoto; ?>" class="single-image-item-trigger" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					
					<?php  echo $this->Html->image($gphoto,['class'=>'attachment-post-thumbnail size-post-thumbnail wp-post-image','alt'=>"banner2"]); ?>
					
						<!--<img src="img/uploads/2017/02/<?php echo $value2['photo']; ?>" alt="banner2"/>--></a>
                    </div>
					<?php  } ?>
					
					</div>
					
					</div>
					
					<div style="clear:both"></div><div class="wug-gallery-pagination "></div></div><br />

<?php echo $this->Html->link('View All','/gallery'); ?>

</p>
</div></aside>

<!--<aside id="black-studio-tinymce-5" class="widget-4 widget-even news-7-events widget widget_black_studio_tinymce"><h2 class="widget-title">News &#038; Events</h2><div class="textwidget"><h2>News &amp; Events</h2>
<p>Some of our recent news and events 2016</p>
<p><a href="http://demoitc.com/jains/category/news-events/">View All</a></p>
</div></aside>     -->       </aside>
        </div>
    </div>
</section> 	


	</div>
</main>

