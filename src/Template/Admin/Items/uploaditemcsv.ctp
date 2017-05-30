<div class="main-container">
    <div class="content">
      <div class="row1">
          <div class="col-md-5 col-sm-9" style="margin-left:30%; text-align:center;">           
          <div class="block-1 block-2">
            <h1 class="GreyBox width100per">Upload CSV</h1>
                     
            <?php  echo  $this->Form->create('',['controller'=>'items','action'=>'uploaditemcsv','id'=>'uploaditemcsv','class'=>'form-horizontal','type' => 'file']);  ?>
              <div class="row paddLeft10 paddright10 mt-10" style="border-top:2px solid #ccc;">
                  
                <div class="">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label" style="text-align:right;">CSV File</label>
                    <div class="col-sm-6" style="padding-left:40px;">                      
                     <?php echo $this->Form->file('csv',['id'=>'csv','required'=>'required']); ?>    
                       <?php echo $this->Form->error('csv'); ?>
                    </div>
                  </div>
                </div>
                  <br>
                  <div class="text-center mt-20 mb-10 mb-51" style="margin-right:-10%;padding-top:100px;">
                
                <?php echo $this->Form->button('Save Change',array('type'=>'submit','class'=>'btn btn-default btn-c1','name'=>'form_type','value'=>'save_change','style'=>'text-align:center;margin-top:8px;')); ?>
            </div>
                  
              
            <?php echo $this->Form->end();?>