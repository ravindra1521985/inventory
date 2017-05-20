<?php echo $this->element(FRONTEND.'/second_page_header'); ?>
<div class="container">
                    	<div class="bg-container">
                        	<div class="post-detail full flow">
																
																<?php foreach($lession as $key=>$value) {  ?>
																<div class="post-bg full flow">
                                    	<div class="detail-container">
                                        	<div class="course-details" style="min-height:400px">								
											
                                            	 <div class="detail-top full flow">
                                                	<div class="post-img">
													
													<?php echo $this->Html->image('uploads/2017/01/funny-table.png', array('class'=>'attachment-full size-full wp-post-image','width'=>'212')); ?>	
													
													<!--<img width="212" height="212" src="http://demoitc.com/jains/wp-content/uploads/2017/01/funny-table.png" class="attachment-full size-full wp-post-image" alt="" srcset="http://demoitc.com/jains/wp-content/uploads/2017/01/funny-table.png 212w, http://demoitc.com/jains/wp-content/uploads/2017/01/funny-table-150x150.png 150w" sizes="(max-width: 212px) 100vw, 212px">--></div>
                                                    <div class="post-title-subtitle">
                                                    	<div class="p-title Level1"><?php echo $value['lession_name'] ;?></div>
                                                        <div class="p-subtitle"></div>
                                                        <div class="p-excerpt"><p><?php echo $value['lession_description'] ;?></p>
</div>
                                                    </div>
                                                </div>
                                               <!-- <div class="detail-bottom full flow">
                                                	<h3>What you’ll learn</h3>
<ul>
<li>Sed ut perspiciatis unde omnis iste natus error</li>
<li>Sit voluptatem accusantium doloremque laudantium</li>
<li>Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis</li>
<li>Et quasi architecto beatae vitae dicta sunt explicabo.</li>
<li>Nemo enim ipsam voluptatem quia voluptas sit aspernatur</li>
<li>Aut odit aut fugit, sed quia consequuntur magni dolores eos quia dolor</li>
</ul>
                                                </div>-->
                                            </div>
                                            <div class="course-parameters">
                                            	<ul>
                                                	<!--<li class="lnth">
                                                    	<label>Length :</label>
                                                        <div class="para-value"><?php echo $value['length'] ;?></div>
                                                    </li>
                                                    <li class="efrt">
                                                    	<label>Effort :</label>
                                                        <div class="para-value"><?php echo $value['effort'] ;?></div>
                                                    </li>
                                                    <li class="prc">
                                                    	<label>Price :</label>
                                                        <div class="para-value"><?php echo $value['price'] ;?></div>
                                                    </li>
                                                    <li class="sbt">
                                                    	<label>Subject :</label>
                                                        <div class="para-value"><?php echo $value['subject'] ;?></div>
                                                    </li>
                                                    <li class="lvl" style="border-bottom:0px;">
                                                    	<label>Level :</label>
                                                        <div class="para-value"><?php echo $this->Common->getlevel($value['level_id']); ?></div>
                                                    </li>-->
                                                    <li class="para-buttons">
                                                        <div class="para-values"><ul>
														<?php if($this->request->session()->read('Auth.User.id')!="") { ?>
<li style="text-align: left;"><a href="<?php if($value['book']){ echo SITEURL.'img/book/'.$value['book'];} else { echo "#";} ?>">Download Books</a></li>

<?php  } else { ?>
<li style="text-align: left;"><a href="#" onclick='return checklevel();'>Download Books</a></li>

<?php  } ?>


<li>
		<?php 
			//	print_r($this->request->session()->read('Auth.User'));
		
		     $userid=$this->request->session()->read('Auth.User.id');
			 $type=$this->request->session()->read('Auth.User.type');
		echo	 $this->Form->hidden('user_id', array('maxlength'=>100,'id'=>'user_id','value'=>$userid));
		echo 	$this->Form->hidden('type', array('maxlength'=>100,'id'=>'type','value'=>$type));			 
		echo    $this->Form->hidden('level_id', array('maxlength'=>100,'id'=>'level_id','value'=>$value['level_id'])); 
			echo    $this->Form->hidden('lession_id', array('maxlength'=>100,'id'=>'lession_id','value'=>$value['id'])); 
						
		//echo $this->Html->link('Take a Test',['controller'=>'question', 'action'=>'test',$value['id'],'onclick'=>'return checklevel();']); ?>
			
		<!--<span id="myBtn" class="teaketest" onclick='return checklevel();'> Take a Test<!-- <a href="#" return ="false" title="coming soon" ></a> </span>-->
		
	<a href="#"  title="coming soon"  onclick='return checklevel();' >Take a Test</a>
	 
	 <!--<button id="myBtn" class="teaketest" onclick='return checklevel();'>Take a Test</button>-->
	 
		</li>
</ul>
</div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
																<?php  } ?>
                                    <div class="bck-pge">
									
									 <?php echo $this->Html->link('Go Back to Courses',['controller'=>'home','action'=>'course'],[ 'escape'=>false]); ?>
									
									</div>
                                
                                
                                
								
                    			
	                           </div>
        				</div>
        			</div>
					
					
		
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-contenta" style="width:30%!important;" >
  <span class="close"></span>
  <div class="container1">
                    	
                    		<div style="margin:100px 80px 100px 90px;" id="forlogin">
