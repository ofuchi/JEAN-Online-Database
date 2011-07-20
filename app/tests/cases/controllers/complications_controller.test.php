<?php
/* Complications Test cases generated on: 2011-07-08 20:25:19 : 1310124319*/
App::import('Controller', 'Complications');

class TestComplicationsController extends ComplicationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ComplicationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.complication', 'app.sheet', 'app.user', 'app.group', 'app.hospital', 'app.users_hospital', 'app.adaptation', 'app.trial', 'app.method', 'app.device', 'app.premed', 'app.sedative', 'app.relaxant', 'app.sheets_complication');

	function startTest() {
		$this->Complications =& new TestComplicationsController();
		$this->Complications->constructClasses();
	}

	function endTest() {
		unset($this->Complications);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
