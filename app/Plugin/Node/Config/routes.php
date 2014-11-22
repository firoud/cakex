<?php


Router::connect('/articles/*', array('plugin' => 'node', 'controller' => 'articles', 'action' => 'view'));
Router::connect('/pages/*', array('plugin' => 'node', 'controller' => 'pages', 'action' => 'view'));
