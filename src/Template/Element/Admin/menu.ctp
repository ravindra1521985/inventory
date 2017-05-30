<header>
  <div class="container paddLeftRightNone">
    <div class="topHeader" style="display:block">
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-8 ">
            <div class="logo"><?php  // echo $this->Html->link($this->Html->image(ADMIN_LOGO,['class'=>'img-responsive']),['controller'=>'home','action'=>'index'],['admin'=>true, 'escape'=>false]); 

            //echo $this->Html->link($this->Html->image(ADMIN.'admin-logo.png',['class'=>'img-responsive']),['controller'=>'home','action'=>'index'],['admin'=>true, 'escape'=>false]); ?>
              <?php //echo $this->Html->link('98  Fit Admin',['controller'=>'home','action'=>'index'],['admin'=>true, 'escape'=>false]); ?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <div class="row">
            <div class="col-xs-8 col-sm-8 col-md-8 borderRight">
              <div class="welcomSec">
                <div class="welcomUser dropdown text-right"><span><i class="fa fa-user colorBlue"></i> </span>Welcome <a  href="#"><?php echo $this->request->session()->read('Auth.User.first_name'); ?></a>
                  <div class="dropdown-menu ac-setting" role="menu" aria-labelledby="dLabel">
                    <div class="arrow"><?php echo $this->Html->image(ADMIN.'dropdown-arrow.png',['class'=>'']); ?></div>
                    <div class="textDiv"><a href="#">Accout Setting</a></div>
                  </div>
                </div>
                  <?php
                $data=$this->Common->getuserlog('admin',$this->request->session()->read('Auth.User.id'))
                  ?>
               <div class="lastVisit text-right">Last Visited on <?php echo $data['date']; ?> at <?php echo $data['time']; ?></div>
              </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
              <div class="logout"><?php echo $this->Html->link('<span><i class="fa fa-power-off"></i> </span>Logout',['controller'=>'users','action'=>'logout'],['admin'=>false,'escape'=>false]); ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="calbtn"><span class="glyphicon glyphicon-chevron-down leftMarNone "></span></div>
  </div>
  <div class="container paddLeftRightNone">
    <div class="row">
      <div class=" col-sm-12 col-md-12">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                  <?php if($routing_prefix === 'admin' && ($controller === 'home' || $controller === 'businessequipmentlist' || $controller === 'businesstypemaster' || $controller === 'businessaccount' || $controller === 'subscriptionplan' || $controller === 'memplanmaster' || $controller === 'adminusergroup' || $controller === 'loginadmin')){ $active='active1';}else { $active=''; } ?>
                <li class="dropdown <?php echo $active; ?>"> <a href="<?php echo $this->Url->build(array('controller'=>'home','action'=>'index')); ?>"  role="button" aria-haspopup="true" aria-expanded="false">Home </a>
                   </li>
				
			
                <?php if($routing_prefix === 'admin' && $controller === 'items'){ $active='active1';}else { $active=''; } ?>

                  <?php   if($this->request->session()->read('Auth.User.grouptype')==1) { ?>
                <li class="dropdown <?php echo $active; ?>" > <a href="<?php //echo $this->Url->build(array('controller'=>'ServiceSetting','action'=>'index')); ?>" class="dropdown-toggle" data-toggle="dropdown1" role="button" aria-haspopup="true" aria-expanded="false">Item management</a>
                    <ul class="dropdown-menu">
            <?php   if($this->request->session()->read('Auth.User.grouptype')==1) { ?> 
				   <li><a href="<?php echo $this->Url->build(array('controller'=>'items','action'=>'viewlist')); ?>"> Item List</a></li>
            
				 <?php  } ?>		
                  </ul>
                </li>
                 <?php  } ?>
                <?php if($routing_prefix === 'admin' && $controller === 'customer'){ $active='active1';}else { $active=''; } ?>
                  <?php   if($this->request->session()->read('Auth.User.grouptype')==1) { ?>
                <li class="dropdown <?php echo $active; ?>" > <a href="<?php //echo $this->Url->build(array('controller'=>'ServiceSetting','action'=>'index')); ?>" class="dropdown-toggle" data-toggle="dropdown1" role="button" aria-haspopup="true" aria-expanded="false">Customer management</a>
                    <ul class="dropdown-menu">
           
           <li><a href="<?php echo $this->Url->build(array('controller'=>'customer','action'=>'viewlist')); ?>"> Customer List</a></li>
         <li><a href="<?php echo $this->Url->build(array('controller'=>'customer','action'=>'viewuser')); ?>"> User List</a></li>
                        
                  </ul>
                </li>
                <?php  } ?> 
                 <?php if($routing_prefix === 'admin' && $controller === 'invoice'){ $active='active1';}else { $active=''; } ?>
                <li class="dropdown <?php echo $active; ?>" > <a href="<?php //echo $this->Url->build(array('controller'=>'ServiceSetting','action'=>'index')); ?>" class="dropdown-toggle" data-toggle="dropdown1" role="button" aria-haspopup="true" aria-expanded="false">Invoice management</a>
                    <ul class="dropdown-menu">
            <?php   if($this->request->session()->read('Auth.User.grouptype')==1 || $this->request->session()->read('Auth.User.grouptype')==2) { ?> 
           <li><a href="<?php echo $this->Url->build(array('controller'=>'invoice','action'=>'viewlist')); ?>"> invoice List</a></li>

            <li><a href="<?php echo $this->Url->build(array('controller'=>'invoice','action'=>'pettylist')); ?>">Petty Spent List </a></li>
            
         <?php  } ?>    
                  </ul>
                </li>


             
              </ul>
            </div>
            <!-- /.navbar-collapse -->
          </div>
          <!-- /.container-fluid -->
        </nav>
      </div>
    </div>
  </div>
</header>