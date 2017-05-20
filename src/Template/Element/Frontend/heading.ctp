<div class="container paddLeftRightNone">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="row">
          <div class="col-xs-10 col-sm-11 col-md-11 paddRightNone">
            <div class="page-header">
                <?php if($routing_prefix === 'admin' && $controller === 'home'){ ?>
                    <?php //echo $this->Html->image(ADMIN.'profile-management-icon.jpg',['class'=>'pull-left']); ?>
                    <h1 class="headText">Home</h1>
                <?php } ?>
				  <?php if($routing_prefix === 'admin' && $controller === 'course'){ ?>
                    <?php //echo $this->Html->image(ADMIN.'profile-management-icon.jpg',['class'=>'pull-left']); ?>
                    <h1 class="headText">Course Management</h1>
                <?php } ?>
				
				
				<?php if($routing_prefix === 'upload' || $controller === 'upload'){ ?>
                    <?php //echo $this->Html->image(ADMIN.'profile-management-icon.jpg',['class'=>'pull-left']); ?>
                    <h1 class="headText">Upadate Images</h1>
                <?php } ?>
				
                <?php if($routing_prefix === 'admin' && $controller === 'businesstypemaster'){ ?>
                    <?php //echo $this->Html->image(ADMIN.'profile-management-icon.jpg',['class'=>'pull-left']); ?>
                    <h1 class="headText">Add Center Type</h1>
                <?php } ?>
                <?php if($routing_prefix === 'admin' && $controller === 'businessequipmentlist'){ ?>
                    <?php // echo $this->Html->image(ADMIN.'profile-management-icon.jpg',['class'=>'pull-left']); ?>
                    <h1 class="headText">Equipment List</h1>
                <?php } ?>
                <?php if($routing_prefix === 'admin' && $controller === 'businessaccount'){ ?>
                    <?php //echo $this->Html->image(ADMIN.'profile-management-icon.jpg',['class'=>'pull-left']); ?>
                    <h1 class="headText">Business</h1>
                <?php } ?>
                <?php if($routing_prefix === 'admin' && $controller === 'subscriptionplan'){ ?>
                    <?php //echo $this->Html->image(ADMIN.'profile-management-icon.jpg',['class'=>'pull-left']); ?>
                    <h1 class="headText">Subscription Plan</h1>
                <?php } ?>
                <?php if($routing_prefix === 'admin' && $controller === 'adminusergroup'){ ?>
                    <?php //echo $this->Html->image(ADMIN.'profile-management-icon.jpg',['class'=>'pull-left']); ?>
                    <h1 class="headText">Role Master</h1>
                <?php } ?>
<?php if($routing_prefix === 'admin' && $controller === 'loginadmin'){ ?>
                    <?php //echo $this->Html->image(ADMIN.'profile-management-icon.jpg',['class'=>'pull-left']); ?>
                    <h1 class="headText">Staff</h1>
                <?php } ?>

         <?php if($routing_prefix === 'admin' && $controller === 'businessbillpayment'){
                    ?>
                    <?php //echo $this->Html->image(ADMIN.'profile-management-icon.jpg',['class'=>'pull-left']); ?>
                    <h1 class="headText">Billilng</h1>
                <?php } ?> 
         <?php if($routing_prefix === 'admin' && $controller === 'billdashbordinvoice'){
                    ?>
                    <?php //echo $this->Html->image(ADMIN.'profile-management-icon.jpg',['class'=>'pull-left']); ?>
                    <h1 class="headText">Invoice</h1>
                <?php } ?>
         <?php if($routing_prefix === 'admin' && $controller === 'billdashbordpayment'){
                    ?>
                    <?php //echo $this->Html->image(ADMIN.'profile-management-icon.jpg',['class'=>'pull-left']); ?>
                    <h1 class="headText">Payment</h1>
                <?php } ?>
               

         <?php if($routing_prefix === 'admin' && $controller === 'servicesetting'){
                    ?>
                    <?php //echo $this->Html->image(ADMIN.'profile-management-icon.jpg',['class'=>'pull-left']); ?>
                    <h1 class="headText">Setting</h1>
                <?php } ?>
        <?php if($routing_prefix === 'admin' && $controller === 'businessdietlist'){
                    ?>
                    <?php //echo $this->Html->image(ADMIN.'profile-management-icon.jpg',['class'=>'pull-left']); ?>
                    <h1 class="headText">Services</h1>
                <?php } ?>
        <?php if($routing_prefix === 'admin' && $controller === 'memplanmaster'){
                    ?>
                   
                    <h1 class="headText">MemberShip Plan</h1>
                <?php } ?>
         <?php if($routing_prefix === 'business' && $controller === 'home'){
                    ?>
                   
                    <!--<h1 class="headText">Dashboard</h1>-->
                <?php } ?>
        <?php if($routing_prefix === 'business' && $controller === 'erpcustomer'){
                    ?>
                   
                    <!-- <h1 class="headText">Client Profile</h1>-->
                <?php } ?>
        <?php if($routing_prefix === 'business' && $controller === 'erpmemplanmaster'){
                    ?>
                   
                  <!--   <h1 class="headText">Membership Plan</h1>-->
                <?php } ?>
