<?php $this->Html->addCrumb(__('Menus'), NULL); ?>

<div class="row">

<div class="col-md-12">

<div class="actions">
	
	<ul class="list-inline">
		<li><i class="fa fa-plus"></i> <?php echo $this->Html->link(__('Add Menu'), array('action' => 'add')); ?></li>

	</ul>
</div>



	<table class="table table-striped table-bordered" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th class="actions"><?php echo __('Operations'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($menus as $menu): ?>
	<tr>
		<td>
        
        <strong><?php echo h($menu['Menu']['title']); ?></strong>
        
        <?php if ($menu['Menu']['description']) : ?>
		<p class="description"><?php echo h($menu['Menu']['description']); ?></p>
        <?php endif; ?>
        
        </td>
		<td class="actions">
 			<ul class="list-inline">
            <li><?php echo $this->Html->link(__('List links'), array('controller' => 'links', 'action' => 'index' , $menu['Menu']['id'])); ?> </li> 
            <li><?php echo $this->Html->link(__('Add link'), array('controller' => 'links', 'action' => 'add' , $menu['Menu']['id'])); ?> </li>       
			<li><?php echo $this->Html->link(__('Edit menu'), array('action' => 'edit', $menu['Menu']['id'])); ?></li>
			<li><?php echo $this->Form->postLink(__('Delete menu'), array('action' => 'delete', $menu['Menu']['id']), array(), __('Are you sure you want to delete the custom menu %s?', $menu['Menu']['title'])); ?></li>
            </ul>
            
            
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
    
   </div> <!-- /.col-md-12 -->
    
  </div><!-- /.row -->


<div class="row">

    
	<div class="col-md-6">
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	
    
    </div>
    
	<div class="col-md-6 paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

