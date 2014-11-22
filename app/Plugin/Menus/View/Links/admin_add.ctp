<div class="links form">
<?php echo $this->Form->create('Link'); ?>
	<fieldset>
		<legend><?php echo __('Add Link'); ?></legend>
	<?php
		echo $this->Form->input('menu_id', array( 'type' => 'hidden', 'default' => $this->request->pass[0]));
		echo $this->Form->input('title', array( 'label' => __('Menu link title')));
		echo $this->Form->input('path', array( 'label' => __('Path')));
		echo $this->Form->input('description', array( 'label' => __('Description')));		
		echo $this->Form->input('enabled', array( 'label' => __('Enabled') , 'default' => 1));
		echo $this->Form->input('parent_id', array('label' => __('Parent link'), 'options' => $parentLinks, 'empty' => __('None')));		
		echo $this->Form->input('weight' , array( 'label' => __('Weight') , 'default' => 0));
		echo $this->Form->submit(__('Save'));
	?>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Menus'), array('controller' => 'menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
	</ul>
</div>
