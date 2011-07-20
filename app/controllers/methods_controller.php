<?php
class MethodsController extends AppController {

	var $name = 'Methods';

	function index() {
		$this->Method->recursive = 0;
		$this->set('methods', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid method', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('method', $this->Method->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Method->create();
			if ($this->Method->save($this->data)) {
				$this->Session->setFlash(__('The method has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The method could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid method', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Method->save($this->data)) {
				$this->Session->setFlash(__('The method has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The method could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Method->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for method', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Method->delete($id)) {
			$this->Session->setFlash(__('Method deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Method was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
