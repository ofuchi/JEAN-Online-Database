<?php
class PremedsController extends AppController {

	var $name = 'Premeds';

	function index() {
		$this->Premed->recursive = 0;
		$this->set('premeds', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid premed', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('premed', $this->Premed->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Premed->create();
			if ($this->Premed->save($this->data)) {
				$this->Session->setFlash(__('The premed has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The premed could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid premed', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Premed->save($this->data)) {
				$this->Session->setFlash(__('The premed has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The premed could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Premed->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for premed', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Premed->delete($id)) {
			$this->Session->setFlash(__('Premed deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Premed was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
