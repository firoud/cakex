<?php
App::uses('TaxonomyAppController', 'Taxonomy.Controller');
/**
 * Terms Controller
 *
 * @property Term $Term
 * @property PaginatorComponent $Paginator
 */
class TermsController extends TaxonomyAppController {

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
		$this->Term->recursive = 0;
		$this->set('terms', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Term->exists($id)) {
			throw new NotFoundException(__('Invalid term'));
		}
		$options = array('conditions' => array('Term.' . $this->Term->primaryKey => $id));
		$this->set('term', $this->Term->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Term->create();
			if ($this->Term->save($this->request->data)) {
				$this->Session->setFlash(__('The term has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The term could not be saved. Please, try again.'));
			}
		}
		$parentTerms = $this->Term->ParentTerm->find('list');
		$vocabularies = $this->Term->Vocabulary->find('list');
		$nodes = $this->Term->Node->find('list');
		$this->set(compact('parentTerms', 'vocabularies', 'nodes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Term->exists($id)) {
			throw new NotFoundException(__('Invalid term'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Term->save($this->request->data)) {
				$this->Session->setFlash(__('The term has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The term could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Term.' . $this->Term->primaryKey => $id));
			$this->request->data = $this->Term->find('first', $options);
		}
		$parentTerms = $this->Term->ParentTerm->find('list');
		$vocabularies = $this->Term->Vocabulary->find('list');
		$nodes = $this->Term->Node->find('list');
		$this->set(compact('parentTerms', 'vocabularies', 'nodes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Term->id = $id;
		if (!$this->Term->exists()) {
			throw new NotFoundException(__('Invalid term'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Term->delete()) {
			$this->Session->setFlash(__('The term has been deleted.'));
		} else {
			$this->Session->setFlash(__('The term could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Term->recursive = 0;
		$this->set('terms', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Term->exists($id)) {
			throw new NotFoundException(__('Invalid term'));
		}
		$options = array('conditions' => array('Term.' . $this->Term->primaryKey => $id));
		$this->set('term', $this->Term->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Term->create();
			if ($this->Term->save($this->request->data)) {
				$this->Session->setFlash(__('The term has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The term could not be saved. Please, try again.'));
			}
		}
		$parentTerms = $this->Term->ParentTerm->find('list');
		$vocabularies = $this->Term->Vocabulary->find('list');
		$nodes = $this->Term->Node->find('list');
		$this->set(compact('parentTerms', 'vocabularies', 'nodes'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Term->exists($id)) {
			throw new NotFoundException(__('Invalid term'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Term->save($this->request->data)) {
				$this->Session->setFlash(__('The term has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The term could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Term.' . $this->Term->primaryKey => $id));
			$this->request->data = $this->Term->find('first', $options);
		}
		$parentTerms = $this->Term->ParentTerm->find('list');
		$vocabularies = $this->Term->Vocabulary->find('list');
		$nodes = $this->Term->Node->find('list');
		$this->set(compact('parentTerms', 'vocabularies', 'nodes'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Term->id = $id;
		if (!$this->Term->exists()) {
			throw new NotFoundException(__('Invalid term'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Term->delete()) {
			$this->Session->setFlash(__('The term has been deleted.'));
		} else {
			$this->Session->setFlash(__('The term could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
