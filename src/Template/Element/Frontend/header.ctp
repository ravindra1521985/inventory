<header>
        	<div class="login-bar">
			<?php  echo $this->Html->link($this->Html->image('top-bar.jpg'),['controller'=>'home','action'=>'index'],['admin'=>true, 'escape'=>false]); 
			
			
			?>
              <!--  <img src="/img/top-bar.jpg" />-->
                <div class="stip-cver full flow">
                    <div class="open-stip">
                    	<div class="cont"><aside id="black-studio-tinymce-6" class="widget-1 widget-first widget-odd phne-email widget widget_black_studio_tinymce"><h2 class="widget-title">Phone and Email</h2><div class="textwidget"><ul>
<li> 9810287446</li>
<li><a href="mailto:jshivir@gmail.com">
	
	<?php echo $this->Html->image('uploads/2017/02/email.png', array('height'=>'10' ,'width'=>'10','class'=>'alignnone size-full wp-image-263')); ?></a>
</li>
</ul>
</div></aside><aside id="nav_menu-3" class="widget-2 widget-even tp-br-menu widget widget_nav_menu"><h2 class="widget-title">Top Menu</h2><div class="menu-top-bar-menu-container"><ul id="menu-top-bar-menu" class="menu"><li id="menu-item-264" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-264">
<?php echo $this->Html->link('Library','/library'); ?>

<!--<a href="http://demoitc.com/jains/category/library/">Library</a>--></li>
<li id="menu-item-130" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-130">
<?php //echo $this->Html->link('Gallery',['controller'=>'home','action'=>'gallery'],[ 'escape'=>false]); ?>
<?php echo $this->Html->link('Gallery','/gallery'); ?>
<!--<a href="http://demoitc.com/jains/gallery/">Gallery</a>--></li>
<li id="menu-item-226" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-226"><?php echo $this->Html->link('News & Event','/news-events'); ?></li>
<li id="menu-item-112" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-112"><?php echo $this->Html->link('Contact','/contact-us'); ?></li>
</ul></div></aside>

<aside id="black-studio-tinymce-7" class="widget-3 widget-last widget-odd l-r<?php if($this->request->session()->read('Auth.User.id')){ echo'aa'; }?> widget widget_black_studio_tinymce">

<h2 class="widget-title">Login or Register</h2>
<div class="textwidget"><p>
 
<?php if($this->request->session()->read('Auth.User.id')){
	 
	 $userid=Ucfirst(($this->request->session()->read('Auth.User.first_name')));
	 echo $this->Html->link($userid,['controller'=>'home','action'=>'myaccount']);
	 echo " | ";
	 echo $this->Html->link('Logout',['controller'=>'users','action'=>'logout']);
	 
 }else{ ?>
<a href="#" onclick="return false;">Login or Register</a></p>
 <?php  } ?>
</div></aside></div>
                    </div>
                    <div class="up-down">
                        <div class="container">
						
						<?php echo $this->Html->image('stip-button-ver.png', array('class'=>'down')); ?>
						<?php echo $this->Html->image('stip-button.png', array('class'=>'up')); ?>
						
						
                          </div>
                    </div>
                </div>
            </div>
            <div class="brand-vs-nav full">
            	<div class="container">
	                <aside id="widget_sp_image-3" class="widget-1 widget-first widget-odd brand widget widget_sp_image"><h2 class="widget-title">Jain Sanskar Shivir</h2>
					
					<?php echo $this->Html->link($this->Html->image(ADMIN_LOGO,['class'=>'widget_sp_image-image-link','title'=>'Jain Sanskar Shivir']),['controller'=>'home','action'=>'index'],[ 'escape'=>false]); ?>
					
					
					<?php //echo $this->Html->image('uploads/2017/01/brand.png', array('alt'=>'Jain Sanskar Shivir', 'class'=>'attachment-full alignleft', 'style'=>'max-width: 100%;')); ?>
					
				
					</a></aside><aside id="nav_menu-2" class="widget-2 widget-last widget-even navigation widget widget_nav_menu"><h2 class="widget-title">Main Menu</h2><div class="menu-main-menu-container"><ul id="menu-main-menu" class="menu"><li id="menu-item-17" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-17"><a href="<?php echo SITEURL; ?>">Home</a></li>
<li id="menu-item-131" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-131"><a href="#/">Learning</a>
<ul class="sub-menu">
	<li id="menu-item-151" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-151"><?php echo $this->Html->link('About Learning ','/about-learning'); ?></li>
	<li id="menu-item-115" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-115"><?php echo $this->Html->link('Course ',['controller'=>'home','action'=>'course']); ?></li>
</ul>
</li>
<li id="menu-item-244" class="has-mega-menu-p menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-244"><?php echo $this->Html->link('Program Objectives ','/program-objectives'); ?>
<ul class="sub-menu">
	<li id="menu-item-243" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-243"><a href="#/">program</a></li>
</ul>
</li>
<li id="menu-item-19" class="has-mega-menu-h menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-19"><?php echo $this->Html->link('How it works ','/how-it-works'); ?>
<ul class="sub-menu">
	<li id="menu-item-97" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-97"><a href="#/">Work1</a></li>
</ul>
</li>
<li id="menu-item-220" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-220"><a href="#/" onclick="return false;">About</a>
<ul class="sub-menu">
	<li id="menu-item-221" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-221">
		<?php echo $this->Html->link('About Us','/about-us'); ?>
	
	<!--<a href="http://demoitc.com/jains/about-us/">About Us</a>--></li>
</ul>
</li>
<li id="menu-item-23" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-23">
<?php echo $this->Html->link('Download Books','/library'); ?>


<!--<a href="#">Download Books</a>--></li>
</ul></div></aside>                </div>
            </div>
        </header>