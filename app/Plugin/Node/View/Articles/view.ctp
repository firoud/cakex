<?php 
$this->Html->addCrumb(__('Articles'), array('controller' => 'articles', 'action' => 'index'));
$this->Html->addCrumb($node['Node']['title'], NULL);
?>



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
    
        
        	<?php echo $node['Node']['body']; ?>
        
   </div>
   
   <?php if (!empty($node)) : ?>
   
   <div class="tags">
   
   <?php echo __('Tags'); ?>
   
   <ul class="list-inline">
   
   <?php 
   
   foreach($tags as $tag){
	   
	   echo '<li>' . $this->html->link($tag['Term']['name'] , 
	   array('plugin' => 'taxonomy' , 'controller' => 'terms' , 'action' => 'view' , $tag['Term']['id']) , 
	   array( 'title' => $tag['Term']['description'])
	   ) . '</li>';
	   
	   
	   }
   
   ?>
   
  <?php endif; ?> 
   
   </ul>
   
   </div>

		

		

	</div>	
</div>	



