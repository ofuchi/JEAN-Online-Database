<?php
/* Devices Test cases generated on: 2011-07-08 20:26:10 : 1310124370*/
App::import('Controller', 'Devices');

class TestDevicesController extends DevicesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DevicesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.device', 'app.trial', 'app.sheet', 'app.user', 'app.group', 'app.hospital', 'app.users_hospital', 'app.adaptation', 'app.complication', 'app.sheets_complication', 'app.method', 'app.premed', 'app.sedative', 'app.relaxant');

	function startTest() {
		$this->Devices =& new TestDevicesController();
		$this->Devices->constructClasses();
	}

	function endTest() {
		unset($this->Devices);
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
