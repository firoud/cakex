<!DOCTYPE html>
<html lang="en">
  <head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<?php echo $this->Html->charset(); ?>
	<title>
		
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
		echo $this->html->css(array(
		 			'bootstrap.min', 
					'style.css'		 
		      ));
	?>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
   
   <div id="page-wrapper">
   

       <div id="page">
       
       		<header></header>
            
            <nav></nav>
       
     
           <div id="main-wrapper">
           
           
               <div id="main">
               
                   <div class="container">
                   
 
                       <div class="row">
                       
                           <div class="col-md-12">                   
                   
<?php
if ($this->html->url != '/') {
	echo $this->Html->getCrumbList(array('class' => 'breadcrumb') , array( 'text' => __('Home') , 'url' => '/' , 'escape' => false) );
}
?>   

                            </div>
                            
                      </div>                
                   
                   
                       <div class="row">
                       
                           <div class="col-md-8">
                           
                               <div id="content">
                               

                               
                               			<?php echo $this->Session->flash(); ?>
										<?php echo $this->fetch('content'); ?>
                               
                               </div><!-- /#content -->
                           			
 
                           </div><!-- /.col-md-8 -->                                   
                        
                        
                            <div class="col-md-4">
                           
                               <aside>
                               
                               
                               </aside>                           
                           
                           </div><!-- /.col-md-4 --> 
                        
                       
                       </div><!-- /.row -->                    
                   
                   </div><!-- /.container-fluid -->
               
               
               
               </div><!-- /#main -->   
           
           
           
           	<footer></footer>
           </div><!-- /#main-wrapper --> 
       
       
       </div><!-- /#page -->

   
   
   </div><!-- /#page-wrapper -->
    
    
    
    
    <?php		
		echo $this->html->script(array(
		 			'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', 
					'bootstrap.min'
		 
		      ));
	?>


  </body>
</html>