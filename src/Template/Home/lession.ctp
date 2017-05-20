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
                                                	<li class="lnth">
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
                                                    </li>
                                                    <li class="para-buttons">
                                                        <div class="para-values"><ul>
<li style="text-align: left;"><a href="<?php if($value['book']){ echo SITEURL.'img/book/'.$value['book'];} else { echo "#";} ?>">Download Books</a></li>
<li>
		<?php 
				//print_r($this->request->session()->read('Auth.User'));
		
		     $userid=$this->request->session()->read('Auth.User.id');
			 $type=$this->request->session()->read('Auth.User.type');
		echo	 $this->Form->hidden('user_id', array('maxlength'=>100,'id'=>'user_id', 'value'=>$userid));
		echo 	$this->Form->hidden('type', array('maxlength'=>100,'id'=>'type', 'value'=>$type));			 
		echo    $this->Form->hidden('level_id', array('maxlength'=>100,'id'=>'level_id','value'=>$value['level_id'])); 
						
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
  <div class="modal-content" style="width:30%!important;" >
    <span class="close">&times;</span>
  <div class="container1">
                    	
                    		<div style="margin:100px 80px 100px 90px;" id="forlogin">
<?php
				if($type !='student' && isset($type)){
					
					echo "You Are Not a Student";
					echo "<br>";
					
					 echo $this->Html->link('Logout ',['controller'=>'users','action'=>'logout'],[ 'escape'=>false,'class'=>'teaketest']);
					 
					 
					 
				}else{

 echo $this->Html->link('Login Or Registration ',['controller'=>'home','action'=>'loginRegistration'],[ 'escape'=>false,'class'=>'teaketest']);
				} ?>
							
							
                        	
                        </div>
						
				<div style="margin:100px 80px 100px 90px;" id="forlevel">
						ffdgg
						
						
                    </div>
					

</div>				
					
					
					
		
<script>

function checklevel(){
	//alert();
var userid='';
var levelid='';	
var type ='';
userid =$('#user_id').val();
levelid =$('#level_id').val();
type  =$('#type').val();

alert(userid);

if(userid == ''){

loadmodule();

}else if(userid !='' && type != 'student'){
loadmodule();
	
}else{
	
	
	alert();
	
	
           $.ajax({
                url:siteUrl+"/ajax/checkuserlevel/"+userid+"/"+levelid,
                type:"GET",
                dataType: 'json',
                success: function(data){
                    if(data.status == 'success')
                    {
                       // window.location.href = siteUrl+'home/business-signup';
                    }
                    else
                    {
						
				$("#forlogin").css("display", "none");
				$("#forlevel").css("display", "block");
				
					window.location.href = siteUrl+'question/business-signup';		
                      // loadmodule();
                    }
                }
            });
      
	
	
	
	
	
}



}

function loadmodule(){
	
	// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
/*btn.onclick = function() {
    modal.style.display = "block";
}*/
 modal.style.display = "block";

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
}
</script>


		