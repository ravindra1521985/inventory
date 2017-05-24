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
     
    <?php echo $flash[0]['message'];
    unset($_SESSION['Flash']);
    ?>

<?php  } ?>
<?php } ?>   
