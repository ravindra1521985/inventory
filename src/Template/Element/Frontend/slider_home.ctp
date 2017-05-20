 <section>
	<div class="banner full flow">
    	<div class="inner-banner full flow">
    		<div class="slider-section"><!-- meta slider -->
<div style="max-width: 747px;" class="metaslider metaslider-flex metaslider-40 ml-slider">
    		
     <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 747);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>
	
	 <style>
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 12 css */
        /*
        .jssora12l                  (normal)
        .jssora12r                  (normal)
        .jssora12l:hover            (normal mouseover)
        .jssora12r:hover            (normal mouseover)
        .jssora12l.jssora12ldn      (mousedown)
        .jssora12r.jssora12rdn      (mousedown)
        */
        .jssora12l, .jssora12r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 30px;
            height: 46px;
            cursor: pointer;
            background: url('img/a12.png') no-repeat;
            overflow: hidden;
        }
        .jssora12l { background-position: -16px -37px; }
        .jssora12r { background-position: -75px -37px; }
        .jssora12l:hover { background-position: -136px -37px; }
        .jssora12r:hover { background-position: -195px -37px; }
        .jssora12l.jssora12ldn { background-position: -256px -37px; }
        .jssora12r.jssora12rdn { background-position: -315px -37px; }
    </style>
	
	
<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:747px;height:520px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:747px;height:520px;overflow:hidden;">
		
		
		<?php  foreach($slider as $key=>$value) { ?>
            <div>
			
			<?php 
				$photo ='slider/'.$value['image'];
							//echo $this->Html->image($photo,['class'=>'img-responsive','width'=>'100']);
			echo $this->Html->image($photo,['data-u'=>'image', 'height'=>'520', 'width'=>'747', 'alt'=>'', 'class'=>'slider-40 slide-156', 'style'=>'margin: 0 auto; width: 100%']); 
			
			
			//echo $this->Html->image('uploads/2017/02/banner1.jpg',['data-u'=>'image', 'height'=>'520', 'width'=>'747', 'alt'=>'', 'class'=>'slider-40 slide-156', 'style'=>'margin: 0 auto; width: 100%']); ?>
			
		<!--	<img src="img/uploads/2017/02/banner1.jpg" data-u="image" height="520" width="747" alt="" class="slider-40 slide-156" style="margin: 0 auto; width: 100%" />-->
                
            </div>
		<?php  } ?>
           
         
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
	
</div>






<!--// meta slider--></div>
        	<div class="free-register">
				<aside id="black-studio-tinymce-2" class="widget-1 widget-first widget-last widget-odd student-free-registration widget widget_black_studio_tinymce"><h2 class="widget-title">Free Registration for student, teacher &#038; volunteer</h2><div class="textwidget"><h1>This Summer let’s learn some culture</h1>
<p>Disintegration of joint family system and degradation of modern education policy have created a vacuum in the development of religious and moral education. While every society needs its members to have high moral and ethical standards, modern lifestyle is resulting into loss of interaction and role-modelling within families to focus on inculcating this education into children.</p>
<h6> <?php  if($this->request->session()->read('Auth.User.id')!=''){ 
				echo $this->Html->link('Proceed To My Account',['controller'=>'home','action'=>'myaccount'],['style'=>'color:white;']);
				
			}else{
				echo "Register FOR FREE as :";
			}?>

</h6>
</div></aside>    
					<?php  if($this->request->session()->read('Auth.User.id')==''){ ?>
			<!--<form class="radio-form" action="./login-or-register" method="">-->
			 <?php echo  $this->Form->create(null, ['url' => ['controller' => 'Home', 'action' => 'login_registration'],'type' => 'file','id'=>'registration','class'=>'radio-form']);  ?>
                  
		
					<ul>
                        <li>
                        <input type="radio" id="r1" checked="checked" name="regis" value="student" />
                        <label for="r1"><span></span>Student</label>
                        </li><li>   
                        <input type="radio" id="r2" name="regis" value="teacher" />
                        <label for="r2"><span></span>Teacher</label>
                        </li>
                        <li>   
                        <input type="radio" id="r3" name="regis" value="volunteer" />
                        <label for="r3"><span></span>Volunteer</label>
                        </li>
                    </ul>
					<div class="proceed">
                    	<button>
						
						
<?php  echo $this->Html->image('btn-arr.png',['class'=>'alignnone size-full wp-image-43','width'=>'114','height'=>'17' ]); ?>
						
						
                        	<!--<img class="alignnone size-full wp-image-43" src="img/btn-arr.png" alt="" width="114" height="17" />-->
                        </button>
                    </div>
				</form>
					<?Php } else { 
					
					//echo $this->request->session()->read('Auth.User.id');
					echo '<span style="color:white;"><br>Last Login :'. date('Y-m-d H:i:s',strtotime($this->Common->getlastlogindetail($this->request->session()->read('Auth.User.id'))));
					echo '</span>';
					} ?>
            </div>
        </div>
    </div>
</section>