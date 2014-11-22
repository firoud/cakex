<div class="nodes index">
	<h2><?php echo __('Nodes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('summary'); ?></th>
			<th><?php echo $this->Paginator->sort('body'); ?></th>
			<th><?php echo $this->Paginator->sort('image'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('slug'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('comment'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_count'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('promote'); ?></th>
			<th><?php echo $this->Paginator->sort('sticky'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($nodes as $node): ?>
	<tr>
		<td><?php echo h($node['Node']['id']); ?>&nbsp;</td>
		<td><?php echo h($node['Node']['title']); ?>&nbsp;</td>
		<td><?php echo h($node['Node']['summary']); ?>&nbsp;</td>
		<td><?php echo h($node['Node']['body']); ?>&nbsp;</td>
		<td><?php echo h($node['Node']['image']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($node['User']['id'], array('controller' => 'users', 'action' => 'view', $node['User']['id'])); ?>
		</td>
		<td><?php echo h($node['Node']['created']); ?>&nbsp;</td>
		<td><?php echo h($node['Node']['modified']); ?>&nbsp;</td>
		<td><?php echo h($node['Node']['slug']); ?>&nbsp;</td>
		<td><?php echo h($node['Node']['type']); ?>&nbsp;</td>
		<td><?php echo h($node['Node']['comment']); ?>&nbsp;</td>
		<td><?php echo h($node['Node']['comment_count']); ?>&nbsp;</td>
		<td><?php echo h($node['Node']['status']); ?>&nbsp;</td>
		<td><?php echo h($node['Node']['promote']); ?>&nbsp;</td>
		<td><?php echo h($node['Node']['sticky']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $node['Node']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $node['Node']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $node['Node']['id']), array(), __('Are you sure you want to delete # %s?', $node['Node']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Node'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
