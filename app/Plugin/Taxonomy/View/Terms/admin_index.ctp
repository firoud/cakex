<div class="terms index">
	<h2><?php echo __('Terms'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('machine_name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('parent_id'); ?></th>
			<th><?php echo $this->Paginator->sort('weight'); ?></th>
			<th><?php echo $this->Paginator->sort('vocabulary_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($terms as $term): ?>
	<tr>
		<td><?php echo h($term['Term']['id']); ?>&nbsp;</td>
		<td><?php echo h($term['Term']['name']); ?>&nbsp;</td>
		<td><?php echo h($term['Term']['machine_name']); ?>&nbsp;</td>
		<td><?php echo h($term['Term']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($term['ParentTerm']['name'], array('controller' => 'terms', 'action' => 'view', $term['ParentTerm']['id'])); ?>
		</td>
		<td><?php echo h($term['Term']['weight']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($term['Vocabulary']['name'], array('controller' => 'vocabularies', 'action' => 'view', $term['Vocabulary']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $term['Term']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $term['Term']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $term['Term']['id']), array(), __('Are you sure you want to delete # %s?', $term['Term']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Term'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Terms'), array('controller' => 'terms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Term'), array('controller' => 'terms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vocabularies'), array('controller' => 'vocabularies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vocabulary'), array('controller' => 'vocabularies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nodes'), array('controller' => 'nodes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Node'), array('controller' => 'nodes', 'action' => 'add')); ?> </li>
	</ul>
</div>
