<?php
class AdaptationsController extends AppController {

	var $name = 'Adaptations';

	function index() {
		$this->Adaptation->recursive = 0;
		$this->set('adaptations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid adaptation', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('adaptation', $this->Adaptation->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Adaptation->create();
			if ($this->Adaptation->save($this->data)) {
				$this->Session->setFlash(__('The adaptation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The adaptation could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid adaptation', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Adaptation->save($this->data)) {
				$this->Session->setFlash(__('The adaptation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The adaptation could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Adaptation->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for adaptation', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Adaptation->delete($id)) {
			$this->Session->setFlash(__('Adaptation deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Adaptation was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
