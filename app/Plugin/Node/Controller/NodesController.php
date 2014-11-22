<?php
App::uses('NodeAppController', 'Node.Controller');
/**
 * Nodes Controller
 *
 * @property Node $Node
 * @property PaginatorComponent $Paginator
 */
class NodesController extends NodeAppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

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
			throw new NotFoundException(__('Invalid node'));
		}
		$options = array('conditions' => array('Node.' . $this->Node->primaryKey => $id));
		$this->set('node', $this->Node->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Node->create();
			if ($this->Node->save($this->request->data)) {
				$this->Session->setFlash(__('The node has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The node could not be saved. Please, try again.'));
			}
		}
		$users = $this->Node->User->find('list');
		$terms = $this->Node->Term->find('list');
		$this->set(compact('users', 'terms'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Node->exists($id)) {
			throw new NotFoundException(__('Invalid node'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Node->save($this->request->data)) {
				$this->Session->setFlash(__('The node has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The node could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Node.' . $this->Node->primaryKey => $id));
			$this->request->data = $this->Node->find('first', $options);
		}
		$users = $this->Node->User->find('list');
		$terms = $this->Node->Term->find('list');
		$this->set(compact('users', 'terms'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Node->id = $id;
		if (!$this->Node->exists()) {
			throw new NotFoundException(__('Invalid node'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Node->delete()) {
			$this->Session->setFlash(__('The node has been deleted.'));
		} else {
			$this->Session->setFlash(__('The node could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Node->recursive = 0;
		$this->set('nodes', $this->Paginator->paginate());
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
			throw new NotFoundException(__('Invalid node'));
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
				$this->Session->setFlash(__('The node has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The node could not be saved. Please, try again.'));
			}
		}
		$users = $this->Node->User->find('list');
		$terms = $this->Node->Term->find('list');
		$this->set(compact('users', 'terms'));
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
			throw new NotFoundException(__('Invalid node'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Node->save($this->request->data)) {
				$this->Session->setFlash(__('The node has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The node could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Node.' . $this->Node->primaryKey => $id));
			$this->request->data = $this->Node->find('first', $options);
		}
		$users = $this->Node->User->find('list');
		$terms = $this->Node->Term->find('list');
		$this->set(compact('users', 'terms'));
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
			throw new NotFoundException(__('Invalid node'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Node->delete()) {
			$this->Session->setFlash(__('The node has been deleted.'));
		} else {
			$this->Session->setFlash(__('The node could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
