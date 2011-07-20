<?php
class DevicesController extends AppController {

	var $name = 'Devices';

	function index() {
		$this->Device->recursive = 0;
		$this->set('devices', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid device', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('device', $this->Device->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Device->create();
			if ($this->Device->save($this->data)) {
				$this->Session->setFlash(__('The device has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The device could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid device', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Device->save($this->data)) {
				$this->Session->setFlash(__('The device has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The device could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Device->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for device', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Device->delete($id)) {
			$this->Session->setFlash(__('Device deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Device was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
