<?php
$cakeDescription = 'Inventory';
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

   <?= $this->Html->css([ADMIN.'bootstrap', ADMIN.'responsive', ADMIN.'style.css', ADMIN.'datepicker.min.css',ADMIN.'global.css']);?>
    <?=$this->Html->script(ADMIN.'jquery-2.1.1');?>
    <?=$this->Html->script(ADMIN.'bootstrap');?>
      
    <?=$this->Html->script(ADMIN.'script');?>
    <?=$this->Html->script(ADMIN.'admin');?>
    <?=$this->Html->script(ADMIN.'global');?>
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
  
</head>
<body>
<?php    
  
?>
<?php echo $this->element(ADMIN.'header'); ?>  

    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <?php echo $this->element(ADMIN.'/footer'); ?>
    
   
</body>
</html>

