<?php
/* Sedatives Test cases generated on: 2011-07-08 20:30:37 : 1310124637*/
App::import('Controller', 'Sedatives');

class TestSedativesController extends SedativesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SedativesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.sedative', 'app.trial', 'app.sheet', 'app.user', 'app.group', 'app.hospital', 'app.users_hospital', 'app.adaptation', 'app.complication', 'app.sheets_complication', 'app.method', 'app.device', 'app.premed', 'app.relaxant');

	function startTest() {
		$this->Sedatives =& new TestSedativesController();
		$this->Sedatives->constructClasses();
	}

	function endTest() {
		unset($this->Sedatives);
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
