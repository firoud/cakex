<?php
/**
 * Menus for CakePHP 2.x
 *
 * Copyright 2012-2013 by Patrick Hafner (http://patrickhafner.de)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 */

Router::connect('admin/menus', array('plugin' => 'Menus', 'controller' => 'Menus', 'action' => 'admin_index'));
