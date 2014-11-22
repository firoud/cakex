<div class="terms view">
<h2><?php echo __('Term'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($term['Term']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($term['Term']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Machine Name'); ?></dt>
		<dd>
			<?php echo h($term['Term']['machine_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($term['Term']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Term'); ?></dt>
		<dd>
			<?php echo $this->Html->link($term['ParentTerm']['name'], array('controller' => 'terms', 'action' => 'view', $term['ParentTerm']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight'); ?></dt>
		<dd>
			<?php echo h($term['Term']['weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vocabulary'); ?></dt>
		<dd>
			<?php echo $this->Html->link($term['Vocabulary']['name'], array('controller' => 'vocabularies', 'action' => 'view', $term['Vocabulary']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Term'), array('action' => 'edit', $term['Term']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Term'), array('action' => 'delete', $term['Term']['id']), array(), __('Are you sure you want to delete # %s?', $term['Term']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Terms'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Term'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Terms'), array('controller' => 'terms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Term'), array('controller' => 'terms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vocabularies'), array('controller' => 'vocabularies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vocabulary'), array('controller' => 'vocabularies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nodes'), array('controller' => 'nodes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Node'), array('controller' => 'nodes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Terms'); ?></h3>
	<?php if (!empty($term['ChildTerm'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Machine Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Weight'); ?></th>
		<th><?php echo __('Vocabulary Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($term['ChildTerm'] as $childTerm): ?>
		<tr>
			<td><?php echo $childTerm['id']; ?></td>
			<td><?php echo $childTerm['name']; ?></td>
			<td><?php echo $childTerm['machine_name']; ?></td>
			<td><?php echo $childTerm['description']; ?></td>
			<td><?php echo $childTerm['parent_id']; ?></td>
			<td><?php echo $childTerm['weight']; ?></td>
			<td><?php echo $childTerm['vocabulary_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'terms', 'action' => 'view', $childTerm['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'terms', 'action' => 'edit', $childTerm['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'terms', 'action' => 'delete', $childTerm['id']), array(), __('Are you sure you want to delete # %s?', $childTerm['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Term'), array('controller' => 'terms', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Nodes'); ?></h3>
	<?php if (!empty($term['Node'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Summary'); ?></th>
		<th><?php echo __('Body'); ?></th>
		<th><?php echo __('Image'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Slug'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Comment Count'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Promote'); ?></th>
		<th><?php echo __('Sticky'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($term['Node'] as $node): ?>
		<tr>
			<td><?php echo $node['id']; ?></td>
			<td><?php echo $node['title']; ?></td>
			<td><?php echo $node['summary']; ?></td>
			<td><?php echo $node['body']; ?></td>
			<td><?php echo $node['image']; ?></td>
			<td><?php echo $node['user_id']; ?></td>
			<td><?php echo $node['created']; ?></td>
			<td><?php echo $node['modified']; ?></td>
			<td><?php echo $node['slug']; ?></td>
			<td><?php echo $node['type']; ?></td>
			<td><?php echo $node['comment']; ?></td>
			<td><?php echo $node['comment_count']; ?></td>
			<td><?php echo $node['status']; ?></td>
			<td><?php echo $node['promote']; ?></td>
			<td><?php echo $node['sticky']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'nodes', 'action' => 'view', $node['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'nodes', 'action' => 'edit', $node['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'nodes', 'action' => 'delete', $node['id']), array(), __('Are you sure you want to delete # %s?', $node['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Node'), array('controller' => 'nodes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
