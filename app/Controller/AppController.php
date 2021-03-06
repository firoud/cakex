<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
	
	
	
		public $helpers = array('Form', 'Html', 'Session', 'Js', 'Text', 'Usermgmt.UserAuth','Menus.Menu');
		public $components = array('Session','RequestHandler', 'Usermgmt.UserAuth');
		public $uses = array('Usermgmt.User', 'Configuration.Configuration');

		private function userAuth(){
			$this->UserAuth->beforeFilter($this);
		}	
	

		function beforeFilter() {
		
			//users
			$this->userAuth();
			
				$userId=$this->UserAuth->getUserId();
				$user = $this->User->findById($userId);
				$this->set('current_user', $user);	
			
			//Load Configurations
			$this->Configuration->load(); //$prefix is 'CFG' by default
			
			
			// set admin theme
			if (isset($this->params['prefix']) && $this->params['prefix'] == 'admin') {
				
				$this->theme = 'Chain';
				
				} else {
				
				$this->theme = 'Default';					
					
			  }
			

				
			
		}
			
	
	
}
