<?php
App::uses('MenusAppController', 'Menus.Controller');
/**
 * Links Controller
 *
 * @property Link $Link
 * @property PaginatorComponent $Paginator
 */
class LinksController extends MenusAppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	
/**
 * beforeFilter method
 *
 */

	public function beforeFilter() {
	
	     
            parent::beforeFilter();
			
			$this->set('screen_icon', 'link');	
			
	}

	

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index($menu_id = null) {
		$this->Link->recursive = 0;
		
		$links = $this->Paginator->paginate(
			'Link',
			array('Link.menu_id' => $menu_id)
		);
		
		$this->set('links', $links);
	}


/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add($menu_id = null) {
		
			
		if ($this->request->is('post')) {
			$this->Link->create();
			if ($this->Link->save($this->request->data)) {
				$this->Session->setFlash(__('The link has been saved.'));
				return $this->redirect(array('action' => 'index', $menu_id));
			} else {
				$this->Session->setFlash(__('The link could not be saved. Please, try again.'));
			}
		}
		$parentLinks = $this->Link->generateTreeList(array('Link.menu_id' => $menu_id),null,null,'--');
			
		$this->set('parentLinks', $parentLinks);
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null, $menu_id = null) {
				
		if (!$this->Link->exists($id)) {
			throw new NotFoundException(__('Invalid link'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Link->save($this->request->data)) {
				$this->Session->setFlash(__('The link has been saved.'));
				return $this->redirect(array('action' => 'index', $menu_id));
			} else {
				$this->Session->setFlash(__('The link could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Link.' . $this->Link->primaryKey => $id));
			$this->request->data = $this->Link->find('first', $options);
		}
		$menus = $this->Link->Menu->find('list');
		$parentLinks = $this->Link->generateTreeList(array('Link.menu_id' => $menu_id),null,null,'--');		
		$this->set(compact('menus', 'parentLinks'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null , $menu_id = null) {
		$this->Link->id = $id;
		if (!$this->Link->exists()) {
			throw new NotFoundException(__('Invalid link'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Link->delete()) {
			$this->Session->setFlash(__('The link has been deleted.'));
		} else {
			$this->Session->setFlash(__('The link could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index' , $menu_id));
	}
	
	

/**
 * getLinks method
 *
 * @return array
 */
	public function getLinks($menu_name = '') {
		
		$this->loadModel('Menu');
		
		$menu = $this->Menu->find('first', array(
				'conditions' => array('Menu.menu_name' => $menu_name) , 
				'fields' => array('Menu.id')
			)
		);
		
		$menu_id = $menu['Menu']['id'];

		$params = array(
			'conditions' => array('Link.menu_id' => $menu_id , 'Link.enabled' => 1), //array of conditions
			'recursive' => 1, //int
			//string or array defining order
			'order' => array('Link.weight ASC'),
			'limit' => -1, //int
	  );
		
		
		$links = $this->Link->find('threaded',$params);
		
		
		return $links;
	
	}
	
  	
		
	
} // class
