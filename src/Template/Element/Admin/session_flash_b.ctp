<?php 
			//	print_r($this->request->session()->read('Flash.flash'));
			//	die;
if($this->request->session()->read('Flash.flash')){
        $flash=$this->request->session()->read('Flash.flash'); 
        	      
        ?>
        <?php 

            if($flash[0]['element']=='Flash/error' && $flash[0]['message']==''){
                unset($_SESSION['Flash']);

            }

        if($flash[0]['message']!='')

        { ?>
<div id="flash" <?php if($flash[0]['element']=='Flash/error')  { ?> style="background-color:#ff4d4d !important;" <?php  } ?>>
    
    <a href="javascript:void(0)" class="closeflash" onclick="$(this).parent().addClass('hidden');">X</a>    
     
    <?php echo $flash[0]['message'];
    unset($_SESSION['Flash']);
    ?>
</div>
<?php  } ?>
<?php } ?>   
<script>
$(document).ready(function(){   
    $("#flash").fadeOut(6000);   
});
</script>