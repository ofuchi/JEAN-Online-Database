<?php
class ComplicationsController extends AppController {

	var $name = 'Complications';

	function index() {
		$this->Complication->recursive = 0;
		$this->set('complications', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid complication', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('complication', $this->Complication->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Complication->create();
			if ($this->Complication->save($this->data)) {
				$this->Session->setFlash(__('The complication has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The complication could not be saved. Please, try again.', true));
			}
		}
		$sheets = $this->Complication->Sheet->find('list');
		$this->set(compact('sheets'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid complication', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Complication->save($this->data)) {
				$this->Session->setFlash(__('The complication has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The complication could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Complication->read(null, $id);
		}
		$sheets = $this->Complication->Sheet->find('list');
		$this->set(compact('sheets'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for complication', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Complication->delete($id)) {
			$this->Session->setFlash(__('Complication deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Complication was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