<?php
				if($type !='student' && isset($type)){
					
					//echo "You Are Not a Student";
					//echo "<br>";
					//echo "<br>";
					?>
			<div class="register-form-area active">
				<br>
				<br>
	<h6 style="font-size:18px;">You Are Not a Student Please Logout</h6>
	  
	 <div class="proceed" style="text-align: center;">
   			
			 <?php echo  $this->Form->create(null, ['url' => ['controller' => 'users', 'action' => 'logout'],'type' => 'file','id'=>'registration','class'=>'radio-form']);  ?>
			<button>
			<?php echo $this->Html->image('uploads/2017/01/btn-arr.png', array('class'=>'alignnone size-full wp-image-213 button','width'=>'114')); ?>
</button>
</form>
			<!--<img width="114" alt="" class="alignnone size-full wp-image-213" src="/jain/img/uploads/2017/01/btn-arr.png">    -->           <!-- <img class="alignnone size-full wp-image-43" src="img/uploads/2017/01/btn-arr.png" alt="" width="114" height="17" />-->
           
        </div>
  
</div>
					
				
					
					<?php  //echo $this->Html->link('Logout ',['controller'=>'users','action'=>'logout'],[ 'escape'=>false,'class'=>'teaketest']);
					 
					 
					 
				}else {?>
							
				<div class="register-form-area active">
				<br>
				<br>
	<h6 style="font-size:18px;">Proceed to Registration and Login</h6>
	  <?php echo  $this->Form->create(null, ['url' => ['controller' => 'Home', 'action' => 'loginRegistration'],'type' => 'file','id'=>'registration','class'=>'radio-form']);  ?>
	
        <div class="proceed" style="text-align: center;">
				    <?php echo $this->Form->hidden('regis', array('maxlength'=>100,'id'=>'regis','value'=>'student')); ?>
            <button>
			
			<?php echo $this->Html->image('uploads/2017/01/btn-arr.png', array('class'=>'alignnone size-full wp-image-213','width'=>'114')); ?>
			
            </button>
        </div>
    </form>
</div>
				
 <?php //echo $this->Html->link('Login Or Registration ',['controller'=>'home','action'=>'loginRegistration'],[ 'escape'=>false,'class'=>'teaketest']);
				} ?>
							
                        </div>
						
					<div class="register-form-area active" style="display:none;font-size:30px;color:white;font-weight:bold;text-align:center;" id="forlevel">
	You need to clear level :- <span id="ln"></span> before proceeding  to heigher level <br>					
<div class="proceed" style="text-align: center;">
   			
			 <?php echo  $this->Form->create(null, ['url' => ['controller' => 'Home', 'action' => 'course'],'type' => 'file','id'=>'course','class'=>'radio-form']);  ?>
			<button>
			<?php echo $this->Html->image('uploads/2017/01/btn-arr.png', array('class'=>'alignnone size-full wp-image-213 button','width'=>'114')); ?>
</button>
</form>
					 
	</div>
					

</div>	
</div>	
</div>		
					
					
					
	


		