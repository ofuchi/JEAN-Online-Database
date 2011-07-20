<?php
class SedativesController extends AppController {

	var $name = 'Sedatives';

	function index() {
		$this->Sedative->recursive = 0;
		$this->set('sedatives', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid sedative', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('sedative', $this->Sedative->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Sedative->create();
			if ($this->Sedative->save($this->data)) {
				$this->Session->setFlash(__('The sedative has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sedative could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid sedative', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Sedative->save($this->data)) {
				$this->Session->setFlash(__('The sedative has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sedative could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Sedative->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for sedative', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Sedative->delete($id)) {
			$this->Session->setFlash(__('Sedative deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Sedative was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
