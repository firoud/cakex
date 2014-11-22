<div class="vocabularies form">
<?php echo $this->Form->create('Vocabulary'); ?>
	<fieldset>
		<legend><?php echo __('Edit Vocabulary'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('machine_name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Vocabulary.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Vocabulary.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Vocabularies'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Terms'), array('controller' => 'terms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Term'), array('controller' => 'terms', 'action' => 'add')); ?> </li>
	</ul>
</div>
