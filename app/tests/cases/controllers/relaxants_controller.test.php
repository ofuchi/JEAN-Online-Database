<?php
/* Relaxants Test cases generated on: 2011-07-08 20:29:45 : 1310124585*/
App::import('Controller', 'Relaxants');

class TestRelaxantsController extends RelaxantsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RelaxantsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.relaxant', 'app.trial', 'app.sheet', 'app.user', 'app.group', 'app.hospital', 'app.users_hospital', 'app.adaptation', 'app.complication', 'app.sheets_complication', 'app.method', 'app.device', 'app.premed', 'app.sedative');

	function startTest() {
		$this->Relaxants =& new TestRelaxantsController();
		$this->Relaxants->constructClasses();
	}

	function endTest() {
		unset($this->Relaxants);
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
