<div class="nodes form">
<?php echo $this->Form->create('Node'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Node'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('summary');
		echo $this->Form->input('body');
		echo $this->Form->input('image');
		echo $this->Form->input('user_id');
		echo $this->Form->input('slug');
		echo $this->Form->input('type');
		echo $this->Form->input('comment');
		echo $this->Form->input('comment_count');
		echo $this->Form->input('status');
		echo $this->Form->input('promote');
		echo $this->Form->input('sticky');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Node.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Node.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Nodes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
