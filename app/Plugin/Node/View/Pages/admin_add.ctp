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
    <h3 class="panel-title"><?php echo __('Create Page'); ?></h3>
  </div>
  
  
  <div class="panel-body">


  <div class="form-group">
  
	<?php
		echo $this->Form->input('type', array('type' => 'hidden' , 'value' => 'page'));

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
  
 





</div>

<div class="panel-footer">
<?php echo $this->Form->submit(__('Save'), array('class' => 'btn btn-primary')); ?>
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
		echo $this->Form->input('status', array( 'label' => 'Published' , 'default' => 1));
		echo $this->Form->input('promote', array( 'label' => 'Promoted to front page' , 'default' => 0));
		echo $this->Form->input('sticky', array( 'label' => 'Sticky at top of lists' , 'default' => 0));
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
                                                'default' => 0,
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


