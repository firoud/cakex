

<div class="links index">
	<h2><?php echo __('Links'); ?></h2>
	<table class="table table-striped table-bordered" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo __('Menu link'); ?></th>
			<th><?php echo $this->Paginator->sort('enabled'); ?></th>
			<th><?php echo $this->Paginator->sort('weight'); ?></th>
			<th><?php echo $this->Paginator->sort('parent_id'); ?></th>
			<th class="actions"><?php echo __('Operations'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($links as $link): ?>
	<tr>

		<td><?php echo $this->html->link($link['Link']['title'], $link['Link']['path']); ?>&nbsp;</td>
		<td><?php echo h($link['Link']['enabled']); ?>&nbsp;</td>
		<td><?php echo h($link['Link']['weight']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($link['ParentLink']['title'], array('controller' => 'links', 'action' => 'view', $link['ParentLink']['id'])); ?>
		</td>

		<td class="actions">
        <ul class="list-inline">
			<li><?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $link['Link']['id'], $link['Link']['menu_id'])); ?></li>
			<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $link['Link']['id'], $link['Link']['menu_id']), array(), __('Are you sure you want to delete # %s?', $link['Link']['id'])); ?></li>
         </ul>   
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Menus'), array('controller' => 'menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('New Link'), array('controller' => 'links', 'action' => 'add', $this->request->pass[0])); ?> </li>        
	</ul>
</div>
