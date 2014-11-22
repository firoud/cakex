<div class="vocabularies view">
<h2><?php echo __('Vocabulary'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vocabulary['Vocabulary']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($vocabulary['Vocabulary']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Machine Name'); ?></dt>
		<dd>
			<?php echo h($vocabulary['Vocabulary']['machine_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($vocabulary['Vocabulary']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vocabulary'), array('action' => 'edit', $vocabulary['Vocabulary']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vocabulary'), array('action' => 'delete', $vocabulary['Vocabulary']['id']), array(), __('Are you sure you want to delete # %s?', $vocabulary['Vocabulary']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vocabularies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vocabulary'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Terms'), array('controller' => 'terms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Term'), array('controller' => 'terms', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Terms'); ?></h3>
	<?php if (!empty($vocabulary['Term'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Weight'); ?></th>
		<th><?php echo __('Vocabulary Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($vocabulary['Term'] as $term): ?>
		<tr>
			<td><?php echo $term['id']; ?></td>
			<td><?php echo $term['name']; ?></td>
			<td><?php echo $term['description']; ?></td>
			<td><?php echo $term['parent_id']; ?></td>
			<td><?php echo $term['Weight']; ?></td>
			<td><?php echo $term['vocabulary_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'terms', 'action' => 'view', $term['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'terms', 'action' => 'edit', $term['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'terms', 'action' => 'delete', $term['id']), array(), __('Are you sure you want to delete # %s?', $term['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Term'), array('controller' => 'terms', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
