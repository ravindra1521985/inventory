<section id="mainCantt">
  <div class="container">
    <div class="row">
      <?php //echo $this->element(ADMIN.'left_navigation'); ?>  
      <?php if($this->request->session()->read('Auth.User.grouptype')==1) { ?> 
     <div class="col-sm-8 col-md-12" style="margin-left:150px;margin-right:50px;">       
        
		<div class="col-sm-8 col-md-10">        
        
                <div class="row1">           
             
             <div class="businessBox12">
                 <div>
				 
				 <?php 

			$hd = $this->Html->image('product.png',array('class'=>'img-responsive1 mrgleft2'));
echo $this->Html->link($hd,array('controller'=>'items', 'action'=>'viewlist'), array('escape'=>false));


				// echo $this->Html->image('AdminDasboradzIcon/Total-End---Consumers-added.png',['class'=>'img-responsive1 mrgleft2']); ?>
				 
                 
                 </div>
                 <div class="dashbox-data">
                   <?php echo $item; ?>              </div>                 
               <div>
               Item
               </div>
             </div> 
			   <div class="businessBox12">
                 <div>
				 
				 <?php 

$hd = $this->Html->image('customer.png',array('class'=>'img-responsive1 mrgleft2'));
echo $this->Html->link($hd,array('controller'=>'customer', 'action'=>'viewlist'), array('escape'=>false));
				 //echo $this->Html->image('AdminDasboradzIcon/Total-End---Consumers-added.png',['class'=>'img-responsive1 mrgleft2']); ?>
				 
                 
                 </div>
                 <div class="dashbox-data">
                   <?php echo $customer; ?>              </div>                 
               <div>
               Customer
               </div>
             </div>
			  
        
    </div>
<br>

<script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
      theme: "theme2",
      title:{
        text: "Sales Per Month"
      },
      animationEnabled: true,
      axisX: {
        valueFormatString: "MMM",
        interval:1,
        intervalType: "month"
        
      },
      axisY:{
        includeZero: false
        
      },
      data: [
      {        
        type: "line",
        //lineThickness: 3,        
        dataPoints: [
        { x: new Date(2012, 00, 1), y: 450 },
        { x: new Date(2012, 01, 1), y: 414},
        { x: new Date(2012, 02, 1), y: 520},
       //  { x: new Date(2012, 02, 1), y: 520, indexLabel: "highest",markerColor: "red", markerType: "triangle"},
        { x: new Date(2012, 03, 1), y: 460 },
        { x: new Date(2012, 04, 1), y: 450 },
        { x: new Date(2012, 05, 1), y: 500 },
        { x: new Date(2012, 06, 1), y: 480 },
        { x: new Date(2012, 07, 1), y: 480 },
         { x: new Date(2012, 08, 1), y: 410},
       // { x: new Date(2012, 08, 1), y: 410 , indexLabel: "lowest",markerColor: "DarkSlateGrey", markerType: "cross"},
        { x: new Date(2012, 09, 1), y: 500 },
        { x: new Date(2012, 10, 1), y: 480 },
        { x: new Date(2012, 11, 1), y: 510 }
        
        ]
      }
      
      
      ]
    });

chart.render();
}

</script>
<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>

    </div>
<!--<div style="clear:both;"></div>
<br>


          <div id="chartContainer" style="height: 300px; width: 60%;"></div>-->


	  <?php }else { echo "Coming Soon"; } ?>
  </div>
</section>