<?php if($routing_prefix === 'business' && $controller === 'erpusergroup'){
                    ?>
                   
                   <!--  <h1 class="headText">Group Master</h1>-->
                <?php } ?>

<?php if($routing_prefix === 'business' && $controller === 'erpdietplan'){
                    ?>
                   
                   <!--  <h1 class="headText">Diet Plan</h1>-->
                <?php } ?>

<?php if($routing_prefix === 'business' && $controller === 'erpworkoutplan'){
                    ?>
                   
                   <!--  <h1 class="headText">Workout Plan</h1>-->
                <?php } ?>

<?php if($routing_prefix === 'business' && $controller === 'erpstaffs'){
                    ?>
                   
                     <!--<h1 class="headText">Staff</h1>-->
                <?php } ?>

<?php if($routing_prefix === 'business' && $controller === 'dashboardrecord'){
                    ?>
                   
                   <!--  <h1 class="headText">Records</h1>-->
                <?php } ?>

<?php if($routing_prefix === 'business' && $controller === 'appointment'){
                    ?>
                   
                     <!--<h1 class="headText">Dashboard</h1>-->
                <?php } ?>

<?php if($routing_prefix === 'business' && $controller === 'erpbooking'){
                    ?>
                   
                    <!-- <h1 class="headText">Booking</h1>-->
                <?php } ?>

<?php if($routing_prefix === 'business' && $controller === 'erpclass'){
                    ?>
                   
                    <!-- <h1 class="headText">Create Class</h1>-->
                <?php } ?>

<?php if($routing_prefix === 'business' && $controller === 'commudashbord'){
                    ?>
                   
                    <!-- <h1 class="headText">Dashboard</h1>-->
                <?php } ?>

<?php if($routing_prefix === 'business' && $controller === 'communication'){
                    ?>
                   
                     <!--<h1 class="headText">Delivery Report</h1>-->
                <?php } ?>


<?php if($routing_prefix === 'business' && $controller === 'erpclientgroup'){
                    ?>
                   
                     <!--<h1 class="headText">Clients Group</h1>-->
                <?php } ?>
<?php if($routing_prefix === 'business' && $controller === 'erpbirthdaywishes'){
                    ?>
                   
                   <!-- <h1 class="headText">Birthday Wishes</h1>-->
                <?php } ?>

<?php if($routing_prefix === 'business' && $controller === 'erpsmsmarketing'){
                    ?>
                   
                   <!-- <h1 class="headText">Sms Marketing</h1>-->
                <?php } ?>

<?php if($routing_prefix === 'business' && $controller === 'erpemailmarketing'){
                    ?>
                   
                   <!-- <h1 class="headText">Email Marketing</h1>-->
                <?php } ?>
<?php if($routing_prefix === 'business' && $controller === 'erpbillpayment'){
                    ?>
                   
                    <!--<h1 class="headText">Dashboard</h1>-->
                <?php } ?>
<?php if($routing_prefix === 'business' && $controller === 'billdashbordpayment'){
                    ?>
                   
                   <!-- <h1 class="headText">Payment</h1>-->
                <?php } ?>

<?php if($routing_prefix === 'business' && $controller === 'billdashbordinvoice'){
                    ?>
                   
                    <h1 class="headText">Invoice</h1>
                <?php } ?>

<?php if($routing_prefix === 'business' && $controller === 'erpmyaccount'){
                    ?>
                   
                   <!-- <h1 class="headText">My Account</h1>-->
                <?php } ?>

    
            </div>
                
          </div>  



          <div class="col-xs-2 col-sm-1 col-md-1 pull-right paddLeftNone text-right">
            <div class="back"><div class="make-button"><a href="#" onclick="goback()">Back</a></div></div>
          </div>
        </div>
      </div>
    </div>   
</div>
