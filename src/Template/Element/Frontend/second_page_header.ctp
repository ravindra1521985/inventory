<div class="each-page-title">
				<div class="pge-title"><?php if($this->request->params['_matchedRoute']=='/:controller/:action/*'){
echo $this->Common->action_name($this->request->params['action']);
				//echo $this->request->params['action'] ;
				} else { echo str_replace('-',' ',str_replace('/',' ',$this->request->params['_matchedRoute'])); }?></div>
                <div class="container">
				<?php // print_r($this->request->params);  ?>
                	<div class="breadcrum full flow">
						<div  class="breadcrumbs">
							<div id="crumbs"><a href="#" onclick="return false;"><?php echo ucfirst($controller); ?></a> &gt; <span class="current"><?php if($this->request->params['_matchedRoute']=='/:controller/:action/*'){
									echo $this->Common->action_name($this->request->params['action']);
							//echo $this->request->params['action'] ;
							}
							else { echo str_replace('-',' ',str_replace('/',' ',$this->request->params['_matchedRoute'])); }?></span></div>                        </div>
                    </div>
				</div>
            </div>
			
			