<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<?php echo $this->Html->charset(); ?>
	<title><?php echo $this->fetch('title'); ?></title>
	<?php echo $this->fetch('meta'); ?>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->


   <?php  
   
		echo $this->fetch('css');
		echo $this->fetch('script'); 
		  
   ?>
	
	<!-- start: CSS -->
    <?php 
	
	echo $this->Html->css(array(
							'font-awesome.min',	
							'bootstrap.min',
							'jquery.dataTables',
							'style',

	)); 
	?>


	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    
    
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
         <?php 
		 echo $this->Html->script('http://html5shim.googlecode.com/svn/trunk/html5.js');
		 ?>
	<![endif]-->
	

		
	<!-- start: Favicon -->
	<?php echo $this->Html->meta('icon'); ?>
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->

<nav class="navbar navbar-fixed-top" role="navigation">
  <div class="container-fluid">
  	<div class="row">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="col-md-2">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Zeem Design</a>
    </div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="col-md-10 nolftpad">
    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-plus"></i> <?php echo __('Add content'); ?> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#"><?php echo __('Article'); ?></a></li>
            <li><a href="#"><?php echo __('Basic page'); ?></a></li>
          </ul>
        </li>
        
        <li><a href="#"><i class="fa fa-search"></i> <?php echo __('Find content'); ?></a></li>        
        
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li>
         
        <?php echo $this->Html->link(__('Log Out') , array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'admin_logout')); ?>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
		  <i class="fa fa-user"></i> 
		  <?php echo __('Hello <strong>' . $current_user['User']['username'] . '</strong>'); ?> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#"><i class="fa fa-edit"></i> <?php echo __('Edit Profile'); ?></a></li>
            <li><a href="#"><i class="fa fa-edit"></i> <?php echo __('Change password'); ?></a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="/logout"><i class="fa fa-sign-out"></i> <?php echo __('Log Out'); ?></a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
    	</div><!-- /.col-md-10 -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->

</nav>


	<!-- start: Header -->
	
		<div class="container-fluid nopadding">
		<div class="row nopadding">
				
			<!-- start: Main Menu -->
		<div class="col-md-2 nopadding">	
            <div id="sidebar">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="index.html"><i class="fa fa-dashboard"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						<li><a href="messages.html"><i class="fa fa-bars"></i><span class="hidden-tablet"> Menus</span></a></li>
						<li><a href="tasks.html"><i class="fa fa-pencil"></i><span class="hidden-tablet"> Content</span></a></li>
						<li><a href="ui.html"><i class="fa fa-users"></i><span class="hidden-tablet"> Users</span></a></li>
						<li><a href="widgets.html"><i class="fa fa-comments"></i><span class="hidden-tablet"> Comments</span></a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">
                            <i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Dropdown</span>
                            </a>
							<ul class="dropdown-menu" role="menu">
								<li><a class="submenu" href="submenu.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 1</span></a></li>
								<li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li>
								<li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>
							</ul>	
						</li>
						<li><a href="form.html"><i class="fa fa-gear"></i><span class="hidden-tablet"> Configuration</span></a></li>
						<li><a href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
						<li><a href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
						<li><a href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
						<li><a href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
						<li><a href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
						<li><a href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
						<li><a href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
						<li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
					</ul>
				</div>
			</div>
          </div>  
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block col-md-10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
          <div class="col-md-10 nopadding"> 

		<div id="breadcrumb">

<?php

echo $this->Html->getCrumbList(array('class' => 'breadcrumb') , array( 'text' => $this->html->tag('i' , '' , array('class' => 'fa fa-home')) , 'url' => '/admin' , 'escape' => false) )

?>



        </div>  
          
           
			<div id="content">

            <?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>

			
    


	
			<!-- end: Content -->
		</div><!--/#content-->
       		</div><!--/.col-md-10--> 
		</div><!--/.row-->
		
	</div><!--/.fluid-container-->
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span>&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

    <?php 
	
	echo $this->Html->script(array(
							'https://code.jquery.com/jquery-1.11.0.min.js',
							'bootstrap.min',
							'jquery.dataTables',
							'ckeditor/ckeditor',
							'jquery.popupWindow',
							'media',							
	)); 
	?>



	<!-- end: JavaScript-->
	
</body>
</html>
