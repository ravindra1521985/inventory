<div class="container paddLeftRightNone">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="row">
          <div class="col-xs-10 col-sm-11 col-md-11 paddRightNone">
            <div class="page-header">
                <?php if($routing_prefix === 'admin' && $controller === 'home'){ ?>
                    <?php //echo $this->Html->image(ADMIN.'profile-management-icon.jpg',['class'=>'pull-left']); ?>
                    <h1 class="headText">Home</h1>
                <?php } ?>
				  <?php if($routing_prefix === 'admin' && $controller === 'items'){ ?>
                    <?php //echo $this->Html->image(ADMIN.'profile-management-icon.jpg',['class'=>'pull-left']); ?>
                    <h1 class="headText">Item Management</h1>
                <?php } ?>
				
				<?php if($routing_prefix === 'admin' && $controller === 'users'){ ?>
                    <?php //echo $this->Html->image(ADMIN.'profile-management-icon.jpg',['class'=>'pull-left']); ?>
                    <h1 class="headText">Member Management</h1>
                <?php } ?>
			
        <?php if($routing_prefix === 'admin' && $controller === 'customer'){ ?>
                    <?php //echo $this->Html->image(ADMIN.'profile-management-icon.jpg',['class'=>'pull-left']); ?>
                    <h1 class="headText">Customer Management</h1>
                <?php } ?>


        <?php if($routing_prefix === 'admin' && $controller === 'invoice'){ ?>
                    <?php //echo $this->Html->image(ADMIN.'profile-management-icon.jpg',['class'=>'pull-left']); ?>
                    <h1 class="headText">Order Management</h1>
                <?php } ?>
      
      
			
    
            </div>
                
          </div>  



          <div class="col-xs-2 col-sm-1 col-md-1 pull-right paddLeftNone text-right">
            <div class="back"><div class="make-button"><a href="#" onclick="goback()">Back</a></div></div>
          </div>
        </div>
      </div>
    </div>   
</div>
