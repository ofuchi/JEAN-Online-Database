<?php
/* Hospitals Test cases generated on: 2011-07-08 20:27:53 : 1310124473*/
App::import('Controller', 'Hospitals');

class TestHospitalsController extends HospitalsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class HospitalsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.hospital', 'app.user', 'app.group', 'app.sheet', 'app.adaptation', 'app.trial', 'app.method', 'app.device', 'app.premed', 'app.sedative', 'app.relaxant', 'app.complication', 'app.sheets_complication', 'app.users_hospital');

	function startTest() {
		$this->Hospitals =& new TestHospitalsController();
		$this->Hospitals->constructClasses();
	}

	function endTest() {
		unset($this->Hospitals);
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
