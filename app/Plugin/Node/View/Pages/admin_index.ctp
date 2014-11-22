<?php $this->Html->addCrumb(__('Content'), NULL); ?>


<div class="nodes index">

    
<div class="actions">


    <!-- Split button -->
    <div class="btn-group">
      <button type="button" class="btn btn-link"><i class="fa fa-plus"></i> <?php echo __('Add content'); ?></button>
      <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <span class="caret"></span>
        <span class="sr-only"><?php echo __('Toggle Dropdown'); ?></span>
      </button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Article</a></li>
        <li><a href="#">Basic Page</a></li>
      </ul>
    </div>


</div>    
    
    
   <?php echo $this->Form->create('Node'); ?> 
   <?php echo $this->Form->submit(__('Update')); ?>
    
	<table class="table table-striped DataTable" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th></th>
			<th><?php echo  __('Title'); ?></th>
			<th><?php echo  __('Type'); ?></th>            
			<th><?php echo __('Author'); ?></th>
			<th><?php echo __('Status'); ?></th>            
			<th><?php echo __('Updated'); ?></th>
			<th class="actions"><?php echo __('Operations'); ?></th>
	</tr>
	</thead>
    
	<tfoot>
	<tr>
			<th></th>    
			<th><?php echo  __('Title'); ?></th>
			<th><?php echo  __('Type'); ?></th>            
			<th><?php echo __('Author'); ?></th>
			<th><?php echo __('Status'); ?></th>            
			<th><?php echo __('Updated'); ?></th>
			<th class="actions"><?php echo __('Operations'); ?></th>
	</tr>
	</tfoot>
        
	<tbody>
	<?php foreach ($nodes as $node): ?>
	<tr>
    <td><?php echo $this->Form->input('cb' , array( 
	            'type' => 'checkbox' ,
	           'hiddenField' => false , 
			   'label' => false , 
			   'value' => $node['Node']['id'],
			   'name' => 'data[Node][cb][]'
			    )); ?></td>
		<td>
		<?php echo $this->Html->link($node['Node']['title'], '/node/nodes/view/' . $node['Node']['id'] ); ?>
        
        
        </td>
		<td>
        
		<?php 
		
		$type = $node['Node']['type'];
		
		switch($type){
			
			case 'article':
			echo __('Article');	
			break;
			
			case 'page':
			echo __('Basic page');	
			break;			
			
		}
		
		 ?>
         
        </td>        
		<td>
			<?php echo $this->Html->link($node['User']['username'], array('controller' => 'users', 'action' => 'view', $node['User']['id'])); ?>
		</td>
		<td><?php echo ($node['Node']['status'] == 1) ? __('published') : __('not published') ; ?>&nbsp;</td>        
		<td><?php 
		echo $this->Time->format($node['Node']['modified'], '%B %e, %Y %H:%M %p'); ?>&nbsp;</td>



		<td class="operations">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $node['Node']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $node['Node']['id']), array(), __('Are you sure you want to delete # %s?', $node['Node']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
    
  <?php echo $this->Form->end(); ?>  
    
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

