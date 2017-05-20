 <?php// echo $this->element(ADMIN.'left_navigation');

 ?> 
<div class="col-sm-8 col-md-10">
 

<div class="business-body">

     <?php //echo $this->element('session_flash'); ?>
<?php  
//prd($business);

//echo SITEURL;
 echo  $this->Form->create($business,['id'=>'businessAdd','class'=>'form-horizontal']);  ?>

<div class="row">        
<div class="col-md-3">
    <h4 class="title-icon">Center Type<?php //echo $this->Html->image('title-arrow.jpg'); ?></h4>
<?php echo $this->Form->select('business_type_id',$business_type1,['default'=>'','empty'=>'Select Center Type','class'=>'required form-control','id'=>"business_type_id",'tabindex'=>'1','onchange'=>'searchService(this.value)']); ?>
   <?php echo $this->Form->error('business_type_id'); ?>
<?php //echo 'vcvcvcvcvSITEURL; ?>
</div>
<div class="col-md-3">    
    
    <h4 class="title-icon">  </h4>
<?php echo $this->Form->text('business_name', array('class'=>'form-control mt-30','maxlength'=>100,'placeholder'=>'Enter Business Name','id'=>'business_name','required','tabindex'=>'2')); ?>
    <?php echo $this->Form->error('business_name'); ?>
</div>
<div class="col-md-2"></div>

</div>
   

</div>
</div>
  </div>
  
    

