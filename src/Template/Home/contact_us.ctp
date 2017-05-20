<?php echo $this->element(FRONTEND.'/second_page_header'); ?>
<div class="page-content full flow">
                	<div class="container">
                    	<div class="bg-container">
							<div class="white-bg full flow">
                            	<div class="contact-brand">
                                	<div class="addess-info">
                                    	<aside id="black-studio-tinymce-14" class="widget-1 widget-first widget-odd contact-address widget widget_black_studio_tinymce"><h2 class="widget-title">Contact Us Address</h2><div class="textwidget"><h3><span style="color: #000000;">Contact Us :</span></h3>
<p>Jain Sanskar Shivir Samiti 212,<br>
Veer Apartments, Sec-13,<br>
Rohini - Delhi 110085<br>
<strong>Phone:</strong> +91-9810287446<br>
<strong>Email:</strong> jshivir@gmail.com</p>
</div></aside><aside id="black-studio-tinymce-15" class="widget-2 widget-last widget-even address-map widget widget_black_studio_tinymce"><h2 class="widget-title">Address Map</h2><div class="textwidget"><h3><span style="color: #000000;">Locate Us :</span></h3>
<p>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3498.890579612973!2d77.12264391468263!3d28.72281588238233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0142053b71bb%3A0x3ac6ac47d7e7f0d8!2s28%2C+Rajapur%2C+Pocket+28%2C+Sector+13%2C+Rohini%2C+Delhi%2C+110085!5e0!3m2!1sen!2sin!4v1492511851716" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<!--<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyD26gPB94XyQYpVFiUcTptm9AQmqbVWlzQ'></script><div style='overflow:hidden;height:242px;width:531px;'><div id='gmap_canvas' style='height:242px;width:531px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://indiatvnow.com/'>IndiaTVnow.com</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=5afd4ba7d67a38e9fbd0c947bd90e8e27698a40e'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(28.4667,77.03330000000005),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(28.4667,77.03330000000005)});infowindow = new google.maps.InfoWindow({content:'<strong>JAIN</strong><br>Jain Sanskar Shivir Samiti 212, Veer Apartments, Sec-13, Rohini - Delhi 110085<br>110085 Delhi<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>-->

<?php //echo $this->Html->image('uploads/2017/02/map.jpg',['class'=>'img-responsive','width'=>'142']) ?>
<!--<img class="alignnone size-full wp-image-224" src="http://demoitc.com/jains/wp-content/uploads/2017/02/map.jpg" alt="" width="531" height="142">-->


</p>
</div></aside>                                    </div>
                                    <div class="more-info">
                                    	<h3>Ask for More Information :</h3>
										<?php  echo $this->element(Frontend.'/session_flash_b'); ?>
										<br>
										 
                                    	<div role="form" class="wpcf7" id="wpcf7-f42-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"> </div>

 <?php echo  $this->Form->create($contactUs, ['url' => ['controller' => 'Home', 'action' => 'contactUs'],'id'=>'contactUs']);  ?>

<div class="form-format">
<ul>
<li>
       <label>First Name</label><br>
                <span class="wpcf7-form-control-wrap Name">
				
				 <?php echo $this->Form->text('name', array('maxlength'=>50,'placeholder'=>'First Name','id'=>'name','class'=>"wpcf7-form-control wpcf7-text wpcf7-validates-as-required")); ?>
                   <?php echo $this->Form->error('contact_name'); ?>
				<!--<input type="text" name="Name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">--></span>
        </li>
<li>
        	<label>Phone no.</label><br>
                <span class="wpcf7-form-control-wrap tel-486"><?php echo $this->Form->text('phone', array('maxlength'=>10,'placeholder'=>'Phone No.','id'=>'phone','class'=>"wpcf7-form-control wpcf7-text wpcf7-validates-as-required" ,'onkeypress'=>'return onlyint(event)')); ?>
                   <?php echo $this->Form->error('phone'); ?></span>
        </li>
<li>
        	<label>Email Address</label><br>
                <span class="wpcf7-form-control-wrap email"><?php echo $this->Form->text('email', array('maxlength'=>50,'placeholder'=>'Email Address','id'=>'email','class'=>"wpcf7-form-control wpcf7-text wpcf7-validates-as-required")); ?>
                   </span><?php echo $this->Form->error('email'); ?>
        </li>
<li>
        	<label>Message :</label><br>
                <span class="wpcf7-form-control-wrap message"><?php  echo $this->Form->input('message', array('type' => 'textarea','id'=>'message','label' => false,'placeholder'=>'Message')); ?>
                <?php echo $this->Form->error('message'); ?></span>
        </li>
<li class="sbmt">
					 <?php echo $this->Form->submit('submit',array('type'=>'submit','class'=>'wpcf7-form-control wpcf7-submit','value'=>'submit','onclick'=>'return contact_validation();')); ?>

               <!-- <input type="submit" value="submit" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader">--></span>
        </li>
</ul>
</div>
<div class="wpcf7-response-output wpcf7-display-none"></div>  

<?php echo $this->Form->end(); ?>
</div>                                    </div>
                                </div>
                            </div>
                    	</div>
                   </div>
				</div>