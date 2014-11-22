<div class="terms form">
<?php echo $this->Form->create('Term'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Term'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('machine_name');
		echo $this->Form->input('description');
		echo $this->Form->input('parent_id');
		echo $this->Form->input('weight');
		echo $this->Form->input('vocabulary_id');
		echo $this->Form->input('Node');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Terms'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Terms'), array('controller' => 'terms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Term'), array('controller' => 'terms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vocabularies'), array('controller' => 'vocabularies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vocabulary'), array('controller' => 'vocabularies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nodes'), array('controller' => 'nodes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Node'), array('controller' => 'nodes', 'action' => 'add')); ?> </li>
	</ul>
</div>
