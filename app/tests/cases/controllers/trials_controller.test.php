<?php
/* Trials Test cases generated on: 2011-07-09 02:07:37 : 1310144857*/
App::import('Controller', 'Trials');

class TestTrialsController extends TrialsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TrialsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.trial', 'app.sheet', 'app.user', 'app.group', 'app.hospital', 'app.users_hospital', 'app.adaptation', 'app.complication', 'app.sheets_complication', 'app.method', 'app.device', 'app.premed', 'app.sedative', 'app.relaxant');

	function startTest() {
		$this->Trials =& new TestTrialsController();
		$this->Trials->constructClasses();
	}

	function endTest() {
		unset($this->Trials);
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
