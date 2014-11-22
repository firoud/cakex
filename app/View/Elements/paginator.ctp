<?php if ($this->Paginator->counter(array('format' => '{:pages}')) > 1) : ?>
<div class="row">


	<div class="col-md-6">
    
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	
    
    </div>
    
	<div class="col-md-6">
    
    <ul class="pagination">
	<?php
	    echo '<li>' . $this->Paginator->first('< first') . '</li>';
		echo '<li>' . $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled')) . '</li><li>';
		echo $this->Paginator->numbers(array('separator' => '</li><li>'));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled')) . '</li>';
	    echo '<li>' . $this->Paginator->last('last >') . '</li>';
	?>
    </ul>
    
	</div>
    
    
</div>
<?php endif; ?>