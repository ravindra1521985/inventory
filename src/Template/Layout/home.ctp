<?php
$cakeDescription = 'Jain';

?>
<!DOCTYPE html>
<html>
<head>
 <script type="text/javascript">
         var siteUrl = '<?php echo SITEURL; ?>';
    </script>
  
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
       
    </title>
	<!-- <?= $this->fetch('title') ?>-->
    <?= $this->Html->meta('favicon.ico','/favicon.ico',['type' => 'icon']); ?>
    <?= $this->Html->css([FRONTEND.'style.css'.ASSET_VERSION]);?>
	  <?= $this->Html->css([FRONTEND.'litebox/lightbox.css'.ASSET_VERSION,FRONTEND.'litebox/lightbox.min.css'.ASSET_VERSION]);?>
	<?=$this->Html->script(FRONTEND.'jquery.min.js'.ASSET_VERSION);?>
	<?=$this->Html->script(FRONTEND.'script.js'.ASSET_VERSION);?>
	<?=$this->Html->script(FRONTEND.'linteboxslider/lightbox-plus-jquery.min.js'.ASSET_VERSION);?>
	<?=$this->Html->script(FRONTEND.'jquery.lightbox_me.js'.ASSET_VERSION);?>
	<?= $this->Html->css([FRONTEND.'fonts/AndikaRegular/stylesheet.css']);?>
	<?= $this->Html->css([FRONTEND.'fonts/roboto/stylesheet.css']);?>
	<?= $this->Html->css([FRONTEND.'fonts/roboto-bold/stylesheet.css']);?>
	<?= $this->Html->css([FRONTEND.'fonts/roboto-medium/stylesheet.css']);?>
	
	
	
	
	
	
    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: http://www.jssor.com -->
    <!-- This code works without jquery library. -->
	<?=$this->Html->script(FRONTEND.'slider/jssor.slider-22.2.16.min.js'.ASSET_VERSION);?>
   
	
     
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    

<script>
$.noConflict();
		$(document).ready(function(){
			$(".up-down .container img").click(function(){
				$('.open-stip').toggleClass('active');
				$('.brand-vs-nav').toggleClass('active');
			});			
		});
    </script>
    <script>
		$(document).ready(function(){
			$(".have-accnt button").click(function(){
				$('.registration-form').addClass('hide');
				$('.login-form').addClass('show');
			});
			$(".new-acc button").click(function(){
				$('.registration-form').removeClass('hide');
				$('.login-form').removeClass('show');
			});			
		});
    </script>
    <script>
		$(document).ready(function(){
			$(".l-r a").click(function(){
				
				$('.register-form-area').addClass('active');
				$('.popup-bg').addClass('active');
			});
			$(".popup-bg").click(function(){
				$('.register-form-area').removeClass('active');
				$('.popup-bg').removeClass('active');
			});			
		});
    </script>
    
    <script>
		$(document).ready(function(){
			$(".has-mega-menu-p").hover(
			  function () {
				$('.program-megamenu').addClass("navOver");
			  },
			  function () {
				$('.program-megamenu').removeClass("navOver");
			  }
			);
		});
	</script>
    <script>
		$(document).ready(function(){
			$(".program-megamenu").mouseover(function(){
				$(this).addClass("navOver");
				$('.has-mega-menu-p').addClass("cc");
				}).mouseout(function(){
				$(this).removeClass("navOver");
				$('.has-mega-menu-p').removeClass("cc");

			});
		});
	</script>
     <script>
		$(document).ready(function(){
			$(".has-mega-menu-h").hover(
			  function () {
				$('.how-it-works-megamenu').addClass("navnav");
			  },
			  function () {
				$('.how-it-works-megamenu').removeClass("navnav");
			  }
			);
		});
	</script>
    <script>
		$(document).ready(function(){
			$(".how-it-works-megamenu").mouseover(function(){
				$(this).addClass("navnav");
				$('.has-mega-menu-h').addClass("cc");
				}).mouseout(function(){
				$(this).removeClass("navnav");
				$('.has-mega-menu-h').removeClass("cc");

			});
		});
	</script>
    





</head>
<body class="home blog">

<div class="popup-bg"></div>
	<div class="wrapper full flow">

<?php echo $this->element(FRONTEND.'header'); ?>  

    <div >
        <?= $this->fetch('content') ?>
    </div>
	 <?php echo $this->element(FRONTEND.'/footer'); ?>
	
	</div>
	
	<!-- js menu -->
	
		
<div class="program-megamenu">
	<aside id="black-studio-tinymce-8" class="widget-1 widget-first widget-odd program-menu-head widget widget_black_studio_tinymce"><h2 class="widget-title">Program Objectives</h2><div class="textwidget"><h6><span style="color: #202020;">Program Objectives</span></h6>
<p><?php echo $this->Html->link('Read More ','/program-objectives'); ?>

