<?php 

$this->Html->addCrumb(__('Content'), array('controller' => 'nodes', 'action' => 'index'));
$this->Html->addCrumb(__('Add Content'), NULL);

?>

<div class="nodes form">


<div class="row">

<div class="col-md-8">

<?php echo $this->Form->create('Node'); ?>


 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo __('Edit Article'); ?></h3>
  </div>
  
  
  <div class="panel-body">


  <div class="form-group">
  
	<?php

		echo $this->Form->input('id');	
		echo $this->Form->input('type', array('type' => 'hidden'));

	    echo $this->Form->label( 'title' ,__('Title') . ' <span class="form-required" title="This field is required.">*</span>',  array('class' => 'label-control'));

		echo $this->Form->input('title', array( 'label' => false , 'class' => 'form-control input-lg'));
  	?>
 </div>  	



  <div class="form-group">
  
  
    <?php echo $this->Form->label( 'body' ,__('Summary'),  array('class' => 'label-control')); ?>


    <?php echo $this->Form->input('summary', array( 'label' => false , 
	                                                'rows' => 3 ,
													'class' => 'form-control',
													'after' =>  '<p class="help-block">' .  __('Leave blank to use trimmed value of full text as the summary.') . '</p>'
													)); ?>

 </div> 



  <div class="form-group">

    <?php echo $this->Form->label( 'body' ,__('Body'),  array('class' => 'label-control')); ?>
    
    <?php echo $this->Form->input('body', array('label' => false, 'class' => 'form-control ckeditor', 'rows' => 20)); ?>

  </div> 
  
  
   

  <div class="form-group">
  
  <?php echo $this->Form->label( 'tags' ,__('Tags'), array( 'class' => 'label-control')); ?>
    
  <?php 
	   echo $this->Form->input('tags', array(
		  'type' => 'text', 
		  'default' => implode(',' , $tags),  
		  'label' => false, 'class' => 'tagsinput form-control', 
		  'id' => 'tags_tagsinput', 
		  'after' =>  '<div class="help-block">' . __('Enter a comma-separated list of words to describe your content.') . '</div>' ));
   ?>
  
  </div>
  
   

  <div class="form-group">
  
  <?php echo $this->Form->label( 'Term' ,__('Categories'),  array('class' => 'label-control')); ?>
    
  <?php echo $this->Form->input('Term', array('label' => false, 'class' => 'form-control')); ?>
  
  </div>  
  
 
  <div class="form-group">
  
	 <?php  echo $this->Form->label( 'image' ,__('Image'),  array('class' => 'label-control')); ?>
  
  
  
    <div class="thumbnail">
        <div id="picture"><?php echo $this->html->image('no_image.jpg');?></div>
      
      
      <div class="caption">  
	<?php echo $this->Form->input('image', array('type' => 'hidden' , 'id' => 'featured_image'));  ?>
    
       <p>
	<?php echo $this->Form->button(__('Browse'), array('type' => 'button','class' => 'btn btn-default' , 'id' => 'imageUpload'));  ?>
	<?php echo $this->Form->button(__('Remove'), array('type' => 'button','class' => 'btn btn-link' , 'id' => 'imageRemove' , 'style' => 'display:none;'));  ?>
      </p>
      
      

    
    </div>
    
    
    
      </div>
  
   
  </div>




</div>

<div class="panel-footer">

<ul class="list-inline">

<li><?php echo $this->Form->submit(__('Save'), array('class' => 'btn btn-primary')); ?></li>


<li><?php echo $this->html->link(__('Delete'), array('action' => 'delete', $this->Form->value('Node.id')) , array( 'class' => 'btn btn-danger') , __('Are you sure you want to delete this article?')); ?></li>

</ul>

</div>


</div> 



 



</div><!--/.col-md-8 -->


<div class="col-md-4">


<div id="accordion" class="panel-group">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a href="#collapseOne" data-parent="#accordion" data-toggle="collapse">
                                                    <?php echo __('Publishing options'); ?>
                                                </a>
                                            </h4>
                                        </div>
                                        <div class="panel-collapse collapse in" id="collapseOne">
                                            <div class="panel-body">

    
    <?php    		
		echo $this->Form->input('status', array( 'label' => 'Published'));
		echo $this->Form->input('promote', array( 'label' => 'Promoted to front page'));
		echo $this->Form->input('sticky', array( 'label' => 'Sticky at top of lists'));
	?>


                                            </div>
                                        </div>
                                    </div><!-- panel -->
                                    
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a href="#collapseTwo" data-parent="#accordion" class="collapsed" data-toggle="collapse">
                                                    <?php echo __('Authoring information'); ?>
                                                </a>
                                            </h4>
                                        </div>
                                        <div class="panel-collapse collapse" id="collapseTwo">
                                            <div class="panel-body">
  
                              <div class="form-group">
                            <?php	
                                echo $this->Form->input('user_id', array( 'label' => __('Authored by'), 'class' => 'form-control' ,'selected' => $current_user['User']['id'] )  );	
                            ?>
                            </div>
                            
                            
                           <div class="form-inline"> 
                             <div class="form-group">
                            <?php	
                                echo $this->Form->label( __('Authored on '));
                        
                                echo $this->Form->input('created', array('label' => false , 'class' => 'form-control'));
                            ?>
                            </div> 
                            </div>  
  
 
                                            </div>
                                        </div>
                                    </div><!-- panel -->
                                    
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a href="#collapseThree" data-parent="#accordion" class="collapsed" data-toggle="collapse">
                                                    <?php echo __('URL path settings'); ?>
                                                </a>
                                            </h4>
                                        </div>
                                        <div class="panel-collapse collapse" id="collapseThree">
                                            <div class="panel-body">
                                            
    <?php 
	
	
	echo $this->Form->label( 'slug' ,__('URL alias'),  array('class' => 'label-control'));	
	echo $this->Form->input('slug', array( 'label' => false, 'class' => 'form-control'));
	
	
	?>

                                            </div>
                                        </div>
                                    </div><!-- panel -->
                                    
                                    
                                    
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a href="#collapseFour" data-parent="#accordion" class="collapsed" data-toggle="collapse">
                                                    <?php echo __('Comment settings'); ?>
                                                </a>
                                            </h4>
                                        </div>
                                        <div class="panel-collapse collapse" id="collapseFour">
                                            <div class="panel-body">
                                        
                                           <?php			
                                                echo $this->Form->input('comment', array(
                                                'type' => 'radio' , 
                                                'options' => array( 1 => __('Open') ,  0 => __('Closed')) , 
                                                'legend' => false ,
                                                'separator' => '<br/>',
                                                'between' => 'Users with the "Post comments" permission can post comments.' 
                                                ));
                                            
                                            ?>
                                        

                                            </div>
                                        </div>
                                    </div><!-- panel -->                                    
                                    
                                    
                                    
                                    
                                </div>



    
</div>    
	
<?php echo $this->Form->end(); ?>


</div>


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
