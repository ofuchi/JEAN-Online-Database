<?php
/* Adaptations Test cases generated on: 2011-07-09 01:02:33 : 1310140953*/
App::import('Controller', 'Adaptations');

class TestAdaptationsController extends AdaptationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AdaptationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.adaptation', 'app.sheet', 'app.user', 'app.group', 'app.hospital', 'app.users_hospital', 'app.trial', 'app.method', 'app.device', 'app.premed', 'app.sedative', 'app.relaxant', 'app.complication', 'app.sheets_complication');

	function startTest() {
		$this->Adaptations =& new TestAdaptationsController();
		$this->Adaptations->constructClasses();
	}

	function endTest() {
		unset($this->Adaptations);
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
