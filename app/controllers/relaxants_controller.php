<?php
class RelaxantsController extends AppController {

	var $name = 'Relaxants';

	function index() {
		$this->Relaxant->recursive = 0;
		$this->set('relaxants', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid relaxant', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('relaxant', $this->Relaxant->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Relaxant->create();
			if ($this->Relaxant->save($this->data)) {
				$this->Session->setFlash(__('The relaxant has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The relaxant could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid relaxant', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Relaxant->save($this->data)) {
				$this->Session->setFlash(__('The relaxant has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The relaxant could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Relaxant->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for relaxant', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Relaxant->delete($id)) {
			$this->Session->setFlash(__('Relaxant deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Relaxant was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
