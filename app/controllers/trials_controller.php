<?php
class TrialsController extends AppController {

	var $name = 'Trials';

	function index() {
		$this->Trial->recursive = 0;
		$this->set('trials', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid trial', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('trial', $this->Trial->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Trial->create();
			if ($this->Trial->save($this->data)) {
				$this->Session->setFlash(__('The trial has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trial could not be saved. Please, try again.', true));
			}
		}
		$sheets = $this->Trial->Sheet->find('list');
		$methods = $this->Trial->Method->find('list');
		$devices = $this->Trial->Device->find('list');
		$premeds = $this->Trial->Premed->find('list');
		$sedatives = $this->Trial->Sedative->find('list');
		$relaxants = $this->Trial->Relaxant->find('list');
		$this->set(compact('sheets', 'methods', 'devices', 'premeds', 'sedatives', 'relaxants'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid trial', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Trial->save($this->data)) {
				$this->Session->setFlash(__('The trial has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trial could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Trial->read(null, $id);
		}
		$sheets = $this->Trial->Sheet->find('list');
		$methods = $this->Trial->Method->find('list');
		$devices = $this->Trial->Device->find('list');
		$premeds = $this->Trial->Premed->find('list');
		$sedatives = $this->Trial->Sedative->find('list');
		$relaxants = $this->Trial->Relaxant->find('list');
		$this->set(compact('sheets', 'methods', 'devices', 'premeds', 'sedatives', 'relaxants'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for trial', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Trial->delete($id)) {
			$this->Session->setFlash(__('Trial deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Trial was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
