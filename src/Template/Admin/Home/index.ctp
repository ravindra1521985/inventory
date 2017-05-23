<section id="mainCantt">
  <div class="container">
    <div class="row">
      <?php //echo $this->element(ADMIN.'left_navigation'); ?>  
      <?php if($this->request->session()->read('Auth.User.group')==1 ) { ?> 
     <div class="col-sm-8 col-md-12" style="margin-left:150px;margin-right:50px;">       
        
		<div class="col-sm-8 col-md-10">        
        
                <div class="row1">           
             
             <div class="businessBox12">
                 <div>
				 
				 <?php 

			$hd = $this->Html->image('product.png',array('class'=>'img-responsive1 mrgleft2'));
echo $this->Html->link($hd,array('controller'=>'items', 'action'=>'list'), array('escape'=>false));


				// echo $this->Html->image('AdminDasboradzIcon/Total-End---Consumers-added.png',['class'=>'img-responsive1 mrgleft2']); ?>
				 
                 
                 </div>
                 <div class="dashbox-data">
                   <?php echo $item; ?>              </div>                 
               <div>
               Item
               </div>
             </div> 
			   <div class="businessBox12">
                 <div>
				 
				 <?php 

$hd = $this->Html->image('customer.png',array('class'=>'img-responsive1 mrgleft2'));
echo $this->Html->link($hd,array('controller'=>'customer', 'action'=>'list'), array('escape'=>false));
				 //echo $this->Html->image('AdminDasboradzIcon/Total-End---Consumers-added.png',['class'=>'img-responsive1 mrgleft2']); ?>
				 
                 
                 </div>
                 <div class="dashbox-data">
                   <?php echo $customer; ?>              </div>                 
               <div>
               Customer
               </div>
             </div>
			  
        
    </div>
        
    </div>
	  <?php }else { echo "Coming Soon"; } ?>
  </div>
</section>