<?php if($this->request->session()->read('Auth.User.id')){ 

    echo $this->element(ADMIN.'menu');

    ?>
    <?php  ?>
    <section id="breadCrum">
        <?php //echo $this->element(ADMIN.'breadcrumb'); ?>
        <?php echo $this->element(ADMIN.'heading'); ?>
		<?php echo $this->Form->hidden('url', array('class'=>'form-width','maxlength'=>100,'placeholder'=>'Enter Business Name','id'=>'url','value'=>SITEURL)); ?>
    </section>
<?php } ?>