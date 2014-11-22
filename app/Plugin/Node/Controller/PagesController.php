<?php
App::uses('NodeAppController', 'Node.Controller');
/**
 * Nodes Controller
 *
 * @property Node $Node
 * @property PaginatorComponent $Paginator
 */
class PagesController extends NodeAppController {
	


/**
 * Use
 *
 * @var array
 */
	public $uses = array('Node.Node');

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
			
			$this->set('screen_icon', 'pencil');	
			
	}	
	
	

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Node->recursive = 0;
		$this->set('nodes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Node->exists($id)) {
			throw new NotFoundException(__('Invalid page'));
		}
		$options = array('conditions' => array('Node.' . $this->Node->primaryKey => $id));
		$this->set('node', $this->Node->find('first', $options));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Node->recursive = 0;
		$title_for_layout = __('Content');	
		$nodes = $this->Paginator->paginate();
		$this->set(compact('nodes' , 'title_for_layout'));
		
		if ($this->request->is('post')) {
			
			debug($this->request->data);
			}
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Node->exists($id)) {
			throw new NotFoundException(__('Invalid page'));
		}
		$options = array('conditions' => array('Node.' . $this->Node->primaryKey => $id));
		$this->set('node', $this->Node->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Node->create();
			if ($this->Node->save($this->request->data)) {
				$this->Session->setFlash('<div class="alert alert-success">' . __('The page has been saved.') . '</div>');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('<div class="alert alert-danger">' . __('The page could not be saved. Please, try again.') . '</div>');
			}
		}
		$title_for_layout = __('Add content');	
		$screen_icon = 'pencil';				
		$users = $this->Node->User->find('list', array(
        'fields' => array('User.id', 'User.username')));
		$this->set(compact('users', 'title_for_layout' , 'screen_icon'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Node->exists($id)) {
			throw new NotFoundException(__('Invalid article'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Node->save($this->request->data)) {
				$this->Session->setFlash('<div class="alert alert-success">' . __('The page has been saved.') . '</div>');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('<div class="alert alert-danger">' . __('The page could not be saved. Please, try again.') . '</div>');
			}
		} else {
			$options = array('conditions' => array('Node.' . $this->Node->primaryKey => $id));
			$this->request->data = $this->Node->find('first', $options);
		}
		$users = $this->Node->User->find('list', array(
        'fields' => array('User.id', 'User.username')));
		$this->set(compact('users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Node->id = $id;
		if (!$this->Node->exists()) {
			throw new NotFoundException(__('Invalid article'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Node->delete()) {
			$this->Session->setFlash('<div class="alert alert-success">' . __('The page has been deleted.') . '</div>');
		} else {
			$this->Session->setFlash('<div class="alert alert-danger">' . __('The page could not be deleted. Please, try again.') . '</div>');
		}
		return $this->redirect(array('action' => 'index'));
	}
}
