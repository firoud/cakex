<?php
App::uses('MenusAppController', 'Menus.Controller');
/**
 * Menus Controller
 *
 * @property Menu $Menu
 * @property PaginatorComponent $Paginator
 */
class MenusController extends MenusAppController {


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
			
			$this->set('screen_icon', 'bars');	
			
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Menu->recursive = 0;
		$title_for_layout = __('Menus');
		$menus = $this->Paginator->paginate();
		$this->set(compact('title_for_layout', 'menus'));
	}


/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Menu->create();
			if ($this->Menu->save($this->request->data)) {
				$this->Session->setFlash(__('The menu has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The menu could not be saved. Please, try again.'));
			}
		}
		
			$title_for_layout = __('Add Menu');
			$this->set('title_for_layout', $title_for_layout);
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Menu->exists($id)) {
			throw new NotFoundException('<div class="alert alert-danger"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>' . __('Invalid menu') . '</div>');
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Menu->save($this->request->data)) {
				$this->Session->setFlash('<div class="alert alert-success"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>' .__('The menu has been saved.') . '</div>');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('<div class="alert alert-danger"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>' . __('The menu could not be saved. Please, try again.') . '</div>');
			}
		} else {
			$options = array('conditions' => array('Menu.' . $this->Menu->primaryKey => $id));
			$title_for_layout = __('Edit Menu');
			$this->set('title_for_layout', $title_for_layout);
			$this->request->data = $this->Menu->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Menu->id = $id;
		if (!$this->Menu->exists()) {
			throw new NotFoundException(__('Invalid menu'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Menu->delete()) {
			$this->Session->setFlash(__('The menu has been deleted.'));
		} else {
			$this->Session->setFlash(__('The menu could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
