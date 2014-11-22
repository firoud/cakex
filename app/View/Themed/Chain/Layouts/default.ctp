<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
	     <?php echo $this->fetch('meta'); ?>        
     	<!-- start: Favicon -->
	<?php echo $this->Html->meta('icon'); ?>
	<!-- end: Favicon -->   

	<title><?php echo $this->fetch('title'); ?></title>

   <?php  
   
		echo $this->fetch('css');
		echo $this->fetch('script'); 
		echo $this->html->scriptBlock('var siteURL = "' . $this->html->url('/', true) . '"');
		  
		 
   ?>

	<!-- start: CSS -->
    <?php 
	
	echo $this->Html->css(array(
							'style.default'
					)); 
	?>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        
        <header>
            <div class="headerwrapper">
                <div class="header-left">

						
					<?php

					echo $this->Html->image("logo.png", array(
						"alt" => "",
						'url' => '/admin'
					));

					?>					
						
                
                    <div class="pull-right">
                        <a href="#" class="menu-collapse">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                </div><!-- header-left -->
                
                <div class="header-right">
                
                <div class="pull-left">
                
                        <div class="btn-group btn-group-option">
                        
                             <button type="button" class="btn btn-default">
                              <i class="fa fa-search"></i> <?php echo __('Find content'); ?> </i> 
                            </button>
                        
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-plus"></i> <?php echo __('Add content'); ?> <i class="fa fa-caret-down"></i> 
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                              <li><a href="#"><i class="fa fa-plus"></i> <?php echo __('Article'); ?></a></li>
                              <li><a href="#"><i class="fa fa-plus"></i> <?php echo __('Basic Page'); ?></a></li>
                            </ul>
                        </div><!-- btn-group -->
                
                </div>
                    
                    <div class="pull-right">
                        

                        
                        <div class="btn-group btn-group-list btn-group-notification">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-bell-o"></i>
                              <span class="badge">5</span>
                            </button>
                            <div class="dropdown-menu pull-right">
                                <a href="#" class="link-right"><i class="fa fa-search"></i></a>
                                <h5>Notification</h5>
                                <ul class="media-list dropdown-list">
                                    <li class="media">
                                        <img class="img-circle pull-left noti-thumb" src="images/photos/user1.png" alt="">
                                        <div class="media-body">
                                          <strong>Nusja Nawancali</strong> likes a photo of you
                                          <small class="date"><i class="fa fa-thumbs-up"></i> 15 minutes ago</small>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="img-circle pull-left noti-thumb" src="images/photos/user2.png" alt="">
                                        <div class="media-body">
                                          <strong>Weno Carasbong</strong> shared a photo of you in your <strong>Mobile Uploads</strong> album.
                                          <small class="date"><i class="fa fa-calendar"></i> July 04, 2014</small>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="img-circle pull-left noti-thumb" src="images/photos/user3.png" alt="">
                                        <div class="media-body">
                                          <strong>Venro Leonga</strong> likes a photo of you
                                          <small class="date"><i class="fa fa-thumbs-up"></i> July 03, 2014</small>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="img-circle pull-left noti-thumb" src="images/photos/user4.png" alt="">
                                        <div class="media-body">
                                          <strong>Nanterey Reslaba</strong> shared a photo of you in your <strong>Mobile Uploads</strong> album.
                                          <small class="date"><i class="fa fa-calendar"></i> July 03, 2014</small>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="img-circle pull-left noti-thumb" src="images/photos/user1.png" alt="">
                                        <div class="media-body">
                                          <strong>Nusja Nawancali</strong> shared a photo of you in your <strong>Mobile Uploads</strong> album.
                                          <small class="date"><i class="fa fa-calendar"></i> July 02, 2014</small>
                                        </div>
                                    </li>
                                </ul>
                                <div class="dropdown-footer text-center">
                                    <a href="#" class="link">See All Notifications</a>
                                </div>
                            </div><!-- dropdown-menu -->
                        </div><!-- btn-group -->
                        
                        <div class="btn-group btn-group-list btn-group-messages">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge">2</span>
                            </button>
                            <div class="dropdown-menu pull-right">
                                <a href="#" class="link-right"><i class="fa fa-plus"></i></a>
                                <h5>New Messages</h5>
                                <ul class="media-list dropdown-list">
                                    <li class="media">
                                        <span class="badge badge-success">New</span>
                                        <img class="img-circle pull-left noti-thumb" src="images/photos/user1.png" alt="">
                                        <div class="media-body">
                                          <strong>Nusja Nawancali</strong>
                                          <p>Hi! How are you?...</p>
                                          <small class="date"><i class="fa fa-clock-o"></i> 15 minutes ago</small>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <span class="badge badge-success">New</span>
                                        <img class="img-circle pull-left noti-thumb" src="images/photos/user2.png" alt="">
                                        <div class="media-body">
                                          <strong>Weno Carasbong</strong>
                                          <p>Lorem ipsum dolor sit amet...</p>
                                          <small class="date"><i class="fa fa-clock-o"></i> July 04, 2014</small>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="img-circle pull-left noti-thumb" src="images/photos/user3.png" alt="">
                                        <div class="media-body">
                                          <strong>Venro Leonga</strong>
                                          <p>Do you have the time to listen to me...</p>
                                          <small class="date"><i class="fa fa-clock-o"></i> July 03, 2014</small>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="img-circle pull-left noti-thumb" src="images/photos/user4.png" alt="">
                                        <div class="media-body">
                                          <strong>Nanterey Reslaba</strong>
                                          <p>It might seem crazy what I'm about to say...</p>
                                          <small class="date"><i class="fa fa-clock-o"></i> July 03, 2014</small>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="img-circle pull-left noti-thumb" src="images/photos/user1.png" alt="">
                                        <div class="media-body">
                                          <strong>Nusja Nawancali</strong>
                                          <p>Hey I just met you and this is crazy...</p>
                                          <small class="date"><i class="fa fa-clock-o"></i> July 02, 2014</small>
                                        </div>
                                    </li>
                                </ul>
                                <div class="dropdown-footer text-center">
                                    <a href="#" class="link">See All Messages</a>
                                </div>
                            </div><!-- dropdown-menu -->
                        </div><!-- btn-group -->
                        
                        <div class="btn-group btn-group-option">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-caret-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                              <li><a href="#"><i class="glyphicon glyphicon-user"></i> My Profile</a></li>
                              <li><a href="#"><i class="glyphicon glyphicon-star"></i> Activity Log</a></li>
                              <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
                              <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Help</a></li>
                              <li class="divider"></li>
                              <li><a href="#"><i class="glyphicon glyphicon-log-out"></i>Sign Out</a></li>
                            </ul>
                        </div><!-- btn-group -->
                        
                    </div><!-- pull-right -->
                    
                </div><!-- header-right -->
                
            </div><!-- headerwrapper -->
        </header>
        
        <section>
            <div class="mainwrapper">
                <div class="leftpanel">
                    <div class="media profile-left">
                        <a class="pull-left profile-thumb" href="profile.html">

						
							<?php

							echo $this->Html->image("photos/profile.png", array(
								"alt" => "",
								'class' => 'img-circle'
							));

							?>	
                        </a>

						
                        <div class="media-body">
                            <h4 class="media-heading"><?php echo $current_user['User']['first_name']; ?> <?php echo $current_user['User']['last_name']; ?></h4>
                            <small class="text-muted"><?php echo $current_user['User']['username']; ?></small>
                        </div>
                    </div><!-- media -->
                    
                    <ul class="nav nav-pills nav-stacked">
                        <li>
                        
                        
                        

                     <li>
                     <?php echo $this->html->link('<i class="fa fa-dashboard"></i> <span>' . __('Dashboard'). '</span>', array( 'controller' => 'pages' , 'action' => 'admin_dashboard') , array('escape' => false)) ?>
                     
                     </li> 
                     
                     
                     
                        <li class="parent"><a href="#"><i class="fa fa-pencil"></i> <span><?php echo __('Content'); ?></span></a>
                            <ul class="children">
                            
                                 <li>
                                 <span>
                                 <?php echo $this->html->link( __('Articles'), 
                                                            array('plugin' => 'node' , 'controller' => 'articles' , 'action' => 'admin_index') , 
                                                            array('escape' => false)); 
                                  ?>
                                 </span>
                                 </li>
                                 
                                 
                                 <li>
                                 <span>
                                 <?php echo $this->html->link( __('Basic Pages') , 
                                                            array('plugin' => 'node' , 'controller' => 'pages' , 'action' => 'admin_index') , 
                                                            array('escape' => false)); 
                                  ?>
                                 </span>
                                 </li>
                                 
                                 
                                 <li>
                                 <span>
                                 <?php echo $this->html->link('<span>' . __('Comments'). '</span>', 
                                                            array('plugin' => 'comments' , 'controller' => 'comments' , 'action' => 'admin_index') , 
                                                            array('escape' => false)); 
                                  ?>
                                 </span>
                                 </li>                                          
                               
                            </ul>
               			</li>                     
                     

 
                        
                        
                     <li>
                     <?php echo $this->html->link('<span class="pull-right badge">5</span><i class="fa fa-comments"></i> <span>' . __('Comments'). '</span>', array('plugin' => 'comments' , 'controller' => 'comments' , 'action' => 'admin_index') , array('escape' => false)) ?>
                     
                     </li> 
                     
                     

                     <li>
                     <?php echo $this->html->link('<i class="fa fa-bars"></i> <span>' . __('Menus'). '</span>', array('plugin' => 'menus' , 'controller' => 'menus' , 'action' => 'admin_index') , array('escape' => false)) ?>
                     
                     </li>
                     
                     
                      

                     <li>
                     <?php echo $this->html->link('<i class="fa fa-cog"></i> <span>' . __('Configurations'). '</span>', array('plugin' => 'configuration' , 'controller' => 'configurations' , 'action' => 'admin_index') , array('escape' => false)) ?>
                     
                     </li>                     
                                          

                        <li class="parent"><a href="#"><i class="fa fa-user"></i> <span><?php echo __('People'); ?></span></a>
                            <ul class="children">
                                <li><a href="alerts.html">Alerts &amp; Notifications</a></li>
                                <li><a href="buttons.html">Buttons</a></li>
                                <li><a href="extras.html">Extras</a></li>
                                <li><a href="graphs.html">Graphs &amp; Charts</a></li>
                                <li><a href="icons.html">Icons</a></li>
                                <li><a href="modals.html">Modals</a></li>
                                <li><a href="widgets.html">Panels &amp; Widgets</a></li>
                                <li><a href="sliders.html">Sliders</a></li>                                
                                <li><a href="tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                <li><a href="typography.html">Typography</a></li>
                            </ul>
                        </li>
                        <li class="parent"><a href="#"><i class="fa fa-edit"></i> <span>Forms</span></a>
                            <ul class="children">
                                <li><a href="code-editor.html">Code Editor</a></li>
                                <li><a href="general-forms.html">General Forms</a></li>
                                <li><a href="form-layouts.html">Layouts</a></li>
                                <li><a href="wysiwyg.html">Text Editor</a></li>
                                <li><a href="form-validation.html">Validation</a></li>
                                <li><a href="form-wizards.html">Wizards</a></li>
                            </ul>
                        </li>
                        <li class="parent"><a href="#"><i class="fa fa-bars"></i> <span>Tables</span></a>
                            <ul class="children">
                                <li><a href="basic-tables.html">Basic Tables</a></li>
                                <li><a href="data-tables.html">Data Tables</a></li>
                            </ul>
                        </li>
                        <li><a href="maps.html"><i class="fa fa-map-marker"></i> <span>Maps</span></a></li>
                        <li class="parent active"><a href="#"><i class="fa fa-file-text"></i> <span>Pages</span></a>
                            <ul class="children">
                                <li><a href="notfound.html">404 Page</a></li>
                                <li class="active"><a href="blank.html">Blank Page</a></li>
                                <li><a href="calendar.html">Calendar</a></li>
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="locked.html">Locked Screen</a></li>
                                <li><a href="media-manager.html">Media Manager</a></li>
                                <li><a href="people-directory.html">People Directory</a></li>
                                <li><a href="profile.html">Profile</a></li>                                
                                <li><a href="search-results.html">Search Results</a></li>
                                <li><a href="signin.html">Sign In</a></li>
                                <li><a href="signup.html">Sign Up</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                    
                </div><!-- leftpanel -->
                
                <div class="mainpanel">
                    <div class="pageheader">
                        <div class="media">
                            <div class="pageicon pull-left">
                                <i class="fa fa-<?php echo isset($screen_icon) ? $screen_icon : 'pencil'; ?>"></i>
                            </div>
                            <div class="media-body">
                
<?php

echo $this->Html->getCrumbList(array('class' => 'breadcrumb') , array( 'text' => $this->html->tag('i' , '' , array('class' => 'fa fa-dashboard')) , 'url' => '/admin' , 'escape' => false) )

?>
                            
                            
             
                                <h4><?php echo isset($title_for_layout) ? $title_for_layout : ''; ?></h4>
                                
                                
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel">
                        
                        <!-- CONTENT GOES HERE -->  
                        
             <?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
                        
                          
                    
                    </div><!-- contentpanel -->
                    
                </div>
            </div><!-- mainwrapper -->
        </section>



    <?php 
	
	echo $this->Html->script(array(
							'jquery-1.11.1.min',
							'jquery-migrate-1.2.1.min',
							'bootstrap.min',
							'modernizr.min',
							'pace.min',
							'retina.min',
							'jquery.cookies',
							'ckeditor/ckeditor',
							'jquery.popupWindow',
							'jquery.prettyPhoto',
							'custom',
							'media',							
	)); 
	?>



    </body>
</html>