<!--<a href="#/">Read More</a>--></p>
</div></aside><aside id="black-studio-tinymce-9" class="widget-2 widget-even program-desc widget widget_black_studio_tinymce"><h2 class="widget-title">Program Description</h2><div class="textwidget"><p><?php echo $pomenutext[0]['short_desc']; ?></p><!--<p>Jain sanskar shivir is a 10 day program organized in associations with local jain shabhas each year during the summer vacation time in the month of June.</p>
<p>These shivirs are completely free of cost to the participants but it cost some to local jain shabha. Modern teaching methodologies are used to guide students.</p>-->
</div></aside><aside id="black-studio-tinymce-10" class="widget-3 widget-last widget-odd program-list widget widget_black_studio_tinymce"><h2 class="widget-title">Program List</h2><div class="textwidget"><ul>
<li><?php echo $this->Html->image('uploads/2017/02/list1.png',['class'=>'alignnone size-full wp-image-209','width'=>'30']); ?><?php echo $pomenutext[0]['menu_text1']; ?></li>
<li><?php echo $this->Html->image('uploads/2017/02/list2.png',['class'=>'alignnone size-full wp-image-210','width'=>'30']); ?><?php echo $pomenutext[0]['menu_text2']; ?></li>
<li><?php echo $this->Html->image('uploads/2017/02/list3.png',['class'=>'alignnone size-full wp-image-211','width'=>'30']); ?><?php echo $pomenutext[0]['menu_text3']; ?></li>
<li><?php echo $this->Html->image('uploads/2017/02/list4.png',['class'=>'alignnone size-full wp-image-212','width'=>'30']); ?><?php echo $pomenutext[0]['menu_text4']; ?></li>
<li><?php echo $this->Html->image('uploads/2017/02/list5.png',['class'=>'alignnone size-full wp-image-213','width'=>'30']); ?><?php echo $pomenutext[0]['menu_text5']; ?></li>
</ul>
</div></aside></div>
<div class="how-it-works-megamenu">
	<aside id="black-studio-tinymce-11" class="widget-1 widget-first widget-odd program-menu-head widget widget_black_studio_tinymce"><h2 class="widget-title">How it works</h2><div class="textwidget"><h6><span style="color: #202020;">How it works<br />
</span></h6>
<p><?php echo $this->Html->link('Read More','/how-it-works'); ?>

<!--<a href="#/">Read More</a>--></p>
</div></aside><aside id="black-studio-tinymce-12" class="widget-2 widget-even program-desc widget widget_black_studio_tinymce"><h2 class="widget-title">How It Works Description</h2><div class="textwidget"><p><?php echo $hiwmenutext[0]['short_desc']; ?></p>
</div></aside><aside id="black-studio-tinymce-13" class="widget-3 widget-last widget-odd program-list widget widget_black_studio_tinymce"><h2 class="widget-title">List</h2><div class="textwidget"><ul>
<li>	<?php echo $this->Html->image('uploads/2017/02/list1.png',['class'=>'alignnone size-full wp-image-209','width'=>'30']); ?>
		

<!--<img class="alignnone size-full wp-image-209" src="img/uploads/2017/02/list1.png" alt="" width="30" height="30" />--><?php echo $hiwmenutext[0]['menu_text1']; ?></li>
<li><?php echo $this->Html->image('uploads/2017/02/list2.png',['class'=>'alignnone size-full wp-image-210','width'=>'30']); ?><?php echo $hiwmenutext[0]['menu_text2']; ?></li>
<li><?php echo $this->Html->image('uploads/2017/02/list3.png',['class'=>'alignnone size-full wp-image-211','width'=>'30']); ?><?php echo $hiwmenutext[0]['menu_text3']; ?></li>
<li>
<?php echo $this->Html->image('uploads/2017/02/list4.png',['class'=>'alignnone size-full wp-image-212','width'=>'30']); ?>

<!--<img class="alignnone size-full wp-image-212" src="img/uploads/2017/02/list4.png" alt="" width="30" height="30" />--><?php echo $hiwmenutext[0]['menu_text4']; ?></li>
<li><?php echo $this->Html->image('uploads/2017/02/list5.png',['class'=>'alignnone size-full wp-image-213','width'=>'30']); ?>

<!--<img class="alignnone size-full wp-image-213" src="img/uploads/2017/02/list5.png" alt="" width="30" height="30" />--><?php echo $hiwmenutext[0]['menu_text5']; ?></li>
</ul>
</div></aside></div>

<div class="register-form-area">
	<h6>REGISTER FOR FREE AS :</h6>
   <!-- <form class="radio-form" action="Home/LoginRegistration" method="Post">-->
	
	 <?php echo  $this->Form->create(null, ['url' => ['controller' => 'Home', 'action' => 'login_registration'],'type' => 'file','id'=>'registration','class'=>'radio-form']);  ?>
        <ul>
            <li>
                <input id="r4" name="regis" checked="checked" type="radio" value="student" />
                <label for="r4"><span></span>Student</label>
            </li>
            <li>
                <input id="r5" name="regis" type="radio" value="teacher"/>
                <label for="r5"><span></span>Teacher</label>
            </li>
            <li>
                <input id="r6" name="regis" type="radio" value="volunteer"/>
                <label for="r6"><span></span>Volunteer</label>
            </li>
        </ul>
        <div class="proceed">
            <button>
			
			<?php echo $this->Html->image('uploads/2017/01/btn-arr.png',['class'=>'alignnone size-full wp-image-213','width'=>'114']); ?>
               <!-- <img class="alignnone size-full wp-image-43" src="img/uploads/2017/01/btn-arr.png" alt="" width="114" height="17" />-->
            </button>
        </div>
    </form>
</div>
	
</body>
</html>

