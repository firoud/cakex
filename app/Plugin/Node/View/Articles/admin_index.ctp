<?php $this->Html->addCrumb(__('Content'), NULL); ?>


<div class="nodes index">

    
<div class="actions">

<?php echo $this->html->link( '<i class="fa fa-plus"></i> ' . __('Add article') , array('controller' => 'articles' , 'action' => 'add') , array( 'class' => 'btn btn-link' , 'escape' => false) ); ?>



</div>    



<?php echo $this->Form->create('Node', array('type' => 'get', 'class' => 'form-horizontal')); ?>


<fieldset>   

	<legend><?php echo __('Show only items where'); ?></legend>
    
   <div class="form-group">
   <?php 
   
   echo $this->Form->label('status', __('Status') , array( 'class' => 'col-sm-2 control-label'));
   
   $status = array(
   				'any' => __('any'),
   				'status-1' => __('published'), 				   
   				'status-0' => __('not published'),
   				'promote-1' => __('promoted'), 				   
   				'promote-0' => __('not promoted'),				
   				'sticky-1' => __('sticky'), 				   
   				'sticky-0' => __('not sticky'),
   );
   
   
   
   echo $this->Form->input('status', array( 'type' => 'select' ,
                                            'name' => 'status' , 
											'label' => false ,
											'options' => $status ,  
											'div' => array( 'class' => 'col-sm-4') ,  
											'class' => 'form-control',
											'selected' => isset($this->request->query['status']) ? $this->request->query['status'] : 'any'
											
											 )); ?>
   
   
   </div>
   
 
  <div class="form-group">   
      <?php echo $this->Form->submit(__('Filter') , array( 'div' => array('class' => 'col-sm-offset-2 col-sm-10') , 'class' => 'btn btn-primary' )); ?>
  </div>	
   
   
</fieldset>

  <?php echo $this->Form->end(); ?>  
    
    
   <?php echo $this->Form->create('Node', array( 'class' => 'form-inline')); ?> 
   




<fieldset>   

	<legend><?php echo __('Update options'); ?></legend>
    
   <div class="form-group">
   <?php 
   
   $operations = array(
   				'publish' => __('Publish selected article'),
   				'unpublish' => __('Unpublish selected article'),
   				'promote' => __('Promote selected content to front page'),				 				   
   				'demote' => __('Demote selected content from front page'),				 				   
   				'sticky' => __('Make selected content sticky'),				 				   
   				'unsticky' => __('Make selected content not sticky'),				 				   
   				'delete' => __('Delete selected article'),
   );
   
   echo $this->Form->input('operation', array( 'type' => 'select' ,'name' => 'operation' , 'label' => false ,'options' => $operations ,  'div' => false ,  'class' => 'form-control' )); ?>
   <?php echo $this->Form->submit(__('Update') , array( 'div' => false , 'class' => 'btn btn-primary' )); ?>
   </div>
   
   
</fieldset>   
    
	<table class="table table-striped table-bordered" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th>
            	
					<?php 
                    
                        echo $this->Form->input('select-all' , array( 
                               'type' => 'checkbox' ,
                               'hiddenField' => false , 
                               'label' => false , 
                               'name' => 'select-all-1',
							   'id' => 'selecctall',
                               'div' => false
                                ));
                                
                     ?>           
            
            </th>
            
            
			<th><?php echo  __('Title'); ?></th>
			<th><?php echo __('Author'); ?></th>
			<th><?php echo __('Status'); ?></th>            
			<th><?php echo __('Updated'); ?></th>
			<th class="actions"><?php echo __('Operations'); ?></th>
	</tr>
	</thead>
    
	<tfoot>
	<tr>
			<th>
            	
					<?php 
                    
                        echo $this->Form->input('select-all' , array( 
                               'type' => 'checkbox' ,
                               'hiddenField' => false , 
                               'label' => false , 
                               'name' => 'select-all-2',
							   'id' => 'selecctall2',
                               'div' => false
                                ));
                                
                     ?>           
            
            </th>   
			<th><?php echo  __('Title'); ?></th>
			<th><?php echo __('Author'); ?></th>
			<th><?php echo __('Status'); ?></th>            
			<th><?php echo __('Updated'); ?></th>
			<th class="actions"><?php echo __('Operations'); ?></th>
	</tr>
	</tfoot>
        
	<tbody>
    
    <?php if ($nodes) : ?>
    
	<?php foreach ($nodes as $node): ?>
	<tr>
    <td>
	
	<?php 
	
		echo $this->Form->input('cb' , array( 
	            'type' => 'checkbox' ,
	           'hiddenField' => false , 
			   'label' => false , 
			   'value' => $node['Node']['id'],
			   'name' => 'nodes[]',
			   'class' => 'selectone',
			   'div' => false
			    ));
				
	 ?>
                
    </td>
		<td>
		<?php echo $this->Html->link($node['Node']['title'], '/node/articles/view/' . $node['Node']['id'] , array( 'target' => '_blank')); ?>
        
        
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


<?php else : ?>

<tr><td colspan="6"><?php echo __('No articles available.'); ?></td></tr>

<?php endif; ?>


	</tbody>
	</table>
    
  <?php echo $this->Form->end(); ?>  
    

<?php echo $this->element('paginator'); ?>


</div>

