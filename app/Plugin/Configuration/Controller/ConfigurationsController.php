<?php
App::uses('ConfigurationAppController', 'Configuration.Controller');

class ConfigurationsController extends ConfigurationAppController {

	var $name = 'Configurations';
	var $helpers = array('Html', 'Form');

	function admin_index() {
		$this->Configuration->recursive = 0;
		$this->set('configurations', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Configuration.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('configuration', $this->Configuration->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Configuration->create();
			if ($this->Configuration->save($this->data)) {
				$this->Session->setFlash(__('The Configuration has been saved'));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Configuration could not be saved. Please, try again.'));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Configuration'));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Configuration->save($this->data)) {
				$this->Session->setFlash(__('The Configuration has been saved'));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Configuration could not be saved. Please, try again.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Configuration->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Configuration'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Configuration->del($id)) {
			$this->Session->setFlash(__('Configuration deleted'));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>
