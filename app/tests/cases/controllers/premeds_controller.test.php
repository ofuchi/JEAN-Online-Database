<?php
/* Premeds Test cases generated on: 2011-07-08 20:29:19 : 1310124559*/
App::import('Controller', 'Premeds');

class TestPremedsController extends PremedsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PremedsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.premed', 'app.trial', 'app.sheet', 'app.user', 'app.group', 'app.hospital', 'app.users_hospital', 'app.adaptation', 'app.complication', 'app.sheets_complication', 'app.method', 'app.device', 'app.sedative', 'app.relaxant');

	function startTest() {
		$this->Premeds =& new TestPremedsController();
		$this->Premeds->constructClasses();
	}

	function endTest() {
		unset($this->Premeds);
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
