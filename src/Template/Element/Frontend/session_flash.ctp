<div>
    <?php if($this->request->session()->read('Flash.flash')){ ?>
    <a href="javascript:void(0)" class="closeflash1" onclick="$(this).parent().addClass('hidden');"><!--X--></a>    
    <?php } ?>    
    <?php echo $this->Flash->render(); ?>
    
</div>
