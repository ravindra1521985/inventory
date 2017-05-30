<div class="container">
  <div class="login-area">
    <h1>LOGIN FOR ADMINS</h1>
    <h2>Please fill the details blow:</h2>
      <span style="color: red;
font-size: 18px;
font-weight: normal;
font-family: 'Lato-Regular';
text-align: center;
margin-bottom: 30px;
margin-top: 0;
margin-left: 190px;"><?php  echo $this->element(Admin.'/session_flash_a'); ?></span>
    <?= $this->Form->create(null,['id'=>'adminLogin','class'=>'loginform form-horizontal','autocomplete'=>'off']) ?> 
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">User Name</label>
        <div class="col-sm-10">
          <?php echo $this->Form->text('user_id',array('class'=>'form-control required','placeholder'=>'Please enter  user name','required'=>'required')); ?>  
          
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
            <?= $this->Form->password('password',array('class'=>'form-control required','placeholder'=>'Please enter your password','required'=>'required')) ?>
            <?= $this->Form->hidden('type',array('value'=>USER_TYPE_ADMIN_PREFIX)) ?>
          
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">SUBMIT</button>
        </div>
      </div>
      <div class="row form-c">
        <div class="col-md-6 col-sm-6">
          <!--<div><a href="#">Forgot Password?</a></div>-->
        </div>
        <div class="col-md-6 col-sm-6">
          <!--<div class="txt-right">New User <a href="#">Register Here</a></div>-->
        </div>
      </div>
    <?= $this->Form->end(); ?>
  </div>
</div>
