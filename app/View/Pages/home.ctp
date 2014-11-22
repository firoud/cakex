<?php $this->Html->addCrumb(__('Articles'), NULL);?>

	<?php foreach ($nodes as $node): ?>
	
<div class="row"> 
	<div class="col-md-12"> 
  
    <h2><?php echo $this->Html->link($node['Node']['title'], array('action' => 'view', $node['Node']['id'])); ?></h2>
    
	<div class="meta submitted">
    <?php echo __('Submitted by'); ?> <?php echo $node['User']['username']; ?> <?php echo __('on'); ?> 
	
	<?php 

		echo $this->Time->format(
		  'D, d/m/Y - G:i',
		  $node['Node']['created'],
		  null
		);
	
	?>
    

    </div>	
    
    
    
    <div class="field-item">        

        <?php if ($node['Node']['image']) : ?>
			<img class="img-responsive" src="<?php echo $node['Node']['image']; ?>" alt=""  />
        <?php endif; ?>
		
	</div>	
        
    <div class="content">
    
        <?php if ($node['Node']['summary']) : ?>
        
        	<?php echo $node['Node']['summary']; ?>
            
        <?php else : ?>
        
        
			<?php 
            
            echo $this->text->truncate($node['Node']['body'], 300 ,  array(
                'ellipsis' => '...',
                'exact' => true,
                'html' => false
                ));
            ?>
        
        <?php endif; ?>
        
   </div>

		
<div class="link-wrapper">
	<ul class="links list-inline">
    	<li><?php echo $this->Html->link(__('Read more'), array('action' => 'view', $node['Node']['id'])); ?></li>
    </ul>
	
</div>	
		

	</div>	
</div>	

<hr />

<?php endforeach; ?>


<?php echo $this->element('paginator'); ?>

