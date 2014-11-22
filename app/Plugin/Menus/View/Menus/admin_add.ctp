<?php 
$this->Html->addCrumb(__('Menus'), array('plugin' => 'menus' , 'controller' => 'menus' , 'action' => 'admin_index'));
$this->Html->addCrumb(__('Add menu'), NULL);
?>

<div class="row">

<div class="col-md-12 menus form">




<?php echo $this->Form->create('Menu', array( 'class' => 'form-horizontal form-bordered' )); ?>

<div class="panel panel-default">

<div class="panel-body nopadding">



<div class="form-group">


	<?php
		echo $this->Form->label('title', __('Title') . ' <span title="'. __('This field is required.') . '" class="form-required">*</span>', array( 'class' => 'col-sm-2 label-control'));
		echo $this->Form->input('title', array( 'label' => false , 'class' => 'form-control', 'div' => array('class' => 'col-sm-6') ));		
	?>


</div>

<div class="form-group">


	<?php
		echo $this->Form->label('menu_name', __('Menu name') . ' <span title="'. __('This field is required.') . '" class="form-required">*</span>', array( 'class' => 'col-sm-2 label-control'));
		echo $this->Form->input('menu_name', array( 'label' => false , 'class' => 'form-control', 'div' => array('class' => 'col-sm-6') , 'after' => '<div class="help-block">'  . __('A unique name to construct the URL for the menu. It must only contain lowercase letters, numbers and hyphens.') . '</div>' ));		
	?>
   </div> 


<div class="form-group">


	<?php
		echo $this->Form->label('description', __('Description'), array( 'class' => 'col-sm-2 label-control'));
		echo $this->Form->input('description', array( 'label' => false , 'class' => 'form-control', 'div' => array('class' => 'col-sm-10')));		
	?>
  
    
</div>


 
    <div class="panel-footer">
	<?php
		echo $this->Form->submit(__('Save'), array('class' => 'btn btn-primary'));
	?>
     </div>
     
     
<?php echo $this->Form->end(); ?>
	

 </div>
</div>




</div>

</div><!-- /.row -->
