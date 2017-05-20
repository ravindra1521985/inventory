<section id="mainCantt">
  <div class="container">
    <div class="row">
      <?php //echo $this->element(ADMIN.'left_navigation'); ?>  
      <?php if($this->request->session()->read('Auth.User.group')==1 ) { ?> 
    <!--  <div class="col-sm-8 col-md-12" style="margin-left:150px;margin-right:50px;">       
        
		<div class="col-sm-8 col-md-10">        
        
                <div class="row1">           
             
             <div class="businessBox12">
                 <div>
				 
				 <?php 

			$hd = $this->Html->image('AdminDasboradzIcon/Total-End---Consumers-added.png',array('class'=>'img-responsive1 mrgleft2'));
echo $this->Html->link($hd,array('controller'=>'users', 'action'=>'member'), array('escape'=>false));


				// echo $this->Html->image('AdminDasboradzIcon/Total-End---Consumers-added.png',['class'=>'img-responsive1 mrgleft2']); ?>
				 
                 
                 </div>
                 <div class="dashbox-data">
                   <?php echo $student; ?>              </div>                 
               <div>
               Student
               </div>
             </div> 
			   <div class="businessBox12">
                 <div>
				 
				 <?php 

$hd = $this->Html->image('AdminDasboradzIcon/teacher.png',array('class'=>'img-responsive1 mrgleft2','width'=>'79'));
echo $this->Html->link($hd,array('controller'=>'users', 'action'=>'teacher'), array('escape'=>false));
				 //echo $this->Html->image('AdminDasboradzIcon/Total-End---Consumers-added.png',['class'=>'img-responsive1 mrgleft2']); ?>
				 
                 
                 </div>
                 <div class="dashbox-data">
                   <?php echo $teacher; ?>              </div>                 
               <div>
               Teacher
               </div>
             </div>
			   <div class="businessBox12">
                 <div>
				 
				 <?php 

				
$hd = $this->Html->image('AdminDasboradzIcon/teacher.png',array('class'=>'img-responsive1 mrgleft2','width'=>'79'));
echo $this->Html->link($hd,array('controller'=>'users', 'action'=>'volunteer'), array('escape'=>false));

				// echo $this->Html->image('AdminDasboradzIcon/Total-End---Consumers-added.png',['class'=>'img-responsive1 mrgleft2']); ?>
				 
                 
                 </div>
                 <div class="dashbox-data">
                   <?php echo $volt; ?>              </div>                 
               <div>
               Volunteer
               </div>
             </div>
			 
			  <div class="businessBox12">
                 <div>
				 
				 <?php 
				 		
$hd = $this->Html->image('AdminDasboradzIcon/Total-Membership-Plans.png',array('class'=>'img-responsive1 mrgleft2'));
echo $this->Html->link($hd,array('controller'=>'questions', 'action'=>'index'), array('escape'=>false));?>
				 
                 
                 </div>
                 <div class="dashbox-data">
                   <?php echo $question; ?>              </div>                 
               <div>
               Total Question
               </div>
             </div>
			 
			  <div class="businessBox12">
                 <div>
				 
				 <?php 

				 echo $this->Html->image('AdminDasboradzIcon/Total-End---Consumers-added.png',['class'=>'img-responsive1 mrgleft2']); ?>
				 
                 
                 </div>
                 <div class="dashbox-data">
                   <?php echo $takentest; ?>              </div>                 
               <div>
              Tests taken
               </div>
             </div>
			 
			 <div class="businessBox12">
                 <div>
				 
				 <?php 

				 echo $this->Html->image('AdminDasboradzIcon/girl.png',['class'=>'img-responsive1 mrgleft2','width'=>'79']); ?>
				 
                 
                 </div>
                 <div class="dashbox-data">
                   <?php echo $balika; ?>              </div>                 
               <div>
              Total Bal Shravika 
               </div>
             </div>
			 
			  <div class="businessBox12">
                 <div>
				 
				 <?php 

				 echo $this->Html->image('AdminDasboradzIcon/Total-End---Consumers-added.png',['class'=>'img-responsive1 mrgleft2']); ?>
				 
                 
                 </div>
                 <div class="dashbox-data">
                   <?php echo $bal; ?>              </div>                 
               <div>
              Total Bal Shravak 
               </div>
             </div>
			 
			 
			 
			  <div class="businessBox12">
                 <div>
				 
				  <?php 

				  
				  $hd1 = $this->Html->image('AdminDasboradzIcon/total-centers-signed-up.png',array('class'=>'img-responsive1 mrgleft2'));
echo $this->Html->link($hd1,array('controller'=>'course', 'action'=>'level'), array('escape'=>false));?>


				
                  
                 </div>
                 <div class="dashbox-data">
                    <?php echo $totallevel; ?>                </div>                 
               <div>
               Level
               </div>
             </div> 
			  <div class="businessBox12">
                 <div>
 <?php  
   $hd1 = $this->Html->image('AdminDasboradzIcon/course.png',array('class'=>'img-responsive1 mrgleft2','width'=>'79'));
echo $this->Html->link($hd1,array('controller'=>'course', 'action'=>'index'), array('escape'=>false));?>
 
				 
                
                 <div class="dashbox-data">
                    <?php echo $totalcourse; ?>                 </div>                 
               <div>
               Course
               </div>
             </div> 
			  <div class="businessBox12">
                 <div>
				  
				  
				                  <div>
 <?php  
   $hd1 = $this->Html->image('AdminDasboradzIcon/Total-Membership-Plans.png',array('class'=>'img-responsive1 mrgleft2'));
echo $this->Html->link($hd1,array('controller'=>'course', 'action'=>'lession'), array('escape'=>false));?>
				  
				  
			
                 </div>
                 <div class="dashbox-data">
                    <?php echo $totallession; ?>                 </div>                 
               <div>
               Lesson
               </div>
             </div> 
                           
            
        </div>-->
        
        
    </div>
        
    </div>
	  <?php }else { echo "Coming Soon"; } ?>
  </div>
</section>