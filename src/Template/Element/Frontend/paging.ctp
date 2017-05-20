<?php if($this->Paginator->numbers()!=null) {?>
    <div class="pagination">
        <?php //echo $this->Paginator->counter(['format' => 'range']); echo '&nbsp;&nbsp;'; ?>
        <?php //echo $this->Paginator->counter('Page {{page}} of {{pages}}, showing {{current}} records out of {{count}} total, starting on record {{start}}, ending on {{end}}'); ?>
        
       <!-- <div class="paging-summary"><?php //echo $this->Paginator->counter('Showing page {{page}} of {{pages}}'); echo '&nbsp;&nbsp;'; ?></div>-->
    	<?php //echo $this->Paginator->first('First', array('escape'=>false, 'tag'=>'span','class'=>'Paging'), null, null);?>
	<?php //echo $this->Paginator->prev('<<', array('escape'=>false, 'tag'=>'span','class'=>'Paging'),null,null);?>
	<?php echo $this->Paginator->numbers(array('modulus'=>'5', 'class'=>'Paging', 'tag'=>'span', 'separator'=>'&nbsp;','class'=>'page-numbers current'));?>
	<?php //echo $this->Paginator->next('>>', array('escape'=>false, 'tag'=>'span','class'=>'Paging next_page'), null, null);?>
	<?php //echo $this->Paginator->last('Last', array('escape'=>false, 'tag'=>'span','class'=>'Paging'), null, null);?>
	
    </div>
	

	
	
	
<?php } ?>